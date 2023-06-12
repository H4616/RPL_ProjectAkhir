<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Warung Online</title>  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link href="style.css" rel="stylesheet" type="text/css"> 
</head>


  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    
                  <?php
                    if (isset($_GET['massage'])) {
                        if ($_GET['massage'] == "gagal") {
                            echo "Login Gagal";
                        } 
                        elseif ($_GET['massage'] == "logout") {
                            echo "Berhasil logout";
                        } 
                        elseif ($_GET['massage'] == "belum_login") {
                            echo "Belum login";
                        }
                        elseif ($_GET['massage'] == "selesai") {
                            echo "Berhasil mendaftar";
                        }
                    }
                  ?>



    <div class="global-container">
        
        <div class="card login-form">
            <div class="card-body">
                <div class="text-center">
                    <img src="gambar/icon.png" class="rounded" alt="..." width="25%">
                </div>
                <h1 class="card-title text-center">WARUNG ONLINE</h1>
                <h2 class="card-title text-center">L O G I N </h1>

            </div>
            <div class="card-text">
                <form action="loginproses.php" method="POST">
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Email address</label>
                      <input type="email" class="form-control" name="email" placeholder="Email" aria-describedby="emailHelp">
                      <div id="emailHelp" class="text-success" >We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control">
                    </div>
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                    <div class="text-center">
                        <p class="text-primary">Belum Punya akun?<a href="tambahloginmember.php"> Daftar </a> </p>
                    </div>
                    
                  </form>
            </div>
        </div>

    </div>

</body>
</html>