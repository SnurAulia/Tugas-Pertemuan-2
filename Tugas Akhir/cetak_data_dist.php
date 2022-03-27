<body onload="javascript:window.print()" style="margin:0 auto; width:1000px">
<div style="margin-left: 20px"></div>
<p>&nbsp;</p>

<table width="100%" cellpadding="0" cellspacing="0">
	<tr>
		<td><div align="center"><font size="7">PT. Suka-Suka</font></div></td>
	</tr>
	<tr>
		<td><div align="center"><font size="3">Jl. Kesambi No.202, Kesambi, Kota Cirebon - No.Telp : 081234567891</font></div></td>
	</tr>
</table><hr>

<label><font size="5"><u><center>Laporan Data Distributor</center></u></font></label>

<p>&nbsp;</p>

<table style="border: 1px solid gray;" width="100%" cellpadding="0" cellspacing="0">
	<tr>
		<th style="border-right: 1px solid gray">No</th>
		<th style="border-right: 1px solid gray">Kode Distributor</th>
		<th style="border-right: 1px solid gray">Nama Distributor</th>
		<th style="border-right: 1px solid gray">Alamat</th>
		<th style="border-right: 1px solid gray">Kota</th>	
		<th style="border-right: 1px solid gray">No.Telp</th>
		<th style="border-right: 1px solid gray">E-mail</th>			
	</tr>

	<?php
		include"koneksi.php";
		$no=1;
		$sqls = mysqli_query($con,"Select * from tbl_dist");
		while($rs = mysqli_fetch_array($sqls)){
		?>	
		<tr>
			<td align="center" style="border-right: 1px solid gray; border-top: 1px solid gray; padding: 3px 5px;"><?php echo"$no"; ?></td>
			<td align="center" style="border-right: 1px solid gray; border-top: 1px solid gray; padding: 3px 5px;" ><?php echo"$rs[kd_dist]"; ?></td>
			<td style="border-right: 1px solid gray; border-top: 1px solid gray; padding: 3px 5px;"><?php echo"$rs[nm_dist]"; ?></td>
			<td style="border-right: 1px solid gray; border-top: 1px solid gray; padding: 3px 5px;"><?php echo"$rs[alm]"; ?></td>
			<td style="border-right: 1px solid gray; border-top: 1px solid gray; padding: 3px 5px;"><?php echo"$rs[kota]"; ?></td>
			<td style="border-right: 1px solid gray; border-top: 1px solid gray; padding: 3px 5px;"><?php echo"$rs[telp]"; ?></td>
			<td style="border-right: 1px solid gray; border-top: 1px solid gray; padding: 3px 5px;"><?php echo"$rs[email]"; ?></td>
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