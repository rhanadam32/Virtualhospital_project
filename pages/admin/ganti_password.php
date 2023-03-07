<?php
include "../../config/koneksi.php";

if (isset($_POST['ok3'])) {
  $a = $_GET['id_user'];
  $b = md5($_POST['password_lama']);
  $c = md5($_POST['password']);
  $d = md5($_POST['password-2']);
  $e = '';

  $query = mysqli_query($con,"select * from tb_user where password = '$b'");
  $query_check = mysqli_fetch_array($query);
  $query_value = $query_check['password'];
  if ($query_value == $b) {
    if ($c == $d) {
      $e = $c;
      mysqli_query($con, "update tb_user set password='$e' where id_user ='$a'");
      echo "<script>
            alert('Password Berhasil dirubah !');location.href='index.php?user1';
        </script>";
    } else {
      echo "<script>
      alert('Konfirmasi perubahan Password anda salah !');
      history.back();
  </script>";
    }
  } else {
  echo "<script>
        alert('Anda salah memasukan Password yang lama. Coba ingat kembali !');
        history.back();
    </script>";
  }
  
 
}

?>
