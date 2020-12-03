<?php
include "../_header.php";
?>
<div class="box">
<h2>SEWA ALAT MUSIK</h2>
    <h4>
        <small>Tambah Data Sewa Alat Musik</small>
        <div class="pull-right">
            <a href="data.php" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-chevron-left"></i>Kembali</a>
        </div>
    </h4>
    <div class="row">
        <div class="col-lg-6 col-lg-offset-3">
            <form action="proses.php" method="post">
                <div class="form-group">
                    <label for="id_sewa_alat">ID Sewa Alat Musik</label>
                    <input type="number" name="id_sewa_alat" id="id_sewa_alat" class="form-control" required autofocus>
                </div>
                <div class="form-group">
                    <label for="nama_pelanggan"> Nama Pelanggan</label>
                    <select name="nama_pelanggan" id="nama_pelanggan" class="form-control" required>
                        <option value="">Pilih Pelanggan</option>
                        <?php
                        $sql_pelanggan = mysqli_query($con, "SELECT * FROM tb_pelanggan") or die (mysqli_error($con));
                        while ($data_pelanggan = mysqli_fetch_array($sql_pelanggan)) {
                            echo'<option value="'.$data_pelanggan['id_pelanggan'].'">'.$data_pelanggan['nama_pelanggan'].'</option>';
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="id_alat_musik">Nama Alat Musik</label>
                    <select name="id_alat_musik" id="id_alat_musik" class="form-control" required>
                        <option value="">Pilih Alat Musik</option>
                        <?php
                        $sql_alat = mysqli_query($con, "SELECT * FROM tb_alat_musik") or die (mysqli_error($con));
                        while ($data_alat = mysqli_fetch_array($sql_alat)) {
                            echo'<option value="'.$data_alat['id_alat_musik'].'">'.$data_alat['nama_alat_musik'].'</option>';
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="tgl_sewa">Tanggal Sewa</label>
                    <input type="date" name="tgl_sewa" id="tgl_sewa" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="tgl_kembali">Tanggal Kembali</label>
                    <input type="date" name="tgl_kembali" id="tgl_kembali" class="form-control" required>
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