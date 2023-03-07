<?php
include "../../config/koneksi.php";
$a = $_GET['id_user'];
$b = $_POST['username'];
$c = $_POST['email'];
$d = $_POST['nama_lengkap'];
mysqli_query($con, "update tb_user set username='$b', email='$c', nama_lengkap='$d' where id_user ='$a'");
echo "<script>
      alert('data berhasil di edit');location.href='index.php?user1';
  </script>";
?>
