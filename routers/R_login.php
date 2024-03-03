<?php
include_once '../controllers/C_login.php';

$login = new C_login();


    if ($_GET['aksi'] == 'register') {

        $CustomerID = $_POST['CustomerID'];
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $NomorTelepon = $_POST['NomorTelepon'];
        
        $login->register($CustomerID=0, $nama, $alamat, $NomorTelepon);
    }
    

?>