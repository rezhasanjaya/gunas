<link href="assets/css/style.css" rel="stylesheet">

<div class="container">
    <div class="row">
        <div class="col-md-12 offset-md-0">
            <div class="kamar">
                <div class="container py-3">
                    <div class="container px-4 py-2" id="hanging-icons">
                        <h2 class="pb-2 border-bottom"><b>Pesan Kamar</b></h2>
                        <div class="row g-4 row-cols-1 row-cols-lg-1">
                        <form action="" method="POST">
                        <div class="form-group mt-3">
                            <input type="hidden" name="id_pegawai" placeholder="Masukkan Nama Pegawai" class="form-control" value="<?=$user['id']; ?>">
                        </div>

                        <div>
                            <div class="form-group mt-3 ">
                            <label for="no_kamar">Nomor Kamar</label>
                                <select class="js-states form-control" name="no_kamar" id="no_kamar">
                                    <option>Pilih Kamar</option>
                                    <?php foreach ($deluxe as $dex) : ?>
                                        <option value="<?= $dex->no_kamar ?>">Nomor <?= $dex->no_kamar ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <div class="form-text text-danger"><?= form_error('no_kamar'); ?></div>
                            </div>
                        </div>

                        <div class="form-group mt-3">
                            <label for="nama_pelanggan">Nama Pelanggan</label>
                            <input type="text" name="nama_pelanggan" id="nama_pelanggan" placeholder="Nama Pelanggan" class="form-control">
                            <div class="form-text text-danger"><?= form_error('nama_pelanggan'); ?></div>
                        </div>

                        <div class="form-group mt-3">
                            <label for="no_telp">Nomor Telepon</label>
                            <input type="text" name="no_telp" id="no_telp" placeholder="Masukkan Nomor Telepon" class="form-control">
                            <div class="form-text text-danger"><?= form_error('no_telp'); ?></div>
                        </div>


                        <div class="form-group mt-3">
                        <label for="tgl_chekin">Tanggal Check-in</label>
                        <div class="input-group date" id="tgl_chekin_wrapper" >
                            <input type="text" class="form-control" id="tgl_chekin" name="tgl_chekin" autocomplete="off">
                        </div>
                        <div class="form-text text-danger"><?= form_error('tgl_chekin'); ?></div>
                        </div>

                        <div class="form-group mt-3">
                        <label for="tgl_chekout">Tanggal Check-out</label>
                        <div class="input-group date" id="tgl_chekout_wrapper" >
                            <input type="text" class="form-control" id="tgl_chekout" name="tgl_chekout" autocomplete="off">
                        </div>
                        <div class="form-text text-danger"><?= form_error('tgl_chekout'); ?></div>
                        </div>
                        
                        <div class="form-group mt-3">
                        <label for="hari_menginap">Hari Menginap</label>
                        <input type="number" name="hari_menginap" id="hari_menginap" class="form-control" readonly>
                        </div>

                        <div class="form-group mt-3">
                        <label for="total_harga">Total Harga</label>
                        <input type="number" name="total_harga" id="total_harga" class="form-control" readonly>
                        </div>

                        <div class="form-group mt-3">
                        <label for="uang_bayar">Jumlah Bayar</label>
                        <input type="number" name="uang_bayar" id="uang_bayar" class="form-control">
                        <div class="form-text text-danger"><?= form_error('uang_bayar'); ?></div>    
                        </div>

                        <div class="form-group mt-3">
                        <label for="uang_kembali">Kembali</label>
                        <input type="number" name="uang_kembali" id="uang_kembali" class="form-control" min="0" readonly>
                        <div class="form-text text-danger"><?= form_error('uang_kembali'); ?></div>        
                        </div>

                        <br>
                        <button type="submit" class="btn btn-success">Simpan</button>
                        <button type="reset" class="btn btn-warning">Reset</button>
                        <a href="<?php echo base_url() ?>penginapan" class="btn btn-md btn-secondary float-end">Kembali</a>
                    </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
$(document).ready(function() {
  // Initialize the datepicker for tgl_chekin and tgl_chekout
  $('#tgl_chekin, #tgl_chekout').datepicker({
    dateFormat: 'dd-mm-yy',
    minDate: 0,
    onSelect: function() {
      // Calculate the price when a date is selected
      calculatePrice();
    }
  });

  // Function to calculate number of days and total price
  function calculatePrice() {
    // Get the values of tgl_chekin and tgl_chekout
    var checkin = new Date($('#tgl_chekin').datepicker('getDate'));
    var checkout = new Date($('#tgl_chekout').datepicker('getDate'));

    // Calculate the difference between the two dates in days
    var diffTime = Math.abs(checkout - checkin);
    var diffDays = Math.ceil(diffTime / (1000 * 60 * 60 * 24));

    // Update the value of hari_menginap
    $('#hari_menginap').val(diffDays);

    // Calculate the total price
    var price = diffDays * 300000;

    // Update the value of total_harga
    $('#total_harga').val(price);

    // Calculate the change
    var change = $('#uang_bayar').val() - price;

    // Update the value of uang_kembali
    $('#uang_kembali').val(change);
  }

  // Bind an event listener to #uang_bayar input field
  $('#uang_bayar').on('input', function() {
    // Re-calculate the change and update the value of uang_kembali
    var price = $('#total_harga').val();
    var change = $(this).val() - price;
    $('#uang_kembali').val(change);
  });
});
</script>