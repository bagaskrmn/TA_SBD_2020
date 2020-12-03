<?php
include "../_header.php";
?>
<div class="box">
<h2>STUDIO</h2>
    <h4>
        <small>Tambah Data Studio</small>
        <div class="pull-right">
            <a href="data.php" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-chevron-left"></i>Kembali</a>
        </div>
    </h4>
    <div class="row">
        <div class="col-lg-6 col-lg-offset-3">
            <form action="proses.php" method="post">
                <div class="form-group">
                    <label for="id_studio">ID Studio</label>
                    <input type="number" name="id_studio" id="id_studio" class="form-control" required autofocus>
                </div>
                <div class="form-group">
                    <label for="nama">Nama Studio</label>
                    <input type="text" name="nama" id="nama" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="harga">Harga Studio</label>
                    <input type="number" name="harga" id="harga" class="form-control" required>
                </div>
                <div class="form-group pull-right">
                    <input type="submit" name="add" value="Simpan" class="btn btn-success">
                </div>
            </form>
        </div>
    </div>
</div>
<?php
include "../_footer.php";
?>