<!DOCTYPE html>
<html>

<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="<?= base_url('materialize/') ?>css/materialize.min.css"
        media="screen,projection" />
    <!-- Fontawsome -->
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>

    <!-- my css -->
    <link rel="stylesheet" href="<?= base_url('assets/css/') ?>style.css">

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title><?= $title ?></title>
</head>

<body>


    <!-- Navbar -->
    <div class="navbar-fixed btn-primary">
        <nav class=" darken-3">
            <div class="container">
                <div class="nav-wrapper ">
                    <a href="#" class="brand-logo">Gemilang Hotel</a>
                    <ul id="nav-mobile" class="right hide-on-med-and-down">
                        <li><a href="#home">HOME</a></li>
                        <li><a href="badges.html">OFFER</a></li>
                        <li><a href="<?= base_url('index.php/C_adistyaAuth') ?>">LOGIN</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <!-- Slider -->
    <div class="slider" id="home">
        <ul class="slides">
        <br>
            <li>
                <img src="<?= base_url('assets/img/bg-hotel.jpg') ?>"> <!-- random image -->
                <div class="caption center-align">
                    <h2> Hotel Gemilang</h2>
                    <h5 class="light grey-text text-lighten-3">Hotel presented in style.</h5>
                </div>
            </li>

           
        </ul>
    </div>

    <!-- Content -->
    <div class="container header">
        <h3>Gemilang comfortable place</h3>
        <p>Hotel is a building, company or business that provides services and also provides food and drinks for guests who come and has other service facilities. Where all the facilities are also intended for the general public.</p>
    </div>
    <br>
    <br>
    <br>
    <br>




    <div class="container layanan">
        <div class="row  d-flex">

            <div class="col s6 content-img1">
                <img src="<?= base_url('assets/img/hotel5.jpeg') ?>" >
            </div>

            <div class="col s6 content-des">
                <h4>Single Room</h4>
                <p>Jenis kamar hotel Single Room memiliki satu tempat tidur single untuk hunian satu orang. Kamar yang dimaksudkan 
                untuk ditinggali oleh satu orang ini menyediakan akomodasi untuk hanya untuk satu orang. Umumnya, Single 
                Room memiliki ranjang standar. Selain tempat tidur, perabot lain juga ditawarkan kepada tamu untuk menambah fungsionalitas
                 ruangan seperti meja rias kecil, meja samping tempat tidur kecil, dan meja tulis dengan kursi tunggal. Kamar mandi juga ada
                  di dalam jenis kamar hotel ini.</p>
            </div>

        </div>
        <br>
    <br>

        <div class="row  d-flex">

            <div class="col s6 content-des ">
                <h4>Standart Room</h4>
                <p> 
                    Jenis kamar hotel Standart Room biasanya hampir sama dengan Single Room. Jensi kamar hotel ini cocok untuk wisatawan 
                    tunggal atau pasangan. Standart Room juga biasanya menawarkan tempat tidur single ganda atau 1 tempat tidur Queen/King 
                    size tergantung pada pilihan Anda.
                </p>
            </div>
            <br>
    

            <div class="col s6 content-img2">
                <img src="<?= base_url('assets/img/hotel4.jpg') ?>">
            </div>


        </div>
        
    <br>


        <div class="row  d-flex">

            <div class="col s6 content-img3">
                <img src="<?= base_url('assets/img/hotel3.jpg') ?>" >
            </div>

            <div class="col s6 content-des">
                <h4>Deluxe Room</h4>
                <p>Jenis kamar hotel Deluxe Room tersedia dalam varian Single Deluxe dan Double Deluxe. Perbedaan utama antara kamar 
                standar dan kamar deluxe terdapat pada harga dan ukurannya.  Hotel modern dengan Deluxe Room menawarkan pemandangan kota/pantai dan kamar mandi berukuran besar yang dilengkapi
                 dengan bathtub, shower cubical area, LED dengan berbagai saluran, telepon, Wi-Fi,
                 meja rias, meja samping tempat tidur, meja tulis kecil, kursi, lemari es mini dan sebagainya.</p>
            </div>

        </div>
        <br>
    <br>
    

        <div class="row  d-flex">

            <div class="col s6 content-des">
                <h4>Double Room</h4>
                <p>Jenis kamar hotel Double-Double Room memiliki dua tempat tidur ukuran double dengan sandaran kepala terpisah dan 
                biasanya lebih disukai oleh keluarga atau kelompok karena dapat menampung empat orang secara bersama-sama. 
                Jenis kamar ini sangat ideal untuk keluarga dengan dua anak di bawah 12 tahun.</p>
            </div>

            <div class="col s6 content-img3">
                <img src="<?= base_url('assets/img/hotel2.jpeg') ?>" >
            </div>
        </div>
    </div>
    <br>
    <br>

    <!-- Footer -->
    <div class=" black Red darken-3">
        <div class="container footer">
            <div class="row">
                <div class="col s3">
                    <p><i class="fa-solid fa-map"></i> Alamat: Jl. Merdeka 72A Indonesia </p>
                </div>
                <br>
               
                
                <div class="">
                <br>
                <br>
                    <p><i class="fas fa-phone"></i> No Telp: +62 82135631812</p>
                </div>
                <div class="col s3">
                    <p><i class="fa-solid fa-envelope"></i> Email: hotelgemilang@gmail.com</p>
                </div>

            </div>
            <br>
            <div class="text-muted  ">Copyright &copy; Firman pratama 2022</div>
        </div>
    </div>
    <br>

    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="<?= base_url('materialize/') ?>js/materialize.min.js"></script>
    <script>
    const slider = document.querySelectorAll('.slider')
    M.Slider.init(slider, {
        indicators: false,
        height: 525,
        transition: 600,
        interval: 3000
    });
    </script>
</body>

</html>