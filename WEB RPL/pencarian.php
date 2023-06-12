<?php
include 'koneksi.php';

if(isset($_GET['cari'])){
    $pencarian = $_GET['cari'];
    $query = "SELECT*FROM index WHERE nama LINKE '%".$pencarian."%' OR nama_toko LIKE '%".$pencarian."%' OR kategori LIKE '%".$pencarian."%'" ;
}



if ($query) {
	header("Location:pengaturanakun.php?email=$email");
} else {
	echo "Input Data Gagal.";
}
?>