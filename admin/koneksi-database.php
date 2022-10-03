<?php
    $namaserver = "localhost";
    $username = "root";
    $password = "";
    $namadb = "dbpmbupj";

    // Membuat Koneksi
    $koneksi = mysqli_connect($namaserver, $username, $password, $dbpmbupj);

    //Check Koneksi
    if (!$koneksi){
        die("Gagal Melakukan Koneksi Ke Database. ".mysqli_connect_error());
    }
?>