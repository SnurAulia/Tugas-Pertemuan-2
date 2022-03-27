<html>
<head>
	<title>Cetak Data Persedian Barang</title>
</head>
<body>
	<?php 
	include 'config-db.php';
	?>
 
	<table border="1" style="width: 100%">
		<tr>
			<th>id</th>
			<th>Tanggal Masuk</th>
			<th>Merk</th>
			<th>Nama Barang</th>
			<th>Stok</th>
			<th width="5%">Harga</th>
		</tr>
		<?php 
        $query = "SELECT * FROM tbl_barang";
        $brg->viewData($query);
		?>
		<tr>
		</tr>
		
	</table>
 
	<script>
		window.print();
	</script>
 
</body>
</html>