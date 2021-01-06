<?php
// koneksi database
include '../config/config.php';
// menangkap data id yang dikirim dari form
$id = $_GET['id'];
// delete data dari database
mysqli_query($conn,"DELETE FROM admin WHERE id_admin='$id'");
// mengalihkan halaman sesuai session yg masuk/login

    echo "<script>alert('Data Berhasil Dihapus!');location='admin.php';</script>";
?>