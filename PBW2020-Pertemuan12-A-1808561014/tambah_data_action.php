<?php
include 'koneksi.php';
session_start();
// kalau belum login, tendang ke login.php
if (!isset($_SESSION["username"])){
    echo "
        <script>
            alert('anda belum login');
            window.location = 'login.php';
        </script>
    ";
}
//disini klo klik simpan maka semua data yang sudah dimasukkan dalam form tambah data akan disimpan ke database
if (isset($_POST['simpan'])) {
    $nim = htmlspecialchars($_POST['nim']);
	$nama = htmlspecialchars($_POST['nama']);
	$alamat = htmlspecialchars($_POST['alamat']);
	$prodi = htmlspecialchars($_POST['prodi']);
//membawa value value diatas ke tabel mahasiswa pada database
    mysqli_query($db,"INSERT into mahasiswa VALUES ('','$nim','$nama','$alamat','$prodi')");
    if (mysqli_affected_rows($db) > 0) {
    	echo "<script>alert('Data Berhasil Disimpan');location='index.php';</script>";
    } else {
    	echo mysqli_error($db);
    }
}
?>