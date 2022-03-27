<html>
<head>
	<title>Sistem Penjualan Buku </title>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>

<body>
	<h3 align="center">DATA PENJUALAN BUKU</h3>
	<div class="row justify-content-center">
	<div class="col-xl-12 col-lg-12 col-md-12">
	<div class="card shadow-sm my-0">
	<div class="card-body p-4">
	<div class="row">

	<div class="col-lg-4">
		<?php 
		include"form_data_jual.php";
		?>
	</div>

	<div class="col-lg-8">

		<form action="data_penjualan.php" method="GET">
		<div class="Form-Group">
			<input type="date" name="dari" class="col-lg-3"> s/d 
			<input type="date" name="sampai" class="col-lg-3">
			<button type="submit" value="cari" class="btn btn-sm btn-info mb-2 mt-1">Searching Data</button>
			<a href="cetak_data_penjualan.php" target="_blank" class="btn btn-sm btn-success mb-2 mt-1">Print Data</a>
		</div>
	</form>

		<div class="table-responsive">
		<table class="table table-striped table-bordered">
			<thead>
			<tr>
				<td>No.</td>
				<td>Tanggal Penjualan</td>
				<td>Kode Buku</td>
				<td>Judul Buku</td>
				<td>Harga Buku</td>
				<td>Pembeli</td>
				<td>jumlah Beli</td>
				<td>Diskon</td>
				<td>Total</td>
				<td>Action</td>
			<tr>		
			</thead>
			<tbody>
	<?php
		include"koneksi.php";
		$no=1;

		if(isset($_GET['dari']) && isset($_GET['sampai'])){
		$dari = $_GET['dari'];
		$sampai = $_GET['sampai'];
		$sqls = mysqli_query($con,"Select tbl_penjualan.*, tbl_produk.* from tbl_penjualan JOIN tbl_produk ON tbl_penjualan.kd_jual = tbl_produk.kd_buku  where tgl_jual between '$dari' AND '$sampai' ");
		}
		else{
		$sqls = mysqli_query($con,"Select tbl_penjualan.*, tbl_produk.* from tbl_penjualan JOIN tbl_produk ON tbl_penjualan.kd_jual = tbl_produk.kd_buku  ");
		}
		while($rs = mysqli_fetch_array($sqls)){
		$sqlsum = mysqli_query($con, "Select SUM(total) as total_jumlah from tbl_penjualan");
				$rsum = mysqli_fetch_array($sqlsum);
				$sqlmax = mysqli_query($con, "Select MAX(total) as max from tbl_penjualan");
				$rsmax= mysqli_fetch_array($sqlmax);
				$sqlmin = mysqli_query($con, "Select MIN(total) as min from tbl_penjualan");
				$rsmin = mysqli_fetch_array($sqlmin);
				$sqlavg = mysqli_query($con, "Select AVG(total) as avg from tbl_penjualan");
				$rsavg = mysqli_fetch_array($sqlavg);
		?>
		<tr>
			<td><?php echo"$no"; ?></td>
			<td><?php echo"$rs[tgl_jual]"; ?></td>
			<td><?php echo"$rs[kd_jual]"; ?></td>
			<td><?php echo"$rs[judul_buku]"; ?></td>
			<td><?php echo"Rp. ".number_format($rs['harga'])." "; ?></td>
			<td><?php echo"$rs[pembeli]"; ?></td>
			<td><?php echo"$rs[jml_beli]"; ?></td>
			<td><?php echo"Rp. ".number_format($rs['diskon'])." "; ?></td>
			<td><?php echo"Rp. ".number_format($rs['total'])." ";  ?></td>
			<td>
				<button type="button" class="btn btn-outline-primary"><?php echo"<a href='index.php?page=data_penjualan&&id=update&&edit=$rs[id_jual]'>Edit</a>"; ?></button>
				
				<button type="button" class="btn btn-outline-primary">
				<a href="<?php echo"delete_penjualan.php?id=$rs[id_jual]"; ?>" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini ?')">Delete</a></button>
			</td>
		</tr>
	<?php $no++;	}
	?>
	<tr>
				<td colspan="9">Total Belanja : </td>
				<td colspan="2"><?php echo"Rp. ".number_format($rsum['total_jumlah'])." ";?></td>
			</tr>
			<tr>
				<td colspan="9">Maksimal Belanja : </td>
				<td colspan="2"><?php echo"Rp. ".number_format($rsmax['max'])." ";?></td>
			</tr>
			<tr>
				<td colspan="9">Minimal Belanja : </td>
				<td colspan="2"><?php echo"Rp. ".number_format($rsmin['min'])." ";?></td>
			</tr>
			<tr>
				<td colspan="9">Rata-Rata Belanja : </td>
				<td colspan="2"><?php echo"Rp. ".number_format($rsavg['avg'])." ";?></td>
	</tr>
			</tbody>
		</table>
		</div>
	</div>

	</div>
	</div>
	</div>
	</div>
	</div>
</body>
</html>















