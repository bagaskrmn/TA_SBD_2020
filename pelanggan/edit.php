<?php
include "../_header.php";
?>
<div class="box">
<h2>PELANGGAN</h2>
    <h4>
        <small>Edit Data Pelanggan</small>
        <div class="pull-right">
            <a href="data.php" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-chevron-left"></i>Kembali</a>
        </div>
    </h4>
    <div class="row">
        <div class="col-lg-6 col-lg-offset-3">
        <?php
        $id = @$_GET['id'];
        $sql_pelanggan = mysqli_query($con, "SELECT * FROM tb_pelanggan WHERE id_pelanggan = '$id'") or die (mysqli_error($con));
        $data = mysqli_fetch_array($sql_pelanggan);
        ?>
            <form action="proses.php" method="post">
                <div class="form-group">
                    <label for="id">ID Pelanggan</label>
                    <input type="text" name="id" value="<?=$data['id_pelanggan']?>" readonly>
                </div>
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" id="nama" value="<?=$data['nama_pelanggan']?>" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" name="alamat" id="alamat" value="<?=$data['alamat_pelanggan']?>" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="nohp">No. HP</label>
                    <input type="number" name="nohp" id="nohp" value="<?=$data['no_telp']?>" class="form-control" required>
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