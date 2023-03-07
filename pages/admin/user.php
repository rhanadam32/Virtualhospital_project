<?php
error_reporting(1);

?>

<div class="row mb-2">
    <div class="col-sm-6">
        <h1 class="m-0">Daftar Akun</h1>
    </div><!-- /.col -->
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Akun</li>
        </ol>
    </div><!-- /.col -->
</div><!-- /.row -->
</div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="content">
    <div class="container-fluid">

        <div class="card" >
            <div class="card-header bg-purple">
                <h3 class="card-title">Tabel Data Akun</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body" >
                <button type="button" class="btn bg-purple mb-3" data-toggle="modal" data-target="#mdltambahuser">
                    <i class="fa fa-plus"></i> Tambah Akun
                </button>

                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Username</th>
                            <th>E-mail</th>
                            <th>Level</th>
                            <th>Nama Lengkap</th>
                            <th>No. Whatapps</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        $sql = mysqli_query($con, "SELECT * FROM tb_user");
                        while ($data = mysqli_fetch_array($sql)) {
                        ?>
                            <tr>
                                <td><?= $i++; ?></td>
                                <td><span class="badge badge-primary"><?= $data['username'] ?></span></td>
                                <td><?= $data['email'] ?></td>
                                <td><?= $data['level'] ?></td>
                                <td><?= $data['nama_lengkap'] ?></td>
                                <td><?= $data['contact'] ?></td>
                                <td>
                                    <a onclick="return confirm('yakin ingin menghapus data ini?');" href="hapus_user.php?id_user=<?= $data['id_user'] ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                    <a data-toggle="modal" data-target="#mdledit_user<?= $data['id_user'] ?>" href="#mdledit_user<?= $data['id_user'] ?>" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                    <a data-toggle="modal" data-target="#mdlgantipassword<?= $data['id_user'] ?>" href="#mdlgantipassword<?= $data['id_user'] ?>" class="btn btn-success"><i class="fa fa-key"></i></a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>

                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->

        <!-- Modal TAMBAH -->
        <div class="modal fade" id="mdltambahuser" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-primary">
                        <h5 class="modal-title" id="exampleModalLabel"><i class="fa fa-plus"></i> Tambah Data Akun</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action='tambah_user.php'>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Username</label>
                                <input type="text" class="form-control" name="username" placeholder="Username" required>

                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">E - Mail</label>
                                <input type="email" class="form-control" name="email" placeholder="E - Mail" required>

                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password </label>
                                <input type="password" class="form-control" name="password" placeholder="Password" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Konfirmasi Password</label>
                                <input type="password" class="form-control" name="password-2" placeholder="Password" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Nama Lengkap</label>
                                <input type="text" class="form-control" name="nama_lengkap" placeholder="Nama Lengkap" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">No. Whatapps</label>
                                <input type="text" class="form-control" name="contact" placeholder="No. Whatapps" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Level</label>
                                <select name="level" class="form-control" id="level" required>
                                    <option value="admin">Admin</option>
                                    <option value="user" selected>User</option>
                                </select>
                            </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                        <button type="submit" name="ok" class="btn btn-primary">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>


        <!-- =-============================================================ -->





        <?php $sql = mysqli_query($con, "SELECT * FROM tb_user ");
        while ($data2 = mysqli_fetch_array($sql)) {


        ?>
            <!-- Modal EDIT -->
            <div class="modal fade" id="mdledit_user<?= $data2['id_user'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header bg-primary">
                            <h5 class="modal-title" id="exampleModalLabel"><i class="fa fa-edit"></i> Edit Data Akun</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form method="POST" action="edit_user.php?id_user=<?= $data2['id_user'] ?>">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Username</label>
                                <input type="text" class="form-control" name="username" value="<?= $data2['username'] ?>" placeholder="Username" >

                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">E - Mail</label>
                                <input type="email" class="form-control" name="email" value="<?= $data2['email'] ?>" placeholder="E - Mail" >

                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Nama Lengkap</label>
                                <input type="text" class="form-control" name="nama_lengkap" value="<?= $data2['nama_lengkap'] ?>" placeholder="Nama Lengkap">
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                            <button type="submit" name="ok2" class="btn btn-primary">Simpan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <?php $sql = mysqli_query($con, "SELECT * FROM tb_user ");
        while ($data3 = mysqli_fetch_array($sql)) {


        ?>

            <div class="modal fade" id="mdlgantipassword<?= $data3['id_user'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header bg-primary">
                            <h5 class="modal-title" id="exampleModalLabel"><i class="fa fa-key"></i> Ganti Password / Reset Passowrd</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form method="POST" action="ganti_password.php?id_user=<?= $data3['id_user'] ?>">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password Lama</label>
                                <input type="password" class="form-control" name="password_lama" placeholder="Password Lama" >

                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password Baru</label>
                                <input type="password" class="form-control" name="password" placeholder="Password Baru" >

                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Konfirmasi Password Baru</label>
                                <input type="password" class="form-control" name="password-2"  placeholder="Konfirmasi Password Baru">
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                            <button type="submit" name="ok3" class="btn btn-primary">Simpan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>    
        <?php } ?>
