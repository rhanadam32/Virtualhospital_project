<?php 
include "../../config/koneksi.php";
if (isset($_POST['ok'])) {
    $a = $_POST['username'];
    $b = $_POST['email'];
    $c = md5($_POST['password']);
    $d = md5($_POST['password-2']);
    $e = $_POST['level'];
    $f = $_POST['nama_lengkap'];
    $g ='';
    $h = $_POST['contact'];
    $i = date('Y-m-d H:i:s');

    $query = mysqli_query($con,"SELECT * from tb_user where username = '$a'");
    $query_check = mysqli_fetch_array($query);
    $query_value = $query_check['username'];
    if ($query_value == $a) {
        echo "<script>
        alert('Username ini sudah terdaftar, silahkan menggunakan username lain !');
        history.back();
        </script>";
    } else {
        if($c == $d){
            $g = $c;
        mysqli_query($con, "insert into tb_user values('','$a','$g','$b','$e','$f','$h','$i')");
            echo "<script>
        alert('data berhasil di Tambah');location.href='index.php?user1';
        </script>";
        } else{
          echo "<script>alert('gagal menambahkan! password tidak sama, harap cek lagi');
          history.back();
            </script>";
        }
    }
    


}
?>
