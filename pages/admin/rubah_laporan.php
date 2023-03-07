<?php
include "../../config/koneksi.php";
$a = $_GET['id_report'];
$b = $_POST['status'];

mysqli_query($con, "update tb_buku_medis set status='$b' where id_report ='$a'");
echo "<script>
      alert('Status Laporan Berhasil dirubah !');location.href='index.php?riwayat_diagnosa';
  </script>";
?>
