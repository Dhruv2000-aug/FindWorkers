<?php

   
    include "db_connection.php";
    


if(session_status()==PHP_SESSION_NONE)
    {
        session_start();
    } 

    if(isset($_SESSION["uname"]))
    {
        $uname=$_SESSION["uname"];
        $x=mysqli_query($link,"select name from user where email='$uname'");
        $r=mysqli_fetch_array($x);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Skillhunt - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
<link rel="stylesheet" href="css/bootstrap/bootstrap-grid.css">
<link rel="stylesheet" href="css/bootstrap/bootstrap-reboot.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/mixins/_text-hide">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">


    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container-fluid px-md-4	">
        <a class="navbar-brand" href="index.php">Find Workers</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                 
                <li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
                <li class="nav-item"><a href="postjob.php" class="nav-link">Postjob</a></li>
                <?php if(!isset($_SESSION["uname"]))
                {
                    

                ?>
                <li class="nav-item cta mr-md-1"><a href="logingn.php" class="nav-link">login</a></li>
                <?php
                } 
            else 
            {
                
            ?>

                 <li class="nav-item"><a href="contact.php" class="nav-link"><?php echo $r['name']; ?></a></li>
            <?php 
            }
            ?>
                <?php if(isset($_SESSION["uname"]))
                {


                ?>
                <li class="nav-item"><a href="logout.php" class="nav-link">logout</a></li>
                <?php
                }
                ?>
            </ul>
        </div>
    </div>
</nav>
<!-- END nav -->
