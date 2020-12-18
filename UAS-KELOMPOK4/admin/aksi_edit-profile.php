<?php 
// koneksi database
include '../config/config.php';

// menangkap data yang dikirim dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$username = $_POST['username'];
$fileName = $_FILES['img-admin']['name'];
$fileSize = $_FILES['img-admin']['size'];
$fileError = $_FILES['img-admin']['error'];
if($fileSize > 0 || $fileError == 0)
{ //check if the file is corrupt or error
    $move = move_uploaded_file($_FILES['img-admin']['tmp_name'], 'C:/xampp/htdocs/pena/assets/img_admin/'.$fileName); //save image to the folder
    if($move)
    {
        mysqli_query($conn, "UPDATE admin SET nama_admin='$nama',email_admin='$email',username_admin='$username',img_admin='$fileName',location_imgadmin='img_admin/$fileName' WHERE id_admin='$id'");    
        echo "<script>alert('Berita Berhasil Diupdate!');location='logout.php';</script>";    
    }
} else if ($fileSize == 0 || $fileError == 0){
    mysqli_query($conn, "UPDATE admin SET nama_admin='$nama',email_admin='$email',username_admin='$username' WHERE id_admin='$id'");    
    echo "<script>alert('Berita Berhasil Diupdate!');location='logout.php';</script>";    
} else {
    echo "Failed to Upload : ".$fileError;
    echo "location='login.php'";    
}
?>