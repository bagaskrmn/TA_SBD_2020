<?php
include "_config/config.php";
if(!isset($_SESSION['user'])) {
    echo "<script>window.location='../auth/login.php';</script>";
} ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>SEWA ALAT DAN STUDIO</title>
    <!-- Bootstrap Core CSS -->
    <link href="../_assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="../_assets/css/simple-sidebar.css" rel="stylesheet">
    <link rel="icon" href="../_assets/ikon-musik.png">
</head>
<body>
    <script src="../_assets/js/jquery.js"></script>
    <script src="../_assets/js/bootstrap.min.js"></script>
    <div id="wrapper">
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href=""><span class="text-info"><b>Studio dan Alat Musik</b></span></a>
                </li>
                <li>
                    <a href="/sewastudio/dashboard">Dashboard</a>
                </li>
                <li>
                    <a href="../pelanggan/data.php">Data Customer</a>
                </li>
                <li>
                    <a href="../studio/data.php">Daftar Studio</a>
                </li>
                <li>
                    <a href="../alatMusik/data.php">Daftar Alat Musik</a>
                </li>
                <li>
                    <a href="../sewa_studio/data.php">Sewa Studio</a>
                </li>
                <li>
                    <a href="../sewa_alat_musik/data.php">Sewa Alat Musik</a>
                </li>
                <li>
                    <a href="../auth/logout.php"><span class="text-danger">Logout</span></a>
                </li>
            </ul>
        </div>>
        <div id="page-content-wrapper">
            <div class="container-fluid">
