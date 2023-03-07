<?php 
include "config/koneksi.php";
if (isset($_POST['daftar'])) {
    $a = $_POST['username'];
    $b = $_POST['email'];
    $c = md5($_POST['password']);
    $d = md5($_POST['password-2']);
    $e = 'user';
    $f = $_POST['nama_lengkap'];
    $g ='';
    $h = $_POST['contact'];
    $i = date('Y-m-d H:i:s');

    $query = mysqli_query($con,"SELECT * from tb_user where username = '$a'");
    $query_check = mysqli_fetch_array($query);
    $query_value = $query_check['username'];
    if ( $query_value == $a) {
        echo "<script>
        alert('Username ini sudah terdaftar, silahkan menggunakan username lain !');
        history.back();
        </script>";
    } else {
        if($c == $d){
            $g = $c;
        mysqli_query($con, "insert into tb_user values('','$a','$g','$b','$e','$f','$h','$i')");
            echo "<script>
        alert('Akun anda Berhasi di Daftarkan ! Sekarang anda sudah bisa menggunakan akun anda.');location.href='index.php';
        </script>";
        } else{
          echo "<script>alert('gagal mendaftarkan akun, password tidak sama. silahkan coba lagi!');
          history.back();
            </script>";
        }
    }
    
    

   

}
?>
