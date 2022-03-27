<?php
include"koneksi.php";
mysqli_query($con,"delete from tbl_produk where id_buku = '$_GET[id]'");

echo"<script language = 'JavaScript'> confirm('Data Berhasil Dihapus!');
	document.location='index.php?page=data_produk'; </script>";

?>