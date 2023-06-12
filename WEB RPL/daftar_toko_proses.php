<?php
include 'koneksi.php';
// if(isset($_POST['namatoko']) && ! empty($_POST['email'])){

$email		= $_POST['email'];
$alamat_toko	= $_POST['lokasi'];
$nama_toko      = $_POST['toko'];

$sql	= "UPDATE user SET nama_toko ='$nama_toko', alamat_toko ='$alamat_toko ' WHERE  email ='$email'";
$query	= mysqli_query($connect, $sql);

	if ($query) {
		header("location:saler.php?email=$email");
	} else {
		echo "Update Data Gagal.";
	}
// } else {
// 	echo "something is wrong";
// }
?>
