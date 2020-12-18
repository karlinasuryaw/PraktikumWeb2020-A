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
        <h3><i class="fas fa-key mr-2"></i>Ganti Password<hr></h3>
      <?php
      //koneksi database
      //menangkap id saat tombol Opsi Edit diklik
      $id = $_SESSION['id'];
      //query menyeleksi data tb_mahasiswa sesuai dg id yg didapat
      $data = mysqli_query($conn,"SELECT * FROM jurnalis WHERE id_jurn=$id");
      //menangkap data dari hasil perintah query dan membentuknya ke dalam array
      while ($d = mysqli_fetch_array($data)){
      ?>
      <form method="post" action="aksi_ganti-password.php">
        <table>
        <!-- data yg ditangkap, kemudian ditampilkan sebagai data non-editable pada form -->
            <tr>
                <td>
                  <input type="hidden" name="id" value="<?php echo $d['id_jurn']; ?>">
                  <label class="col-sm-2 col-form-label">Password Lama</label>
                </td>
                <td>
                    <div class="col-sm-10">
                        <textarea readonly class="form-control-plaintext" style="resize:none;" cols="50" rows="1" name="email"><?php echo $d['password_jurn']; ?></textarea>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                  <label class="col-sm-2 col-form-label">Password Baru</label>
                </td>
                <td>
                    <div class="col-sm-10">
                    <input type="text" name="password">
                    </div>
                </td>
            </tr>
            
        </table>
        <!-- tombol Hapus -->
        <div class="col-sm-10">  
          <br>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
      </form>
      <?php } ?>  
    </div>
    
    <?php include('includes/js.php');?>  </body>
</html>