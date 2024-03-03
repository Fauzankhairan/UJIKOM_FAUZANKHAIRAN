<?php
include_once '../controllers/C_detail.php';

$detail = new C_detail();


    if ($_GET['aksi'] == 'detail') {

        $DetailID = $_POST['DetailID'];
        $PenjualanID = $_POST['PenjualanID'];
        $ProdukID = $_POST['ProdukID'];
        $JumlahProduk = $_POST['JumlahProduk'];
        $SubTotal = $_POST['SubTotal'];

        $detail->tambah($DetailID=0, $PenjualanID, $ProdukID, $JumlahProduk, $SubTotal);
    }

    elseif ($_GET['aksi'] == 'hapus') {

        $DetailID = $_GET['DetailID'];
        $detail->delete($DetailID);
    }
?>