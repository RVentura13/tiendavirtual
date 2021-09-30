<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="description" content="Tienda Virtual - Rony Ventura">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Rony Ventura">
    <meta name="theme-color" content="#009688">
    <link rel="shortcut icon" href="<?= media(); ?>/images/carrito.ico">
    <title><?= $data['page_tag']; ?></title>


    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="<?= media(); ?>/css/main.css">
    <link rel="stylesheet" type="text/css" href="<?= media(); ?>/css/bootstrap-select.min.css">
    <link rel="stylesheet" type="text/css" href="<?= media(); ?>/css/style.css">

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= media(); ?>/js/plugins/fontawesome-free/css/all.min.css">
<!-- Data Table -->
    <link rel="stylesheet" href="<?= media(); ?>/js/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= media(); ?>/js/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= media(); ?>/js/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= media(); ?>/css/adminlte.min.css">
    <link rel="stylesheet" type="text/css" href="/<?= media(); ?>/css/bootstrap-select.min.css">
</head>

<body class="hold-transition sidebar-mini <!-- sidebar-collapse--> sidebar-mini">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-primary navbar-dark">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
        </ul>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
            <!-- User Menu-->
            <li class="dropdown"><a class="btn btn-primary" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i></a>
                <ul class="dropdown-menu settings-menu dropdown-menu-right">
                    <li><a class="dropdown-item" href="<?= base_url(); ?>/opciones"><i class="fa fa-cog fa-lg"></i> Settings</a></li>
                    <li><a class="dropdown-item" href="<?= base_url(); ?>/perfil"><i class="fa fa-user fa-lg"></i> Profile</a></li>
                    <li><a class="dropdown-item" href="<?= base_url(); ?>/logout"><i class="fa fa-sign-out fa-lg"></i> Logout</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <!-- /.navbar -->
    <?php require_once('nav_admin.php') ?>