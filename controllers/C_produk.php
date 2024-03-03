<?php 
include_once 'C_koneksi.php';

class C_produk{

    public function tampil(){

        $conn = new C_koneksi();

        $sql = "SELECT * FROM produk ORDER BY ProdukID DESC";

        $query = mysqli_query($conn->conn(), $sql);

        while ($q = mysqli_fetch_object($query)) {
            $hasil[] = $q;
        }
        if(!empty($hasil)){
            return $hasil;
        };
       }
       
    public function tambah($ProdukID, $NamaProduk, $harga, $stok, $thumbnail){

        $conn = new C_koneksi();

        $sql = "INSERT INTO produk VALUES ('$ProdukID', '$NamaProduk', '$harga', '$stok', '$thumbnail')";  

        $query = mysqli_query($conn->conn(), $sql);
        if ($query){
            echo "<script>alert('Data Berhasil Ditambahkan');window.location='../dashboard/data_produk.php'</script>";
        }else {
            echo "<script>alert('Data Gagal Ditambah');window.location='../dashboard/data_produk.php'</script>";
        }
     }   

    public function edit($ProdukID){

        $conn = new C_koneksi();

        $sql = "SELECT * FROM produk WHERE ProdukID='$ProdukID' ";

        $query = mysqli_query($conn->conn(), $sql);

        while ($q = mysqli_fetch_object($query)) {
            $hasil[] = $q;
        }
        return $hasil;
       }
       

    public function update($ProdukID, $NamaProduk, $harga, $stok, $thumbnail){
        $conn = new C_koneksi();
        $sql = "UPDATE produk SET NamaProduk = '$NamaProduk' , harga = '$harga' , stok = '$stok' , thumbnail = '$thumbnail' WHERE ProdukID = '$ProdukID'";
        $query = mysqli_query($conn->conn(), $sql);
        if ($query){
            echo "<script>alert('Data Berhasil Diupdate');window.location='../dashboard/data_produk.php'</script>";

        }else {
            echo "<script>alert('Data Gagal Diupdate');window.location='../dashboard/data_produk.php'</script>";
        }
     }   

    public function delete($ProdukID){
        $conn = new C_koneksi();
        $sql = "DELETE FROM produk WHERE ProdukID = '$ProdukID'";
        $query = mysqli_query($conn->conn(), $sql);
        if ($query){
            echo "<script>alert('Data Berhasil Dihapus');window.location='../dashboard/data_produk.php'</script>";

        }else{
         echo "<script>alert('Data Gagal Dihapus');window.location='../dashboard/data_produk.php'</script>";

        }
    }

    }

?>
