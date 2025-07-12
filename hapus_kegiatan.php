<?php
    include 'config.php';
    $id = $_GET["id"];
    $hapus_kegiatan = mysqli_fetch_array($koneksi->query("select foto from tb_kegiatan where id_kegiatan ='$id' "));
    if ($hapus_kegiatan['foto']!=''){
        $query="delete FROM tb_kegiatan where id_kegiatan='$id'";
        $hasil=$koneksi->query($query);
        unlink("../foto_kegiatan/$hapus_kegiatan[foto]");
        ?>
        <script language="javascript">
            alert("Data Berhasil Dihapus !");
            document.location="dashboard.php?dashboard=data_kegiatan";
            </script>
        <?php
    }
    else {
        $query="delete FROM tb_kegiatan where id_kegiatan='$id'";
        $hasil=$koneksi->query($query);
        if (hasil) {
            ?>
                <script language="javascript">
                    alert("Data Berhasil Dihapus !");
                    document.location="dashboard.php?dashboard=data_kegiatan";
                </script>
            <?php
        }
    }
?>