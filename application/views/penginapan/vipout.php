<link href="assets/css/style.css" rel="stylesheet">

<div class="container">
    <div class="row">
        <div class="col-md-12 offset-md-0">
<div class="container px-4 py-2" id="hanging-icons">
    <div class="row">
        <div class="col-md-12 offset-md-0">
        <h2 class="pb-2 mb-4 mt-3 border-bottom"><b>Data Kamar Terisi</b></h2>
            <?php if (empty($kamar)) : ?>
                <div class="alert alert-danger" role="alert">
                    Data Tidak Ditemukan
                </div>

            <?php endif ?>


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
                                        <h6 class="card-subtitle text-muted float-end"><?= $kamar['nama_pelanggan']; ?></h6>
                                    </div> 
                                </div>
                                <h6 class="card-title text-muted "><?= $kamar['tipe_kamar']; ?></h6>
                                <p class="kaps mb-3" ><?= $kamar['tgl_check_in'];?> Sampai <?=$kamar['tgl_check_out']; ?> </p>
                                <a href="<?= base_url('kamar/checkout/'.$kamar['no_kamar'].'/'.$kamar['id_penginapan']); ?>"  class="btn btn-sm btn-outline-danger float-end" onclick="return confirm('Yakin?');">Check Out</a>
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
