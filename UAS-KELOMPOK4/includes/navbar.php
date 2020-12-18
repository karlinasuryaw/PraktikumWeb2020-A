 <!--navbar -->
 <nav class="navbar navbar-expand-lg navbar-light fixed-top ">
        <div class="container">
          <a class="navbar-brand" href="#">Pena</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ml-auto">
            <a class="nav-link active" href="beranda.php">Beranda <span class="sr-only">(current)</span></a>
            <div class="dropdown">
                <a class="nav-link active" href="index.php">Berita</a>
                 <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item" href="beritakesehatan.php">Kesehatan</a>
                  <a class="dropdown-item" href="beritaekonomi.php">Ekonomi</a>
                  <a class="dropdown-item" href="beritavaksin.php">Vaksin</a>
                </div>
            </div>
            <a class="nav-link active" href="tentangkami.php">Tentang Kami</a>
            <a class="nav-item btn btn-primary tombol" href="daftar.php">Join us</a>
            </div>
          </div>
        </div>
    </nav>
    <style>
      .dropdown:hover .dropdown-menu {
    display: block;
    }
  </style>
    <!-- akhir navbar -->