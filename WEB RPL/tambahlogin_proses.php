<?php
include 'koneksi.php';


$email	= $_POST['email'];
$password	= $_POST['password'];


$sql	= "INSERT INTO login VALUES('$email','$password')";
$query	= mysqli_query($connect, $sql) or die(mysqli_error($connect));

if ($query) {
	header("Location:datadiriuser.php?email=$email");
	
} else {
	echo "Input Data Gagal.";
}
?>