<?php
include "../_header.php";
?>
<div class="box">
<h2>ALAT MUSIK</h2>
    <h4>
        <small>Edit Data Alat Musik</small>
        <div class="pull-right">
            <a href="data.php" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-chevron-left"></i>Kembali</a>
        </div>
    </h4>
    <div class="row">
        <div class="col-lg-6 col-lg-offset-3">
        <?php
        $id = @$_GET['id'];
        $sql_alat_musik = mysqli_query($con, "SELECT * FROM tb_alat_musik WHERE id_alat_musik = '$id'") or die (mysqli_error($con));
        $data = mysqli_fetch_array($sql_alat_musik);
        ?>
            <form action="proses.php" method="post">
                <div class="form-group">
                    <label for="id">ID Alat Musik</label>
                    <input type="text" name="id" value="<?=$data['id_alat_musik']?>" readonly>
                </div>
                <div class="form-group">
                    <label for="nama">Nama Alat Musik</label>
                    <input type="text" name="nama" id="nama" value="<?=$data['nama_alat_musik']?>" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="harga">Harga Sewa Alat Musik</label>
                    <input type="text" name="harga" id="harga" value="<?=$data['harga_alat_musik']?>" class="form-control" required>
                </div>
                <div class="form-group pull-right">
                    <input type="submit" name="edit" value="Simpan" class="btn btn-success">
                </div>
            </form>
        </div>
    </div>
</div>
<?php
include "../_footer.php";
?>