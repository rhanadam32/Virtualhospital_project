<?php
date_default_timezone_set("Asia/Jakarta");
include "config/koneksi.php";
?>

<?php
session_start();

// cek apakah yang mengakses halaman ini sudah login
//if ($_SESSION['level'] == "") {
//  header("location:index.php?pesan=belum_login");
//}
//$aa = $_SESSION['username'];
//$p = mysqli_query($con, "SELECT * FROM tb_user WHERE username='$aa'");
//$profil = mysqli_fetch_array($p);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Virtual Hospital APP | Form Keluhan</title>
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>

<body class="hold-transition login-page">
    <div class="login-box" style="width : 50%">
        <!-- /.login-logo -->
        <div class="card card-outline card-purple">
            <div class="card-header text-center">
                <a href="index2.html" class="h1"><b>Form Diagnosa</b></a>
                <p class='h6'>isilah form keluhan dibawah ini </p>
            </div>
            <div class="card-body">
                

                <form action="submit_form.php" method="post" enctype="multipart/form-data">
                   
                    <div class="input-group mb-3">
                        <input type="text" name="nama" class="form-control" placeholder="Nama" required>
                        
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" name="usia" class="form-control" placeholder="Usia" required>
                        
                    </div>
                            <label for="exampleFormControlTextarea1" style="color : #495057;">Gender / Jenis Kelamin</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" value="Pria" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Pria
                                </label>
                                </div>
                                <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" value="Wanita" id="flexRadioDefault2" checked>
                                <label class="form-check-label" for="flexRadioDefault2">
                                    Wanita
                                </label>
                            </div>
                    <div class="input-group mb-3"></div>
                    <div class="input-group mb-3">
                        <input type="text" name="pekerjaan" class="form-control" placeholder="Pekerjaan" required>
                     
                    </div>
                    <div class="mb-0">
                        <label for="exampleFormControlTextarea1" style="color : #495057;">Tulis Riwayat penyakit anda disini (jika tidak mempunyai Riwayat Penyakit silahkan tulis "tidak ada")</label>
                        <textarea  class="form-control form-control-solid" name="riwayat_penyakit" id="exampleFormControlTextarea1"  rows="3"></textarea>
                    </div>
                    <div class="mb-0">
                        <label for="exampleFormControlTextarea1" style="color : #495057;">Tulis keluhan sakit yang anda alami disini</label>
                        <textarea class="form-control" name="keluhan_sakit" id="exampleFormControlTextarea1"  rows="3"></textarea>
                    </div>
                    <div class="input-group mb-3"></div>
                    <div class="mb-0">
                    <label for="exampleFormControlTextarea1" style="color : #495057;">upload foto disini</label>
                        <input type="file" name="upload_foto" class="form-control" placeholder="upload foto disini" >

                    </div>
                    <div class="input-group mb-3"></div>
                    <div class="mb-0">
                        <label for="exampleFormControlTextarea1" style="color : #495057;">Alamat</label>
                        <textarea  class="form-control form-control-solid" name="alamat" id="exampleFormControlTextarea1"  rows="3"></textarea>
                    </div>
                    <div class="input-group mb-3"></div>
                    <div class="input-group mb-3">
                        <input type="text" name="contact" class="form-control" placeholder="nomor HP / WA" required>
                        
                    </div>
                        <!-- /.col -->
                       <div class="d-grid gap-2 d-md-block">
                            <button type="submit" name="kirim" class="btn bg-purple" style="margin : 5px">Kirim</button>
                            <button type="reset" class="btn bg-blue " style="margin : 5px">Reset</button>
                            <a href="logout.php" class="btn bg-red " style="margin :5px; margin-left : 65%;">Keluar Akun</a>
                     
                       </div>
                        
                        <!-- /.col -->
                    </div>
                </form>


            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.min.js"></script>
</body>

</html>


