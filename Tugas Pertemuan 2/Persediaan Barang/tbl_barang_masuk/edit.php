<?php
$id = $_GET["kd_barang"];
include 'model.php';
$model = new Model ();
$data = $model->edit($id);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Edit Data Barang</title>
</head>
<body>
    <h1>Edit Data Barang</h1>
    <a href="index.php">Kembali</a>
    <br><br>
<form method="POST">
<div class="card shadow-xl my-0">
<div class="card-body p-3">
	<div class="text-center">
		<h3 class="h4 text-gray-900 mb-2">FORM EDIT DATA BARANG</h3>
		<hr><hr>
	</div>
	<div class="form-group">
			<label>Kode Barang : </label>
			<br>
			<input type="text" name="kd_barang" value="<?php echo $data->kd_barang ?>">
	</div>
	<div class="form-group">
		<label>Tanggal Barang Masuk : </label>
		<br>
		<input type="text" name="tgl_masuk" value="<?php echo $data->tgl_masuk?>">
	</div>
	<div class="form-group">
			<label>Nama Barang : </label>
			<br>
			<input type="text" name="nm_barang" value="<?php echo $data->nm_barang?>">
	</div>
	<div class="form-group">
			<label>Harga : </label>
			<br>
			<input type="text" name="harga" value="<?php echo $data->harga ?>">
	</div>
	<div class="form-group">
			<label>Jumlah Masuk : </label>
			<br>
			<input type="text" name="jml" value="<?php echo $data->jml ?>">
	</div>
	<div class="form-group">
			<label>Stok: </label>
			<br>
			<input type="text" name="stok" value="<?php echo $data->stok ?>">
	</div>
	<div class="form-group">
			<label>Kategori : </label>
			<br>
			<input type="text" name="nama" value="<?php echo $data->kat ?>">
	</div>
	<div class="form-group">
		<input type="submit" name="edit" class="btn btn-primary btn-block" value="Simpan Data">
	</div>
	<div class="form-group">
		<input type="reset" name="reset" class="btn btn-primary btn-block" value="Reset">
	</div>