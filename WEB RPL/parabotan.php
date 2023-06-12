<?php
session_start();
if (empty($_SESSION['email'])) {
	header("Location:login.php?massage=belum_login");
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Warung Online</title>
	<link rel="stylesheet" href="indekcss.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    
</head>


  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

	
	<?php
	
		include('koneksi.php');
		$email = $_GET['email'];
		$query = mysqli_query($connect, "SELECT * from user WHERE email = '$email' ");
		$data = mysqli_fetch_array($query);
	?>

	
<nav class="navbar navbar-expand-lg p-3 mb-2 bg-success text-white">
  <div class="container-fluid">
		<a class="navbar-brand" href="index_utama.php?email=<?=$data['email']; ?>">
			<h1>HOME</h1>
		</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
		<div class="collapse navbar-collapse" id="navbarScroll">
			<ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
				<li class="nav-item">
					<a class="nav-link active" aria-current="page" href="">Calon Gmaps</a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
						Category
					</a>
					<ul class="dropdown-menu">
						<li><a class="dropdown-item" href="makanan.php?email=<?=$data['email']; ?>">Makanan</a></li>
						<li><a class="dropdown-item" href="pakaian.php?email=<?=$data['email']; ?>">Pakian</a></li>
						<li><a class="dropdown-item" href="kerajinan.php?email=<?=$data['email']; ?>">Kerajinan</a></li>
						<li><a class="dropdown-item" href="elektronik.php?email=<?=$data['email']; ?>">Elektronik</a></li>
						<li><a class="dropdown-item" href="kendaraan.php?email=<?=$data['email']; ?>">Kendaraan</a></li>
						<li><a class="dropdown-item" href="parabotan.php?email=<?=$data['email']; ?>">Parabotan</a></li>
					</ul>
				</li>
				<li class="nav-item p-1 mb-2 bg-danger text-white " >
					<a class="nav-link" href="login.php"><h7>Login</h7> </a>
				</li>
			</ul>
			<form class="d-flex" role="search">
				<input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"  >
				<button class="p-2 mb-2 bg-primary text-white" type="submit" >Search</button>
			</form>
			

		</div>
  </div>
  
</nav>

		<nav class="navbar">
		<div class="container-fluid ">
			<button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>
			<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
			<div class="offcanvas-header p-3 mb-2 bg-success text-white">
				<img src="gambar/<?=$data['foto'];?>" style="width : 30%">
				<h5 class="offcanvas-title" id="offcanvasNavbarLabel"> <?=$data['username']; ?> </h5>				
				<button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
			</div>
			<div class="offcanvas-body">
				<ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
				<li class="nav-item">
					<form method="POST" action="profile.php">
						<a class="nav-link active" aria-current="page" type="submit" href="profile.php?email=<?=$data['email']; ?>">Profil</a>
					</form>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="pengaturanakun.php?email=<?=$data['email']; ?>">Pengaturan Akun</a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
					Dropdown
					</a>
					<ul class="dropdown-menu">
					<li><a class="dropdown-item" href="#">Action</a></li>
					<li><a class="dropdown-item" href="#">Another action</a></li>
					<li>
						<hr class="dropdown-divider">
					</li>
					<li><a class="dropdown-item" href="logout.php">Keluar Akun</a></li>
					</ul>
				</li>
				</ul>
			</div>
			</div>
		</div>
		</nav>
		<br><br><br>
		<center>
			<h1>Lengkapi Parabotanmu</h1>
		</center>
		<br>
		<?php
						
						include('koneksi.php');

						$email = $_GET['email'];
						$query = mysqli_query($connect, "SELECT * from user WHERE email = '$email' ");
						$data = mysqli_fetch_array($query);

						$query = mysqli_query($connect,"SELECT * FROM `index` WHERE kategori='Parabotan'");
						while ($item = mysqli_fetch_array($query)) {
						
					?>
				<div class="container text-center">
					<div class="row">
						<div class="col">
							<table class="table table-light"  style=" background-color: #EBF1FF; border-radius: 5%; ">
								<tr>
									<td>								
										<img src="gambar/<?=$item['foto']; ?>" width="300px" height="150px">
									</td>
								</tr>
							</table>
						</div>
						<div class="col">
							<br>
							<table class="table table-light"  style=" background-color: #EBF1FF; border-radius: 5%; ">
								<tr>
									<td>Nama :</td>
									<td><?=$item['nama']; ?></td>
								</tr>
								<tr>
									<td>Harga :</td>
									<td>Rp<?=$item['harga']; ?></td>
								</tr>
								<tr>
									<td>Toko :</td>
									<td><?=$item['nama_toko']; ?></td>
								</tr>
							</table>
						</div>
						<div class="col">
							<br><br><br>
							<a href="kasir.php?id_barang=<?=$item['id_barang'];?>&email=<?=$data['email'];?>"> <button  class="btn btn-primary" style="margin-right: 5cm;"> Beli Sekarang</button></a>	
							
								
						</div>
					</div>
				</div>		



				<?php }?>


	</body>
</html>
