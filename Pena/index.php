<!doctype html>
<html lang="en">
  <head>
  <?php include('includes/head.php'); ?>
    <title>Berita - Pena</title>
  </head>
  <body>
    <?php include('includes/navbar.php'); ?>
    <?php include('config/config.php'); ?>
      <!-- Portfolio berita-->
    <section class="page-section" id="portfolio">
        <div class="container p-4">
            <div class="text-center portfolio1">
                <h1 class="section-headtext-uppercase">Berita<br><br></h2>
            </div>
            <div class="row">
                <?php
                $data = mysqli_query($conn,"SELECT * FROM berita INNER JOIN kategori ON berita.id_kategori = kategori.id_kategori 
                                        INNER JOIN jurnalis ON berita.id_jurn = jurnalis.id_jurn ORDER BY berita.id_berita");
            //menangkap data dari hasil perintah query dan membentuknya ke dalam array
                while ($d = mysqli_fetch_array($data)){
                    ?>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="portfolio-item">
                        <a class="portfolio-link" href="singlepageberita.php?id=<?php echo $d['id_berita'];?>" target="_blank">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fa fa-plus fa-3x"></i></div>
                                </div>
                            <img class="img-fluid" src="assets/<?php echo $d['location_imgberita']; ?>" alt="" />
                        </a>
                        <div class="portfolio-caption">
                        <div class="portfolio-caption-heading"><?php echo $d['judul_berita']; ?></div>
                        <div class="portfolio-caption-subheading text-muted"><p>Oleh <?php echo $d['nama_jurn'];?></p></div>
                        <div class="portfolio-caption-subheading">
                            <a href="singlepageberita.php?id=<?php echo $d['id_berita'];?>" target="_blank">Selengkapnya<i class="fas fa-angle-double-right ml-2"></i></a>
                        </div>
                    </div>
                    </div>
                </div>
                <?php
                }
                ?>
            </div>
        </div>

<!-- pagnation -->
    <div class="container p-4">
        <nav aria-label="Page navigation example">
          <ul class="pagination justify-content-center">
            <li class="page-item disabled">
              <a class="page-link" href="#" tabindex="-1">Previous</a>
            </li>
            <li class="page-item active"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
              <a class="page-link" href="#">Next</a>
            </li>
          </ul>
        </nav>
    </div>    
    </section>
<!-- pagnation -->
<?php include('includes/footer.php'); ?>
<?php include('includes/js.php'); ?>
  </body>
</html>