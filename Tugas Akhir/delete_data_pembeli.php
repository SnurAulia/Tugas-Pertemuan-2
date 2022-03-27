<?php
include"koneksi.php";
mysqli_query($con,"delete from tbl_pembeli where id_pembeli = '$_GET[id]'");

echo"<script language = 'JavaScript'> confirm('Data Berhasil Dihapus!');
	document.location='index.php?page=data_pembeli'; </script>";

?>