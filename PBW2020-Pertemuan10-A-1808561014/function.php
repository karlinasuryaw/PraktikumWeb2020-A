<?php
//session supaya data tidak berubah atau ttp tersimpan walaupun kita pindah page
session_start();
// jika belum ada session, atur jumlah data = 0 di session
if (!isset($_SESSION["jmldata"])) {
    $_SESSION["jmldata"] = 0;
}

?>

<?php
        //kalo pilih tombol submit masih ada elemen yg belum diisi, maka keluar allert buat ngisi
        if (isset($_POST["submit"])) {
            if (empty($_POST["nim"])) {
                echo 'NIM nya wajib isi';
            } else {
                //kalo misal semua elemennya udh terisi, data yg diinputkan dgn tag post itu dibawa ke session
                $n = $_SESSION["jmldata"];
                $_SESSION["nim$n"] = $_POST["nim"];
                $_SESSION["nama$n"] = $_POST["nama"];
                $_SESSION["ntugas$n"] = $_POST["ntugas"];
                $_SESSION["nuts$n"] = $_POST["nuts"];
                $_SESSION["nuas$n"] = $_POST["nuas"];
                $_SESSION["jmldata"] += 1;
            }
        }
?>


<!DOCTYPE html>
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
                <a class="navbar-brand" href="function.php"><i class="fas fa-graduation-cap"></i>&nbsp;Nilai Mahasiswa</a>
            </div>
        </nav>
        <!-- End Navbar -->
        <!-- Start Jumbotron -->   
        <div class="jumbotron jumbotron-fluid bg-dark">
            <div class="container" data-aos="fade-up" data-aos-duration="2000">
                <div>
                <!-- kalo session dari jumlah data udh lebih dari nol, di bawah ini kita tampilin semua inputan yg udah dimasukan -->
                <?php if ($_SESSION["jmldata"] > 0) : ?>
                    <table class="table table-bordered table-dark mt-5">
                        <thead>
                            <tr>
                                <th>NIM</th>
                                <th>Nama</th>
                                <th>Nilai Tugas</th>
                                <th>Nilai UTS</th>
                                <th>Nilai UAS</th>
                                <th>Jumlah Nilai</th>
                                <th>Rata-Rata</th>
                            </tr>
                        </thead>
                        <tbody>
                        <!--nah disini ada perulangan buat nampilkan semua data yg udh masuk di session-->
                            <?php for ($i = 0; $i < $_SESSION["jmldata"]; $i++) : ?>
                                <tr>
                                    <th> <?= $_SESSION["nim$i"]; ?></th>
                                    <th> <?= $_SESSION["nama$i"]; ?></th>
                                    <th> <?= $_SESSION["ntugas$i"]; ?></th>
                                    <th> <?= $_SESSION["nuts$i"]; ?></th>
                                    <th> <?= $_SESSION["nuas$i"]; ?></th>
                                    <th> <?= $_SESSION["ntugas$i"] + $_SESSION["nuts$i"] + $_SESSION["nuas$i"]; ?></th>
                                    <th> <?= ($_SESSION["ntugas$i"] + $_SESSION["nuts$i"] + $_SESSION["nuas$i"]) / 3; ?></th>
                                </tr>
                            <?php endfor; ?>
                        </tbody>
                    </table>
                <?php endif; ?>
                </div>
                <div>
                    <!--kalo mau kembali atau input lagi bisa pake button di bawak ini-->
                    <a href="index.php" class="btn btn-warning" role="button">Kembali</a>
                    <a href="index.php" class="btn btn-warning" role="button">Input Lagi</a>
                </div>
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