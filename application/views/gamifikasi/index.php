<link href="assets/css/style.css" rel="stylesheet">

<div class="container">
    <div class="row">
        <div class="col-md-12 offset-md-0">
<div class="container px-4 py-2" id="hanging-icons">
    <div class="row">
        <div class="col-md-12 offset-md-0">
        <h2 class="pb-2 mb-4 mt-3 border-bottom"><center><b>Pilih Pegawai Terbaik</b></center></h2>
    
            <div class="row mt-1 row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <?php foreach ($gamifikasi as $pwg) : ?>
                    <div class="col">
                        <div class="card shadow-sm">
                        <img src="assets/img/default.jpg" class="card-img-top" alt="gambar1">
                            <div class="card-body">   
                                <div class="row">
                                    <div class="col">
                                        <h5 class="card-title"><?= $pwg['nama_pegawai']; ?></h5>
                                    </div>
                                    <div class="col">
                                        <h6 class="card-subtitle text-muted float-end"><?= $pwg['jabatan']; ?></h6>
                                    
                                    </div>
                                    <h6 class="card-subtitle text-muted"><?= $pwg['badge']; ?></h6>
                                </div>
                                <center>
                                <a href="<?= base_url(); ?>gamifikasi/pilih/<?= $pwg['id_gamifikasi']; ?>"  class="btn btn-sm btn-outline-primary">Pilih Karyawan</a>
                                </center>
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

