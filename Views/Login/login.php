<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $data['page_tag']; ?></title>
    <meta name="author" content="Rony Ventura">
    <link rel="shortcut icon" href="<?= media(); ?>/images/carrito.ico">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= media(); ?>/js/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="<?= media(); ?>/js/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= media(); ?>/css/adminlte.min.css">

    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="<?= media(); ?>/css/main.css">
    <link rel="stylesheet" type="text/css" href="<?= media(); ?>/css/style.css">
</head>

<body class="hold-transition login-page">
    <section class="login-content">

        <!-- /.login-logo -->

        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a href="login" class="h1"><b>Tienda</b> Virtual</a>
            </div>
            <div class="card-body">
                <div class="login-box">


                    <form class="login-form" name="formLogin" id="formLogin" action="">
                        <p class="login-box-msg">Inicio de sesión</p>

                        <div>
                            <label class="control-label">USUARIO</label>
                        </div>
                        <div class="input-group mb-3">
                            <input id="txtEmail" name="txtEmail" type="email" class="form-control" placeholder="Email">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-user"></span>
                                </div>
                            </div>
                        </div>
                        <div>
                            <label class="control-label">CONTRASEÑA</label>
                        </div>
                        <div class="input-group mb-3">
                            <input id="txtPassword" name="txtPassword" type="password" class="form-control" placeholder="Contraseña">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="utility">
                                <p class="mb-1"><a href="#" data-toggle="flip">¿Olvidaste tu contraseña?</a></p>
                            </div>
                        </div>
                        <div class="text-center" id="alertLogin"></div>
                        <div class="form-group btn-container">
                            <button type="submit" class="btn btn-primary btn-block"><i class="fas fa-sign-in-alt"></i> INICIAR SESIÓN</button>
                        </div>
                    </form>
                    <form id="formRecetPass" name="formRecetPass" class="forget-form" action="">
                        <p class="login-box-msg">Cambiar contraseña</p>
                        <div>
                            <label class="control-label">EMAIL</label>
                        </div>
                        <div class="input-group mb-3">
                            <input id="txtEmailReset" name="txtEmailReset" type="email" class="form-control" placeholder="Email">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-envelope"></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group btn-container">
                            <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-unlock fa-lg fa-fw"></i>REINICIAR</button>
                        </div>
                        <div class="form-group mt-3">
                            <p class="semibold-text mb-0"><a href="#" data-toggle="flip"><i class="fa fa-angle-left fa-fw"></i> Iniciar sesión</a></p>
                        </div>
                    </form>

                </div>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->

    </section>
    <!-- /.login-box -->

    <script>
        const base_url = "<?= base_url(); ?>";
    </script>

    <!-- jQuery -->
    <script src="<?= media(); ?>/js/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?= media(); ?>/js/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= media(); ?>/js/adminlte.min.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="<?= media(); ?>/js/plugins/pace.min.js"></script>

    <!-- <script src="<?= media(); ?>/js/main.js"></script> -->

    <!-- SweetAlert-->
    <script type="text/javascript" src="<?= media(); ?>/js/plugins/sweetalert.min.js"></script>

    <script src="<?= media(); ?>/js/<?= $data['page_functions_js']; ?>"></script>
</body>

</html>