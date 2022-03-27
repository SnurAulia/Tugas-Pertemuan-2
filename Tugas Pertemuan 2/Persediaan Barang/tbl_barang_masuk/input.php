<!DOCTYPE html>
<html lang="en">
<head>
	<title>Input Data Barang Masuk</title>
</head>
<body>
	<h1>Tambah Data Barang Masuk</h1>
	<hr>
	<a href="home.php">Kembali</a>
	<br><br>

<form action="proses.php" method="post">
<div class="card shadow-xl my-0">
<div class="card-body p-3">
	<div class="text-center">
		<h3 class="h4 text-gray-900 mb-2">FORM INPUT DATA BARANG MASUK</h3>
		<hr><hr>
	</div>
	<div class="form-group">
			<label>Kode Barang : </label>
			<br>
			<input type="text" name="kd_barang" class="form-control">
	</div>
	<div class="form-group">
		<label>Tanggal Barang Masuk : </label>
		<br>
		<input type="text" name="tgl_masuk" class="form-control">
	</div>
	<div class="form-group">
			<label>Nama Barang : </label>
			<br>
			<input type="text" name="nm_barang" class="form-control">
	</div>
	<div class="form-group">
			<label>Harga : </label>
			<br>
			<input type="text" name="harga" class="form-control">
	</div>
	</div>
	<div class="form-group">
			<label>Jumlah Masuk : </label>
			<br>
			<input type="text" name="jml" class="form-control">
	</div>
	<div class="form-group">
			<label>Stok : </label>
			<br>
			<input type="text" name="stok" class="form-control">
	</div>
	<div class="form-group">
			<label>Kategori : </label>
			<br>
			<input type="text" name="kat" class="form-control">
	</div>
	<div class="form-group">
		<input type="submit" name="simpan" class="btn btn-primary btn-block" value="Simpan Data">
	</div>
	<div class="form-group">
		<input type="reset" name="reset" class="btn btn-primary btn-block" value="Reset">
	</div>