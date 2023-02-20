
    <link href="assets/css/setail.css" rel="stylesheet">

<div class="container">
    <div class="row">
        <div class="col-md-12 offset-md-0">
            <div class="kamar">
                <div class="container py-3">
                    <div class="container px-4 py-2" id="hanging-icons">
                        <h2 class="pb-2 border-bottom"><b>Edit Data Kamar</b></h2>
                        <div class="row g-4 row-cols-1 row-cols-lg-3">
                        <form action="" method="POST">
                        <div class="form-group">
                            <label for="no_kamar">No Kamar</label>
                            <input type="text" value="<?= $kamar['no_kamar']; ?>" class="form-control" disabled>
                            <input type="hidden" value="<?= $kamar['no_kamar']; ?>" id="no_kamar" name="no_kamar">
                            <div class="form-text text-danger"><?= form_error('no_kamar'); ?></div>
                            </div>
                            <div>
                                <div class="form-group mt-3 mb-4">
                                    <label for="tipe_kamar">Tipe Kamar</label>
                                    <?php $tipe = $kamar['tipe_kamar']; ?>
                                    <select class="form-control form-select-md" name="tipe_kamar" id="tipe_kamar">
                                    <option selected>Pilih Tipe Kamar</option>
                                    <option <?php echo ($tipe == 'Standar') ? "selected": "" ?>>Standar</option>
                                    <option <?php echo ($tipe == 'Deluxe') ? "selected": "" ?>>Deluxe</option>
                                    <option <?php echo ($tipe == 'VIP') ? "selected": "" ?>>VIP</option>
                                    </select>
                                </div>
                            </div>

                        <br>
                        <button type="submit" class="btn btn-success">Simpan</button>
                        <button type="reset" class="btn btn-warning">Reset</button>
                        <a href="<?php echo base_url() ?>kamar" class="btn btn-md btn-secondary float-end">Kembali</a>
                    </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>