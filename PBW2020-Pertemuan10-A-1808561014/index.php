<?php
//session supaya data tidak berubah atau ttp tersimpan walaupun kita pindah page
session_start();
// jika belum ada session, atur jumlah data = 0 di session
if (!isset($_SESSION["jmldata"])) {
    $_SESSION["jmldata"] = 0;
}
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/fef9209b86.js" crossorigin="anonymous"></script>
    <!-- AOS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <title>Nilai Mahasiswa</title>
    <style>
        .navbar-brand {
            font-size: 30px;
        }
    </style>
</head>
<body>
    <!-- Start Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-transparent border-bottom" data-aos="fade-right" data-aos-duration="2000">
        <div class="container">
            <a class="navbar-brand" href="index.php"><i class="fas fa-graduation-cap"></i>&nbsp;Submit Nilai Mahasiswa</a>
        </div>
    </nav>
    <!-- End Navbar -->
    <!-- Start Jumbotron -->
    <div class="jumbotron jumbotron-fluid bg-dark">
        <div class="container" data-aos="fade-down" data-aos-duration="2000">
            <form class=" form-inline  d-flex justify-content-center" action="function.php" method="post">
                <input type="hidden" value="<?= $data++ ?>" name="data">
                <input class="form-control mb-2 rounded" style="width: 80% !important;" type="text" name="nama" placeholder="NAMA" required>
                <input class="form-control mb-2 rounded" style="width: 80% !important;" type="text" name="nim" placeholder="NIM" required>
                <input class="form-control mr-2 rounded" style="width: 20% !important;" type="text" name="ntugas" placeholder="NILAI TUGAS" required>
                <input class="form-control mr-2 rounded" style="width: 20% !important;" type="text" name="nuts" placeholder="NILAI UTS" required>
                <input class="form-control mr-2 rounded" style="width: 20% !important;" type="text" name="nuas" placeholder="NILAI UAS" required>                
                <button class="btn btn-warning rounded" style="width: 18% !important;" name="submit" type="submit">Submit</button>
                </form>
            </div>
        </div>
    <!-- End Jumbotron -->
    <!-- JavaScript -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <p>Written with 💕 by Karlina Surya Witanto</p>
    <p>&copy;2020 and beyond</p>
</body>
</html>