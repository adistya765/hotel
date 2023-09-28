
<!<!DOCTYPE html>
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
<body>

<body class="">


            <div class="logo-kode">
            </div>
            <h2 style="text-align:center; " class="">MARRIOT HOTEL</h2>
            <hr>
            <div class="container">
            <?php foreach ($detailBook as $al) : ?>
                <table class="table">
                    <tr>
                        <td>
                            <h6>Nama</h6>
                        </td>
                        <td> 
                            <h6>: <?= $al['nama'] ?></h6>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h6>Tipe Kamar</h6>
                        </td>
                        <td>
                            <h6>: <?= $al['tipe_kamar'] ?></h6>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h6>Kode Booking</h6>
                        </td>
                        <td>
                            <h6>: <?= $al['kode_booking'] ?></h6>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h6>Check in</h6>
                        </td>
                        <td>
                            <h6>: <?= $al['tanggal_mulai'] ?></h6>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h6>Check out</h6>
                        </td>
                        <td>
                            <h6>: <?= $al['tanggal_selesai'] ?></h6>
                        </td>
                    </tr>
                </table>
            <?php endforeach ;?>
            </div>
        </div>
    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
</body>
</html>