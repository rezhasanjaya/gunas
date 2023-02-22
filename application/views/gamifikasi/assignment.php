<div class="container">
    <h1 class="mt-3 border-bottom"><b>Your Assignment</b></h1>
	<p>Selesaikan pekerjaanmu dalam melayani pengunjung.</p>
    <div class="card">
        <div class="card-body">
            <p>Masukan Bukti</p>
            <form action="" method="POST">
                <div class="form-group">
                    <div>
                        <div>
                            <input type="hidden" value="<?= $misi['id_mission']; ?>" id="id_mission" name="id_mission">
                            <input type="hidden" value="<?= $gamifikasi['month_point']; ?>" id="month_point" name="month_point">
                            <input type="hidden" name="point" value="<?= $gamifikasi['point']; ?>">
                            <input type="hidden" name="month_point" value="<?= $gamifikasi['month_point']; ?>">
                            <input type="hidden" name="misi_selesai" value="<?= $gamifikasi['misi_selesai']; ?>">
                            <input type="hidden" name="point_misi" value="<?= $misi['point']; ?>">
                            <input type="hidden" name="type" value="<?= $misi['mission']; ?>">
                            <input type="hidden" name="id_pegawai" value="<?= $user['id_pegawai']; ?>">
                            <div class="form-text text-danger"><?= form_error('point'); ?></div>
                            <div class="form-group mt-3 ">
                                
                                <?php 
                                if ($misi['done'] == 1) { ?> 
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Pelanggan</label>
                                        <input type="text" class="form-control" id="utility" value="<?= "Penginapan ID: ".$misi['utility'] ?>" disabled>
                                    </div>
                                <?php } elseif ($misi['done'] == 0){ ?>
                                <select class="js-states form-control" name="pelanggan" id="pelanggan">
                                    <?php if($misi['mission'] == 'Merapikan Kamar') { ?>
                                        <option>Pilih Kamar Yang dirapihkan</option>
                                        <?php foreach ($merapikan as $p) : ?>
                                            <option value="<?= $p['id_penginapan'] ?>">Kamar <?= $p['no_kamar'] ?> - <?= $p['nama_pelanggan'] ?></option>
                                        <?php endforeach; ?>
                                    <?php }elseif($misi['mission'] == 'Melayani Pelanggan') { ?>
                                        <option>Pilih Nama Pelanggan</option>
                                        <?php foreach ($pelanggan as $p) : ?>
                                            <option value="<?= $p['id_penginapan'] ?>">Kamar <?= $p['no_kamar'] ?> - <?= $p['nama_pelanggan'] ?></option>
                                        <?php endforeach; ?>
                                    <?php }elseif($misi['mission'] == 'Melayani Reservasi') { ?>
                                        <option>Pilih Kamar Yang Telah Direservasi</option>
                                        <?php foreach ($reservasi as $p) : ?>
                                            <option value="<?= $p['id_penginapan'] ?>">Kamar <?= $p['no_kamar'] ?> - <?= $p['nama_pelanggan'] ?></option>
                                        <?php endforeach; ?>
                                    <?php }elseif($misi['mission'] == 'Merapikan Kunci') { ?>
                                        <option>Pilih Kunci yang Telah dirapihkan</option>
                                        <?php foreach ($kunci as $p) : ?>
                                            <option value="<?= $p['id_penginapan'] ?>">Kamar <?= $p['no_kamar'] ?> - <?= $p['nama_pelanggan'] ?></option>
                                        <?php endforeach; ?>
                                    <?php } ?>
                                </select>
                                <?php } ?>
                                <div class="form-text text-danger"><?= form_error('pelanggan'); ?></div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <a href="<?php echo base_url() ?>mission" class="btn btn-md btn-secondary">Kembali</a>
                <button type="submit" class="btn btn-success float-end">Simpan</button>
            </form>
        </div>
    </div>
</div>