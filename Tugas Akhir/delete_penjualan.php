<?php
include"koneksi.php";
mysqli_query($con,"delete from tbl_penjualan where id_jual = '$_GET[id]'");

echo"<script language = 'JavaScript'> confirm('Data Berhasil Dihapus!');
	document.location='index.php?page=data_penjualan'; </script>";

?>