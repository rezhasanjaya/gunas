<link href="assets/css/style.css" rel="stylesheet">

<div class="container">
    <div class="row">
        <div class="col-md-12 offset-md-0">
<div class="container px-4 py-2" id="hanging-icons">
    <div class="row">
        <div class="col-md-12 offset-md-0">
        <h2 class="pb-2 mb-4 mt-3 border-bottom"><b>Data Kamar</b></h2>
            <?php if (empty($kamar)) : ?>
                <div class="alert alert-danger" role="alert">
                    Data Kamar Tidak Ditemukan
                </div>

            <?php endif ?>
            <?php if ($this->session->flashdata('flash')) : ?>
                <div class="row mt-1 row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    <div class="col">
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            Data Kamar <strong>Berhasil</strong> <?= $this->session->flashdata('flash'); ?>.
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                            </button>
                        </div>
                    </div>
                </div>
            <?php endif; ?>

            <div class="row">
                <div class="col">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#tambahModal" class="btn btn-sm btn-success"><b>Tambah Data Kamar</b></a>
                </div>
            </div>

            <div class="row mt-1 row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <?php foreach ($kamar as $kamar) : ?>
                    <div class="col">
                        <div class="card shadow-sm">
                            <div class="card-body">   
                                <div class="row">
                                    <div class="col">
                                        <h5 class="card-title">Kamar <?= $kamar['no_kamar']; ?></h5>
                                    </div>
                                    <div class="col">
                                        <h6 class="card-subtitle text-muted float-end">Rp. <?= $kamar['harga']; ?></h6>
                                    </div> 
                                </div>
                                <h6 class="card-title text-muted "><?= $kamar['tipe_kamar']; ?></h6>
                                <p class="kaps mb-3" >Kapasitas <?= $kamar['kapasitas']; ?> Orang</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                    <a href="<?= base_url(); ?>kamar/edit/<?= $kamar['no_kamar']; ?>"  class="btn btn-sm btn-outline-primary">Edit</a>
                                    <a href="<?= base_url(); ?>kamar/hapus/<?= $kamar['no_kamar']; ?>"  class="btn btn-sm btn-outline-danger" onclick="return confirm('Yakin?');">Hapus</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>

            </div>
        </div>
    </div>
</div>
</div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="tambahModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data Kamar</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="<?php echo base_url() ?>kamar/tambah/" method="POST">
      <div class="form-group">
              <label for="no_kamar">No Kamar</label>
              <input type="text" name="no_kamar" placeholder="Masukkan Nomor Kamar" class="form-control" required>
              
            </div>
            <div>
              <div class="form-group mt-3 mb-4">
                <label for="tipe_kamar">Tipe Kamar</label>
                <select class="form-control form-select-md" name="tipe_kamar" id="tipe_kamar">
                  <option selected>Pilih Tipe Kamar</option>
                  <option value="Standar">Standar</option>
                  <option value="Deluxe">Deluxe</option>
                  <option value="VIP">VIP</option>
                </select>
              </div>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
      </div>
    </div>
  </div>
</div>
