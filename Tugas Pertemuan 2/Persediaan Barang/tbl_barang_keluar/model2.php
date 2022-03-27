<?php
include 'koneksi.php';
class Model extends connection
{
    public function __construct()
{
    $this->conn = $this->get_connection();
}


public function insert($kd_barang, $nm_barang, $harga, $jml) 
{
    $stok = $this->stok($nm_barang, $harga, $jual);
    $kat = $this->kat($stok);
    $sql = "INSERT INTO tbl_keluar (kd_barang, nm_barang, harga, jml, stok, kat) VALUESS ('$kd_barang', '$nm_barang', '$harga', '$jml', '$stok', '$kat')";
    $this->conn->query($sql);
}

public function stok($nm_barang, $harga, $jml)
{
    return $stok;
}

public function kat($stok)
{
    return $kat;
}

public function tampil_data()
{
    $sql ="SELECT * FROM tbl_keluar";
    $bind = $this->conn->query($sql);
    while ($obj = $bind->fetch_object()) {
        $baris[] = $obj;
    }
    if (!empty($baris)) {
        return $baris;
    }
}

public function edit($id)
{
    $sql = "SELECT * FROM tbl_keluar WHERE kd_barang ='$id'";
    $bind = $this->conn->query($sql);
    while($obj = $bind->fetch_object()) {
        $baris = $obj;
    }
    return $baris;
}

public function update($kd_barang, $nm_barang, $harga, $jml, $stok, $kat)
{
    $barang = $this->barang($kd_barang, $nm_barang, $harga, $jml, $stok, $kat);
    $sql = "UPDATE tbl_barang SET kd_barang='$kd_barang', nm_barang='$nm_barang', harga='$harga', jml='$jml', stok='$stok', kat='$kat' WHERE id_barang='$id_barang'";
    $this->conn->query($sql);
}

public function delete($kd_barang)
{
    $sql = "DELETE FROM tbl_keluar WHERE kd_barang='$kd_barang'";
    $this->conn->query($sql);
    }
}
