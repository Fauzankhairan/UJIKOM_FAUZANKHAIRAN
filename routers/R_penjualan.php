<?php
include_once '../controllers/C_transaksi.php';

$penjualan = new C_penjualan();


    if ($_GET['aksi'] == 'penjualan') {

        $PenjualanID = $_POST['PenjualanID'];
        $TanggalPenjualan = $_POST['TanggalPenjualan'];
        $TotalHarga = $_POST['TotalHarga'];
        $CustomerID = $_POST['CustomerID'];

        $penjualan->tambah($PenjualanID=0, $TanggalPenjualan, $TotalHarga, $CustomerID);

    }elseif ($_GET['aksi'] == 'hapus') {

        $PenjualanID = $_GET['PenjualanID'];
        $penjualan->delete($PenjualanID);
    }
?>