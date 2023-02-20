<link href="assets/css/setail.css" rel="stylesheet">

<div class="container">
    <div class="row">
        <div class="col-md-12 offset-md-0">
            <div class="kamar">
                <div class="container py-3">
                    <div class="container px-4 py-2" id="hanging-icons">
                        <h2 class="pb-2 border-bottom"><b>Tambah Data Pegawai</b></h2>
                        <div class="row g-4 row-cols-1 row-cols-lg-1">
                        <form action="" method="POST">
                        <input type="hidden" name="id_pegawai" value="<?php echo $pegawai['id_pegawai']; ?>">
                        <div class="form-group">
                            <input type="hidden" name="id_pegawai" placeholder="Masukkan ID Pegawai" class="form-control" value="<?= $pegawai['id_pegawai']; ?>">
                        </div>

                        <div class="form-group mt-3">
                            <label for="nama_pegawai">Nama Pegawai</label>
                            <input type="text" name="nama_pegawai" placeholder="Masukkan Nama Pegawai" class="form-control" value="<?= $pegawai['nama_pegawai']; ?>">
                            <div class="form-text text-danger"><?= form_error('nama_pegawai'); ?></div>
                        </div>

                        <div>
                            <div class="form-group mt-3">
                                <label>Jenis Kelamin</label>
                                <div class="form-check mt-1">
                                    <label class="form-check-label" for="jenis_kelamin">
                                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin" value="Laki - Laki" <?php if($pegawai['jenis_kelamin']=='Laki - Laki') echo 'checked'?>>
                                        Laki - Laki
                                    </label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label" for="jenis_kelamin">
                                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin" value="Perempuan" <?php if($pegawai['jenis_kelamin']=='Perempuan') echo 'checked'?>>
                                        Perempuan
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="form-group mt-3">
                                <label for="jabatan">Jabatan</label>
                                <?php $jbt = $pegawai['jabatan']; ?>
                                <select class="form-control form-select-md" name="jabatan" id="jabatan">
                                <option <?php echo ($jbt == 'Pelayan') ? "selected": "" ?>>Pelayan</option>
                                <option <?php echo ($jbt == 'Resepsionis') ? "selected": "" ?>>Resepsionis</option>
                                <option <?php echo ($jbt == 'Cleaning Service') ? "selected": "" ?>>Cleaning Service</option>
                                <option <?php echo ($jbt == 'Keamanan') ? "selected": "" ?>>Keamanan</option>
                                <option <?php echo ($jbt == 'Juru Masak') ? "selected": "" ?>>Juru Masak</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group mt-3">
                            <label for="tgl_lahir">Tanggal Lahir</label>
                            <input type="date" name="tgl_lahir" id="tgl_lahir" class="form-control" value="<?= $pegawai['tgl_lahir']; ?>">
                            <div class="form-text text-danger"><?= form_error('tgl_lahir'); ?></div>
                        </div>

                        <div class="form-group mt-3">
                            <label for="tempat_lahir">Tempat Lahir</label>
                            <input type="text" name="tempat_lahir" id="tempat_lahir" placeholder="Masukkan Tempat Lahir" class="form-control" value="<?= $pegawai['tempat_lahir']; ?>">
                            <div class="form-text text-danger"><?= form_error('tempat_lahir'); ?></div>
                        </div>

                        <div class="form-group mt-3">
                            <label for="no_telp">Nomor Telepon</label>
                            <input type="text" name="no_telp" id="no_telp" placeholder="Masukkan Nomor Telepon" class="form-control" value="<?= $pegawai['no_telp']; ?>">
                            <div class="form-text text-danger"><?= form_error('no_telp'); ?></div>
                        </div>

                        <br>
                        <button type="submit" class="btn btn-success">Simpan</button>
                        <button type="reset" class="btn btn-warning">Reset</button>
                        <a href="<?php echo base_url() ?>pegawai/index" class="btn btn-md btn-secondary float-end">Kembali</a>
                    </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>