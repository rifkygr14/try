<?php
    $koneksi = new mysqli("localhost", "root", "", "db_kampus");
    if($koneksi->connect_error){
        trigger_error('koneksi ke database gagal ' . $koneksi->connect_error, E_USER_ERROR)
    }
?>