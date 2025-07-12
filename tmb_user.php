<?php
    include 'config.php';
    $username = $_POST["username"];
    $password = md5($_POST["password"]);
    $koneksi->query("insert into tb_user(username, password)values('$username','$password')");
    header("location:dashboard.php?dashboard=data_user");
?>