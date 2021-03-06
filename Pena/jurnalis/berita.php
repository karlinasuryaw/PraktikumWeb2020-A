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
        <div class="col-md-10 p-5 pt-2"><br>
        <h3><i class="fas fa-newspaper mr-2"></i>Daftar Berita<hr></h3>
        <!--<a href="form_tambah-berita.php" class="btn btn-primary active" role="button" aria-pressed="true" style="color:white;">Tambah Berita</a>-->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahModal">Tambah Berita</button>
              <hr class="invisible">
          <table class="table table-striped table-bordered">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col" width="250">Judul Berita</th>
                <th scope="col">Kategori</th>
                <th scope="col">Jurnalis</th>
                <th colspan="3" scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
              <!-- isitabel -->
        <?php
          $no = 1;
          $id_author=$_SESSION['id'];
          //query seleksi semua data di tb_mahasiswa
          $data = mysqli_query($conn,"SELECT * FROM berita INNER JOIN kategori ON berita.id_kategori = kategori.id_kategori 
                                      INNER JOIN jurnalis ON berita.id_jurn = jurnalis.id_jurn WHERE jurnalis.id_jurn=$id_author");
          //menangkap data dari hasil perintah query dan membentuknya ke dalam array
          while ($d = mysqli_fetch_array($data)){
          ?>
            <tr>
              <!-- tampilkan array data sebagai isi dari tabel -->
              <td><?php echo $no++; ?></td>
              <td><?php echo $d['judul_berita']; ?></td>
              <td><?php echo $d['nama_kategori']; ?></td>
              <td>
                <a href="profile.php">
                <?php echo $d['nama_jurn'];?>
                </a>
              </td>
              <td>
              <!-- tombol Opsi Edit & Hapus -->
              <!-- mengambil id data (action="GET" saat tombol Opsi diklik -->
              <a href="edit-berita.php?id=<?php echo $d['id_berita'];?>" class="btn btn-success active" role="button" aria-pressed="true" style="color:white;">Edit</a>
                <a href="detail-berita.php?id=<?php echo $d['id_berita'];?>" class="btn btn-warning active" role="button" aria-pressed="true" style="color:white;">Detail</a>
                <a href="data-hapus.php?id=<?php echo $d['id_berita'];?>" class="btn btn-danger active" role="button" aria-pressed="true">Hapus</a>
              </td>
            </tr>
          <?php
          }
        ?>
            </tbody>
          </table>
        </div>

        <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Detail Berita</h4>
                </div>
                <div class="modal-body">
                    <div class="fetched-data"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Keluar</button>
                </div>
            </div>
        </div>
    </div>
    <!-- akhir dashboard --> 

    <!-- awal untuk pop-up tambah data -->
    <div class="modal fade" id="tambahModal" tabindex="-1" role="dialog" aria-labelledby="editmodalTitle" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="editmodalTitle">Masukkan Berita</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <?php
              //menjalankan form_tambah.php
              include 'form_tambah-berita.php';
            ?>
          </div>
        </div>
      </div>
    </div>
    <!-- akhir untuk pop-up tambah data -->
    <?php include('includes/js.php');?>
  </body>
</html>