<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4"></h1>
            
            <!-- User Access -->
            <form method="get">

                        <center>
                            <div class="input-group mb-3 modal-lg">
                                <input type="text" class="form-control" id="search" name="search"
                                    aria-describedby="btnNavbarSearch" placeholder="Search . . .">
                                <button type="submit" class="btn btn-success"><i
                                        class="fa-solid fa-magnifying-glass"></i></button>
                            </div>
                    </form>

                <div class="card col-md-30 mt-5">
                <h5 class="card-header bg-dark">
                <div class="text-white"> User Booking </div></h5>
                <table class="table table-bordered">
                    <thead>
                <tr>
                            <th>Nama</th>
                            <th>Tipe Kamar</th>
                            <th>Kode Booking</th>
                            <th>Checkin</th>
                            <th>Checkout</th>
                        </tr>
                        </thead>

                <tbody>
                <?php foreach ($detailBook as $al) : ?>
                    <tr>
                    <td>
                            <?= $al['username'] ?>
                        </td>
                        </td>

                        <td>
                        <?= $al['tipe_kamar'] ?>
                        </td>

                        <td>
                        <?= $al['kode_booking'] ?>
                        </td>

                        <td>
                            <?= $al['tanggal_mulai'] ?>
                        </td>

                        <td>
                        <?= $al['tanggal_selesai'] ?>
                        </td>
                    </tr>
                    <?php endforeach ;?>
                </tbody>
                </table>
            </div>
            <br>
    </main>
