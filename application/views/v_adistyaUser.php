

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Home</title>

    <!-- Bootstrap core CSS -->
    <link href="<?= base_url('assets/template/') ?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="<?= base_url('assets/template/') ?>assets/css/fontawesome.css">
    <link rel="stylesheet" href="<?= base_url('assets/template/') ?>assets/css/templatemo-lugx-gaming.css">
    <link rel="stylesheet" href="<?= base_url('assets/template/') ?>assets/css/owl.css">
    <link rel="stylesheet" href="<?= base_url('assets/template/') ?>assets/css/animate.css">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
<!--

TemplateMo 589 lugx gaming

https://templatemo.com/tm-589-lugx-gaming

-->
  </head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="index.html" class="logo">
                        <img src="<?= base_url('assets/template/') ?>assets/images/logo.png" alt="" style="width: 158px;">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                      <li><a href="index.html">Home</a></li>
                      <li><a href="<?= base_url('C_adistyaUser') ?>" class="active">Our Room</a></li>
                      <li><a href="<?= base_url('C_adistyaUser/contact') ?>">Contact Us</a></li>
                      <li><a href="#">LogOut</a></li>
                  </ul>   
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <div class="page-heading header-text">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h3>Our Room</h3>
        </div>
      </div>
    </div>
  </div>

  <div class="section trending">
    <div class="container">
      <ul class="trending-filter">
        <li>
          <a class="is_active" href="#!" data-filter="*">Our Room</a>
        </li>
      </ul>
      
      <div class="row trending-box">
      <?php
                        $no = 1;
                        foreach ($tipeKamar as $tk) : ?>
        <div class="col-lg-3 col-md-6 align-self-center mb-30 trending-items col-md-6 adv">
        
          <div class="item">
            <div class="thumb">
              <a href="<?= base_url('C_adistyaUser/booking') ?>"><img src="<?= base_url('assets/img/' . $tk['img']) ?>"></a>
              <span class="price"></em><?= $tk['tipe_harga'] ?></span>
            </div>
            <div class="down-content">
              <span class="category"><?= $tk['fasilitas_kamar'] ?></span>
              <h4><?= $tk['nama_kamar'] ?></h4>
              <a href="<?= base_url('C_adistyaUser/booking') ?>"><i class="fa fa-shopping-bag"></i></a>
            </div>
          </div>
          
      </div>
      <?php endforeach ?>
    </div>
  </div>
    

  <footer>
    <div class="container">
      <div class="col-lg-12">
        <p>Copyright © 2023 Adistya. &nbsp;&nbsp; </p>
      </div>
    </div>
  </footer>

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="<?= base_url('assets/template/') ?>vendor/jquery/jquery.min.js"></script>
  <script src="<?= base_url('assets/template/') ?>vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="<?= base_url('assets/template/') ?>assets/js/isotope.min.js"></script>
  <script src="<?= base_url('assets/template/') ?>assets/js/owl-carousel.js"></script>
  <script src="<?= base_url('assets/template/') ?>assets/js/counter.js"></script>
  <script src="<?= base_url('assets/template/') ?>assets/js/custom.js"></script>

  </body>
</html>