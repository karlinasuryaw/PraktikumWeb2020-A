<?php 
// koneksi database
include '../config/config.php';

// menangkap data yang dikirim dari form
$id = $_POST['id'];
$password = $_POST['password'];

mysqli_query($conn, "UPDATE admin SET password_admin='$password' WHERE id_admin='$id'");    
echo "<script>alert('Password Berhasil Diupdate!');location='logout.php';</script>";    
?>