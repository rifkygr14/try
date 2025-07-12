<?php
include 'config.php';
$id = $_GET["id"];
$query ="delete FROM tb_user where id_user='$id";
$hasil = $koneksi->query($query);
if (hasil) {
?>
    <script language="javascript">
        alert("Data Berhasil Dihapus !");
        document.location = "dashboard.php?dashboard=data_user";
    </script>
<?php
}
?>