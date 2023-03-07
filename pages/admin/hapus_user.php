<?php
include "../../config/koneksi.php";
$x = $_GET['id_user'];
mysqli_query($con, "DELETE FROM tb_user WHERE id_user='$x'");
echo "<script>alert('data berhasil dihapus');location.href='index.php?user1';</script>";
