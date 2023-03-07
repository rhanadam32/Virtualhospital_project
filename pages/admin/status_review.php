<?php
include "../../config/koneksi.php";
$a = $_GET['id_report'];
$b = "direview";

mysqli_query($con, "update tb_buku_medis set status='$b' where id_report ='$a'");
echo "<script>
      alert('Laporan ini berhasil di terima !');location.href='index.php?riwayat_diagnosa';
  </script>";
?>
