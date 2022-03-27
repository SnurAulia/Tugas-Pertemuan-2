<?php
include 'model.php';
$model = new Model();
$model = new Model2();
$index = 1;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Cetak Data</title>
    <style>
        h1 {
            text-align: center;
        }
        table,
        td,
        th{
            border:1px solid #ddd;
            text-align: left
        }
        table{
            border-collapse: collapse;
            width: 50%;
        }
        th,
        td{
            padding: 15px;
        }
    </style>
</head>
<body>
<h1>Laporan Data Barang Keluar</h1>
<table style="border: 1px solid gray;" width="100%" cellpadding="0" cellspacing="0">
    <tr>
        <th style="border-right: 1px solid gray">NO</th>
        <th style="border-right: 1px solid gray">Kode Barang</th>
        <th style="border-right: 1px solid gray">Tanggal Barang Keluar</th>
        <th style="border-right: 1px solid gray">Nama Barang</th>
        <th style="border-right: 1px solid gray">Harga </th>
        <th style="border-right: 1px solid gray">Jumlah Keluar</th>
        <th style="border-right: 1px solid gray">Stok</th>
        <th style="border-right: 1px solid gray">Kategori</th>          
    </tr>
    </thead>
    <tbody>
        <?php
        $result = $model->tampil_data();
        if (!empty($result)) {
            foreach ($result as $data) : ?>
                <tr>
                    <td><?= $index++ ?></td>
                    <td><?= $data->kd_barang ?></td>
                    <td><?= $data->tgl_keluar ?></td>
                    <td><?= $data->nm_barang ?></td>
                    <td><?= $data->harga ?></td>
                    <td><?= $data->jml ?></td>
                    <td><?= $data->stok ?></td>
                    <td><?= $data->kat ?></td>
                </tr>
            <?php endforeach; 
            }else { ?>
                <tr>
                    <td colspan="9">Belum ada data pada tabel nilai mahasiswa</td>
                </tr>
            <?php } ?>
    </tbody>
</table>
<script>
    window.print();
</script>
</body>
</html>