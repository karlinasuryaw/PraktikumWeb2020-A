<!doctype html>
<html lang="en">
  <head>
  <?php include('includes/head.php'); ?>
    <title>Beranda - Pena</title>
  </head>

  <body>
  <?php include('includes/navbar.php'); ?>

    <!-- Masthead-->
            <header class="masthead">
                <div class="container">
                    <div class="masthead-subheading">Sebuah Karya Jurnalistik</div>
                    <div class="masthead-heading text-uppercase ">Untuk Indonesia Bebas Covid-19</div>
                    <a class="btn js-scroll-trigger" href="#timeline">Tell Me More</a>
                </div>
            </header>
    <!-- akhir Masthead -->

    <!-- info panel -->
    <div class="container">
        <div class="row justify-content-center" id="info-panel">
            <div class="col-10 info-panel">
                <div class="row">
                    <div class="col-lg">
                    <img src="assets/img/team/ikon1.png" alt="1" class="float-left">
                    <h4>Medis</h4>
                    <p>Sebuah pengorbanan hidup</p>
                    </div>
                    <div class="col-lg">
                    <img src="assets/img/team/ikon2.png" alt="2"class="float-left">
                    <h4>Jurnalis</h4>
                    <p>Menyampaikan informasi</p>
                    </div>
                    <div class="col-lg">
                    <img src="assets/img/team/ikon3.png" alt="3"class="float-left">
                    <h4>Masyarakat</h4>
                    <p>Menerima informasi positif</p>
                    </div>
            </div>
        </div>
    </div>
        
    </div>
    <!-- akhir info panel -->

    <!-- timeline covid -->
    <section class="row" id="timeline">
        <div class="container p-4">
            <div class="text-center">
                <br><br>
                <h2 class="section-heading text-uppercase">Timeline Covid-19</h2>
                <h3 class="section-subheading text-muted">Rekam Jejak Kasus Covid-19 di Indonesia</h3>
            </div>      
            <ul class="timeline">
                <li>
                    <div class="timeline-image"><img class="img-fluid" src="assets/img/virus1.png" alt="" /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4 class="subheading">31 Desember 2019</h4>
                        </div>
                        <div class="timeline-body"><p class="text-muted">kasus pneumonia yang terletak di Wuhan, China pertama kali dilaporkan ke WHO, selama periode yang dilaporkan ini, virus belum diketahui.</p></div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-image"><img class="img-fluid" src="assets/img/virus2.png" alt="" /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4 class="subheading">2 Maret 2020 </h4>
                        </div>
                        <div class="timeline-body"><p class="text-muted">Pemerintah Indonesia secara resmi mengumumkan 2 WNI positif terpapar corona virus, keduanya menjadi kasus pertama yang dilaporkan di Indonesia.</p></div>
                    </div>
                </li>
                <li>
                    <div class="timeline-image"><img class="img-fluid" src="assets/img/virus3.png" alt="" /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4 class="subheading">11 Maret 2020</h4>
                        </div>
                        <div class="timeline-body"><p class="text-muted">Indonesia mengumumkan kematian pertama akibat virus corona, yaitu pasien kasus 25, seorang WNA yang menjalani perawatan di RS sanglah, Bali.</p></div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-image"><img class="img-fluid" src="assets/img/virus4.png" alt="" /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4 class="subheading">1 Juni 2020</h4>
                        </div>
                        <div class="timeline-body"><p class="text-muted">Presiden Jokowi menerapkan sebuah sistem yang dinamakan New Normal, untukpemulihan perekonomian negara.</p></div>
                    </div>
                </li>
                <li>
                    <div class="timeline-image"><img class="img-fluid" src="assets/img/virus5.png" alt="" /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4 class="subheading">Saat Ini</h4>
                        </div>
                        <div class="timeline-body"><p class="text-muted">Covid-19 di Indonesia sangatlah meningkat, bahkan menempati urutan 1 se asia tenggara jumlah covid terbanyak</p></div>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <!-- akhirtimeline covid -->
    
    <!-- Contact-->
    <section class="page-section" id="contact">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">kontak</h2>
                <h3 class="section-subheading text-muted">. . .</h3>
            </div>
            <form id="contactForm" name="sentMessage" novalidate="novalidate">
                <div class="row align-items-stretch mb-5">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input class="form-control" id="name" type="text" placeholder="Your Name *" required="required" data-validation-required-message="Please enter your name." />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="form-group">
                            <input class="form-control" id="email" type="email" placeholder="Your Email *" required="required" data-validation-required-message="Please enter your email address." />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="form-group mb-md-0">
                            <input class="form-control" id="phone" type="tel" placeholder="Your Phone *" required="required" data-validation-required-message="Please enter your phone number." />
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group form-group-textarea mb-md-0">
                            <textarea class="form-control" id="message" placeholder="Your Message *" required="required" data-validation-required-message="Please enter a message."></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <div id="success">
                        <button class="btn btn-primary btn-xl text-uppercase" id="sendMessageButton" type="submit">Kirim Pesan</button>
                    </div>
                </div>
            </form>
        </div>
    </section>

    <?php include('includes/footer.php'); ?>

    <?php include('includes/js.php'); ?>
  </body>
</html>