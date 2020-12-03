<?php
include "../_config/config.php";

mysqli_query($con, "DELETE FROM tb_alat_musik WHERE id_alat_musik ='$_GET[id]'") or die (mysqli_error($con));
echo "<script>window.location='data.php'</script>";
?>