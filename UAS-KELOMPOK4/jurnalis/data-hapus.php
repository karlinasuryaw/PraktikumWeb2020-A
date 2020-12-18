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
        <h3><i class="fas fa-camera-retro mr-2"></i>Hapus Berita<hr></h3>
      <?php
      //koneksi database
      //menangkap id saat tombol Opsi Edit diklik
      $id = $_GET['id'];
      //query menyeleksi data tb_mahasiswa sesuai dg id yg didapat
      $data = mysqli_query($conn,"SELECT * FROM berita INNER JOIN kategori ON berita.id_kategori = kategori.id_kategori 
      INNER JOIN jurnalis ON berita.id_jurn = jurnalis.id_jurn WHERE id_berita='$id'");
      //menangkap data dari hasil perintah query dan membentuknya ke dalam array
      while ($d = mysqli_fetch_array($data)){
      ?>
      <form method="get" action="hapus-berita.php">
        <table>
        <!-- data yg ditangkap, kemudian ditampilkan sebagai data non-editable pada form -->
            <tr>
                <td>
                  <label class="col-sm-2 col-form-label">Jurnalis</label>
                </td>
                <td>
                  <div class="col-sm-10">
                    <input type="text" readonly class="form-control-plaintext" value="<?php echo $d['nama_jurn']; ?>">
                  </div>
                </td>
            </tr>
            <tr>
                <td>
                  <label class="col-sm-2 col-form-label">Judul</label>
                </td>
                <td>
                  <div class="col-sm-10">
                    <input type="hidden" name="id" value="<?php echo $d['id_berita']; ?>">
                    <input type="text" readonly class="form-control-plaintext" value="<?php echo $d['judul_berita']; ?>">
                  </div>
                </td>
            </tr>
            <tr>
                <td>
                  <label class="col-sm-2 col-form-label">Kategori</label>
                </td>
                <td>
                  <div class="col-sm-10">
                    <input type="text" readonly class="form-control-plaintext" value="<?php echo $d['nama_kategori']; ?>">
                  </div>
                </td>
            </tr>
            <tr>
                <td>
                  <label class="col-sm-2 col-form-label">Isi</label>
                </td>
                <td>
                  <div class="col-sm-10">  
                      <textarea style="resize:none;" readonly class="form-control-plaintext" cols="100" rows="10"><?php echo $d['isi_berita']; ?></textarea>
                  </div>
                </td>
            </tr>
            <tr>
                <td>
                  <label class="col-sm-2 col-form-label">Gambar</label>
                </td>
                <td>
                  <div class="col-sm-10">
                      <?php 
                        if ($d['location_imgberita']==NULL)
                        {
                          echo "Tidak Ada Gambar!";
                        } else
                        {
                          ?>
                          <img src="../assets/<?php echo $d['location_imgberita']; ?>" width="250px"/>
                          <?php
                        }
                      ?>
                  </div>
                </td>
            </tr>
        </table>
        <!-- tombol Hapus -->
        <button type="submit" class="btn btn-danger">Hapus</button>
        <a href="berita.php" class="btn btn-success active" role="button" aria-pressed="true">Kembali</a>
      </form>
      <?php } ?>  
    </div>
    <?php include('includes/js.php');?>
  </body>
</html>