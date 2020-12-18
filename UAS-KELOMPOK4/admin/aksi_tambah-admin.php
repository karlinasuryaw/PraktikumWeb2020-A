<?php 
// koneksi database
include '../config/config.php';
// menangkap data yang dikirim dari form
$nama = $_POST['nama'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];
$role = $_POST['role'];
$fileName = $_FILES['img-admin']['name'];
$fileSize = $_FILES['img-admin']['size'];
$fileError = $_FILES['img-admin']['error'];
if($fileSize > 0 || $fileError == 0)
{ //check if the file is corrupt or error
    $move = move_uploaded_file($_FILES['img-admin']['tmp_name'], 'C:/xampp/htdocs/pena/assets/img_admin/'.$fileName); //save image to the folder
    if($move)
    {
        mysqli_query($conn, "INSERT INTO admin VALUES('','$nama','$email','$username','$password','$role','$fileName','img_admin/$fileName')");    
        echo "<script>alert('Admin Berhasil Ditambah!');location='admin.php';</script>";    
    }
} else 
{
    echo "Failed to Upload : ".$fileError;
    echo "location='admin.php'";    
}
?>




