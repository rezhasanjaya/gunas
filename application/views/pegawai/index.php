<link href="assets/css/style.css" rel="stylesheet">

<div class="container">
    <div class="row">
        <div class="col-md-12 offset-md-0">
            <div class="pegawai">
                <div class="container py-3">
                    <div class="container px-4 py-2" id="hanging-icons">
                        <h2 class="pb-2 mb-4 border-bottom"><b>Data Pegawai</b></h2>
                        <a href="<?php echo base_url() ?>pegawai/tambah/" class="btn btn-sm btn-success" style="margin-bottom: 10px"><b>Tambah Data</b></a>
                        <a href="<?php echo base_url() ?>pegawai/reset_mPoint/" class="btn btn-sm btn-secondary" onclick="return confirm('Yakin?');" style="margin-bottom: 10px"><b>Reset Month Point</b></a>
                        <?php if (empty($pegawai)) : ?>
                            <div class="row">
                            <div class="col-md-14">
                                <div class="alert alert-danger" role="alert">
                                Data Pegawai Tidak Ditemukan
                                </div>
                            </div>
                            </div>
                        <?php endif ?>
                        <?php if ($this->session->flashdata('flash')) : ?>
                            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                            <div class="col">
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                Data Pegawai <strong>Berhasil</strong> <?= $this->session->flashdata('flash'); ?>.
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                </button>
                                </div>
                            </div>
                            </div>
                        <?php endif; ?>
                        <div class="row g-4 row-cols-1 row-cols-lg-3">
                        <table class="table" >
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Jenis Kelamin</th>
                            <th scope="col">Jabatan</th>
                            <th scope="col">Tanggal Lahir</th>
                            <th scope="col">Tempat Lahir</th>
                            <th scope="col">No Telp</th>
                            <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($pegawai as $pegawai) {
                            ?>

                                <tr>
                                <td><?php echo $no++ ?></td>
                                <td><?php echo $pegawai['nama_pegawai'] ?></td>
                                <td><?php echo $pegawai['jenis_kelamin'] ?></td>
                                <td><?php echo $pegawai['jabatan'] ?></td>
                                <td><?php echo $pegawai['tgl_lahir'] ?></td>
                                <td><?php echo $pegawai['tempat_lahir'] ?></td>
                                <td><?php echo $pegawai['no_telp'] ?></td>
                                <td>
                                    <a href="<?= base_url(); ?>pegawai/edit/<?= $pegawai['id_pegawai']; ?>"><span class="badge bg-primary text-light">Edit</span></a>
                                    <a href="<?= base_url(); ?>pegawai/hapus/<?= $pegawai['id_pegawai']; ?>" onclick="return confirm('Yakin?');"><span class="badge bg-danger text-light">Hapus</span></a>
                                </td>
                                </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




