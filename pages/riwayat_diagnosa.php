<?php
error_reporting(1);

?>

<div class="row mb-2">
    <div class="col-sm-6">
        <h1 class="m-0">Daftar Riwayat Diagnosa</h1>
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

        <div class="card">
            <div class="card-header bg-purple">
                <h3 class="card-title">Tabel Daftar Riwayat</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <!-- <button type="button" class="btn bg-purple mb-3" data-toggle="modal" data-target="#mdltambahuser">
                    <i class="fa fa-plus"></i> Tambah Laporan Diagnosa
                </button> -->

                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Riwayat Penyakit</th>
                            <th>Keluhan Sakit</th>
                            <th>Foto</th>
                            <th>Status</th>
                            <th>Tanggal Post</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;

                        $sql = mysqli_query($con, "SELECT * FROM tb_buku_medis WHERE id_user='$profil[id_user]'");
                        while ($data = mysqli_fetch_array($sql)) {
                        ?>
                            <tr>
                                <td><?= $i++; ?></td>
                                <td><?= $data['riwayat_penyakit'] ?></td>
                                <td><?= $data['keluhan_sakit'] ?></td>
                                <td><img src="uploaded_photo/<?= $data['upload_foto'] ?>" class="img-thumbnail" style="height: 200px; width: 200px;"></td>
                                <td><?= $data['status'] ?></td>
                                <td><?= $data['tgl_post'] ?></td>
                                <td>
                                    <a onclick="return confirm('yakin ingin menghapus data ini?');" href="hapus_user.php?id_user=<?= $data['id_user'] ?>" class="btn btn-danger d-none"><i class="fa fa-trash"></i></a>
                                    <a data-toggle="modal" data-target="#mdledit_user<?= $data['id_user'] ?>" href="#mdledit_user<?= $data['id_user'] ?>" class="btn btn-warning"><i class="fa fa-edit"></i></a>
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
                                    <input type="text" class="form-control" name="username" value="<?= $data2['username'] ?>" placeholder="Username">

                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">E - Mail</label>
                                    <input type="email" class="form-control" name="email" value="<?= $data2['email'] ?>" placeholder="E - Mail">

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
        <?php } ?>