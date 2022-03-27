<?php
include 'model.php';
if (isset($_POST['simpan'])) {
	$kd_barang = $_POST['kd_barang'];
	$tgl_masuk = $_POST['tgl_masuk'];
	$nm_barang = $_POST['nm_barang'];
	$harga = $_POST['harga'];
	$jual = $_POST['jml'];
	$stok = $_POST['stok'];
	$kat = $_POST['kat'];
	$model = new Model();
	$model->insert($kd_barang, $tgl_masuk, $nm_barang, $harga, $jml, $stok, $kat);
	header('location:index.php');
}
if (isset($_POST['edit'])) {
	$kd_barang = $_POST['kd_barang'];
	$tgl_masuk = $_POST['tgl_masuk'];
	$nm_barang = $_POST['nm_barang'];
	$harga = $_POST['harga'];
	$jual = $_POST['jml'];
	$stok = $_POST['stok'];
	$kat = $_POST['kat'];
	$model = new Model();
	$model->update($kd_barang, $tgl_masuk, $nm_barang, $harga, $jml, $stok, $kat);
	header('location:index.php');
}
if (isset($_GET['kd_barang'])) {
	$id = $_GET ['kd_barang'];
	$model = new Model();
	$model->delete($id);
	header('location:index.php');
}
?>