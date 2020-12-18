<?php 
// koneksi database
include '../config/config.php';

// menangkap data yang dikirim dari form
$kategori = $_POST['kategori'];
$judul = $_POST['judul'];
$isi = $_POST['isi'];
session_start ();
$jurnalis = $_SESSION['id'];
$fileName = $_FILES['img_berita']['name'];
$fileSize = $_FILES['img_berita']['size'];
$fileError = $_FILES['img_berita']['error'];
if($fileSize > 0 || $fileError == 0)
{ //check if the file is corrupt or error
    $move = move_uploaded_file($_FILES['img_berita']['tmp_name'], 'C:/xampp/htdocs/pena/assets/img_bt/'.$fileName); //save image to the folder
    if($move)
    {
        mysqli_query($conn, "INSERT INTO berita VALUES('','$kategori','$judul','$isi','$jurnalis','$fileName','img_bt/$fileName')");    
        echo "<script>alert('Berita Berhasil Ditambah!');location='berita.php';</script>";    
    }
} else 
{
    echo "Failed to Upload : ".$fileError;
    echo "location='login.php'";    
}
?>




