<?php
//Menggabungkan dengan file koneksi yang telah kita buat
	session_start();
	include 'koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />    
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <link rel="icon" href="dk.png">
	<title>Tambah Data Mahasiswa</title>
	<!-- Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>
<body>
	<!-- Image and text -->
	<nav class="navbar navbar-dark bg-dark">
	  <a class="navbar-brand" href="index.php" style="color: #fff;"><i class="fas fa-graduation-cap"></i>&nbsp;Sistem Informasi Mahasiswa MIPA</a>
	</nav>
	<div class="container">
		<h2 align="center" style="margin: 30px;">Tambah Data Mahasiswa</h2>
		<form method="POST" action="tambah_data_action.php">
			<div class="row">
				<div class="col-sm-6 offset-sm-3">
					<!--di bawah ini bisa isiin setiap data yang akan ditambahkan ke data mahasiswa-->
                    <div class="form-group">
						<label>NIM Mahasiswa</label><br>
						<input type="text" name="nim" id="nim_mahasiswa" class="form-control" required="true">
					</div>
					<div class="form-group">
						<label>Nama Mahasiswa</label>
						<input type="text" name="nama" id="nama_mahasiswa" class="form-control" required="true">
					</div>
					<div class="form-group">
						<label>Alamat</label>
						<textarea name="alamat" id="alamat" class="form-control" required="true"></textarea>
					</div>
					<div class="form-group">
						<label>Prodi</label>
						<select name="prodi" id="prodi" class="form-control" required="true">
							<option value=""></option>
							<option value="Kimia">Kimia</option>
                            <option value="Fisika">Fisika</option>
                            <option value="Biologi">Biologi</option>
                            <option value="Matematika">Matematika</option>
                            <option value="Farmasi">Farmasi</option>
							<option value="Informatika">Informatika</option>
						</select>
					</div>
					<div class="form-group">
						<button type="submit" name="simpan" id="simpan" class="btn btn-dark">
							<i class="fa fa-save"></i> Simpan
						</button>
					</div>
				</div>
			</div>
		</form>
    </div>
    <div class="text-center">© <?php echo date('Y'); ?> Design by Karlina Surya Witanto</div>
    <!-- JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
</body>
</html>
<?php
// kalau belum login, tendang ke login.php
if (!isset($_SESSION["username"])){
    echo "
        <script>
            alert('anda belum login');
            window.location = 'login.php';
        </script>
    ";
}
?>
