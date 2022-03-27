<?php
include"koneksi.php";
mysqli_query($con,"delete from tbl_dist where id_dist = '$_GET[id]'");

echo"<script language = 'JavaScript'> confirm('Data Berhasil Dihapus!');
	document.location='index.php?page=data_dist'; </script>";

?>