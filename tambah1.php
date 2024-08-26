<?php

include('koneksi.php');

$tanggal      = $_POST['tanggal_penjualan'];
$totalharga = $_POST['totalharga'];
$pelangganid       = $_POST['idpelanggan'];

$query = "INSERT INTO penjualan (tanggal_penjualan, totalharga, pelangganid) VALUES ('$tanggal', '$totalharga', '$pelangganid')";

if($connection->query($query)) {

    header("location: index.php");

} else {

    echo "Data Gagal Disimpan!";

}

?>