<div class="container">
    <h1 class="mt-3 border-bottom"><b>Your Assignment</b></h1>
	<p>Selesaikan pekerjaanmu dalam melayani pengunjung.</p>
    <div class="card">
        <div class="card-header">
            Pelayanan Pengunjung 1
        </div>
        <div class="card-body">
            <p>Pilih Nama Pengunjung Yang Sudah Dilayani</p>
            <form action="" method="POST">
                <div class="form-group">
                    <div>
                        <div>
                            <div class="form-group mt-3 ">
                                <select class="js-states form-control" name="pelanggan" id="pelanggan">
                                    <option>Pilih Nama Pelanggan</option>
                                    <?php foreach ($pelanggan as $p) : ?>
                                        <option value="<?= $p['id_penginapan'] ?>">Kamar <?= $p['no_kamar'] ?> - <?= $p['nama_pelanggan'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <div class="form-text text-danger"><?= form_error('pelanggan'); ?></div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <a href="<?php echo base_url() ?>mission" class="btn btn-md btn-secondary">Kembali</a>
                <button type="submit" class="btn btn-success float-end">Simpan</button>
            </form>
        </div>
    </div>
</div>