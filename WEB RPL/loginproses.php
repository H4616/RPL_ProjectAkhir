<?php
session_start();
include 'koneksi.php';

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * from login where email='$email' and password='$password'";
$data = mysqli_query($connect, $sql);
$cek = mysqli_num_rows($data);

if ($cek > 0) {
    $_SESSION['email'] = $email;
    $_SESSION['status'] = "login";
    header("Location:index_utama.php?email=$email");
} else {
    header("Location:login.php?massage=gagal");
}

?>
