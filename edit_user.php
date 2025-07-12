<?php
    include 'config.php';
    $id =$_POST["id_user"];
    if (isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $hasil =$koneksi->query("update tb_user set ussername='$username', password='$password' where id_user=$id");
    if ($hasil){
        ?>
        <script language="Javascript">
            alert("Data User Berhasil Diupdate");
            window.location="dashboard.php?dashboard=data_user";
        </script>
        <?php
        }
    }
?>