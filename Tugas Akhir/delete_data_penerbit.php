<?php
include"koneksi.php";
mysqli_query($con,"delete from tbl_penerbit where id_penerbit = '$_GET[id]'");

echo"<script language = 'JavaScript'> confirm('Data Berhasil Dihapus!');
	document.location='index.php?page=data_penerbit'; </script>";

?>