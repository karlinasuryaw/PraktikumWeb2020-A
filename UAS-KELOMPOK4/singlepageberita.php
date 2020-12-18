<!doctype html>
<html lang="en">
  <head>
  <?php include('includes/head.php');?>
    <title>SinglePage - Pena</title>
  </head>
  <body>
  <?php include('includes/navbar.php');?>
  <?php include('config/config.php');?>
  <main role="main" class="container">
    <?php
    $id = $_GET['id'];
    //query menyeleksi data tb_mahasiswa sesuai dg id yg didapat
    $data = mysqli_query($conn,"SELECT * FROM berita INNER JOIN kategori ON berita.id_kategori = kategori.id_kategori 
    INNER JOIN jurnalis ON berita.id_jurn = jurnalis.id_jurn WHERE id_berita='$id'");
    while ($d = mysqli_fetch_array($data)){
    ?>
    <div class="row">
      <div class="col-md-8 blog-main">
        <div class="blog-post">
          <h2 class="blog-post-title"><?php echo $d['judul_berita']; ?></h2>
          <div class="container">
            <img src="assets/<?php echo $d['location_imgberita']; ?>" alt="" width="700px">
          </div>
          <p class="blog-post-meta">Oleh <a href="#"><?php echo $d['nama_jurn']; ?></a></p>
          <hr>
          <p style="text-align:left"><?php echo $d['isi_berita']; ?></p>
        </div><!-- /.blog-post -->
      </div><!-- /.blog-main -->

      <aside class="col-md-4 blog-sidebar">
        <div class="p-4 mb-4">
          <h4 class="font">Tentang Penulis</h4><br>
          <p class="mb-0"><img src="assets/img_jurnalis/<?php echo $d['location_fotojurn']; ?>" alt="" width="150px"></p><br>
          <p class="mb-0"><?php echo $d['nama_jurn']; ?></p>
          <p class="mb-0"><?php echo $d['email_jurn']; ?></p>
        </div>

        <div class="p-4">
          <h4 class="font">Kategori Berita</h4>
          <ol class="list-unstyled mb-0">
            <li><a href="beritakesehatan.php" target="blank">Bidang Kesehatan</a></li>
            <li><a href="beritaekonomi.php" target="blank">Bidang Ekonomi</a></li>
            <li><a href="beritavaksin.php" target="blank">Bidang Vaksin</a></li>
          </ol>
        </div>
      </aside><!-- /.blog-sidebar -->
    </div><!-- /.row -->
    <?php } ?>
  </main><!-- /.container -->

  <?php include('includes/footer.php');?>
  <?php include('includes/js.php');?>
</body>
</html>
