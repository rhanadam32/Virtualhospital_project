<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Virtual Hospital APP | Log in</title>
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
    <div class="login-box">
        <!-- /.login-logo -->
        <div class="card card-outline card-purple">
            <div class="card-header text-center">
                <a href="index2.html" class="h1"><b>Form Registrasi Akun</b></a>
            </div>
            <div class="card-body">
                <p class="login-box-msg">Silahkan isi form tersebut guna untuk registrasi akun anda.</p> 
                <form action="register_check.php" method="post">
                    <!-- cek pesan notifikasi -->


                    <div class="input-group mb-3">
                        <input type="text" name="nama_lengkap" class="form-control" placeholder="Nama Lengkap" required>
                        <div class="input-group-append">
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="email" name="email" class="form-control" placeholder="E-Mail : contoh@namadomain.com" required>
                        <div class="input-group-append">
                            </div>
                        </div>
                    <div class="input-group mb-3">
                        <input type="text" name="contact" class="form-control" placeholder="No. HP" required>
                        <div class="input-group-append">
                            </div>
                        </div>
                    <div class="input-group mb-3">
                        <input type="text" name="username" class="form-control" placeholder="Username" required>
                        <div class="input-group-append">
                            </div>
                        </div>
                    <div class="input-group mb-3">
                        <input type="password" name="password" class="form-control" placeholder="Password" required>
                        <div class="input-group-append">
                            </div>
                        </div>
                    <div class="input-group mb-3">
                        <input type="password" name="password-2" class="form-control" placeholder="Konfirmasi Password" required>
                        <div class="input-group-append">
                            </div>
                        </div>
                    </div>
                    
                        <!-- /.col -->
                        <div class="d-grid gap-2 d-md-block" style="margin : 10px">
                            <button type="submit" name="daftar" class="btn bg-purple "  >Daftar</button>
                            <a href='index.php' type="reset" class="btn bg-red " >Kembali</a>
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