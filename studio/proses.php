<?php
include "../_config/config.php";

if(isset($_POST['add'])){
    $id_studio = trim(mysqli_real_escape_string($con, $_POST['id_studio']));
    $nama = trim(mysqli_real_escape_string($con, $_POST['nama']));
    $harga = trim(mysqli_real_escape_string($con, $_POST['harga']));
    mysqli_query($con, "INSERT INTO tb_studio (id_studio, nama_studio, harga) VALUES ('$id_studio','$nama','$harga')") or die (mysqli_error($con));
    echo "<script>window.location='data.php'</script>";

} else if(isset($_POST['edit'])) {
    $id= $_POST['id'];
    $nama = trim(mysqli_real_escape_string($con, $_POST['nama']));
    $harga = trim(mysqli_real_escape_string($con, $_POST['harga']));
    mysqli_query($con, "UPDATE tb_studio SET nama_studio = '$nama', harga = '$harga' WHERE id_studio = '$id' ") or die (mysqli_error($con));
    echo "<script>window.location='data.php'</script>";
}


?>