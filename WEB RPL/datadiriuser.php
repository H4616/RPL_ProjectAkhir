<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <style>
        body {
            background-image: url('gambar/bgtambahmember.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }

        td {
            border: 1px;
            border-radius: 10px;
        }
    </style>
</head>

<body>

    <?php
		include('koneksi.php');
		$email = $_GET['email'];
        $query = mysqli_query($connect, "SELECT * from login Where email='$email' ");
        $data = mysqli_fetch_array($query);
	?>



    <center>
        <br><br><br><br>
        <table class="table table-light" style="width: 30%; margin-left: 17cm;">
            <tr>
                <td style="text-align: center;">
                    <br>
                    <h1 style="text-shadow: 1px 1px #ffffff">Data Member</h1>

                    <br><br>
                    <form enctype="multipart/form-data" action="datadiriuser_proses.php" method="post">
                        <input type="text" name="email" value="<?= $data['email']; ?>"  hidden>
                        <br>
                        <input class="btn btn-outline-dark mb-4" style="width: 80%;" type="txt" name="username" placeholder="Username">
                        <br>
                        <input class="btn btn-outline-dark mb-4" style="width: 80%;" type="int" name="nohp" value="62">
                        <br>
                        <input class="btn btn-outline-dark mb-4" style="width: 80%;" type="text" name="alamat" placeholder="Alamat">
                        <br>
                        <input class="btn btn-outline-dark mb-4" style="width: 80%;" type="text" name="nik" placeholder="NIK">
                        <br>
                        <input class="btn btn-outline-dark mb-4" style="width: 80%;" type="text" name="gender" placeholder="Jenis Kelamin">
                        <br>
                        <p>Foto Profile</p>
                        <input class="btn btn-outline-dark mb-4" style="width: 80%;" type="file" name="foto">
                        <br>
                        <button style="width: 28%;" type="submit" class="btn btn-primary">Tambahkan</button> 
                    </form>
                    <br>
                </td>

            </tr>
        </table>
    </center>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>