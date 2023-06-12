<?php
include 'koneksi.php';
$email_user		= $_GET['email'];
$username   = $_POST['username'];
$email		= $_POST['email'];
$nohp	    = $_POST['nohp'];
$alamat		= $_POST['alamat'];
$gender	    = $_POST['gender'];
$nik		= $_POST['nik'];
$nama_toko	= $_POST['nama_toko'];
$alamat_toko= $_POST['alamat_toko'];
$file_tmp	= $_FILES['gambar']['tmp_name'];
$foto		= $_FILES['gambar']['name'];
move_uploaded_file($file_tmp,'gambar/'.$foto);

$sql	= "UPDATE user SET  username='$username', email='$email', nik='$nik', gender='$gender', nohp='$nohp', alamat='$alamat', foto='$foto' , nama_toko ='$nama_toko', alamat_toko ='$alamat_toko ' WHERE  email ='$email_user'";
$query	= mysqli_query($connect, $sql) or die(mysqli_error($connect));


if ($query) {
	header("Location:pengaturanakun.php?email=$email");
} else {
	echo "Input Data Gagal.";
}
?>
			<!-- ganti email bagian login -->
				<?php
					include 'koneksi.php';
					$email_user		= $_GET['email'];
					$username   = $_POST['username'];
					$email		= $_POST['email'];
					$password = $_POST['password'];

					$sql	= "UPDATE `login` SET  email='$email', password='$password'  WHERE  email ='$email_user'";
					$query	= mysqli_query($connect, $sql) or die(mysqli_error($connect));


					if ($query) {
						header("Location:pengaturanakun.php?email=$email");
						} else {
								echo "Input Data Gagal.";
								}
				?>


<!-- ganti data di index/barang -->
<?php
include 'koneksi.php';
$email_user		= $_GET['email'];
$email		= $_POST['email'];
$nohp	    = $_POST['nohp'];

$sql	= "UPDATE `index` SET  email_saler='$email', nohp='$nohp' WHERE  email_saler='$email_user'";
$query	= mysqli_query($connect, $sql) or die(mysqli_error($connect));


if ($query) {
	header("Location:pengaturanakun.php?email=$email");
} else {
	echo "Input Data Gagal.";
}
?>