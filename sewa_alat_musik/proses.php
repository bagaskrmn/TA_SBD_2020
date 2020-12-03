<?php
include "../_config/config.php";

if(isset($_POST['add'])){
    $id_sewa_alat = trim(mysqli_real_escape_string($con, $_POST['id_sewa_alat']));
    $nama_pelanggan = trim(mysqli_real_escape_string($con, $_POST['nama_pelanggan']));
    $id_alat_musik= trim(mysqli_real_escape_string($con, $_POST['id_alat_musik']));
    $tgl_sewa= trim(mysqli_real_escape_string($con, $_POST['tgl_sewa']));
    $tgl_kembali= trim(mysqli_real_escape_string($con, $_POST['tgl_kembali']));

    mysqli_query($con, "INSERT INTO sewa_alat_musik (id_sewa_alat, id_pelanggan, id_alat_musik, tgl_sewa, tgl_kembali) VALUES ('$id_sewa_alat','$nama_pelanggan','$id_alat_musik', '$tgl_sewa', '$tgl_kembali')") or die (mysqli_error($con));
    echo "<script>window.location='data.php'</script>";
} 
?>