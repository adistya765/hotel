<?= base_url('index.php/C_adistyaAuth') ?>


<div class="card-body">
<form method="post" action="<?= base_url('C_adistyaAuth') ?>">
    <?php echo form_hidden($this->security->get_csrf_token_name(), $this->security->get_csrf_hash())   ?>

    <div class="form-floating mb-3">
                                            <input class="form-control" id="email" name="email" type="email"
                                                placeholder="name@example.com" />
                                            <label for="inputEmail">Email address</label>
                                            <?= form_error('email', '<small class="text-danger pl-3">', '</small>') ?>
                                        </div>

                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="password" name="password" type="password"
                                                placeholder="Password" />
                                            <label for="inputPassword">Password</label>
                                            <?= form_error('password', '<small class="text-danger pl-3">', '</small>') ?>
                                        </div>

                                        <a href="<?= base_url('C_adistyaHome') ?>"><button type="button"
                                                class="btn btn-secondary btn-back col-md-12" style="margin-left: 0px;">Back</button></a>
                                                
                                                <div class="card-footer text-center py-3">
                                    <div class="small"><a href="<?= base_url('C_adistyaAuth/register') ?>">Create an Account! </a>
                                    </div>

                                    <!-- kotmol

                                    <!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Login</title>

    <!-s--> Custom fonts for this template-->
    <link href="<?= base_url('assets/pe/') ?>
vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url('assets/pe/') ?>css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                    <form method="post" action="<?= base_url('C_adistyaAuth') ?>">
                        <?php echo form_hidden($this->security->get_csrf_token_name(), $this->security->get_csrf_hash())   ?>
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                    </div>
                                    <form class="user">
                                        <div class="form-group">
                                            <input type="email" id="email" name="email" class="form-control form-control-user"
                                                placeholder="Enter Email Address...">
                                                <?= form_error('email', '<small class="text-danger pl-3">', '</small>') ?>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                            id="password" name="password" placeholder="Password"><?= form_error('password', '<small class="text-danger pl-3">', '</small>') ?>
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Remember
                                                    Me</label>
                                            </div>
                                        </div>
                                        <a href="index.html" class="btn btn-primary btn-user btn-block">
                                            Login
                                        </a>
                                        <hr>
                                        <a href="index.html" class="btn btn-google btn-user btn-block">
                                            <i class="fab fa-google fa-fw"></i> Login with Google
                                        </a>
                                        <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                            <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
                                        </a>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="forgot-password.html">Forgot Password?</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="register.html">Create an Account!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url('assets/pe/') ?>vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url('assets/pe/') ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url('assets/pe/') ?>vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url('assets/pe/') ?>js/sb-admin-2.min.js"></script>

</body>

</html>

<!-- sef-->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title><?= $title ?></title>
    <link href="<?= base_url('assets/') ?>css/styles.css" rel="stylesheet" />
    <link href="<?= base_url('assets/') ?>css/style.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="bg-primary  ">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class=" container">
                    <div class=" row justify-content-center">
                        <div class=" col-lg-6">
                            <div class=" card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <h3 class="text-center font-weight-light my-4 ">Login</h3>
                                </div>

                                <?= $this->session->flashdata('message'); ?>


                                <div class="card-body">
                                    <form method="post" action="<?= base_url('I_firmanAuth') ?>">
                                        <?php echo form_hidden($this->security->get_csrf_token_name(), $this->security->get_csrf_hash())   ?>


                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="email" name="email" type="email"
                                                placeholder="name@example.com" />
                                            <label for="inputEmail">Email address</label>
                                            <?= form_error('email', '<small class="text-danger pl-3">', '</small>') ?>
                                        </div>

                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="password" name="password" type="password"
                                                placeholder="Password" />
                                            <label for="inputPassword">Password</label>
                                            <?= form_error('password', '<small class="text-danger pl-3">', '</small>') ?>
                                        </div>

                                        <button type="submit"
                                            class="btn btn-primary btn-user btn-login col-md-12 ">Login</button>
                                        <br>
                                        <br>

                                        <a href="<?= base_url('I_firmanHome') ?>"><button type="button"
                                                class="btn btn-secondary btn-back col-md-12" style="margin-left: 0px;">Back</button></a>

                                        

                                    </form>
                                </div>
                                <div class="card-footer text-center py-3">
                                    <div class="small"><a href="<?= base_url('I_firmanAuth/register') ?>">Create an Account! </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </main>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="js/scripts.js"></script>
</body>




















</html>

<!-=-da--/>