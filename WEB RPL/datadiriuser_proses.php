<?php
include 'koneksi.php';
$username   = $_POST['username'];
$email		= $_POST['email'];
$nohp	    = $_POST['nohp'];
$alamat		= $_POST['alamat'];
$gender	    = $_POST['gender'];
$nik		= $_POST['nik'];
$foto		= $_FILES['foto']['name'];
$file_tmp	= $_FILES['foto']['tmp_name'];
move_uploaded_file($file_tmp,'gambar/'.$foto);


$sql	= "INSERT INTO user VALUES('$username ','$email','$nik','$gender','$nohp','$alamat','$foto','$nama_toko', '$alamat_toko')";
$query	= mysqli_query($connect, $sql) or die(mysqli_error($connect));

if ($query) {
	header("Location:login.php?massage=selesai");
} else {
	echo "Input Data Gagal.";
}
?>


