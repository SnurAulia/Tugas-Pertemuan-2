<?php
function update_data(){
	include"koneksi.php";
	$sqls = mysqli_query($con, "Select * from tbl_pembelian where id_beli= $_GET[edit]");

	$rs = mysqli_fetch_array($sqls);
?>
<form method="POST">
<div class="card shadow-xl my-0">
<div class="card-body p-3">
	<div class="text-center">
		<h3 class="h4 text-gray-900 mb-2">FORM EDIT PEMBELIAN BUKU</h3>
		<hr><hr>
	</div>
	<div class="form-group">
		<label>Tanggal Pembelian : </label>
		<br>
		<input type="text" name="tgl_beli" class="form-control" value="<?php echo"$rs[tgl_beli]" ?>">
	</div>

	<div class="form-group">
			<label>Kode Buku : </label>
			<br>
			<input type="hidden" name="id_beli" class="form-control" value="<?php echo"$rs[id_beli]" ?>">
			<input type="text" name="kd_beli" class="form-control" value="<?php echo"$rs[kd_beli]" ?>">
	</div>
	
	<div class="form-group">
			<label>Distributor : </label>
			<br>
			<input type="text" name="dist" class="form-control" value="<?php echo"$rs[dist]" ?>">
	</div>
	<div class="form-group">
			<label>Jumlah : </label>
			<br>
			<input type="text" name="jumlah" class="form-control" value="<?php echo"$rs[jumlah]" ?>">
	</div>

	<div class="form-group">
		<input type="submit" name="submit" class="btn btn-primary btn-block" value="Update Data">
	</div>
</div>
</div>
</form>
<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
	include"koneksi.php";
	mysqli_query($con,"update tbl_pembelian set kd_beli='$_POST[kd_beli]', dist='$_POST[dist]', jumlah ='$_POST[jumlah]',tgl_beli='$_POST[tgl_beli]' where id_beli = '$_POST[id_beli]'");
	echo"<script language = 'javaScript'> confirm('Data Berhasil Disimpan!');
	document.location= 'index.php?page=data_pembelian';</script>";
}
?>


<?php
}
?>

<?php
function input_data(){
?>
<form method="POST">
<div class="card shadow-xl my-0">
<div class="card-body p-3">
	<div class="text-center">
		<h1 class="h4 text-gray-900 mb-2">FORM INPUT PEMBELIAN BUKU</h1>
		<hr><hr>
	</div>

	<div class="form-group">
	<label>Tanggal Pembelian  :</label>
	<input type="date" name="tgl_beli" class="form-control">
	</div>

	<div class="form-group">
			<label>Kode Buku : </label>
			<br>
			<select type="text" name="kd_beli" class="form-control">
				<option>~Pilih Kode Buku~</option>
				<?php
				include"koneksi.php";
				$sqls = mysqli_query($con, "select * from tbl_produk");
				while($rs = mysqli_fetch_array($sqls)){
				?>
				<option value="<?php echo "$rs[kd_buku]";?>"><?php echo"$rs[judul_buku]";?></option>
				<?php
				}
				?>
			</select>
	</div>

	<div class="form-group">
			<label>Distributor : </label>
			<br>
			<input type="text" name="dist" class="form-control">
	</div>
	<div class="form-group">
			<label>Jumlah : </label>
			<br>
			<input type="text" name="jumlah" class="form-control">
	</div>
	
	<div class="form-group">
		<input type="submit" name="submit" class="btn btn-primary btn-block" value="Simpan Data">
	</div>
</div>
</div>
</form>

<?php
if($_SERVER['REQUEST_METHOD']=="POST")
{
	include"koneksi.php";

	$sqlb = mysqli_query($con, "select * from tbl_produk where kd_buku= '$_POST[kd_beli]' ");
		$rb = mysqli_fetch_array($sqlb);
			$harga = $rb['harga'];
			$jumlah = $_POST['jumlah'];
			$total = $jumlah * $harga;
			if ($jumlah >= 20){
				$diskon = $total * 0.015;
			}
			elseif ($jumlah >= 15){
				$diskon = $total * 0.1;
			}
			elseif ($jumlah >= 10){
				$diskon = $total * 0.05;
			}else{
				$diskon = $total * 0;
			}
			$tot = $total - $diskon;

	
	mysqli_query($con, "insert into tbl_pembelian (tgl_beli, kd_beli, dist, jumlah, diskon, total) values ('$_POST[tgl_beli]', '$_POST[kd_beli]', '$_POST[dist]','$_POST[jumlah]', '$diskon', '$tot')");
	echo"<script language = 'javaScript'> confirm('Data Berhasil Disimpan!');
	document.location= 'index.php?page=data_pembelian';</script>";
}
?>

<?php
}
?>

<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
$id = $_GET['id'];
if($id == "update"){
	update_data();
}else{
	input_data();
}
?>

