<?php 
function Update_data(){
include"koneksi.php";
$sqls = mysqli_query($con,"Select * from tbl_dist where id_dist = $_GET[edit]");
$rs = mysqli_fetch_array($sqls);
?>
<form method="POST">
<div class="text-center">
<h3 class="h4 text-gray-900 mb 4">FORM EDIT DATA DISTRIBUTOR</h3>
</div>
	<div class="form-group">
	<label>Kode Distributor:</label>
	<input type="hidden" name="id_dist" class="form-control" value="<?php echo"$rs[id_dist]" ?>">
	<input type="text" name="kd_dist" class="form-control" value="<?php echo"$rs[kd_dist]" ?>">
	</div>

	<div class="form-group">
	<label>Nama Distributor :</label>
	<input type="text" name="nm_dist" class="form-control" value="<?php echo"$rs[nm_dist]" ?>">
	</div>

	<div class="form-group">
	<label>Alamat:</label>
	<input type="text" name="alm" class="form-control" value="<?php echo"$rs[alm]" ?>">
	</div>

	<div class="form-group">
	<label>Kota:</label>
	<input type="text" name="kota" class="form-control" value="<?php echo"$rs[kota]" ?>">
	</div>

	<div class="form-group">
	<label>No.Telp:</label>
	<input type="text" name="telp" class="form-control" value="<?php echo"$rs[telp]" ?>">
	</div>

	<div class="form-group">
	<label>E-mail:</label>
	<input type="text" name="email" class="form-control" value="<?php echo"$rs[email]" ?>">
	</div>

	<div class="form-group">
	<input type="submit" name="submit" class="btn btn-info" value="Update Data">
	</div>

</form>
<?php
if($_SERVER['REQUEST_METHOD']== "POST"){
	include"koneksi.php";
	mysqli_query($con,"update tbl_dist set kd_dist ='$_POST[kd_dist]', nm_dist='$_POST[nm_dist]', alm='$_POST[alm]', kota='$_POST[kota]', telp='$_POST[telp]', email='$_POST[email]' where id_dist='$_POST[id_dist]'");

	echo"<script language = 'JavaScript'> confirm('Data Berhasil Diupdate!');
	document.location='index.php?page=data_dist'; </script>";
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
<h3 class="h4 text-gray-900 mb 4">FORM INPUT DATA DISTRIBUTOR</h3>
</div>
	<div class="form-group">
	<label>Kode Distributor :</label>
	<input type="text" name="kd_dist" class="form-control">
	</div>

	<div class="form-group">
	<label>Nama Distributor :</label>
	<input type="text" name="nm_dist" class="form-control">
	</div>

	<div class="form-group">
	<label>Alamat :</label>
	<input type="text" name="alm" class="form-control">
	</div>

	<div class="form-group">
	<label>Kota :</label>
	<input type="text" name="kota" class="form-control">
	</div>

	<div class="form-group">
	<label>No.Telp :</label>
	<input type="text" name="telp" class="form-control">
	</div>

	<div class="form-group">
	<label>E-mail:</label>
	<input type="text" name="email" class="form-control">
	</div>

	<div class="form-group">
	<input type="submit" name="submit" class="btn btn-info" value="Simpan Data">
	</div>

</form>

<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
	include"koneksi.php";
	mysqli_query($con, "insert into tbl_dist (kd_dist, nm_dist, alm, kota, telp, email) values ('$_POST[kd_dist]', '$_POST[nm_dist]','$_POST[alm]','$_POST[kota]','$_POST[telp]', '$_POST[email]')");

	echo"<script language = 'JavaScript'> confirm('Data Berhasil Disimpan!');
	document.location='index.php?page=data_dist'; </script>";
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






