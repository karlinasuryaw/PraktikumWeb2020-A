<!doctype html>
<html lang="en">
  <head>
    <?php include('includes/head.php');?>
  </head>
  <body>
  <?php include('includes/header.php');?>
  <?php include('includes/leftbar.php');?>
  <?php include('../config/config.php');?>
      <!-- dashboard -->
        <div class="col-md-10 p-5 pt-2">
        <br>
        <h3><i class="fas fa-camera-retro mr-2"></i>Daftar Jurnalis<hr></h3>
          <table class="table table-striped table-bordered">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Email</th>
                <th scope="col">Status</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
               <!-- isitabel -->
        <?php
          $no = 1;
          //query seleksi semua data di tb_mahasiswa
          $data = mysqli_query($conn,"SELECT * FROM jurnalis WHERE status='APPROVED'");
          //menangkap data dari hasil perintah query dan membentuknya ke dalam array
          while ($d = mysqli_fetch_array($data)){
          ?>
            <tr>
              <!-- tampilkan array data sebagai isi dari tabel -->
              <td><?php echo $no++; ?></td>
              <td><?php echo $d['nama_jurn']; ?></td>
              <td><?php echo $d['email_jurn']; ?></td>
              <td><?php echo $d['status']; ?></td>
              <td>
              <!-- tombol Opsi Edit & Hapus -->
              <!-- mengambil id data (action="GET" saat tombol Opsi diklik -->
              <a href="detail-jurnalis.php?id=<?php echo $d['id_jurn'];?>" class="btn btn-warning text-white active" role="button" aria-pressed="true">Detail</a>
              </td>
            </tr>
          <?php
          }
        ?>
            </tbody>
          </table>
        </div>
    <!-- akhir dashboard -->
    <?php include('includes/js.php');?>
  </body>
</html>