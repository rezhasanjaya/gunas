<link href="assets/css/style.css" rel="stylesheet">

<div class="container">
    <div class="row">
        <div class="col-md-12 offset-md-0">
            <div class="pegawai">
                <div class="container py-3">
                    <div class="container px-4 py-2" id="hanging-icons">
                        <h2 class="pb-2 mb-4 border-bottom"><b>Ranking</b></h2>
                        <?php if (empty($gamifikasi)) : ?>
                            <div class="row">
                            <div class="col-md-14">
                                <div class="alert alert-danger" role="alert">
                                Data Pegawai Tidak Ditemukan
                                </div>
                            </div>
                            </div>
                        <?php endif ?>
                        <div class="row g-4 row-cols-1 row-cols-lg-3">
                        <table class="table" >
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Jenis Kelamin</th>
                            <th scope="col">Jabatan</th>
                            <th scope="col">Point</th>
                            <th scope="col">Badge</th>
                            <th scope="col">Level</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($gamifikasi as $pegawai) {
                            ?>

                                <tr>
                                <td><?php echo $no++ ?></td>
                                <td><?php echo $pegawai['nama_pegawai'] ?></td>
                                <td><?php echo $pegawai['jenis_kelamin'] ?></td>
                                <td><?php echo $pegawai['jabatan'] ?></td>
                                <td><?php echo $pegawai['point'].' Point' ?></td>
                                <td><?php echo $pegawai['badge'] ?></td>
                                <td><?php echo 'Level '. $pegawai['level'] ?></td>
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




