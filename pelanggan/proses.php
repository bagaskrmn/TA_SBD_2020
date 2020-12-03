<?php
include "../_config/config.php";

if(isset($_POST['add'])){
    $id_pelanggan = trim(mysqli_real_escape_string($con, $_POST['id_pelanggan']));
    $nama = trim(mysqli_real_escape_string($con, $_POST['nama']));
    $alamat = trim(mysqli_real_escape_string($con, $_POST['alamat']));
    $nohp = trim(mysqli_real_escape_string($con, $_POST['nohp']));
    mysqli_query($con, "INSERT INTO tb_pelanggan (id_pelanggan, nama_pelanggan, alamat_pelanggan, no_telp) VALUES ('$id_pelanggan','$nama','$alamat','$nohp')") or die (mysqli_error($con));
    echo "<script>window.location='data.php'</script>";

} else if(isset($_POST['edit'])) {
    $id= $_POST['id'];
    $nama = trim(mysqli_real_escape_string($con, $_POST['nama']));
    $alamat = trim(mysqli_real_escape_string($con, $_POST['alamat']));
    $nohp = trim(mysqli_real_escape_string($con, $_POST['nohp']));
    mysqli_query($con, "UPDATE tb_pelanggan SET nama_pelanggan = '$nama', alamat_pelanggan = '$alamat', no_telp = '$nohp' WHERE id_pelanggan = '$id' ") or die (mysqli_error($con));
    echo "<script>window.location='data.php'</script>";
}


?>