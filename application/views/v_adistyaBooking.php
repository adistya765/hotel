

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
                      <li><a href="<?= base_url('C_adistyaUser') ?>" >Our Shop</a></li>
                      <li><a href="<?= base_url('C_adistyaUser/booking') ?>" class="active">Booking Details</a></li>
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
          <h3>Booking Details</h3>
        </div>
      </div>
    </div>
  </div>

 
  <div class="section trending">
    <div class="container">
      <ul class="trending-filter">
        <li>
          <a class="is_active" href="#!" data-filter="*">Booking Details</a>
        </li>
      </ul>
<div class="card ">
    <div class="card-body ">

        <h3 class="card-subtitle mb-2 text-muted mb-4">Booking Details </h3>
        <br>
        <form method="post" action="<?= base_url('C_adistyaUser/tambahBooking') ?>">
            <?php echo form_hidden($this->security->get_csrf_token_name(), $this->security->get_csrf_hash())   ?>

          
                <div class="row mb-5">
                    <div class="col-md-6">

                    <h6><label for="disabledTextInput" class="form-label" >Nama</label></h6>
                        <input type="text" class="form-control mb-3" id="nama" name="nama" value="<?= $get_user['nama'] ?>" aria-describedby="nama" disabled placeholder="Disabled input" >

                    </div>

                    <div class="col-md-6">

                    <h6><label for="exampleInputEmail1" class="form-label">Email</label></h6>
                        <input type="text" class="form-control" id="email" name="email" value="<?= $get_user['email'] ?>" aria-describedby="email" disabled >


                    </div>
                </div>
           

            <div class="row">
            <div class="col-md-6">
                    <div class="mb-3">
                        <h6><label for="exampleInputEmail1" class="form-label">Chek In</label></h6>
                        <input type="date" class="form-control" id="chekin" name="chekin" aria-describedby="chekin" >
                    </div>
                </div>

                <div class="col-md-6">
                <div class="mb-3">
                        <h6><label for="exampleInputPassword1" class="form-label">Chek Out</label></h6>
                        <input type="date" class="form-control" id="chekout" name="chekout" >
                    </div>
                </div>

                <div class="mb-3">
                    <h6><label for="exampleInputPassword1" class="form-label">Tipe Kamar</label></h6>
                    <select type="text" name='tipe_kamar' class="form-select" id="tipe_kamar">
                        <option selected>--Pilih Tipe Kamar--</option>
                        <?php foreach ($tipeKamar as $tk) : ?>
                            <option value="<?= $tk['nama_kamar'] ?>"><?= $tk['nama_kamar'] ?></option>
                        <?php endforeach ?>
                    </select>
                </div>
            </div>
            <br>
            <button type="submit" class="btn btn-outline-success "><i class="fa fa-shopping-bag"></i> Booking</button>
           
        </form>
    </div>

</div>
</div>
    

  <footer>
    <div class="container">
      <div class="col-lg-12">
        <p>Copyright © 2023 Adistya &nbsp;&nbsp; </p>
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