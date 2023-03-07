<div class="row mb-2">
    <div class="col-sm-6">
        <h1 class="m-0">Dashboard</h1>
    </div><!-- /.col -->
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item active">Home</li>
        </ol>
    </div><!-- /.col -->
</div><!-- /.row -->
</div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="content">
    <div class="container-fluid">

   
    <div class="alert bg-purple alert-dismissible fade show" role="alert">
    <h4 class="alert-heading">Selamat Datang!</h4>
    Hallo,<strong> <?= $profil['nama_lengkap'];?></strong> anda login sebagai <b><?= $profil['level'];?></b> .
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
        <div class="row">
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-info">
                    <div class="inner">

                        <h3>
                            <?php


                            // mengambil data barang
                            $a1 = mysqli_query($con, "SELECT * FROM tb_buku_medis");

                            // menghitung data barang
                            $jumlah_kategori = mysqli_num_rows($a1);

                            echo $jumlah_kategori;
                            ?>
                        </h3>

                        <p>Daftar Laporan Pasien</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-book"></i>
                    </div>
                    <a href="index.php?riwayat_diagnosa" class="small-box-footer">Info Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <!---tambah menu transaksi--->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-warning">
                    <div class="inner">

                        <h3>
                            <?php


                            // mengambil data barang
                            $a1 = mysqli_query($con, "SELECT * FROM tb_user");

                            // menghitung data barang
                            $jumlah_transaksi = mysqli_num_rows($a1);

                            echo $jumlah_transaksi;
                            ?>
                        </h3>

                        <p>Akun</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-user"></i>
                    </div>
                    <a href="index.php?user1" class="small-box-footer">Info Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
           

        </div>