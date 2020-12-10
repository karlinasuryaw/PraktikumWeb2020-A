<?php
	//Menggabungkan dengan file koneksi yang telah kita buat
	include 'koneksi.php';
	session_start();
	//hubungkan dengan database pada tabel mahasiswa
	$id = $_GET["id"];
	$mhs = mysqli_query($db, "SELECT * from mahasiswa where id = $id");
	$mhs = mysqli_fetch_assoc($mhs);
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />    
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <link rel="icon" href="dk.png">
	<title>Edit Data Mahasiswa</title>
	<!-- Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>
<body>
	<!-- Image and text -->
	<nav class="navbar navbar-dark bg-dark">
	  <a class="navbar-brand" href="index.php" style="color: #fff;">
	  <i class="fas fa-graduation-cap"></i>&nbsp;Sistem Informasi Mahasiswa MIPA</a>
	</nav>
	<div class="container">
		<h2 align="center" style="margin: 30px;">Edit Data Mahasiswa</h2>
		<form method="POST" action="">
			<div class="row">
				<!--di bawah ini kita inputkan setiap data yang akan diubah pada form edit-->
				<div class="col-sm-6 offset-sm-3">
                    <div class="form-group">
						<label>NIM Mahasiswa</label><br>
						<input type="text" name="nim" id="nim" class="form-control" required="true" value="<?= $mhs['nim_mahasiswa'] ?>">
					</div>
					<div class="form-group">
						<label>Nama Mahasiswa</label>
						<input type="text" name="nama" id="nama" class="form-control" value="<?= $mhs['nama_mahasiswa'] ?>" required="true">
					</div>
					<div class="form-group">
						<label>Alamat</label>
						<textarea name="alamat" id="alamat" class="form-control" required="true"><?= $mhs['alamat']; ?></textarea>
					</div>
					<div class="form-group">
						<!--untuk pemilihan prodi disni pakai select-->
						<label>Prodi</label>
						<select name="prodi" id="prodi" class="form-control" required="true">
							<?php if($mhs["prodi"] == "Kimia") : ?>
								<option value="Kimia" selected>Kimia</option>
								<option value="Fisika">Fisika</option>
								<option value="Biologi">Biologi</option>
								<option value="Matematika">Matematika</option>
								<option value="Farmasi">Farmasi</option>
								<option value="Informatika">Informatika</option>
							<?php elseif ($mhs["prodi"] == "Fisika") : ?>
								<option value="Kimia">Kimia</option>
								<option value="Fisika" selected>Fisika</option>
								<option value="Biologi">Biologi</option>
								<option value="Matematika">Matematika</option>
								<option value="Farmasi">Farmasi</option>
								<option value="Informatika">Informatika</option>
							<?php elseif ($mhs["prodi"] == "Matematika") : ?>
								<option value="Kimia">Kimia</option>
								<option value="Fisika">Fisika</option>
								<option value="Biologi">Biologi</option>
								<option value="Matematika" selected>Matematika</option>
								<option value="Farmasi">Farmasi</option>
								<option value="Informatika">Informatika</option>
							<?php elseif ($mhs["prodi"] == "Farmasi") : ?>
								<option value="Kimia">Kimia</option>
								<option value="Fisika">Fisika</option>
								<option value="Biologi">Biologi</option>
								<option value="Matematika">Matematika</option>
								<option value="Farmasi" selecter>Farmasi</option>
								<option value="Informatika">Informatika</option>
							<?php elseif ($mhs["prodi"] == "Biologi") : ?>
								<option value="Kimia">Kimia</option>
								<option value="Fisika">Fisika</option>
								<option value="Biologi" selected>Biologi</option>
								<option value="Matematika">Matematika</option>
								<option value="Farmasi">Farmasi</option>
								<option value="Informatika">Informatika</option>
							<?php elseif ($mhs["prodi"] == "Informatika") : ?>
								<option value="Kimia">Kimia</option>
								<option value="Fisika" selected>Fisika</option>
								<option value="Biologi">Biologi</option>
								<option value="Matematika">Matematika</option>
								<option value="Farmasi">Farmasi</option>
								<option value="Informatika" selected>Informatika</option>
							<?php endif;?>
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
</body>
</html>
<?php
//di bawah ini merupakan kondisi kalau kita klik simpan semua data akan disimpan juga ke database
if (isset($_POST["simpan"])) {
	$nim = htmlspecialchars($_POST["nim"]);
	$nama = htmlspecialchars($_POST["nama"]);
	$alamat = htmlspecialchars($_POST["alamat"]);
	$prodi = htmlspecialchars($_POST["prodi"]);
//disini buat update database pada tabel mahasiswa
	mysqli_query($db, "UPDATE mahasiswa SET nim_mahasiswa = '$nim', nama_mahasiswa = '$nama', alamat = '$alamat', prodi = '$prodi' where id = $id");
	//kalau sudah berhasil diedit maka ada alert
	if (mysqli_affected_rows($db) > 0){
		echo "
			<script>
				alert('data berhasil diubah');
				window.location = 'index.php';
			</script>
		";
	}else {
		echo mysqli_error();
	}
}
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