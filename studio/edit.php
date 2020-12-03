<?php
include "../_header.php";
?>
<div class="box">
<h2>STUDIO</h2>
    <h4>
        <small>Edit Data Studio</small>
        <div class="pull-right">
            <a href="data.php" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-chevron-left"></i>Kembali</a>
        </div>
    </h4>
    <div class="row">
        <div class="col-lg-6 col-lg-offset-3">
        <?php
        $id = @$_GET['id'];
        $sql_studio = mysqli_query($con, "SELECT * FROM tb_studio WHERE id_studio = '$id'") or die (mysqli_error($con));
        $data = mysqli_fetch_array($sql_studio);
        ?>
            <form action="proses.php" method="post">
                <div class="form-group">
                    <label for="id">ID Studio</label>
                    <input type="text" name="id" value="<?=$data['id_studio']?>" readonly>
                </div>
                <div class="form-group">
                    <label for="nama">Nama Studio</label>
                    <input type="text" name="nama" id="nama" value="<?=$data['nama_studio']?>" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="harga">Harga</label>
                    <input type="text" name="harga" id="harga" value="<?=$data['harga']?>" class="form-control" required>
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