<html>
<head>
	<meta charset="UTF-8">
	<title>Kelola Data Toko Buku</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-md">
    <a class="navbar-brand" href="index.php?page=beranda">SUKA-SUKA</a>
  </div>
</nav>

<div class="row">
	<div class="col-xl-12 col-lg-12 col-md-12">
	<div class="card shadow-sm my-0">
	<div class="card-body p-4">
	<div class="row">
	<div class="col-lg-3">
	<h3 align="center">MENU</h3>
	<div id="list-example" class="list-group">
  <a class="list-group-item list-group-item-primary list-group-item-action" href="index.php?page=data_produk">Data Buku</a>
  <a class="list-group-item list-group-item-light list-group-item-action" href="index.php?page=data_pembelian">Data Pembelian Buku</a>
  <a class="list-group-item list-group-item-primary list-group-item-action" href="index.php?page=data_penjualan">Data Penjualan Buku</a>
  <a class="list-group-item list-group-item-light list-group-item-action" href="index.php?page=data_penerbit">Data Penerbit</a>
  <a class="list-group-item list-group-item-primary list-group-item-action" href="index.php?page=data_dist">Kelola Distributor</a>
</div>

		<h3 align="center" style="margin-top: 15px">Setting</h3>
  			<a class="list-group-item list-group-item-primary list-group-item-action" href="index.php?page=login">Login</a>
 			<a class="list-group-item list-group-item-light list-group-item-action" href="index.php?page=beranda">Logout</a>
	</div>

	<div class="col-lg-9">
		<?php
		if (isset($_GET['page'])) {
			$page = $_GET['page'];
			switch ($page) {
				case 'data_produk':
					include'data_produk.php';
					break;
				case 'data_pembelian':
					include'data_pembelian.php';
					break;
				case 'data_penjualan':
					include'data_penjualan.php';
					break;
				case 'data_penerbit':
					include'data_penerbit.php';
					break;
				case 'data_dist':
					include'data_dist.php';
					break;
				case 'beranda':
					include'beranda.php';
					break;
				case 'login':
					include'login.php';
					break;
				default:
					echo"Maaf, Halaman Not Found";
					break;
			}
		} else{
			include"beranda.php";
		}
		?>
    </div>

</div>
</div>
</div>
</div>
</div>

<div class="footer">
<p align="center">Copyright &copy; 2022 Siti Nur Aulia </p></div>
</div>
</body>
</html>




