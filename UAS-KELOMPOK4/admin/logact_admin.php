<?php 
//mengaktifkan session pada php
session_start();

//koneksi database
include '../config/config.php';

// menangkap data yang dikirim dari form login
if (isset($_POST['masuk']))
{
	$username = $_POST['username'];
	$password = $_POST['password'];
}
// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($conn,"SELECT * FROM admin WHERE username_admin='$username' and password_admin='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

// cek apakah username dan password di temukan pada database
if($cek > 0){

	$data = mysqli_fetch_assoc($login);

	// cek jika user login sebagai admin
	if($data['role']=="SUPER"){

		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['id'] = $data['id_admin'];
		$_SESSION['location'] = $data['location_imgadmin'];
		$_SESSION['role'] = "SUPER";
		// alihkan ke halaman admin
		header("location:dashboard.php");

	// cek jika user login sebagai pegawai
	}else if($data['role']=="ADMIN"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['id'] = $data['id_admin'];
		$_SESSION['location'] = $data['location_imgadmin'];
		$_SESSION['role'] = "ADMIN";
		// alihkan ke halaman pegawai
		header("location:dashboard.php");
	}else {
		// alihkan ke halaman login kembali
		header("location:index.php?pesan=gagal");
	}	
}else {
	header("location:index.php?pesan=gagal");
}
?>