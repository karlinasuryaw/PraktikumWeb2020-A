<?php 
//mengaktifkan session pada php
session_start();

//koneksi database
include 'config/config.php';

// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = $_POST['password'];

// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($conn,"SELECT * FROM jurnalis WHERE username_jurn='$username' and password_jurn='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

// cek apakah username dan password di temukan pada database
if($cek > 0){

	$data = mysqli_fetch_assoc($login);

	if($data['status']=="APPROVED") 
		{
			// buat session login dan username
			$_SESSION['username'] = $username;
			$_SESSION['location'] = $data['location_imgjurn'];
			$_SESSION['location_ft'] = $data['location_fotojurn'];
			$_SESSION['id'] = $data['id_jurn'];
			// alihkan ke halaman jurnalis
			header("location:jurnalis/dashboard.php");
			
		} else
		{
			echo "<script>alert('Akun Anda Belum Di Approve!');location='login.php';</script>";
		}
}else {
	header("location:login.php?pesan=gagal");
}
?>