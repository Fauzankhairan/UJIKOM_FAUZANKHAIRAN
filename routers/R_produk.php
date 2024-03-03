<?php
include_once '../controllers/C_produk.php';

$produk = new C_produk();

    if ($_GET['aksi'] == 'tambah') {

        $ProdukID = $_POST['ProdukID'];
        $NamaProduk = $_POST['NamaProduk'];
        $harga = $_POST['harga'];
        $stok = $_POST['stok'];

        $allowed_exct = array('png', 'jpg', 'jpeg');

        $thumbnail = $_FILES['thumbnail']['name'];

        $x = explode('.', $thumbnail);

        $exct = strtolower(end($x));

        $size = $_FILES['thumbnail']['size'];

        $file_tmp = $_FILES['thumbnail']['tmp_name'];

        if (in_array($exct, $allowed_exct) === true){
            if($size < 1044070){
                move_uploaded_file($file_tmp, '../assets/images/thumbnail/' . $thumbnail);
                $query = $produk->tambah($ProdukID=0, $NamaProduk, $harga, $stok, $thumbnail);
            }else{
                echo "UKURAN GAMBAR TERLALU BESAR";
            }
        }else{
            echo "JENIS FILE TIDAK DIPERBOLEHKAN";
        }
    }
    elseif ($_GET['aksi'] == 'update') {

        $ProdukID = $_POST['ProdukID'];
        $NamaProduk = $_POST['NamaProduk'];
        $harga = $_POST['harga'];
        $stok = $_POST['stok'];

        $allowed_exct = array('png', 'jpg', 'jpeg');

        $thumbnail = $_FILES['thumbnail']['name'];

        $x = explode('.', $thumbnail);

        $exct = strtolower(end($x));

        $size = $_FILES['thumbnail']['size'];

        $file_tmp = $_FILES['thumbnail']['tmp_name'];

        if (in_array($exct, $allowed_exct) === true){
            if($size < 1044070){
                move_uploaded_file($file_tmp, '../assets/images/thumbnail/' . $thumbnail);
                $query = $produk->update($ProdukID, $NamaProduk, $harga, $stok, $thumbnail);
            }else{
                echo "UKURAN GAMBAR TERLALU BESAR";
            }
        }else{
            echo "JENIS FILE TIDAK DIPERBOLEHKAN";
        }

    }
    elseif ($_GET['aksi'] == 'hapus') {

        $ProdukID = $_GET['ProdukID'];
        $produk->delete($ProdukID);
    }

 
?>