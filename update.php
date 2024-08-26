<?php

//include koneksi database
include('koneksi.php');

//get data dari form
$penjualanid         = $_POST['penjualanid'];
$tanggal_penjualan   = $_POST['tanggal_penjualan'];
$totalharga          = $_POST['totalharga'];
$pelangganid         = $_POST['pelangganid'];

//query update data ke dalam database berdasarkan ID
$query = "UPDATE penjualan SET tanggal_penjualan = '$tanggal_penjualan', totalharga = '$totalharga', pelangganid = '$pelangganid' WHERE penjualanid = '$penjualanid'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($connection->query($query)) {
    //redirect ke halaman index.php 
    header("location: index.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}

?>