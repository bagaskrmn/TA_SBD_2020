<?php include "../_header.php"; ?>

<div class="box">
    <h2>STUDIO</h2>
    <h4>
        <small>Data Studio</small>
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
                    <th>ID Studio</th>
                    <th>Nama Studio</th>
                    <th>Harga</th>
                    <th><i class="glyphicon glyphicon-cog"></i></th>
                </tr>
            </thead>
            <tbody>
                <?php
                $batas = 10;
                $hal =@$_GET['hal'];
                if(empty($hal)) {
                    $posisi = 0;
                    $hal = 1;
                } else {
                    $posisi = ($hal - 1) * $batas;
                }
                $no = 1;
                if($_SERVER['REQUEST_METHOD'] == "POST") {
                    $pencarian = trim(mysqli_real_escape_string($con, $_POST['pencarian']));
                    if($pencarian != '') {
                        $sql = "SELECT * FROM tb_studio WHERE nama_studio LIKE '%$pencarian%'";
                        $query = $sql;
                        $queryJml = $sql;
                    } else {
                        $query = "SELECT * FROM tb_studio LIMIT $posisi, $batas";
                        $queryJml = "SELECT * FROM tb_studio";
                        $no=$posisi +1;
                    }
                } else {
                    $query = "SELECT * FROM tb_studio LIMIT $posisi, $batas";
                    $queryJml = "SELECT * FROM tb_studio";
                    $no=$posisi + 1;
                }

                $sql_studio = mysqli_query($con, $query) or die (mysqli_error($con));
                if (mysqli_num_rows($sql_studio)> 0) {
                    while($data = mysqli_fetch_array($sql_studio)) { ?>
                        <tr>
                            <td><?=$no++?></td>
                            <td><?=$data['id_studio']?></td>
                            <td><?=$data['nama_studio']?></td>
                            <td><?=$data['harga']?></td>
                            <td class="text-center">
                                <a href="edit.php?id=<?=$data['id_studio']?>" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-edit"></i></a>
                                <a href="del.php?id=<?=$data['id_studio']?>" onclick="return confirm('Yakin data dihapus?')" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash"></i></a>
                            </td>
                        </tr>
                    <?php
                    }
                } else {
                    echo "<tr><td colspan=\"6\" align=\"center\">Data Tidak Ditemukan</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
    <?php
    if (empty ($_POST['pencarian'])) { ?>
        <div style="float:left;">
            <?php
            $jml = mysqli_num_rows(mysqli_query($con, $queryJml));
            echo "Jumlah Data : <b>$jml</b>";
            ?>
        </div>
    <?php
    } else {
        echo "<div style=\"float:left;\">";
        $jml = mysqli_num_rows(mysqli_query($con, $queryJml));
        echo "Data Hasil Pencarian : <b>$jml</b>";
        echo "</div>";
    }
    ?>
    <div style="float:right;">
        <ul class="pagination pagination-sm" style="margin:0">
            <?php
                $jml_hal = ceil ($jml / $batas);
                for ($i=1; $i <= $jml_hal; $i++) {
                    if ($i != $hal) {
                        echo "<li><a href=\"?hal=$i\">$i</a></li>";
                    } else {
                        echo "<li class=\"active\"><a>$i</a></li>";
                    }
                }
            ?>
        </ul>
    </div>
</div>



<?php include "../_footer.php"; ?>