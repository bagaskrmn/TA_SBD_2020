<?php
include "../_config/config.php";

mysqli_query($con, "DELETE FROM sewa_alat_musik WHERE id_sewa_alat ='$_GET[id]'") or die (mysqli_error($con));
echo "<script>window.location='data.php'</script>";
?>