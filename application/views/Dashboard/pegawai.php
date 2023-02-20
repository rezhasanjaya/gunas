<link href="assets/css/style.css" rel="stylesheet">

<div class="container">
    <div class="row">
        <div class="col-md-12 offset-md-0">
<div class="container px-4 py-2" id="hanging-icons">
    <div class="row">
        <div class="col-md-12 offset-md-0">
        <h2 class="pb-2 mb-4 mt-3 border-bottom"><center><b>Tentang Kamu</b></center></h2>
            <div class="row">
                <?php foreach ($gamifikasi as $pwg) : ?>
                    <div class="col-lg-3">
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
                                    <h6 class="card-subtitle text-muted mb-2">Level <?= $pwg['level']; ?></h6>
                                    <h6 class="card-subtitle text-muted mb-2"><?= $pwg['point']; ?> Point</h6>
                                    <h6 class="card-subtitle text-muted mb-2"><?= $pwg['badge']; ?></h6>
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

