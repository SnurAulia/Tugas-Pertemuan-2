<html>
<head>
	<title>Data Distributor</title>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>

<body>
	<h3 align="center">DATA DISTRIBUTOR</h3>
	<div class="row justify-content-center">
	<div class="col-xl-12 col-lg-12 col-md-12">
	<div class="card shadow-sm my-0">
	<div class="card-body p-4">
	<div class="row">

	<div class="col-lg-4">
		<?php 
		include"form_data_dist.php";
		?>
	</div>

	<div class="col-lg-8">

	<form action="data_dist.php" method="GET">
		<div class="Form-Group">
			<input type="text" name="cari" class="col-lg-4">
			<button type="submit" value="cari" class="btn btn-sm btn-info mb-2 mt-1">Searching Data</button>
			<a href="cetak_data_dist.php" target="_blank" class="btn btn-sm btn-success mb-2 mt-1">Print Data</a>
		</div>
	</form>

		<div class="table-responsive">
		<table class="table table-striped table-bordered">
			<thead>
			<tr>
				<td>No.</td>
				<td>Kode Distributor</td>
				<td>Nama Distributor</td>
				<td>Alamat</td>
				<td>Kota</td>
				<td>No.Telp</td>
				<td>E-mail</td>
				<td>Action</td>
			<tr>		
			</thead>
			<tbody>
	<?php
		include"koneksi.php";
		$no=1;

		if(isset($_GET['cari'])){
		$cari = $_GET['cari'];
		$sqls = mysqli_query($con,"Select * from tbl_dist where kd_dist like '%".$cari."%' OR nm_dist like '%".$cari."%' ");
		}else{
		$sqls = mysqli_query($con,"Select * from tbl_dist ");
		}
		while($rs = mysqli_fetch_array($sqls)){
		?>	
		<tr>
			<td><?php echo"$no"; ?></td>
			<td><?php echo"$rs[kd_dist]"; ?></td>
			<td><?php echo"$rs[nm_dist]"; ?></td>
			<td><?php echo"$rs[alm]"; ?></td>
			<td><?php echo"$rs[kota]"; ?></td>
			<td><?php echo"$rs[telp]"; ?></td>
			<td><?php echo"$rs[email]"; ?></td>
			<td>
				<button type="button" class="btn btn-outline-primary"><?php echo"<a href='index.php?page=data_dist&&id=update&&edit=$rs[id_dist]'>Edit</a>"; ?></button>
				
				<button type="button" class="btn btn-outline-primary">
				<a href="<?php echo"delete_data_dist.php?id=$rs[id_dist]"; ?>" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini ?')">Delete</a></button>
			</td>
		</tr>
	<?php $no++;	}
	?>
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















