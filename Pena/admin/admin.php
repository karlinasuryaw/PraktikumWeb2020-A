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
        <h3><i class="fas fa-users-cog mr-2"></i>Daftar Admin<hr></h3>
        <?php 
          if ($_SESSION['role']=="SUPER")
          {
              ?>
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahModal">Tambah Admin</button>
              <hr class="invisible">
              <?php
          }
        ?>

          <table class="table table-striped table-bordered">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Email</th>
                <th scope="col">Username</th>
                <th scope="col">Role</th>
                <th colspan="3" scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
              <!-- isitabel -->
        <?php
          $no = 1;
          //query seleksi semua data di tb_mahasiswa
          $data = mysqli_query($conn,"select * from admin");
          //menangkap data dari hasil perintah query dan membentuknya ke dalam array
          while ($d = mysqli_fetch_array($data)){
          ?>
            <tr>
              <!-- tampilkan array data sebagai isi dari tabel -->
              <td><?php echo $no++; ?></td>
              <td><?php echo $d['email_admin']; ?></td>
              <td><?php echo $d['username_admin']; ?></td>
              <td><?php echo $d['role']; ?></td>
              <td>
              <!-- tombol Opsi Edit & Hapus -->
              <!-- mengambil id data (action="GET" saat tombol Opsi diklik -->
                <a href="detail-admin.php?id=<?php echo $d['id_admin'];?>" class="btn btn-warning active" role="button" aria-pressed="true" style="color:white;">Detail</a>
                <?php 
                  if ($_SESSION['role']=="SUPER")
                  {
                      ?>
                        <a href="data-hapus.php?id=<?php echo $d['id_admin'];?>" class="btn btn-danger active" role="button" aria-pressed="true">Hapus</a>
                      <?php
                  }
                ?>
              </td>
            </tr>
          <?php
          }
        ?>
            </tbody>
          </table>
        </div>
    <!-- akhir dashboard -->

    <!-- awal untuk pop-up tambah data -->
    <div class="modal fade" id="tambahModal" tabindex="-1" role="dialog" aria-labelledby="editmodalTitle" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="editmodalTitle">Masukkan Data Admin</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <?php
              //menjalankan form_tambah.php
              include 'form_tambah-admin.php';
            ?>
          </div>
        </div>
      </div>
    </div>
    <!-- akhir untuk pop-up tambah data -->
    <?php include('includes/js.php');?>
  </body>
</html>