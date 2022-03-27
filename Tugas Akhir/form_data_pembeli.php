<?php 
function Update_data(){
include"koneksi.php";
$sqls = mysqli_query($con,"Select * from tbl_pembeli where id_pembeli = $_GET[edit]");
$rs = mysqli_fetch_array($sqls);
?>
<form method="POST">
<div class="text-center">
<h3 class="h4 text-gray-900 mb 4">FORM EDIT DATA PEMBELI </h3>
</div>

	<div class="form-group">
	<label>Nama Pembeli :</label>
	<input type="text" name="nm_pembeli" class="form-control" value="<?php echo"$rs[nm_pembeli]" ?>">
	</div>

	<div class="form-group">
	<label>Alamat Pembeli :</label>
	<input type="text" name="alm" class="form-control" value="<?php echo"$rs[alm]" ?>">
	</div>

	<div class="form-group">
	<input type="submit" name="submit" class="btn btn-info" value="Update Data">
	</div>

</form>
<?php
if($_SERVER['REQUEST_METHOD']== "POST"){
	include"koneksi.php";
	mysqli_query($con,"update tbl_pembeli set nm_dist='$_POST[nm_dist]', alm='$_POST[alm]' where id_pembeli='$_POST[id_pembeli]'");
	echo"<script language = 'JavaScript'> confirm('Data Berhasil Diupdate!');
	document.location='index.php?page=data_pembeli'; </script>";
}
?>
<?php
}
?>


<?php 
function Input_data(){
?>
<form method="POST">
<div class="text-center">
<h3 class="h4 text-gray-900 mb 4">FORM INPUT DATA PEMBELI</h3>
</div>
	<div class="form-group">
	<label>Nama Pembeli :</label>
	<input type="text" name="nm_pembeli" class="form-control">
	</div>

	<div class="form-group">
	<label>Alamat Pembeli :</label>
	<input type="text" name="alm" class="form-control">
	</div>

	<div class="form-group">
	<input type="submit" name="submit" class="btn btn-info" value="Simpan Data">
	</div>

</form>

<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
	include"koneksi.php";
	mysqli_query($con, "insert into tbl_pembeli (nm_pembeli, alm) values ('$_POST[nm_pembeli]','$_POST[alm]' )");

	echo"<script language = 'JavaScript'> confirm('Data Berhasil Disimpan!');
	document.location='index.php?page=data_pembeli';</script>";
}
?>
<?php
}
?>

<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
$id = $_GET['id'];
if($id == "update"){
	Update_data();
}else{
	Input_data();
}
?>






