<?php
session_start();

include("includes/config.php");



$errors='';
$success='';

if( isset($_POST['loginBtn']) ){

    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];

    if( empty($email) or empty($password) ){
        $errors .= 'Please fill out all fields';
    }else{

        $select = mysqli_query($connection, "SELECT * FROM members WHERE email='$email' and password='$password' and activated='1'");

        if( mysqli_num_rows($select)==1 ){

            $result = mysqli_fetch_array($select);

            $_SESSION['member_id'] = $result['id'];
            $_SESSION['name'] = $result['name'];

            header("Location: index.php");

        }else{

            $errors .= "Email and password combination does not match. <br /> OR You need to activate your account by going through activation link in your email box.";
        }



    }

}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Login Page - Social Network</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/evil-icons@1.9.0/assets/evil-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/evil-icons@1.9.0/assets/evil-icons.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/now-ui-kit.css?v=1.1.0" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="assets/css/demo.css" rel="stylesheet" />
</head>

<body class="login-page sidebar-collapse">
<!-- Navbar -->
<nav class="navbar navbar-expand-lg bg-primary fixed-top navbar-transparent " color-on-scroll="400">
    <div class="container">

        <div class="navbar-translate">

            <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse justify-content-end" id="navigation" data-nav-image="assets/img/blurred-image-1.jpg">
            <ul class="navbar-nav">

                <li class="nav-item">
                    <a class="nav-link" rel="tooltip" title="Follow us on Twitter" data-placement="bottom" href="https://twitter.com/gerbi_xD" target="_blank">
                        <i class="fa fa-twitter"></i>
                        <p class="d-lg-none d-xl-none">Twitter</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" rel="tooltip" title="Like us on Facebook" data-placement="bottom" href="https://www.facebook.com/gerbi.gomez" target="_blank">
                        <i class="fa fa-facebook-square"></i>
                        <p class="d-lg-none d-xl-none">Facebook</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" rel="tooltip" title="Follow us on Instagram" data-placement="bottom" href="https://www.instagram.com/Gerbi_xD" target="_blank">
                        <i class="fa fa-instagram"></i>
                        <p class="d-lg-none d-xl-none">Instagram</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- End Navbar -->
<div class="page-header" filter-color="orange">
    <div class="page-header-image" style="background-image:url('assets/img/login.jpg')"></div>
    <div class="container">
        <div class="col-md-4 content-center">
            <div class="card card-login card-plain">
                <form class="form" method="" action="">
                    <div class="header header-primary text-center">
                        <div class="logo-container">
                            <img src="assets/img/now-logo.png" alt="">
                        </div>
                    </div>
                    <div class="content">
                        <div class="input-group form-group-no-border input-lg">
                            <span class="input-group-addon">
                                <div data-icon="ei-user" data-size="s"></div><!--
                                    <i class="now-ui-icons users_circle-08"></i>-->
                            </span>
                            <input type="text" class="form-control" placeholder="Email..">
                        </div>
                        <div class="input-group form-group-no-border input-lg">

                                <span class="input-group-addon">
                                <div data-icon="ei-unlock" data-size="s"></div>
                                </span>
                            <input type="password" placeholder="Password" class="form-control" />
                        </div>
                    </div>
                    <div class="footer text-center">
                        <a href="#pablo" class="btn btn-primary btn-round btn-lg btn-block">Login</a>
                    </div>
                    <div class="pull-left">
                        <h6>
                            <a href="#pablo" class="link">Create Account</a>
                        </h6>
                    </div>

                </form>
            </div>
        </div>
    </div>
    <footer class="footer">
        <div class="container">

            <div class="copyright">
                &copy;
                <script>
                    document.write(new Date().getFullYear())
                </script>, Designed by
                <a href="" target="_blank">Gerbi Code</a>. Coded by
                <a href="https://t.me/gerbi" target="_blank">Gerbi Gomez</a>.
            </div>
        </div>
    </footer>
</div>
</body>
<!--   Core JS Files   -->
<script src="assets/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="assets/js/core/bootstrap.min.js" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="assets/js/plugins/bootstrap-switch.js"></script>
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
<!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
<script src="assets/js/plugins/bootstrap-datepicker.js" type="text/javascript"></script>
<!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
<script src="assets/js/now-ui-kit.js?v=1.1.0" type="text/javascript"></script>

</html>