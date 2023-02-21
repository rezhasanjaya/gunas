<div class="container">
    <h1>Your Assignment</h1>
	<p>Selesaikan pekerjaanmu dalam melayani pengunjung.</p>
    <div class="card">
        <div class="card-header">
            Pelayanan Pengunjung 1
        </div>
        <div class="card-body">
            <p>Pilih Nama Pengunjung Yang Sudah Dilayani</p>
            <?php var_dump($pelanggan) ?>
            <form action="" method="POST">
                        <div class="form-group">
                            <div>
                            <div>
                            <div class="form-group mt-3 ">
                            <label for="pelanggan">Pelanggan</label>
                                <select class="js-states form-control" name="pelanggan" id="pelanggan">
                                    <option>Pilih Nama Pelanggan</option>
                                    <?php foreach ($pelanggan as $p) : ?>
                                        <option value="<?= $p=["id_penginapan"] ?>"><?= $p = ["nama_pelanggan"] ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <div class="form-text text-danger"><?= form_error('pelanggan'); ?></div>
                            </div>
                                    </div>
                            </div>
                        <br>
                        <button type="submit" class="btn btn-success">Simpan</button>
                        <button type="reset" class="btn btn-warning">Reset</button>
            </form>
        </div>
    </div>
</div>