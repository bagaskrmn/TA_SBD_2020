<?php
include "_config/config.php";
if(isset($_SESSION['user'])) {
    echo "<script>window.location='/sewastudio/dashboard';</script>";
} else {
    echo "<script>window.location='auth/login.php';</script>";
}
?>