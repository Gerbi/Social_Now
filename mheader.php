<?php
/**
 * Created by PhpStorm.
 * User: lml
 * Date: 2/4/2018
 * Time: 8:21 PM
 */
?>

<!doctype html>
<html>

<head>
    <title>Social Network</title>

    <link rel="stylesheet" href="includes/styles/style.css" />

    <script src="includes/jquery/jquery.js"></script>

        <meta charset="utf-8" />
        <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
        <link rel="icon" type="image/png" href="assets/img/favicon.png">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

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

<body>

<div id="page">

    <div id="header">

        <div class="logo">
            <a href="index.php" style="color:#fff; text-decoration:none;">SOCIAL NETWORK</a>
        </div>

        <div class="nav">
            <?php
            if( !isset($_SESSION['member_id']) or $_SESSION['member_id']=='' ){
                ?>
                <ul>
                    <a href="login.php"><li>Login</li></a>
                    <a href="signup.php"><li>Register</li></a>
                </ul>
                <?php
            }else{
                ?>
                <ul>
                    <a href="index.php"><li>Home</li></a>
                    <a href="user.php?name=<?=$_SESSION['name']?>"><li>Timeline</li></a>
                    <a href="notifications.php"><li>Notifications</li></a>
                    <a href="profile.php"><li>Profile</li></a>
                    <a href="messages.php"><li>Messages</li></a>
                    <a href="settings.php"><li>Settings</li></a>
                    <a href="logout.php"><li>Logout</li></a>
                </ul>
                <?php
            }
            ?>
        </div>
        <div class="clear"></div>
    </div>