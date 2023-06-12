<?php
include 'koneksi.php';

$id_nota	    = $_POST['id_nota'];
$id_barang	    = $_POST['id_barang'];
$harga		    = $_POST['harga'];
$nama           = $_POST['nama'];
$email_user     = $_POST['email_user'];
$email_saler    = $_POST['email_saler'];
$nohp_user	    = $_POST['nohpUser'];
$nohp_saler	    = $_POST['nohpSaler'];
$toko	        = $_POST['nama_toko'];
$jumlah         = $_POST['jml'];
$tanggal        = $_POST['tanggal'];

$sql	= "INSERT INTO nota VALUES('$id_nota','$toko','$nama','$email_user','$email_saler','$id_barang','$jumlah','$tanggal', '$nohp_saler','$nohp_user','$harga')";
$query	= mysqli_query($connect, $sql) or die(mysqli_error($connect));

if ($query) {
	header("Location: https://api.whatsapp.com/send?phone=$nohp_saler&text=Ada Pesanan nihh, Pesanan=$nama, Jumlah$jumlah, Kuyy Tanggepin &source=&data=");
} else {
	echo "Input Data Gagal.";
}



?>


