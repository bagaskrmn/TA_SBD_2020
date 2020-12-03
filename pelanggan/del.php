<?php
include "../_config/config.php";

mysqli_query($con, "DELETE FROM tb_pelanggan WHERE id_pelanggan ='$_GET[id]'") or die (mysqli_error($con));
echo "<script>window.location='data.php'</script>";
?>