<!doctype html>
<html lang="en">
  <head>
    <?php include('includes/head.php');?> 
  </head>
  <body>
  <?php include('includes/header.php');?>
  <?php include('includes/leftbar.php');?>
  <?php 
    include('../config/config.php');
  ?>
      <!-- dashboard -->
        <div class="col-md-10 p-5 pt-2">
        <br>
        <h3><i class="fas fa-tachometer-alt mr-2"></i>Dashboard<hr></h3>
            <div class="row text-white">
                <div class="card bg-info" style="width: 18rem;">
                  <div class="card-body">
                    <h5 class="card-title text-capitalize">Berita Kesehatan</h5>
                     <div class="display-4">
                      <b>
                        <?php 
                          $id_author=$_SESSION['id'];
                          $sqlkesehatan = "SELECT * FROM berita INNER JOIN kategori ON berita.id_kategori = kategori.id_kategori 
                          INNER JOIN jurnalis ON berita.id_jurn = jurnalis.id_jurn WHERE jurnalis.id_jurn=$id_author AND kategori.nama_kategori='Kesehatan'";
                          $querykesehatan = mysqli_query($conn, $sqlkesehatan);
                          $kesehatan=mysqli_num_rows($querykesehatan);
												?>
                        <?php echo ($kesehatan);?>
                      </b>
                     </div>
                     <a href="berita.php"><p class="card-text text-white text-capitalize">lihat detail<i class="fas fa-angle-double-right ml-2"></i></p></a>
                  </div>
                </div> 
                <div class="card bg-success ml-4" style="width: 18rem;">
                  <div class="card-body">
                    <h5 class="card-title text-white text-capitalize">Berita Ekonomi</h5>
                     <div class="display-4 text-white">
                      <b>
                        <?php 
                          $id_author=$_SESSION['id'];
                          $sqlekonomi = "SELECT * FROM berita INNER JOIN kategori ON berita.id_kategori = kategori.id_kategori 
                          INNER JOIN jurnalis ON berita.id_jurn = jurnalis.id_jurn WHERE jurnalis.id_jurn=$id_author AND kategori.nama_kategori='Ekonomi'";
                          $queryekonomi = mysqli_query($conn, $sqlekonomi);
                          $ekonomi=mysqli_num_rows($queryekonomi);
												?>
                        <?php echo ($ekonomi);?>
                      </b>
                    </div>
                     <a href="berita.php"><p class="card-text text-white text-capitalize">lihat detail<i class="fas fa-angle-double-right ml-2"></i></p></a>
                  </div>
                </div>
                <div class="card bg-warning ml-4" style="width: 18rem;">
                  <div class="card-body">
                    <h5 class="card-title text-white text-capitalize">Berita Vaksin</h5>
                     <div class="display-4 text-white">
                      <b>
                        <?php 
                         $id_author=$_SESSION['id'];
                         $sqlvaksin = "SELECT * FROM berita INNER JOIN kategori ON berita.id_kategori = kategori.id_kategori 
                         INNER JOIN jurnalis ON berita.id_jurn = jurnalis.id_jurn WHERE jurnalis.id_jurn=$id_author AND kategori.nama_kategori='Vaksin'";
                         $queryvaksin = mysqli_query($conn, $sqlvaksin);
                         $vaksin=mysqli_num_rows($queryvaksin);
												?>
                        <?php echo ($vaksin);?>
                      </b>
                    </div>
                     <a href="berita.php"><p class="card-text text-white text-capitalize">lihat detail<i class="fas fa-angle-double-right ml-2"></i></p></a>
                  </div>
                </div>
            </div>
    </div>
    <!-- akhir dashboard -->
    <?php include('includes/js.php');?>
  </body>
</html>