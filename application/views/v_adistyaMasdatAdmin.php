<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">MASTER DATA</h1>

            <!-- User Access -->
            <div class="card col-md-6 mt-5">
                <h5 class="card-header bg-dark">
                <div class="text-white"> User Access </div></h5>

                <table class="table">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Sebagai</th>
                            <th>Edit</th>
                            <th>Hapus</th>
                        </tr>

                        <?php foreach ($userAccess as $ua) : ?>
                            <tr>

                                <td><?= $ua['nama'] ?></td>
                                <td>
                                    <?php
                                    if ($ua['level'] == 1) {
                                        echo 'Admin';
                                    } else if ($ua['level'] == 2) {
                                        echo 'Resepsionis';
                                    } else if ($ua['level'] == 3) {
                                        echo 'Customer';
                                    }
                                    ?>
                                </td>
                                <td>

                                    <!-- Modal Edit User -->
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#edituser<?= $ua['id'] ?>">
                                        <i class="fas fa-pen"></i>
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="edituser<?= $ua['id'] ?>" tabindex="-1" aria-labelledby="edituser" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="edituser">Modal title</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">

                                                    <!-- Form Edit User -->
                                                    <form method="post" action="<?= base_url('C_adistyaAdmin/fungsi_editUser/' . $ua['id']) ?>">
                                                        <?php echo form_hidden($this->security->get_csrf_token_name(), $this->security->get_csrf_hash()) ?>

                                                        <div class="mb-3">
                                                            <label for="nama" class="form-label">Nama</label>
                                                            <input type="text" class="form-control" value="<?= $ua['nama'] ?>" id="nama" name="nama" aria-describedby="emailHelp">
                                                        </div>

                                                        <div class="mb-3">
                                                            <label for="exampleInputPassword1" class="form-label">Sebagai</label>
                                                            <select  name='level' class="form-select" id="level" aria-label="Default select exampel">
                                                                <option selected>--Pilih Role Anda--</option>
                                                                <option value="1">Admin</option>
                                                                <option value="2">Resepsionis</option>
                                                                <option value="3">Customer</option>
                                                            </select>
                                                        </div>

                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-warning">Edit User</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <a href="<?= base_url('C_adistyaAdmin/fungsi_deleteUser/' . $ua['id']) ?>">
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('yakin ingin menghapus ??')">
                                            <i class="fa-solid fa-trash"></i></i>
                                        </button>
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </thead>
                </table>
            </div>
            <br>
            <a href="<?= base_url('C_adistyaAuth/register2') ?>"><button type="button" class="btn btn-success col-md-1">Tambah</button></a>
            <br>
            <br>
            

            <!-- Tipe Kamar -->
            <div class="card mt-4">
                <h5 class="card-header bg-dark">
                <div class="text-white"> Tipe Kamar</div></h5>

                <table class="table">
                    <thead>
                        <tr>
                            <th>Tipe Kamar</th>
                            <th>Fasilitas</th>
                            <th>Harga</th>
                            <th>Tanggal Update</th>
                            <th>Edit</th>
                            <th>Hapus</th>
                        </tr>

                        <?php
                        $no = 1;
                        foreach ($tipeKamar as $tk) : ?>

                            <tr>
                                <td class="col-md-1"><?= $tk['nama_kamar'] ?></td>
                                <td><?= $tk['fasilitas_kamar'] ?></td>
                                <td><?= $tk['tipe_harga'] ?></td>
                                <td class="col-md-1"><?= $tk['tanggal_update'] ?></td>

                                <!-- Edit -->
                                <td>

                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editkamar<?= $tk['id'] ?> ">
                                        <i class="fas fa-pen"></i>
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="editkamar<?= $tk['id'] ?>" tabindex="-1" aria-labelledby="editkamar" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="editkamar">Edit Tipe Kamar</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <!-- Form Edit Kamar -->
                                                    <form method="post" action="<?= base_url('C_adistyaAdmin/fungsi_editKamar/' . $tk['id']) ?>" enctype="multipart/form-data">

                                                        <?php echo form_hidden($this->security->get_csrf_token_name(), $this->security->get_csrf_hash())   ?>

                                                        <div class="mb-3  order-lg-10 ">
                                                            <label for="tipekamar" class="form-label">
                                                                <h6>Tipe Kamar</h6>
                                                            </label>
                                                            <input type="text" class="form-control" value="<?= $tk['nama_kamar'] ?>" id="tipekamar" name="tipekamar" aria-describedby="tipekamar">
                                                        </div>

                                                        <div class="mb-3">
                                                            <label for="fasilitas" class="form-label">
                                                                <h6>Fasilitas</h6>
                                                            </label>
                                                            <input type="text" class="form-control" value="<?= $tk['fasilitas_kamar'] ?>" id="fasilitas" name="fasilitas">
                                                        </div>

                                                        <div class="mb-3">
                                                            <label for="harga" class="form-label">
                                                                <h6>Harga</h6>
                                                            </label>
                                                            <input type="text" class="form-control" value="<?= $tk['tipe_harga'] ?>" id="harga" name="harga">
                                                        </div>

                                                        <div class="mb-3">
                                                            <label for="tanggal" class="form-label">
                                                                <h6>Tanggal</h6>
                                                            </label>
                                                            <input type="date" class="form-control" value="<?= $tk['tanggal_update'] ?>" id="tanggal" name="tanggal">
                                                        </div>

                                                        <div class="mb-3">
                                                            <label for="image" class="form-label">
                                                                <h6>Image</h6>
                                                            </label>
                                                            <input type="file" class="form-control" value="<?= $tk['img'] ?>" id="z" name="image">
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                            <button type="Submit" class="btn btn-warning">Edit Tipe
                                                                Kamar</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <a href="<?= base_url('C_adistyaAdmin/fungsi_deletKamar/' . $tk['id']) ?>">
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin untuk menghapus ??')"><i class="fa-solid fa-trash"></i></i></button>
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </thead>
                </table>
                <br>
            </div>
            <a href="<?= base_url('C_adistyaAdmin/form_tambahKamar') ?>"><button type="button" class="btn btn-success col-md-2">Tambah Tipe Kamar</button></a>

        </div>
    </main>