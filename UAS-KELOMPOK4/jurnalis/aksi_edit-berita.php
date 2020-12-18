<?php 
// koneksi database
include '../config/config.php';

// menangkap data yang dikirim dari form
$id = $_POST['id'];
$kategori = $_POST['kategori'];
$judul = $_POST['judul'];
$isi = $_POST['isi'];
session_start ();
$fileName = $_FILES['img_berita']['name'];
$fileSize = $_FILES['img_berita']['size'];
$fileError = $_FILES['img_berita']['error'];
if($fileSize > 0 || $fileError == 0)
{ //check if the file is corrupt or error
    $move = move_uploaded_file($_FILES['img_berita']['tmp_name'], 'C:/xampp/htdocs/pena/assets/img_bt/'.$fileName); //save image to the folder
    if($move)
    {
        mysqli_query($conn, "UPDATE berita SET judul_berita='$judul',isi_berita='$isi',id_kategori='$kategori',img_berita='$fileName',location_imgberita='img_bt/$fileName' WHERE id_berita='$id'");    
        echo "<script>alert('Berita Berhasil Diupdate!');location='berita.php';</script>";    
    }
} else if ($fileSize == 0 || $fileError == 0)
{
    mysqli_query($conn, "UPDATE berita SET judul_berita='$judul',isi_berita='$isi',id_kategori='$kategori' WHERE id_berita='$id'");    
    echo "<script>alert('Berita Berhasil Diupdate!');location='berita.php';</script>";    
} else 
{
    echo "Failed to Upload : ".$fileError;
    echo "location='login.php'";    
}
?>