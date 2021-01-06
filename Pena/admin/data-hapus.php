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
        <h3><i class="fas fa-users-cog mr-2"></i>Detail Admin<hr></h3>
      <?php
      //koneksi database
      //menangkap id saat tombol Opsi Edit diklik
      $id = $_GET['id'];
      //query menyeleksi data tb_mahasiswa sesuai dg id yg didapat
      $data = mysqli_query($conn,"SELECT * FROM admin WHERE id_admin='$id'");
      //menangkap data dari hasil perintah query dan membentuknya ke dalam array
      while ($d = mysqli_fetch_array($data)){
      ?>
      <form method="get" action="hapus-admin.php">
        <table>
        <!-- data yg ditangkap, kemudian ditampilkan sebagai data non-editable pada form -->
            <tr>
                <td>
                  <label class="col-sm-2 col-form-label">Nama</label>
                </td>
                <td>
                  <div class="col-sm-10">
                    <input type="hidden" name="id" value="<?php echo $d['id_admin']; ?>">
                    <input type="text" readonly class="form-control-plaintext" name="nim" value="<?php echo $d['nama_admin']; ?>">
                  </div>
                </td>
            </tr>
            <tr>
                <td>
                  <label class="col-sm-2 col-form-label">Email</label>
                </td>
                <td>
                  <div class="col-sm-10">
                    <textarea style="resize:none;" readonly class="form-control-plaintext" cols="50" rows="1"><?php echo $d['email_admin']; ?></textarea>
                  </div>
                </td>
            </tr>
            <tr>
                <td>
                  <label class="col-sm-2 col-form-label">Username</label>
                </td>
                <td>
                  <div class="col-sm-10">
                    <input type="text" readonly class="form-control-plaintext" name="alamat" value="<?php echo $d['username_admin']; ?>">
                  </div>
                  </td>
            </tr>
            <tr>
                <td>
                  <label class="col-sm-2 col-form-label">Role</label>
                </td>
                <td>
                  <div class="col-sm-10">
                    <input type="text" readonly class="form-control-plaintext" name="alamat" value="<?php echo $d['role']; ?>">
                  </div>
                </td>
            </tr>
        </table>
        <!-- tombol Hapus -->
        <div class="col-sm-10">
          <br>
          <button type="submit" class="btn btn-danger">Hapus</button>
          <a href="admin.php" class="btn btn-success active" role="button" aria-pressed="true">Kembali</a>
        </div>
      </form>
      <?php } ?>  
    </div>
    <?php include('includes/js.php');?>
  </body>
</html>