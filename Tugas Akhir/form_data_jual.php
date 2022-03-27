<?php 
function Update_data(){
include"koneksi.php";
$sqls = mysqli_query($con,"Select * from tbl_penjualan where id_jual = $_GET[edit]");
$rs = mysqli_fetch_array($sqls);
?>
<form method="POST">
<div class="text-center">
<h3 class="h4 text-gray-900 mb 4">EDIT PENJUALAN BUKU</h3>
</div>
	<div class="form-group">
	<label>Tanggal Penjualan :</label>
	<input type="hidden" name="id_jual" class="form-control" value="<?php echo"$rs[id_jual]" ?>">
	<input type="text" name="tgl_jual" class="form-control" value="<?php echo"$rs[tgl_jual]" ?>">
	</div>

	<div class="form-group">
	<label>Kode Buku : </label>
	<br>
	<input type="hidden" name="id_jual" class="form-control" value="<?php echo"$rs[id_jual]" ?>">
	<input type="text" name="kd_jual" class="form-control" value="<?php echo"$rs[kd_jual]" ?>">
	</div>

	<div class="form-group">
	<label>Pembeli :</label>
	<input type="text" name="pembeli" class="form-control" value="<?php echo"$rs[pembeli]" ?>">
	</div>

	<div class="form-group">
	<label>Jumlah Beli :</label>
	<input type="text" name="jml_beli" class="form-control" value="<?php echo"$rs[jml_beli]" ?>">
	</div>

	<div class="form-group">
	<input type="submit" name="submit" class="btn btn-info" value="Update Data">
	</div>

</form>
<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
	include"koneksi.php";
	mysqli_query($con,"update tbl_penjualan set kd_jual='$_POST[kd_jual]', pembeli='$_POST[pembeli]', jml_beli ='$_POST[jml_beli]',tgl_jual='$_POST[tgl_jual]' where id_jual= '$_POST[id_jual]'");
	echo"<script language = 'javaScript'> confirm('Data Berhasil Disimpan!');
	document.location= 'index.php?page=data_penjualan';</script>";
	
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
<h3 class="h4 text-gray-900 mb 4">INPUT DATA PENJUALAN BUKU</h3>
</div>
	<div class="form-group">
	<label>Tanggal Penjualan :</label>
	<input type="date" name="tgl_jual" class="form-control">
	</div>

	<div class="form-group">
	<label>Kode Buku :</label>
	<select name="kd_jual" class="form-control">
		<option>~Pilih Kode Buku~</option>
		<?php
		include"koneksi.php";
		$sqls = mysqli_query($con,"select * from tbl_produk");
		while($rs = mysqli_fetch_array($sqls)){
		?>
		<option value="<?php echo"$rs[kd_buku]"; ?>"><?php echo"$rs[judul_buku]"; ?></option>
		<?php
		}
		?>
	</select>
	</div>

	<div class="form-group">
	<label>Pembeli :</label>
	<input type="text" name="pembeli" class="form-control">
	</div>

	<div class="form-group">
	<label>Jumlah Beli :</label>
	<input type="text" name="jml_beli" class="form-control">
	</div>

	<div class="form-group">
	<input type="submit" name="submit" class="btn btn-info" value="Simpan Data">
	</div>

</form>

<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
	include"koneksi.php";

	$sqlb = mysqli_query($con,"select * from tbl_produk where kd_buku = '$_POST[kd_jual]' ");
		$rb = mysqli_fetch_array($sqlb);

	$harga = $rb['harga'];
	$jumlah = $_POST['jml_beli'];
	$total = $jumlah * $harga;

	if($jumlah >= 25){
		$diskon = $total * 0.15;
	}
	else if($jumlah >= 15){
		$diskon = $total * 0.1;
	}
	else if($jumlah >= 10){
		$diskon = $total * 0.05;
	}
	else{
		$diskon = $total * 0;
	}

	$tot = $total - $diskon;


	mysqli_query($con, "insert into tbl_penjualan (tgl_jual, kd_jual, pembeli, jml_beli, diskon, total) values ('$_POST[tgl_jual]', '$_POST[kd_jual]','$_POST[pembeli]','$_POST[jml_beli]', '$diskon', '$tot')");

	echo"<script language = 'JavaScript'> confirm('Data Berhasil Disimpan!');
	document.location='index.php?page=data_penjualan';</script>";
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






