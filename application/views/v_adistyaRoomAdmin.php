<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">

            <h1 class="mt-4"><?= $tipe ?></h1>

            <div class="card">
                <h5 class="card-header"><?= $tipe ?></h5>
                <div class="card-body">

                    <!-- room -->
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nomor Ruangan</th>
                                <th scope="col">Status</th>
                                <th scope="col">Handle</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($list_kamar as $lk):?>
                            <tr>
                                <th scope="row">1</th>
                                <td><?= $lk['nomor_ruangan'] ?></td>
                                <td><?= $lk['status'] ?></td>
                                <td>@adistya</td>
                            </tr>
                            <?php endforeach?>
                            
                       
                        </tbody>
                    </table>


                </div>
            </div>


        </div>
    </main>