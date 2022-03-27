<body onload="javascript:window.print()" style="margin:0 auto; width:1000px">
<div style="margin-left: 20px"></div>
<p>&nbsp;</p>

<table width="100%" cellpadding="0" cellspacing="0">
	<tr>
		<td><div align="center"><font size="7">PT. Suka-Suka</font></div></td>
	</tr>
	<tr>
		<td><div align="center"><font size="3">Jalan Raya Cirebon Cilimus, Kondangsari, Beber, Kec. Beber, Kabupaten Cirebon, Jawa Barat 45172  - No.Telp : 081234567891</font></div></td>
	</tr>
</table><hr>

<label><font size="5"><u><center>Laporan Data Penjualan Produk</center></u></font></label>

<p>&nbsp;</p>

<table style="border: 1px solid gray;" width="100%" cellpadding="0" cellspacing="0">
	<tr>
		<th style="border-right: 1px solid gray">NO</th>
		<th style="border-right: 1px solid gray">Tanggal Penjualan </th>
		<th style="border-right: 1px solid gray">Kode Buku</th>
		<th style="border-right: 1px solid gray">Judul Buku</th>
		<th style="border-right: 1px solid gray">Harga Buku</th>
		<th style="border-right: 1px solid gray">Pembeli</th>
		<th style="border-right: 1px solid gray">Jumlah Beli</th>
		<th style="border-right: 1px solid gray">Diskon</th>
		<th style="border-right: 1px solid gray">Total</th>
	</tr>

	<?php
		include"koneksi.php";
		$no=1;
		$sqls = mysqli_query($con, "select tbl_penjualan.*, tbl_produk.* from tbl_penjualan JOIN tbl_produk ON tbl_penjualan.kd_jual = tbl_produk.kd_buku ");
		while($rs = mysqli_fetch_array($sqls)){
		?>	
		<tr>
			<td align="center" style="border-right: 1px solid gray; border-top: 1px solid gray; padding: 3px 5px;"><?php echo"$no"; ?></td>
			<td align="center" style="border-right: 1px solid gray; border-top: 1px solid gray; padding: 3px 5px;" ><?php echo"$rs[tgl_jual]"; ?></td>
			<td style="border-right: 1px solid gray; border-top: 1px solid gray; padding: 3px 5px;"><?php echo"$rs[kd_jual]"; ?></td>
			<td style="border-right: 1px solid gray; border-top: 1px solid gray; padding: 3px 5px;"><?php echo"$rs[judul_buku]"; ?></td>
			<td style="border-right: 1px solid gray; border-top: 1px solid gray; padding: 3px 5px;"><?php echo"$rs[harga]"; ?></td>
			<td style="border-right: 1px solid gray; border-top: 1px solid gray; padding: 3px 5px;"><?php echo"$rs[pembeli]"; ?></td>
			<td style="border-right: 1px solid gray; border-top: 1px solid gray; padding: 3px 5px;"><?php echo"$rs[jml_beli]"; ?></td>
			<td style="border-right: 1px solid gray; border-top: 1px solid gray; padding: 3px 5px;"><?php echo"$rs[diskon]"; ?></td>
			<td style="border-right: 1px solid gray; border-top: 1px solid gray; padding: 3px 5px;"><?php echo"$rs[total]"; ?></td>
		</tr>
	<?php $no++;	}
	?>
</table>

<p>&nbsp;</p>

<table align="left" cellpadding="0" cellspacing="0">
	<tr>
		<td>Cirebon, <?php echo date("d F Y")?>
	</td>
	</tr>
	<tr><td>Direktur PT. Suka-Suka
	<p><img src="image/ttd.png" width="20%"></p>
	<u>Syarif, M.Pd</u>
	</td>
	</tr>
</table>
</body>