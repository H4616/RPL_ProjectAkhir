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
	

		<br><br>
		<center>
			<h1>P R O F I L E</h1>
		
		
		<br><br><br><br><br>
			<div class="container text-center">
					<div class="row">
						<div class="col">
						<h2>DATA DIRI</h2>

								<div class="row">
										<center>
												<table class="table " style="margin-top: 0cm;  border-radius: 5%;">
													<tr>
														<td valign="middle" align="center"> <img src="gambar/<?=$data['foto'];?>" style="width : 20%";></td>
													</tr>	
													<tr>
														<td valign="middle" align="center" margin-left: 3cm; style="color:black;"><?= $data['username']; ?></td>
													</tr>
												</table>
												<table class="table " style="width: 100%; margin-top: 0cm; background-color: #EBF1FF; border-radius: 5%;">
													<tr>
														<td style="color: #0BABC3;" valign="middle" align="left">Email </td>
														<td style="color: black;" valign="middle" align="center"><?= $data['email']; ?></td>
													</tr>
													<tr>
														<td style="color: #0BABC3;" valign="middle" align="left">No Telepon </td>
														<td style="color: black;" valign="middle" align="center"><?= $data['nohp']; ?></td>
													</tr>
													<tr>
														<td style="color: #0BABC3;" valign="middle" align="left">Alamat </td>
														<td style="color: black;" valign="middle" align="center"><?= $data['alamat']; ?></td>
													</tr>	
													<tr>
														<td style="color: #0BABC3;" valign="middle" align="left">NIK </td>
														<td style="color: black;" valign="middle" align="center"><?= $data['nik']; ?></td>
													</tr>
													<tr>
														<td style="color: #0BABC3;" valign="middle" align="left">Jenis Kelamin </td>
														<td style="color: black;" valign="middle" align="center"><?= $data['gender']; ?></td>
													</tr>	
												</table>
											<br><br><br>
										</center>
									</div>


				</div>



			<div class="col">
				<h2 >History pembelian</h2>

				<?php
					include('koneksi.php');
					$email = $_GET['email'];
					$sql	= "SELECT * FROM nota WHERE email_user='$email'";
					$query	= mysqli_query($connect, $sql);

					while ($data = mysqli_fetch_array($query)) {
				?>
								<div class="row">
									<center>
										<table class="table " style=" background-color: #EBF1FF; border-radius: 5%;">
												<tr>
													<td style="color: #0BABC3;" valign="middle" align="left">ID Nota :</td>
													<td style="color: black;" valign="middle" align="center"><?= $data['id_nota']; ?></td>
												</tr>
												<tr>
													<td style="color: #0BABC3;" valign="middle" align="left">Toko :</td>
													<td style="color: black;" valign="middle" align="center"><?= $data['nama_toko']; ?></td>
												</tr>
												<tr>
													<td style="color: #0BABC3;" valign="middle" align="left">Nama Barang</td>
													<td style="color: black;" valign="middle" align="center"><?= $data['barang']; ?></td>
												</tr>		
												<tr>
													<td style="color: #0BABC3;" valign="middle" align="left">Nama Barang :</td>
													<td style="color: black;" valign="middle" align="center"><?= $data['id_barang']; ?></td>
												</tr>
												<tr>
													<td style="color: #0BABC3;" valign="middle" align="left">Jumlah Dibeli :</td>
													<td style="color: black;" valign="middle" align="center"><?= $data['jumlah']; ?></td>
												</tr>
												<tr>
													<td style="color: #0BABC3;" valign="middle" align="left">Tanggal Pembelian :</td>
													<td style="color: black;" valign="middle" align="center"><?= $data['tanggal_pembelian']; ?></td>
												</tr>	
										</table>
									</center>
								</div>
				<?php } ?>
			</div>

					
							<div class="col">
								<h2>Jualan Yuk!</h2>
								<div class = "container" >
									<main class = "grid">
										<article>
											<a>
											
											
																<?php
																include('koneksi.php');
																	$email = $_GET['email'];
																	$query = mysqli_query($connect, "SELECT *from `user` WHERE email = '$email' ");
																	$data = mysqli_fetch_array($query);
																	
																?>
		
																				<form action="profile_proses.php" method="POST">
																						<button type="submit"><img src="gambar/logotoko.jpg" width="250px" height="200px" ></button>
																						<input name="nama_toko" type="text" value="<?=$data['nama_toko']; ?>" hidden>
																						<input name="email" type="text" value="<?=$data['email']; ?>" hidden>
																				</forom>

											</a>

										</article>
									</main>
								</div>
			
							</div>
				</div>
			</div>


		</center>
			
	</body>

</html>
