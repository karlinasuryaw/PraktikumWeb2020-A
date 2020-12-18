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
                    <h5 class="card-title text-capitalize">Jumlah Admin</h5>
                     <div class="display-4">
                      <b>
                        <?php 
                          $sqladmin = "SELECT id_admin FROM admin";
                          $queryadmin = mysqli_query($conn, $sqladmin);
                          $admin=mysqli_num_rows($queryadmin);
												?>
                        <?php echo ($admin);?>
                      </b>
                     </div>
                     <a href="admin.php"><p class="card-text text-white text-capitalize">lihat detail<i class="fas fa-angle-double-right ml-2"></i></p></a>
                  </div>
                </div> 
                <div class="card bg-success ml-4" style="width: 18rem;">
                  <div class="card-body">
                    <h5 class="card-title text-white text-capitalize">Jumlah Jurnalis</h5>
                     <div class="display-4 text-white">
                      <b>
                        <?php 
                          $sqljurn = "SELECT id_jurn FROM jurnalis WHERE status='APPROVED'";
                          $queryjurn = mysqli_query($conn, $sqljurn);
                          $jurnalis=mysqli_num_rows($queryjurn);
												?>
                        <?php echo ($jurnalis);?>
                      </b>
                    </div>
                     <a href="jurnalis.php"><p class="card-text text-white text-capitalize">lihat detail<i class="fas fa-angle-double-right ml-2"></i></p></a>
                  </div>
                </div>
                <div class="card bg-warning ml-4" style="width: 18rem;">
                  <div class="card-body">
                    <h5 class="card-title text-white text-capitalize">Jumlah Calon Jurnalis</h5>
                     <div class="display-4 text-white">
                      <b>
                        <?php 
                          $sqlcl_jurn = "SELECT id_jurn FROM jurnalis WHERE status='NOT APPROVED'";
                          $querycl_jurn = mysqli_query($conn, $sqlcl_jurn);
                          $cl_jurnalis=mysqli_num_rows($querycl_jurn);
												?>
                        <?php echo ($cl_jurnalis);?>
                      </b>
                    </div>
                     <a href="calonjurnalis.php"><p class="card-text text-white text-capitalize">lihat detail<i class="fas fa-angle-double-right ml-2"></i></p></a>
                  </div>
                </div>
            </div>
            <br> <!-- part 2 --> 
            <div class="row text-white">
                <div class="card bg-danger" style="width: 18rem;">
                  <div class="card-body">
                    <h5 class="card-title text-capitalize">Berita Kesehatan</h5>
                     <div class="display-4">
                      <b>
                        <?php 
                          $sqlbr_kes = "SELECT * FROM berita where id_kategori=1";
                          $querybr_kes = mysqli_query($conn, $sqlbr_kes);
                          $kesehatan=mysqli_num_rows($querybr_kes);
												?>
                        <?php echo ($kesehatan);?>
                      </b>
                     </div>
                     <a href="berita.php"><p class="card-text text-white text-capitalize">lihat detail<i class="fas fa-angle-double-right ml-2"></i></p></a>
                  </div>
                </div> 
                <div class="card bg-dark ml-4" style="width: 18rem;">
                  <div class="card-body">
                    <h5 class="card-title text-white text-capitalize">Berita Ekonomi</h5>
                     <div class="display-4 text-white">
                      <b>
                        <?php 
                          $sqlbr_eko = "SELECT * FROM berita where id_kategori=2";
                          $querybr_eko = mysqli_query($conn, $sqlbr_eko);
                          $ekonomi=mysqli_num_rows($querybr_eko);
												?>
                        <?php echo ($ekonomi);?>
                      </b>
                    </div>
                     <a href="berita.php"><p class="card-text text-white text-capitalize">lihat detail<i class="fas fa-angle-double-right ml-2"></i></p></a>
                  </div>
                </div>
                <div class="card bg-primary ml-4" style="width: 18rem;">
                  <div class="card-body">
                    <h5 class="card-title text-white text-capitalize">Berita Vaksin</h5>
                     <div class="display-4 text-white">
                      <b>
                        <?php 
                          $sqlbr_vak = "SELECT * FROM berita where id_kategori=3";
                          $querybr_vak = mysqli_query($conn, $sqlbr_vak);
                          $vaksin=mysqli_num_rows($querybr_vak);
												?>
                        <?php echo ($vaksin);?>
                      </b>
                    </div>
                     <a href="berita.php"><p class="card-text text-white text-capitalize">lihat detail<i class="fas fa-angle-double-right ml-2"></i></p></a>
                  </div>
                </div>
            </div>
        </div>
    </div>
    <!-- akhir dashboard -->
    <?php include('includes/js.php');?>
  </body>
</html>