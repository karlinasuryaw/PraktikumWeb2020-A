<?php
    //buat koneksi ke database
    include 'koneksi.php';
    session_start();

    //klo user masuk index sebelum login maka index = login
    if (!isset($_SESSION['username']))
        header('Location: login.php');
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi Mahasiswa MIPA</title>
    <!-- Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- Datatable -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
</head>
<body>
    <!-- JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- DataTable -->
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {
        $('#example').DataTable();
    } );
    </script>
    <!-- navbar gelap (hitam)-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="index.php"><i class="fas fa-graduation-cap"></i>&nbsp;Sistem Informasi Mahasiswa MIPA</a>
            <span class="navbar">
                <a href="tambah_data.php" class="btn btn-outline-success mr-1">+Tambah Data</a> <!--buat tambah data mengarah ke halaman tambah data-->
                <a href="logout.php" class="btn btn-outline-danger">Logout</a> <!--logout mengarah ke logout-->
            </span>  
        </div>
    </nav>
    <!-- navbar -->
    <p><h1><center>Selamat Datang <?= $_SESSION['username'] ?></center></h1></p>
    <!--buat tabel untuk data mahasiswanya-->
    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <td>No</td>
                <td>NIM Mahasiswa</td>
                <td>Nama Mahasiswa</td>
                <td>Alamat</td>
                <td>Prodi</td>
                <td>Action</td>
            </tr>
        </thead>
        <tbody>
            <!--ambil data di database mahasiswa-->
            <?php if (mysqli_num_rows(mysqli_query($db,"SELECT * from mahasiswa")) > 0) : ?>
            <?php
                //start numberingnya nmr 1
                $no = 1;
                $query = "SELECT * FROM mahasiswa ORDER BY nim_mahasiswa ASC"; //query data dari nim
                $mhs = mysqli_query($db,$query);
                foreach ($mhs as $data) : //bawa data mhs jadi ke data
            ?>
                <tr>
                    <!--cetak tiap data yang udah ditambahin ke tabel data-->
                    <td><?= $no++ ?></td> 
                    <td><?= $data["nim_mahasiswa"]; ?></td> 
                    <td><?= $data["nama_mahasiswa"]; ?></td>
                    <td><?= $data["alamat"]; ?></td>
                    <td><?= $data["prodi"] ?></td>
                    <td>
                        <a href="edit_data.php?id=<?= $data['id'] ?>"> <!--kalo klik button edit mengarah ke hlm edit-->
                            <button class="btn btn-success btn-sm"> <i class="fa fa-edit"></i> Edit </button>
                        </a>
                        <?php if ($_SESSION['role'] == 1) : ?> <!--ini role buat admin dimana admin bisa hapus data, klo bukan admin gabisa hapus data-->
                        <a href="hapus_data.php?id=<?= $data['id'] ?>"> <!--data yang dihapus berdasarkan id di database-->
                            <button class="btn btn-danger btn-sm"> <i class="fa fa-trash"></i> Hapus </button>
                        </a>
                        <?php endif; ?>
                    </td>
                </tr>
            <?php endforeach; ?> 
                <?php else : ?>
                <tr>
                    <td colspan='6'>Tidak ada data ditemukan</td>
                </tr>
                <?php endif; ?>
        </tbody>
    </table>           
    <div class="text-center">© <?php echo date('Y'); ?> Design by Karlina Surya Witanto</div>
</body>
</html>