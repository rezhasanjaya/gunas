<link href="assets/css/style.css" rel="stylesheet">
<style>
.badgeLevel{
    font-size:11px;
    font-weight:bold;
    letter-spacing:0px;
    background:black;
    color:white;
    height: 20px;
    width: 35px;
    line-height: 21px;
    border-radius: 10px;
}

.badgeLevel--iron{
    background:#767b86;
    color:white;
    width: 20px;
}

.badgeLevel--bronze{
    background:#CD7F32;
    color:white;
    width: 25px;
}

.badgeLevel--silver{
    background:#C0C0C0;
    color:black;
    width: 30px;
}

.badgeLevel--gold{
    background:#FAEAB1;
    color:black;
    width: 35px;
}

.badgeLevel--platinum{
    background:#85CDFD;
    color:black;
    width: 40px;
}

</style>
<div class="container mb-5" id="hanging-icons">
    <div class="row">
    <div class="col-md-3"></div>
        <div class="col-md-6 offset-md-0">
        <h2 class="pb-2 mb-4 mt-3 border-bottom"><center><b>Tentang Kamu</b></center></h2>
            <div class="row">
           
                <?php 

                foreach ($gamifikasi as $pwg) : ?>
                    <div class="col">
                        <div class="card shadow-sm">
                        <div class="row">
                            <div class="col-lg-3">
                            </div>
                        <div class="col-lg-6">
                            <center>
                            <img src="assets/img/default.jpg" role="img" class="card-img-top rounded-circle mt-4" style="height: 150px; width: 170px" alt="gambar1"> 
                            <h6 class="fw-normal text-muted"></h6>
                            <?php 
                            $count = ($pwg['max_point'] - $pwg['min_point']);
                            $count2 = ($pwg['point'] - $pwg['min_point']);
                            $final = $count2/$count;
                            $percent = round($final, 2) * 100;
                            if($pwg['badge'] == 'Iron') :?>
                            <div class="badgeLevel badgeLevel--iron"><?= $pwg['level']; ?></div>
                            <?php elseif($pwg['badge'] == 'Bronze') :?>
                            <div class="badgeLevel badgeLevel--bronze"><?= $pwg['level']; ?></div>
                            <?php elseif($pwg['badge'] == 'Silver') :?>
                            <div class="badgeLevel badgeLevel--silver"><?= $pwg['level']; ?></div>
                            <?php elseif($pwg['badge'] == 'Gold') :?>
                            <div class="badgeLevel badgeLevel--gold"><?= $pwg['level']; ?></div>
                            <?php elseif($pwg['badge'] == 'Platinum') :?>
                            <div class="badgeLevel badgeLevel--platinum"><?= $pwg['level']; ?></div>
                            <?php endif; ?>
                            <h4 class="card-subtitle mt-1 mb-1"><?= $pwg['nama_pegawai']; ?></h4>
                            <h6 class="card-subtitle text-muted"><?= $pwg['jabatan']; ?></h6> 
                                <div class="progress mb-1 mt-2" role="progressbar" style="height : 10pt" aria-label="Info example with label" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar text-bg-success" style="width: <?=$percent;?>%"><?=$percent;?>%
                                </div> 
                            </div>
                            </center>
                            </div>
                            <div class="card-body">   
                                <div class="row">
                                <div class="col-lg-1"></div>
                                <div class="col-lg-10">
                                <h5 class="pb-2 mb-3 mt-1 border-bottom">Statistik</h5>
                                </div>
                                    
                                </div>
                                <div class="row">
                                
                                <div class="col-lg-1"></div>
                                    <div class="col">
                                        <h6 class="fw-normal text-muted mb-2"><?= $pwg['badge']; ?></h6>
                                        <h6 class="fw-normal text-muted mb-2">EXP <?= $pwg['point'] . '/' .$pwg['max_point'] ; ?></h6>
                                        <h6 class="fw-normal text-muted mb-2"><?= $pwg['month_point']; ?> Month Point</h6>
                                        <h6 class="fw-normal text-muted mb-2"><?= $pwg['misi_selesai']; ?> Misi Telah Diselesaikan</h6>
                                    </div>
                                    <div class="col-lg-1">
                                     
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


