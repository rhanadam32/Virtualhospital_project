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
                            <th>Nama</th>
                            <th>Usia</th>
                            <th>Gender</th>
                            <th>Pekerjaan</th>
                            <th>Riwayat Penyakit</th>
                            <th>Keluhan Sakit</th>
                            <th>Foto</th>
                            <th>Alamat</th>
                            <th>No. Whatapps</th>
                            <th>Status</th>
                            <th>Tanggal Post</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;

                        $sql = mysqli_query($con, "SELECT * FROM tb_buku_medis ");
                        while ($data = mysqli_fetch_array($sql)) {
                        ?>
                            <tr>
                                <td><?= $i++; ?></td>
                                <td><?= $data['nama'] ?></td>
                                <td><?= $data['usia'] ?></td>
                                <td><?= $data['gender'] ?></td>
                                <td><?= $data['pekerjaan'] ?></td>
                                <td><?= $data['riwayat_penyakit'] ?></td>
                                <td><?= $data['keluhan_sakit'] ?></td>
                                <td><img src="../uploaded_photo/<?= $data['upload_foto'] ?>" class="img-thumbnail" style="height: 200px; width: 200px;"></td>
                                <td><?= $data['alamat'] ?></td>
                                <td><?= $data['contact'] ?></td>
                                <td><?= $data['status'] ?></td>
                                <td><?= $data['tgl_post'] ?></td>
                                <td>
                                    <a  data-toggle="modal" data-target="#mdlapprove_report<?= $data["id_report"] ?>" href="#mdlapprove_report<?= $data["id_report"] ?>" class="btn btn-success <?= ($data['status'] != 'terkirim' ? 'd-none':''); ?>"><i class="fa fa-check-circle"></i></a>
                                    <a data-toggle="modal" data-target="#mdledit_report<?= $data["id_report"] ?>" href="#mdledit_report<?= $data["id_report"] ?>" class="btn btn-primary <?= ($data['status'] == 'terkirim' ? 'd-none':''); ?>"  title="Rubah Laporan"><i class="fa fa-edit"></i></a>
                                    
                                    
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





        <?php $sql = mysqli_query($con, "SELECT * FROM tb_buku_medis ");
        while ($data2 = mysqli_fetch_array($sql)) {


        ?>
            <!-- Modal EDIT -->
            <div class="modal fade" id="mdledit_report<?= $data2['id_report'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header bg-primary">
                            <h5 class="modal-title" id="exampleModalLabel"><i class="fa fa-edit"></i> Ubah Status Laporan</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form method="POST" action="rubah_laporan.php?id_report=<?= $data2['id_report'] ?>">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nama</label>
                                <input type="text" class="form-control" name="username" value='<?= $data2['nama']?>' placeholder="Username" readonly>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tanggal Post</label>
                                <input type="text" class="form-control" name="tanggal" value='<?= $data2['tgl_post']?>' placeholder="Username" readonly>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Ubah Status</label>
                                <select name="status" class="form-control" id="status" required>
                                    <option value="direview" selected>di Review</option>
                                    <option value="antri" >Antri</option>
                                    <option value="batal" >dibatalkan</option>
                                </select>
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

        <?php $sql = mysqli_query($con, "SELECT * FROM tb_buku_medis ");
        while ($data3 = mysqli_fetch_array($sql)) {


        ?>
            <!-- Modal EDIT -->
            <div class="modal fade" id="mdlapprove_report<?= $data3['id_report'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header bg-primary">
                            <h5 class="modal-title" id="exampleModalLabel"><i class="fa fa-exclamation-triangle"></i> Perhatian !</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form method="POST" action="status_review.php?id_report=<?= $data3['id_report'] ?>">
                            <div class="form-group">
                                <label  for="dialog">apakah anda bersedia menerima laporan Diagnosa ini?</label>
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