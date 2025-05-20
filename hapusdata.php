<?php
include "connect.php";
if (isset($_GET['kodebuku'])){
    $kode_buku=$_GET['kodebuku'];
    $hapus="DELETE FROM buku WHERE kodebuku='$kode_buku'";
    $qhapus=mysqli_query($koneksi,$hapus);
    if($qhapus){
        header("location:media.php?page=databuku");
    }else{
        echo "Data gagal dihapus!";
    }
}
?>