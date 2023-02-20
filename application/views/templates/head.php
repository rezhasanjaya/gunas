<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <!-- CSS-->
    <link rel="stylesheet" type="text/css" href="<? base_url(); ?>../assets/css/style.css">

    <!-- Logo-->
    <link rel="shortcut icon"/>

    <!-- Jquery -->
    <script src="<?= base_url('assets/js/jquery.min.js'); ?>" type="text/javascript"></script>

    <!-- jQuery library -->
    <script src="<?= base_url() ?>assets/jquery-3.3.1.min.js"></script>

    <!-- CDN -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

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

        .btnAll {
            background-color: #2657A7;
            color: #f1f1f1;
            transition-duration: 0.4s;
            border-radius: 12px;
            padding: 2px 28px;
        }

        .btnAll:hover {
            background-color: #ffb94c;
            /* Green */
            color: #f1f1f1;
            border-radius: 12px;
            padding: 2px 28px;
        }
    </style>
</head>

<body>
