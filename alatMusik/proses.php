<?php
include "../_config/config.php";

if(isset($_POST['add'])){
    $id_alat_musik = trim(mysqli_real_escape_string($con, $_POST['id_alat_musik']));
    $nama = trim(mysqli_real_escape_string($con, $_POST['nama']));
    $harga = trim(mysqli_real_escape_string($con, $_POST['harga']));
    mysqli_query($con, "INSERT INTO tb_alat_musik (id_alat_musik, nama_alat_musik, harga_alat_musik) VALUES ('$id_alat_musik','$nama','$harga')") or die (mysqli_error($con));
    echo "<script>window.location='data.php'</script>";

} else if(isset($_POST['edit'])) {
    $id= $_POST['id'];
    $nama = trim(mysqli_real_escape_string($con, $_POST['nama']));
    $harga = trim(mysqli_real_escape_string($con, $_POST['harga']));
    mysqli_query($con, "UPDATE tb_alat_musik SET nama_alat_musik = '$nama', harga_alat_musik = '$harga' WHERE id_alat_musik = '$id' ") or die (mysqli_error($con));
    echo "<script>window.location='data.php'</script>";
}

?>