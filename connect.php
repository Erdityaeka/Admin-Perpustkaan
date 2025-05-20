<?php 
$host = "localhost";
$namadb = "";
$userdb = "root";
$passworddb = "";

// Koneksi ke database
$koneksi = mysqli_connect($host, $userdb, $passworddb, $namadb);

if (!$koneksi) {
    echo "Koneksi tidak berhasil";
} 
?>