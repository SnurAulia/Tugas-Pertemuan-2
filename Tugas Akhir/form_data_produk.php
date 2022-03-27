<?php 
function Update_data(){
include"koneksi.php";
$sqls = mysqli_query($con,"Select * from tbl_produk where id_buku = $_GET[edit]");
$rs = mysqli_fetch_array($sqls);
?>
<form method="POST">
<div class="text-center">
<h3 class="h4 text-gray-900 mb 4">FORM EDIT DATA BUKU </h3>
</div>
	<div class="form-group">
	<label>Kode Buku :</label>
	<input type="hidden" name="id_buku" class="form-control" value="<?php echo"$rs[id_buku]" ?>">
	<input type="text" name="kd_buku" class="form-control" value="<?php echo"$rs[kd_buku]" ?>">
	</div>

	<div class="form-group">
	<label>Judul Buku :</label>
	<input type="text" name="judul_buku" class="form-control" value="<?php echo"$rs[judul_buku]" ?>">
	</div>

	<div class="form-group">
	<label>Penulis :</label>
	<input type="text" name="penulis" class="form-control" value="<?php echo"$rs[penulis]" ?>">
	</div>

	<div class="form-group">
	<label>Penerbit :</label>
	<input type="text" name="penerbit" class="form-control" value="<?php echo"$rs[penerbit]" ?>">
	</div>

	<div class="form-group">
	<label>Harga :</label>
	<input type="text" name="harga" class="form-control" value="<?php echo"$rs[harga]" ?>">
	</div>

	<div class="form-group">
	<label>Stok :</label>
	<input type="text" name="stok" class="form-control" value="<?php echo"$rs[stok]" ?>">
	</div>

	<div class="form-group">
	<label>Kategori :</label>
	<input type="text" name="kat" class="form-control" value="<?php echo"$rs[kat]" ?>">
	</div>

	<div class="form-group">
	<input type="submit" name="submit" class="btn btn-info" value="Update Data">
	</div>

</form>
<?php
if($_SERVER['REQUEST_METHOD']== "POST"){
	include"koneksi.php";
	mysqli_query($con,"update tbl_produk set kd_buku='$_POST[kd_buku]', judul_buku='$_POST[judul_buku]', penulis='$_POST[penulis]', penerbit='$_POST[penerbit]', harga='$_POST[harga]', stok='$_POST[stok]', kat='$_POST[kat]' where id_buku='$_POST[id_buku]'");

	echo"<script language = 'JavaScript'> confirm('Data Berhasil Diupdate!');
	document.location='index.php?page=data_produk';</script>";
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
<h3 class="h4 text-gray-900 mb 4">FORM INPUT DATA BUKU</h3>
</div>
	<div class="form-group">
	<label>Kode Buku:</label>
	<input type="text" name="kd_buku" class="form-control">
	</div>

	<div class="form-group">
	<label>Judul Buku:</label>
	<input type="text" name="judul_buku" class="form-control">
	</div>

	<div class="form-group">
	<label>Penulis:</label>
	<input type="text" name="penulis" class="form-control">
	</div>

	<div class="form-group">
	<label>Penerbit:</label>
	<input type="text" name="penerbit" class="form-control">
	</div>

	<div class="form-group">
	<label>Harga :</label>
	<input type="text" name="harga" class="form-control">
	</div>

	<div class="form-group">
	<label>Stok :</label>
	<input type="text" name="stok" class="form-control">
	</div>

	<div class="form-group">
	<label>Kategori :</label>
	<input type="text" name="kat" class="form-control">
	</div>

	<div class="form-group">
	<input type="submit" name="submit" class="btn btn-info" value="Simpan Data">
	</div>

</form>

<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
	include"koneksi.php";
	mysqli_query($con, "insert into tbl_produk (kd_buku, judul_buku, penulis, penerbit, harga, stok, kat) values ('$_POST[kd_buku]', '$_POST[judul_buku]', '$_POST[penerbit]','$_POST[penulis]','$_POST[harga]','$_POST[stok]','$_POST[kat]')");

	echo"<script language = 'JavaScript'> confirm('Data Berhasil Disimpan!');
	document.location='index.php?page=data_produk';</script>";
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






