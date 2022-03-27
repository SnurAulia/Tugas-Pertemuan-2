<?php
include"koneksi.php";
mysqli_query($con,"delete from tbl_pembelian where id_beli = '$_GET[id]'");

echo"<script language = 'JavaScript'> confirm('Data Berhasil Dihapus!');
	document.location='index.php?page=data_pembelian'; </script>";

?>