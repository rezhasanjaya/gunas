<link href="assets/css/setail.css" rel="stylesheet">

<div class="container">
    <div class="row">
        <div class="col-md-12 offset-md-0">
            <div class="kamar">
                <div class="container py-3">
                    <div class="container px-4 py-2" id="hanging-icons">
                        <h2 class="pb-2 border-bottom"><b>Berapa Ratingnya??</b></h2>
                        <div class="row g-4 row-cols-1 row-cols-lg-1">
                        <form action="" method="POST">
                        <input type="hidden" name="id_gamifikasi" value="<?= $gamifikasi['id_gamifikasi']; ?>">
                        <input type="hidden" name="point" value="<?= $gamifikasi['point']; ?>">
                        <input type="number" name="tambah_point" min="0" max="10" placeholder="Masukkan Poin 1 - 10" class="form-control">
                        <div class="form-text text-danger"><?= form_error('tambah_point'); ?></div>

                        <br>
                            <button type="submit" class="btn btn-success">Selesai</button>
                        <a href="<?php echo base_url() ?>gamifikasi" class="btn btn-md btn-secondary float-end">Kembali</a>
                    </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>