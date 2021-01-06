<?php 
// koneksi database
include '../config/config.php';
// menangkap data yang dikirim dari form
$id = $_GET['id'];
//query menyeleksi data tb_mahasiswa sesuai dg id yg didapat
mysqli_query($conn, "UPDATE jurnalis SET status='APPROVED' WHERE id_jurn='$id'");
//menangkap data dari hasil perintah query dan membentuknya ke dalam array
// mengalihkan halaman sesuai session yg masuk/login
echo "<script>alert('Berhasil Diapprove!');location='calonjurnalis.php';</script>";    
?>