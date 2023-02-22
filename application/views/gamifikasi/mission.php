<style>
a {
    color: Black;
    text-decoration: none;
}

</style>
    <div class="container">
        <h2 class="pb-2 mb-4 mt-3 border-bottom"><center><b>Achievement Page</b></center></h2>
	
        <div class="row">
          <div class="col-md-6">
             <h6>Berikut adalah misi - misimu!</h6>
          </div>
          <div class="col-md-6">
              <a href="<?php echo base_url() ?>mission/reset_mission/" class="btn btn-sm btn-secondary float-end" onclick="return confirm('Yakin?');" style="margin-bottom: 10px"><b>Reset Misi Harian</b></a>
          </div>
        </div>
        
        <?php if ($this->session->flashdata('flash')) : ?>
                 <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    <div class="col">
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Berhasil</strong> <?= $this->session->flashdata('flash'); ?>.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                        </button>
                        </div>
                    </div>
                 </div>
        <?php endif; ?>

          
        <?php if ($this->session->flashdata('mission')) : ?>
                 <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    <div class="col">
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Berhasil</strong> <?= $this->session->flashdata('mission'); ?>.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                        </button>
                        </div>
                    </div>
                 </div>
        <?php endif; ?>

        <?php
        foreach ( $mission as $m) :?>
        <a href="<?=base_url('mission/assignment/'.$m['id_mission'].'/'.$gamifikasi['id_gamifikasi']); ?>">
        <div class="card mb-3">
            <div class="row g-0">
                <div class="col-md-2">
                <?php 
                    if($m['mission'] == 'Melayani Pelanggan' ){ ?>
                        <img src="assets/img/deluxe.jpg" class="img-fluid rounded-start" style="width : 100%; height:100%" alt="gambar1">
                    <?php } elseif ($m['mission'] == 'Merapikan Kamar'){ ?>
                        <img src="assets/img/service.jpg" class="img-fluid rounded-start" style="width : 100%; height:100%" alt="gambar2">
                    <?php } elseif ($m['mission'] == 'Melayani Reservasi'){ ?>
                        <img src="assets/img/reservasi.jpg" class="img-fluid rounded-start" style="width : 100%; height:100%" alt="gambar3">
                    <?php } elseif ($m['mission'] == 'Merapikan Kunci'){ ?>
                        <img src="assets/img/keymanage.jpg" class="img-fluid rounded-start" style="width : 100%; height:100%" alt="gambar1">
                    <?php }?>
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title"><?=$m['mission'];?></h5>
                        <p class="card-text"><?=$m['keterangan'];?></p>
                        
                        <p class="card-text"><small class="text-muted"><?=$m['point'];?> Point</small></p>
                    </div>
                </div>
                <div class="col-md-2">
                <?php 
                    if($m['done'] == 0 ){ ?>
                             <center><h6 class="card-subtitle mt-5 text-danger">Belum Selesai</h6></center>
                    <?php } elseif ($m['done'] == 1){ ?>
                            <center><h6 class="card-subtitle mt-5 text-success">Selesai</h6></center>
                    <?php }?>
                </div>
            </div>
        </div>
        </a>
        <?php endforeach;?>
    </div>
