<?php
include "../_config/config.php";
if(isset($_SESSION['user'])) {
    echo "<script>window.location='/sewastudio/dashboard';</script>";
} else {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>LOGIN - SEWA ALAT DAN STUDIO</title>
    <!-- Bootstrap Core CSS -->
    <link href="../_assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" href="../_assets/ikon-musik.png">
</head>
<body>
    <div id="wrapper">
        <div class="container">
            <div align="center" style="margin-top: 240px;">
            <?php
            if(isset($_POST['login'])) {
                $user = trim(mysqli_real_escape_string($con, $_POST['user']));
                $pass = sha1(trim(mysqli_real_escape_string($con, $_POST['pass'])));
                $sql_login = mysqli_query($con, "SELECT * FROM tb_user WHERE username = '$user' AND password='$pass'") or die (mysqli_error($con));
                if(mysqli_num_rows($sql_login) > 0) {
                    $_SESSION['user'] = $user;
                    echo "<script>window.location='/sewastudio/dashboard';</script>";
                } else { ?>
                    <div class="row">
                        <div class="col-log-offset-3">
                            <div class="alert alert-danger alert-dismissable" role="alert">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                                <strong>GAGAL LOGIN!</strong> Username / Password Anda salah
                            </div> 
                        </div>
                    </div>
                <?php 
                }
            }
            ?>
                <form action="" method="post" class="navbar-form">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input type="text" name="user" class="form-control" placeholder="Username" required autofocus>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        <input type="password" name="pass" class="form-control" placeholder="Password" required>
                    </div>
                    <div class="input-group">
                        <input type="submit" name="login" class="btn btn-primary" value="Login">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="../_assets/js/jquery.js"></script>
    <script src="../_assets/js/bootstrap.min.js"></script>
</body>
</html>

<?php
}
?>