<?php
// Start the session
session_start();
if(isset($_SESSION['correo'])){
   header('Location: ./index.php');
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>LEDA</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/iCheck/square/blue.css">
    <!-- login bg control-->
    <link rel="stylesheet" href="css/login.css">

    <link rel="stylesheet" href="plugins/jAlert/jAlert.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition login-page">
    <div class="bg-login">
        <div class="container">
            <div class="row">
            <div class="login-box">
                <div class="login-logo">
                    <h1 class="title-leda"><b>LEDA</b></h1>
                </div>
                <!-- /.login-logo -->
                <div class="login-box-body text-center">
                    <p class="login-box-msg"><b>Ingrese los datos para iniciar</b> </p>

                    <form action="" id="loginform" name="loginform" method="post">
                        <div class="form-group has-feedback">
                            <input required type="email" id="emailFrm" name="emailFrm" class="form-control" placeholder="Correo">
                            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                        </div>
                        <div class="form-group has-feedback">
                            <input required type="password" id="passFrm" name="passFrm" class="form-control" placeholder="Contraseña">
                            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                        </div>
                        <div class="row">
                            <!-- /.col -->
                            <div class="col-xs-4"></div>
                            <div class="col-xs-4 text-center">
                                <button type="submit" class="btn align-center btn-primary btn-block btn-flat">Ingresar</button>
                            </div>
                            <div class="col-xs-4"></div>
                            <div class="col-xs-12">
                                <p class="error_login text-danger hidden text-center">Algún dato es incorrecto, por favor verifica.</p>
                            </div>
                            <!-- /.col -->
                        </div>
                    </form>

                    <!-- /.social-auth-links -->
                    <a href="#" id="forgot" class="text-center">¿Problemas para ingresar?</a><br>
                </div>
                <h4 align="center">UDIPE, INA</h4>
                <!-- /.login-box-body -->
                </div>
                <!-- /.login-box -->

                <!-- jQuery 3 -->
                
                <script src="bower_components/jquery/dist/jquery.min.js"></script>
                <!-- Bootstrap 3.3.7 -->
                <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
                <!-- iCheck -->
                <script src="plugins/iCheck/icheck.min.js"></script>
                <script src="js/validate_login.js"></script>

                <!-- Jalert -->
                <script src="plugins/jAlert/jAlert.min.js"></script>
                <script src="plugins/jAlert/jAlert-functions.min.js"></script>
            </div>
            </div>
        </div>    
</body>

</html>