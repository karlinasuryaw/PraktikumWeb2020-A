<?php
// koneksi database
include '../config/config.php';
// menangkap data id yang dikirim dari form
$id = $_GET['id'];
// delete data dari database
mysqli_query($conn,"DELETE FROM berita WHERE id_berita='$id'");
// mengalihkan halaman sesuai session yg masuk/login

    echo "<script>alert('Data Berhasil Dihapus!');location='berita.php';</script>";
?>