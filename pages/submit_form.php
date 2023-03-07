<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<?php
include '../config/koneksi.php';

if (isset($_POST['kirim'])) {

    //ambil data foto
    $ekstensi_allowed  = array('png', 'jpg', 'jpeg', 'bmp');
    $namefile = $_FILES['upload_foto']['name'];
    $temp_name = $_FILES['upload_foto']['tmp_name'];
    $xpl = explode('.', $namefile);
    $ekstensi = strtolower(end($xpl));
    $ukuran_file = $_FILES['upload_foto']['size'];

    //data user dari form
    $a = $_POST['nama'];
    $b = $_POST['usia'];
    $c = $_POST['gender'];
    $d = $_POST['pekerjaan'];
    $e = $_POST['riwayat_penyakit'];
    $f = $_POST['keluhan_sakit'];
    $g = $_POST['alamat'];
    $h = $_POST['contact'];
    $i = $_POST['id_user'];
    $j = "terkirim";
    $k = date('Y-m-d H:i:s');

    //lokasi file
    $dirUp = "uploaded_photo/";


    //cek format file
    if (in_array($ekstensi, $ekstensi_allowed) === true) {
        //jika file kurang dari 10 MB
        if ($ukuran_file < 1442000) {
            //direktori file
            move_uploaded_file($temp_name, $dirUp . $namefile);
            // menambah data user
            $up = mysqli_query($con, "insert into tb_buku_medis values('','$a','$b','$c','$d','$e','$f','$namefile','$g','$h','$i','$j','$k')");

            if ($up) {
                echo "
                <script>
                $(window).on('load', function() {
                    alert('Data Berhasil terkirim!')
                    $('#myModal').modal('show');
                });
               function tutup() {
                location.href='index.php';
               }  
               </script>
                <div class='container'>
               
                <!-- Modal -->
                <div class='modal fade' id='myModal' role='dialog'>
                    <div class='modal-dialog'>
                    
                    <!-- Modal content-->
                    <div class='modal-content'>
                        <div class='modal-header'>
                        <button type='button' class='close' onclick='tutup()'  data-dismiss='modal'>&times;</button>
                        <h1 class='modal-title'>Donasi</h1>
                        </div>
                        <div class='modal-body bg-purple'>
                        <p>Jika Aplikasi ini terasa bermanfaat untuk orang lain , alangkah baiknya kita berdonasi.</p>
                        <p>Bisa melalui rekening : </p>
                        <table border=0>
                        <tr>
                        <td><img src='../icon/BSI.png' style='width : 60px; height:45px ;margin :25px;'></td>
                        <td>Bank Syariah Indonesia :</td>
                        <td><b>7201410376</b></td>
                        </tr>
                        <tr>
                        <td><img src='../icon/BRI.png' style='width : 60px; height:45px;margin :25px;'></td>
                        <td>Bank Republik Indonesia :</td>
                        <td><b>6546-01-020066-53-5</b></td>
                        </tr>
                        </table>
                           
                           
                        </div>
                        <div class='modal-footer'>
                        <button type='button' class='btn btn-purple' onclick='tutup()' data-dismiss='modal'>Close</button>
                        </div>
                    </div>
                    
                    </div>
                </div>
                
                </div>

                
              
                ";
            } else {
                echo "<script>
                    alert('Gagal mengirim data !');history.back();
                    </script>";
            }
        } else {
            echo "<script>
            alert('Foto Gagal di Upload karena hanya membutuhkan ukuran sekitar 10 MB.');history.back();
            </script>";
        }
    } else {
        echo "<script>
        alert('Format File mendukung *.png , *.jpg, *.jpeg, *.bmp');history.back();
        </script>";
    }
}
