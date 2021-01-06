<?php 
// koneksi database 
include 'config/config.php';
// menangkap data yang dikirim dari form
$nama = $_POST['fullname'];
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$birthday = $_POST['birthday'];
$biography = $_POST['biography'];
$fileName = $_FILES['iden_jurn']['name'];
$fileSize = $_FILES['iden_jurn']['size'];
$fileError = $_FILES['foto_jurn']['error'];
$fileName1 = $_FILES['foto_jurn']['name'];
$fileSize1 = $_FILES['foto_jurn']['size'];
$fileError1 = $_FILES['foto_jurn']['error'];
$status = "NOT APPROVED";
if(($fileSize || $fileSize1 > 0)||($fileError || $fileError1 == 0))
{ //check if the file is corrupt or error
    $move = move_uploaded_file($_FILES['iden_jurn']['tmp_name'], 'C:/xampp/htdocs/pena/assets/img_jurnalis/'.$fileName); //save image to the folder
    if($move)
    {   
        $move1 = move_uploaded_file($_FILES['foto_jurn']['tmp_name'], 'C:/xampp/htdocs/pena/assets/img_jurnalis/profile/'.$fileName1); //save image to the folder
        if ($move1)
        {
            mysqli_query($conn, "INSERT INTO jurnalis VALUES('','$nama','$username','$password','$email','$phone','$birthday','$biography','$fileName','img_jurnalis/$fileName','$status','$fileName1','profile/$fileName1')");    
            echo "<script>alert('Data Berhasil Ditambah!');location='login.php';</script>";    
        }
    }
} else 
{
    echo "Failed to Upload : ".$fileError;
    echo "location='login.php'";    
}
?>




