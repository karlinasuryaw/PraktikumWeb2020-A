<!doctype html>
<html lang="en">
  <head>
  <?php include('includes/head.php');?>
  </head>
  <body>
    <!-- form tambah data, dg data inputan yg akan diproses oleh aksi_tambah.php -->
    <form action="aksi_tambah-admin.php" method="post" enctype="multipart/form-data">
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" name="nama">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
            <input type="email" class="form-control" name="email">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Username</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" name="username">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-10">
            <input type="password" class="form-control" name="password">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Role</label>
            <div class="col-sm-10">
            <input type="radio" name="role" value="SUPER"> SUPER<br>
            <input type="radio" name="role" value="ADMIN"> ADMIN<br>
            </div>
        </div>
        <div class="form-row row">
            <label class="col-sm-2 col-form-label">Foto</label>
            <div class="col-sm-10">
                <input type="file" name="img-admin" accept="image/x-png,image/gif,image/jpeg" required>
            </div>
        </div>
        <div class="modal-footer">
          <!-- tombol aksi untuk Simpan -->
          <button type="submit" class="btn btn-success">Simpan</button>
        </div>
    </form>
    <?php include('includes/js.php');?>
  </body>
</html>