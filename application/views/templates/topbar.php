<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title><?= $title ?></title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="<?= base_url('assets/') ?>css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed  ">
    <nav class="sb-topnav navbar navbar-expand navbar-light ">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3 bg-success " href="index.html"> 
        <br>
       
        <h3 class="text-white bg-success">Marriot</h3>
        </a>

        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i
                class="fas fa-bars"></i></button>

            <!-- Topbar Search -->
          

          
    
        <!-- Navbar-->
        <ul class="navbar-nav ms-auto ms-md-0 me-10 me-lg-10">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false"><i class="fas fa-user fa-fw"></i>  <?= $user_pengguna['nama'] ?></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                

                    <li><a class="dropdown-item top-50 start-100" href="<?= base_url('C_adistyaAuth/logout') ?>">Logout</a></li>
                    
                </ul>
                
            </li>
        </ul>
    </nav>