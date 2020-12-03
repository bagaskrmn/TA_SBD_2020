<?php
include "../_config/config.php";

mysqli_query($con, "DELETE FROM sewa_studio WHERE id_sewa_studio ='$_GET[id]'") or die (mysqli_error($con));
echo "<script>window.location='data.php'</script>";
?>