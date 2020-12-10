<?php
//konek database
require_once 'koneksi.php';
session_start();
//disini buat ngecek user yg diinputkan sudah sesuai dengan database atau belum
if (isset($_POST['submit'])) {
    //cek username & passwordnya
    $username = $_POST['username'];
    $password = $_POST['password'];
    //cek ke database dari tabel users
    $sql = "SELECT * FROM users WHERE user = '$username'";
    $hasil = $db->query($sql)->fetch_assoc();
    if ($hasil) {
        //kalau hasilnya atau username & password sudah sesuai bawa ke halaman index
        if (strcmp($password, $hasil['password']) == 0) {
            $_SESSION['role'] = $hasil['role'];
            $_SESSION['username'] = $hasil['user'];
            header('Location: index.php');
        }
        //kalau tidak sesuai munculin pesan eror
    } else {
        $pesanerror = "Data anda tidak terdapat di database";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/fef9209b86.js" crossorigin="anonymous"></script>
    <!-- AOS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <!-- CSS -->
    <link rel="stylesheet" href="dashboard.css">
    <!-- Type JS -->
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.11"></script>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
    <div class="container" style="margin-top: 90px;">
        <!--buat card di halaman loginnya-->
        <div class="card shadow w-50 mx-auto">
            <div class="card-header text-center">
                <h3>Login</h3>
                <!--di bawah ini ada kondisi kalau pesan eror atau loginnya gagal bakal muncul pesan eror-->
                <?php if (isset($pesanerror)) : ?>
                    <div class="alert alert-danger">
                        <?= $pesanerror ?>
                    </div>
                <?php endif ?>
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <div class="form-group mb-3">
                        <!--user bisa inputin usernamenya disini-->
                        <label for="">Username</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="username" name="username" required>
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <!--user bisa inputin passwordnya disni-->
                        <label for="">Password</label>
                        <div class="input-group">
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                    </div>
                    <hr>
                    <!--button submit buat masuk ke halaman utama sistem-->
                    <button class="btn btn-dark btn-block" type="submit" name="submit">Log In</button>
                </form>
            </div>
        </div>
    </div>
    <br>
    <div class="text-center">© <?php echo date('Y'); ?> Design by Karlina Surya Witanto</div>
</body>
</html>
<?php
// kondisi kalau sudah login, tendang ke index
if (isset($_SESSION["username"])){
    echo "
        <script>
            alert('Anda sudah login, log out dulu kalau mau keluar');
            window.location = 'index.php';
        </script>
    ";
}
?>