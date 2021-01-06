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
        <h3><i class="fas fa-user-cog mr-2"></i>Profile<hr></h3>
      <?php
      //koneksi database
      //menangkap id saat tombol Opsi Edit diklik
      $id = $_SESSION['id'];
      //query menyeleksi data tb_mahasiswa sesuai dg id yg didapat
      $data = mysqli_query($conn,"SELECT * FROM jurnalis WHERE id_jurn=$id");
      //menangkap data dari hasil perintah query dan membentuknya ke dalam array
      while ($d = mysqli_fetch_array($data)){
      ?>
       <form method="post" action="aksi_edit-profile.php" enctype="multipart/form-data">
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
                    <label class="col-sm-2 col-form-label">Foto Baru</label>
                </td>
                <td>
                  <div class="col-sm-10">  
                    <input type="file" name="img-jurn" accept="image/x-png,image/gif,image/jpeg">
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
                        <input type="text" name="nama" value="<?php echo $d['nama_jurn']; ?>">
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                  <label class="col-sm-2 col-form-label">Username</label>
                </td>
                <td>
                    <div class="col-sm-10">
                        <input type="text" name="username" value="<?php echo $d['username_jurn']; ?>">
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                  <label class="col-sm-2 col-form-label">Email</label>
                </td>
                <td>
                    <div class="col-sm-10">
                        <textarea style="resize:none;" cols="50" rows="1" name="email"><?php echo $d['email_jurn']; ?></textarea>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                  <label class="col-sm-2 col-form-label">No. HP</label>
                </td>
                <td>
                    <div class="col-sm-10">
                        <input type="text" name="phone" value="<?php echo $d['phone_jurn']; ?>">
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                  <label class="col-sm-2 col-form-label">Tanggal Lahir</label>
                </td>
                <td>
                    <div class="col-sm-10">
                        <input type="date" name="tg_lahir" value="<?php echo $d['birth_jurn']; ?>">
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                  <label class="col-sm-2 col-form-label">Biografi & Skill</label>
                </td>
                <td>
                    <div class="col-sm-10">
                        <textarea style="resize:none;" cols="100" rows="5" name="bio"><?php echo $d['skill_jurn']; ?></textarea>
                    </div>
                </td>
            </tr>            
        </table>
        <!-- tombol Hapus -->
        <div class="col-sm-10">
            <br>
            <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="profile.php" class="btn btn-success active" role="button" aria-pressed="true">Kembali</a>
        </div>
      </form>
      <?php } ?>  
    </div>
    
    <?php include('includes/js.php');?>  </body>
</html>