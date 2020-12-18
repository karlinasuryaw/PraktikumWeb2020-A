<!doctype html>
<html lang="en">
  <head>
  <?php include('includes/head.php');?>
  </head>
  <body>
    <!-- form tambah data, dg data inputan yg akan diproses oleh aksi_tambah.php -->
    <form action="aksi_tambah-berita.php" method="post" enctype="multipart/form-data">
        <div class="form-group row"> 
            <label class="col-sm-2 col-form-label">Jurnalis</label>
            <div class="col-sm-10">
            <input readonly class="form-control-plaintext" type="text" class="form-control" name=jurnalis value="<?php echo $_SESSION['username'];?>">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Judul</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" name="judul">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Isi</label>
            <div class="col-sm-10">
                <textarea cols="45" rows="10" name="isi"></textarea>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Kategori</label>
            <div class="col-sm-10">
            <input type="radio" name="kategori" value="1"> Kesehatan<br>
            <input type="radio" name="kategori" value="2"> Ekonomi<br>
            <input type="radio" name="kategori" value="3"> Vaksin<br>
            </div>
        </div>
        <div class="form-row row">
            <label class="col-sm-2 col-form-label">Gambar</label>
            <div class="col-sm-10">
                <input type="file" name="img_berita" accept="image/x-png,image/gif,image/jpeg" required>
            </div>
        </div>
        <div class="modal-footer">
          <!-- tombol aksi untuk Simpan -->
          <button type="submit" name="simpan" class="btn btn-success">Simpan</button>
        </div>
    </form>
    <?php include('includes/js.php');?>
  </body>
</html>