<?php 
function Update_data(){
include"koneksi.php";
$sqls = mysqli_query($con,"Select * from tbl_penerbit where id_penerbit = $_GET[edit]");
$rs = mysqli_fetch_array($sqls);
?>
<form method="POST">
<div class="text-center">
<h3 class="h4 text-gray-900 mb 4">FORM EDIT DATA PENERBIT</h3>
</div>

	<div class="form-group">
	<label>Kode Penerbit :</label>
	<input type="text" name="kd_penerbit" class="form-control" value="<?php echo"$rs[kd_penerbit]" ?>">
	</div>

	<div class="form-group">
	<label>Nama Penerbit :</label>
	<input type="text" name="nm_penerbit" class="form-control" value="<?php echo"$rs[nm_penerbit]" ?>">
	</div>

	<div class="form-group">
	<input type="submit" name="submit" class="btn btn-info" value="Update Data">
	</div>

</form>
<?php
if($_SERVER['REQUEST_METHOD']== "POST"){
	include"koneksi.php";
	mysqli_query($con,"update tbl_pembeli set kd_penerbit='$_POST[kd_penerbit]', nm_penerbit='$_POST[nm_penerbit]' where id_penerbit='$_POST[id_penerbit]'");

	echo"<script language = 'JavaScript'> confirm('Data Berhasil Diupdate!');
	document.location='index.php?page=data_penerbit';</script>";
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
<h3 class="h4 text-gray-900 mb 4">FORM INPUT DATA PENERBIT</h3>
</div>
	<div class="form-group">
	<label>Kode Penerbit :</label>
	<input type="text" name="kd_penerbit" class="form-control">
	</div>

	<div class="form-group">
	<label>Nama Penerbit:</label>
	<input type="text" name="nm_penerbit" class="form-control">
	</div>

	<div class="form-group">
	<input type="submit" name="submit" class="btn btn-info" value="Simpan Data">
	</div>

</form>

<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
	include"koneksi.php";
	mysqli_query($con, "insert into tbl_penerbit (kd_penerbit,nm_penerbit)values ('$_POST[kd_penerbit]','$_POST[nm_penerbit]' )");

	echo"<script language = 'JavaScript'> confirm('Data Berhasil Disimpan!');
	document.location='index.php?page=data_penerbit';</script>";
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






