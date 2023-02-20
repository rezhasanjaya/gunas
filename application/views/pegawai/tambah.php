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
            
                        <div class="form-group mt-3">
                            <label for="nama_pegawai">Nama Pegawai</label>
                            <input type="text" name="nama_pegawai" placeholder="Masukkan Nama Pegawai" class="form-control">
                            <div class="form-text text-danger"><?= form_error('nama_pegawai'); ?></div>
                        </div>

                        <div>
                            <div class="form-group mt-3">
                                <label>Jenis Kelamin</label>
                                <div class="form-check mt-1">
                                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin" value="Laki - Laki" checked>
                                    <label class="form-check-label" for="jenis_kelamin">
                                        Laki - Laki
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin" value="Perempuan">
                                    <label class="form-check-label" for="jenis_kelamin">
                                        Perempuan
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="form-group mt-3">
                                <label for="jabatan">Jabatan</label>
                                <select class="form-control form-select-md" name="jabatan" id="jabatan">
                                    <option selected>Pilih Jabatan</option>
                                    <option value="Pelayan">Pelayan</option>
                                    <option value="Resepsionis">Resepsionis</option>
                                    <option value="Cleaning Service">Cleaning Service</option>
                                    <option value="Keamanan">Keamanan</option>
                                    <option value="Juru Masak">Koki</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group mt-3">
                            <label for="tgl_lahir">Tanggal Lahir</label>
                            <input type="date" name="tgl_lahir" id="tgl_lahir" class="form-control">
                            <div class="form-text text-danger"><?= form_error('tgl_lahir'); ?></div>
                        </div>

                        <div class="form-group mt-3">
                            <label for="tempat_lahir">Tempat Lahir</label>
                            <input type="text" name="tempat_lahir" id="tempat_lahir" placeholder="Masukkan Tempat Lahir" class="form-control">
                            <div class="form-text text-danger"><?= form_error('tempat_lahir'); ?></div>
                        </div>

                        <div class="form-group mt-3">
                            <label for="no_telp">Nomor Telepon</label>
                            <input type="text" name="no_telp" id="no_telp" placeholder="Masukkan Nomor Telepon" class="form-control">
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