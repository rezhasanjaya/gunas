<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- CSS-->
    <!-- <link rel="stylesheet" type="text/css" href="<? base_url(); ?>../assets/css/style.css"> -->

    <!-- Logo-->
    <link rel="shortcut icon">

    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
     <!-- jQuery UI library -->
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.1/themes/smoothness/jquery-ui.css">
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.min.js"></script>


    <title><?php echo $judul; ?> - Guna Sanghyang</title>
    <style>
        /* width */
        ::-webkit-scrollbar {
            width: 6px;
        }

        /* Track */
        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        /* Handle */
        ::-webkit-scrollbar-thumb {
            background: #888;
            border-radius: 10px;
        }

        /* Handle on hover */
        ::-webkit-scrollbar-thumb:hover {
            background: #555;
        }
    </style>
</head>

<body>
    <nav class="navbar sticky-top navbar-expand-lg navbar-fixed-top bg-light navbar-light shadow">
        <div class="container">
            <a class="navbar-brand" href="<?= base_url() ?>PegawaiPage">
               Guna Sanghyang
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="<?= base_url() ?>PegawaiPage"><b>Dashboard</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="<?= base_url() ?>PegawaiPage/rank"><b>Ranking</b></a>
                    </li>
                </ul>
            </div>
            <div class="dropdown text-end">
                <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"> 
                <?= $user['username']; ?>
                </a>
                <ul class="dropdown-menu text-small">

                    <li> <a class="dropdown-item" href="<?= base_url() ?>akun/edit/<?= $user['username']; ?>">Profile</a></li>
                    <li><a class="dropdown-item" href="<?= base_url() ?>akun/ubahPass/<?= $user['username']; ?>">Ubah Password</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li>
                        <?php if ($this->session->userdata('role_id') == '1') : ?>
                            <a href="<?php echo base_url() ?>Dashboard/logout" onclick="return confirm('Yakin Ingin Log Out?');" class="dropdown-item">LogOut</a>
                        <?php elseif ($this->session->userdata('role_id') == '3') : ?>
                            <a href="<?php echo base_url() ?>PegawaiPage/logout" onclick="return confirm('Yakin Ingin Log Out?');" class="dropdown-item">LogOut</a>
                        <?php endif; ?>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
