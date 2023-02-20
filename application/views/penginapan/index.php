<link href="assets/css/style.css" rel="stylesheet">

<div class="container">
    <div class="row">
        <div class="col-md-12 offset-md-0">
            <div class="kamar">
                <div class="container py-3">
                    <div class="container px-4 py-2" id="hanging-icons">
                        <h2 class="pb-2 border-bottom"><b>Penginapan</b></h2>
                        <?php if ($this->session->flashdata('flash')) : ?>
                            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                            <div class="col">
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>Berhasil</strong>  <?= $this->session->flashdata('flash'); ?>.
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                </button>
                                </div>
                            </div>
                            </div>
                        <?php endif; ?>
                        <?php if ($this->session->flashdata('thx')) : ?>
                            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                            <div class="col">
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong> <?= $this->session->flashdata('thx'); ?></strong> 
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                </button>
                                </div>
                            </div>
                            </div>
                        <?php endif; ?>
                        <?php if ($this->session->flashdata('checkout')) : ?>
                            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                            <div class="col">
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>Berhasil Check Out</strong><?= $this->session->flashdata('flash'); ?>.
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                </button>
                                </div>
                            </div>
                            </div>
                        <?php endif; ?>
                        <div class="row g-4 row-cols-1 row-cols-lg-3">
                            <div class="col d-flex align-items-start">
                                <div class="icon-square bg-light text-dark flex-shrink-0 me-3">
                                </div>
                                <div class="card shadow" style="width: 18rem ;">
                                    <img src="assets/img/standar.jpg" class="card-img-top" alt="gambar1">
                                    <div class="card-body">
                                        <h5 class="card-title">Standar</h5>
                                        <h6 class="card-subtitle mb-2 text-muted">Rp. 200000</h6>
                                        <p class="card-text">Recap Resep Dikit aja adik2
                                            nanti biar user liat resep fullnya di detail resep adik2
                                        </p>
                                        <div class="row">
                                            <div class="col">
                                                <a href="<?php echo base_url() ?>penginapan/pesan/" class="btn btn-sm btn-outline-primary" style="margin-bottom: 10px"><b>Pesan Kamar</b></a>
                                            </div>
                                            <div class="col">
                                                <a href="<?php echo base_url() ?>penginapan/stdout/" class="btn btn-sm btn-outline-secondary float-end" style="margin-bottom: 10px"><b>Kamar Terisi</b></a>
                                            </div>
                                        </div> 
                                    </div>
                                </div>
                            </div>
                            <div class="col d-flex align-items-start">
                                <div class="icon-square bg-light text-dark flex-shrink-0 me-3">
                                </div>
                                <div class="card shadow" style="width: 18rem;">
                                    <img src="assets/img/deluxe.jpg" class="card-img-top" alt="gambar1">
                                    <div class="card-body">
                                        <h5 class="card-title">Deluxe</h5>
                                        <h6 class="card-subtitle mb-2 text-muted">Rp. 300000</h6>
                                        <p class="card-text">Recap Resep Dikit aja adik2
                                            nanti biar user liat resep fullnya di detail resep adik2
                                        </p>
                                        <div class="row">
                                            <div class="col">
                                            <a href="<?php echo base_url() ?>penginapan/deluxe/" class="btn btn-sm btn-outline-primary" style="margin-bottom: 10px"><b>Pesan Kamar</b></a>
                                            </div>
                                            <div class="col">
                                            <a href="<?php echo base_url() ?>penginapan/delout/" class="btn btn-sm btn-outline-secondary float-end" style="margin-bottom: 10px"><b>Kamar Terisi</b></a>
                                            </div>
                                        </div> 
                                    </div>
                                </div>
                            </div>
                            <div class="col d-flex align-items-start">
                                <div class="icon-square bg-light text-dark flex-shrink-0 me-3">
                                </div>
                                <div class="card shadow" style="width: 18rem;">
                                    <img src="assets/img/vip.jpg" class="card-img-top" alt="gambar1">
                                    <div class="card-body">
                                        <h5 class="card-title">VIP</h5>
                                        <h6 class="card-subtitle mb-2 text-muted">Rp. 450000</h6>
                                        <p class="card-text">Recap Resep Dikit aja adik2
                                            nanti biar user liat resep fullnya di detail resep adik2
                                        </p>
                                        <div class="row">
                                            <div class="col">
                                            <a href="<?php echo base_url() ?>penginapan/vip/" class="btn btn-sm btn-outline-primary" style="margin-bottom: 10px"><b>Pesan Kamar</b></a>
                                            </div>
                                            <div class="col">
                                            <a href="<?php echo base_url() ?>penginapan/vipout/" class="btn btn-sm btn-outline-secondary float-end" style="margin-bottom: 10px"><b>Kamar Terisi</b></a>
                                            </div>
                                        </div> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>