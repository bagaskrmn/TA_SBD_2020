<?php include "../_header.php"; ?>

<div class="box">
    <h2>SEWA STUDIO</h2>
    <h4>
        <small>Data Penyewaan Studio</small>
        <div class="pull-right">
            <a href="" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-refresh"></i></a>
            <a href="add.php" class="btn btn-success btn-xs"><i class="glyphicon glyphicon-plus"></i>Tambah</a>
        </div>
    </h4>
    <div style="margin-bottom: 20px;">
        <form class="form-inline" action="" method="post">
            <div class="form-group">
                <input type="text" name="pencarian" class="form-control" placeholder="Pencarian">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
            </div>
        </form>
    </div>
    <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover">
            <thead>
                <tr>
                    <th>No</th>
                    <th>ID Sewa Studio</th>
                    <th>Nama Pelanggan</th>
                    <th>Nama Studio</th>
                    <th>Harga per Hari</th>
                    <th>Tanggal Sewa</th>
                    <th>Tanggal Kembali</th>
                    <th>Biaya</th>
                    <th><i class="glyphicon glyphicon-cog"></i></th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no=1;
                $query = "SELECT * FROM sewa_studio
                    JOIN tb_pelanggan ON sewa_studio.id_pelanggan = tb_pelanggan.id_pelanggan JOIN tb_studio ON sewa_studio.id_studio= tb_studio.id_studio ORDER BY id_sewa_studio";
                $sql_sewa_studio = mysqli_query($con, $query) or die (mysqli_error($con));
                while ($data = mysqli_fetch_array($sql_sewa_studio)) { ?>
                <tr>
                    <td><?=$no++?></td>
                    <td><?=$data['id_sewa_studio']?></td>
                    <td><?=$data['nama_pelanggan']?></td>
                    <td><?=$data['nama_studio']?></td>
                    <td><?=$data['harga']?></td>
                    <td><?=$data['tgl_sewa']?></td>
                    <td><?=$data['tgl_kembali']?></td>
                    <?php
                    $nilai_sewa = strtotime($data['tgl_sewa']);
                    $nilai_kembali = strtotime($data['tgl_kembali']);
                    $waktu_sewa = ($nilai_kembali-$nilai_sewa) / 86400;
                    $biaya = $waktu_sewa * $data['harga'] ;
                    ?>
                    <td><?=$biaya?></td>
                    <td>
                        <a href="del.php?id=<?=$data['id_sewa_studio']?>" onclick="return confirm('Yakin data dihapus?')" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash"></i></a>
                    </td>
                </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</div>



<?php include "../_footer.php"; ?>