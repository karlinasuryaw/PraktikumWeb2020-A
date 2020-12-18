<?php 
// koneksi database
include '../config/config.php';

// menangkap data yang dikirim dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$username = $_POST['username'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$birth = $_POST['tg_lahir'];
$bio = $_POST['bio'];
$fileName = $_FILES['img-jurn']['name'];
$fileSize = $_FILES['img-jurn']['size'];
$fileError = $_FILES['img-jurn']['error'];
if($fileSize > 0 || $fileError == 0)
{ //check if the file is corrupt or error
    $move = move_uploaded_file($_FILES['img-jurn']['tmp_name'], 'C:/xampp/htdocs/pena/assets/img_jurnalis/profile/'.$fileName); //save image to the folder
    if($move)
    {
        mysqli_query($conn, "UPDATE jurnalis SET nama_jurn='$nama',email_jurn='$email',username_jurn='$username',phone_jurn='$phone',birth_jurn='$birth',skill_jurn='$bio',foto_jurn='$fileName',location_fotojurn='profile/$fileName' WHERE id_jurn='$id'");    
        echo "<script>alert('Berita Berhasil Diupdate!');location='logout.php';</script>";    
    }
} else if ($fileSize == 0 || $fileError == 0)
{
    mysqli_query($conn, "UPDATE jurnalis SET nama_jurn='$nama',email_jurn='$email',username_jurn='$username',phone_jurn='$phone',birth_jurn='$birth',skill_jurn='$bio' WHERE id_jurn='$id'");    
    echo "<script>alert('Berita Berhasil Diupdate!');location='logout.php';</script>";    
} else 
{
    echo "Failed to Upload : ".$fileError;
    echo "location='login.php'";    
}
?>