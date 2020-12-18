<!doctype html>
<html lang="en">
  <head>
    <?php include('includes/head.php');?>
  </head>
  <body>
  <?php include('includes/header.php');?>
  <?php include('includes/leftbar.php');?>
  <?php include('../config/config.php');?>
  <div class="col-md-10 p-5 pt-2">
        <br>
        <h3><i class="fas fa-address-card mr-2"></i>Detail Calon Jurnalis<hr></h3>
      <?php
      //koneksi database
      //menangkap id saat tombol Opsi Edit diklik
      $id = $_GET['id'];
      //query menyeleksi data tb_mahasiswa sesuai dg id yg didapat
      $data = mysqli_query($conn,"SELECT * FROM jurnalis WHERE id_jurn='$id'");
      //menangkap data dari hasil perintah query dan membentuknya ke dalam array
      while ($d = mysqli_fetch_array($data)){
      ?>
      <form method="get" action="">
        <table>
        <!-- data yg ditangkap, kemudian ditampilkan sebagai data non-editable pada form -->
              <tr>
                <td>
                  <label class="col-sm-2 col-form-label">Foto</label>
                </td>
                <td>
                  <div class="col-sm-10">
                    <?php 
                      if ($d['location_fotojurn']==NULL)
                      {
                        echo "File Belum Diuplod";
                      } else
                      {
                        ?>
                        <img src="../assets/img_jurnalis/<?php echo $d['location_fotojurn']; ?>" width="250px"/>
                        <?php
                      }
                    ?>
                  </div>
                </td>
              </tr>
            <tr>
                <td>
                  <label class="col-sm-2 col-form-label">Nama</label>
                </td>
                <td>
                  <div class="col-sm-10">
                    <input type="hidden" name="id" value="<?php echo $d['id_jurn']; ?>">
                    <input type="text" readonly class="form-control-plaintext" name="nim" value="<?php echo $d['nama_jurn']; ?>">
                  </div>
                </td>
            </tr>
            <tr>
                <td>
                  <label class="col-sm-2 col-form-label">Email</label>
                </td>
                <td>
                  <div class="col-sm-10">
                    <input type="text" readonly class="form-control-plaintext" name="nama" value="<?php echo $d['email_jurn']; ?>">
                  </div>
                </td>
            </tr>
            <tr>
                <td>
                  <label class="col-sm-2 col-form-label">Username</label>
                </td>
                <td>
                  <div class="col-sm-10">
                    <input type="text" readonly class="form-control-plaintext" name="alamat" value="<?php echo $d['username_jurn']; ?>">
                  </div>
                </td>
            </tr>
            <tr>
                <td>
                  <label class="col-sm-2 col-form-label">Identity</label>
                </td>
                <td>
                  <div class="col-sm-10">
                    <?php 
                      if ($d['location_imgjurn']==NULL)
                      {
                        echo "File Belum Diuplod";
                      } else
                      {
                        ?>
                        <img src="../assets/<?php echo $d['location_imgjurn']; ?>" width="250px"/>
                        <?php
                      }
                    ?>
                  </div>
                </td>
            </tr>
        </table>
        <!-- tombol Hapus -->
        <div class="col-sm-10">
            <br>
        <a href="calonjurnalis.php" class="btn btn-success active " role="button" aria-pressed="true">Kembali</a>
        </div>
      </form>
      <?php } ?>  
    </div>
    <?php include('includes/js.php');?>
  </body>
</html>