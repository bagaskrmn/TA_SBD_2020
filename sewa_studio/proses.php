<?php
include "../_config/config.php";

if(isset($_POST['add'])){
    $id_sewa_studio = trim(mysqli_real_escape_string($con, $_POST['id_sewa_studio']));
    $nama_pelanggan = trim(mysqli_real_escape_string($con, $_POST['nama_pelanggan']));
    $id_studio= trim(mysqli_real_escape_string($con, $_POST['id_studio']));
    $tgl_sewa= trim(mysqli_real_escape_string($con, $_POST['tgl_sewa']));
    $tgl_kembali= trim(mysqli_real_escape_string($con, $_POST['tgl_kembali']));
    
    mysqli_query($con, "INSERT INTO sewa_studio (id_sewa_studio, id_pelanggan, id_studio, tgl_sewa, tgl_kembali) VALUES ('$id_sewa_studio','$nama_pelanggan','$id_studio', '$tgl_sewa', '$tgl_kembali')") or die (mysqli_error($con));
    echo "<script>window.location='data.php'</script>";
} 
?>