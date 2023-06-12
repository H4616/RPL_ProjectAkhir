<?php
include 'koneksi.php';

$id_barang	= $_POST['id'];
$nama		= $_POST['nama'];
$harga		= $_POST['harga'];
$kategori	= $_POST['kategori'];
$email      = $_POST['email'];
$nohp	    = $_POST['nohp'];
$alamat 	= $_POST['alamat'];
$toko	= $_POST['toko'];
$foto		= $_FILES['foto']['name'];
$file_tmp	= $_FILES['foto']['tmp_name'];
move_uploaded_file($file_tmp,'gambar/'.$foto);



$sql	= "INSERT INTO `index` VALUES ('$id_barang', '$nama', '$kategori', '$harga', '$email', '$nohp', '$foto', '$alamat' , '$toko')";
$query	= mysqli_query($connect, $sql) or die(mysqli_error($connect));

if ($query) {
	header("location:saler.php?email=$email");
} else {
	echo "Input Data Gagal.";
}
?>