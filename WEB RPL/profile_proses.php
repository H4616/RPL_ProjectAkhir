
<?php
 $email      = $_POST['email'];
    if (isset($_POST['nama_toko'])){
 
     	if (empty($_POST['nama_toko'])){
			header("Location:daftar_toko.php?email=$email");
        } else{
			header("Location:saler.php?email=$email");
			  }
 
     }
 
?>
