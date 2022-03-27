<?php
include 'model.php';
$model = new Model();
$model = new Model2();
$index = 1;
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Data Barang Keluar</title>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php?page=beranda">Persediaan Barang</a>
  </div>
   <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="masuk.php">Barang Masuk</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="keluar.php">Barang Keluar</a>
        </li>
</nav>

	<div>
		<h1 align="center">Data Barang Keluar</h1>
		<a href="input.php">Tambah Data</a>
		<br>
		<a href="print_keluar.php" target="_blank">Cetak Data</a>
		<br>
		<div class="table-responsive">
		<table class="table table-striped table-bordered">
			<thead>
			<tr>
				<td>No.</td>
				<td>Kode Barang</td>
				<td>Tanggal Barang Keluar</td>
				<td>Nama Barang</td>
				<td>Harga</td>
				<td>Jumlah Masuk</td>
				<td>Stok</td>
				<td>Kategori</td>
				<td>Action</td>
			<tr>		
			</thead>
		<tbody>
				<?php
				$result = $model->tampil_data();
				if (!empty($result)) {
					foreach ($result as $data) : ?>
						<tr>
							<td><?= $index++?></td>
							<td><?= $data->kd_barang ?></td>
							<td><?= $data->tgl_keluar ?></td>
							<td><?= $data->nm_barang ?></td>
							<td><?= $data->harga  ?></td>
							<td><?= $data->jml  ?></td>
							<td><?= $data->stok ?></td>
							<td><?= $data->kat ?></td>
							<td>
								<a name="edit" id="edit"href="edit_keluar.php?kd_barang=<?= $data->kd_barang ?>">Edit</a>
								<a name="hapus" id="hapus"href="proses_keluar.php?kd_barang=<?= $data->kd_barang ?>">Delete</a>
							</td>
						</tr>
					<?php endforeach;
				}else{ ?>
					<tr>
						<td colspan="9">Belum ada data pada tabel barang ! </td>
					</tr>
					<?php
				} ?>
			</tbody>
		</table>
	</tr>
	</div>
</body>
</html>