<?php 
include_once 'C_koneksi.php';

class C_detail{

    public function tampil(){

        $conn = new C_koneksi();

        $sql = "SELECT * FROM detailpenjualan JOIN produk ON detailpenjualan.ProdukID = produk.ProdukID ORDER BY DetailID DESC";

        $query = mysqli_query($conn->conn(), $sql);

        while ($q = mysqli_fetch_object($query)) {
            $hasil[] = $q;
        }
        if(!empty($hasil)){
            return $hasil;
        };
       }
       
    public function tambah($DetailID, $PenjualanID, $ProdukID, $JumlahProduk, $SubTotal){

        $conn = new C_koneksi();

        $sql = "INSERT INTO detailpenjualan VALUES ('$DetailID', '$PenjualanID', '$ProdukID', '$JumlahProduk', '$SubTotal')";  

        $query = mysqli_query($conn->conn(), $sql);
        if ($query){
            echo "<script>alert('Transaksi Berhasil');window.location='../dashboard/index.php'</script>";
        }else {
            echo "<script>alert('Transaksi Gagal');window.location='../dashboard/index.php'</script>";

        }
     }   

    public function edit($DetailID){

        $conn = new C_koneksi();

        $sql = "SELECT * FROM detailpenjualan WHERE DetailID='$DetailID' ";

        $query = mysqli_query($conn->conn(), $sql);

        while ($q = mysqli_fetch_object($query)) {
            $hasil[] = $q;
        }
        return $hasil;
       }
       

    public function update($DetailID, $PenjualanID, $ProdukID, $JumlahProduk, $SubTotal){
        $conn = new C_koneksi();
        $sql = "UPDATE detailpenjualan SET PenjualanID = '$PenjualanID' ProdukID = '$ProdukID' , JumlahProduk = '$JumlahProduk', SubTotal = '$SubTotal' WHERE DetailID = '$DetailID'";
        $query = mysqli_query($conn->conn(), $sql);
        if ($query){
            echo "<script>alert('Data Berhasil Diubah');window.location='../dashboard/data_transaksi.php'</script>";
        }else {
            echo "<script>alert('Data Gagal Diubah');window.location='../dashboard/data_transaksi.php'</script>";
    
        }
     }   

    public function delete($DetailID){
        $conn = new C_koneksi();
        $sql = "DELETE FROM detailpenjualan WHERE DetailID = '$DetailID'";
        $query = mysqli_query($conn->conn(), $sql);
        if ($query){
            echo "<script>alert('Data Berhasil Dihapus');window.location='../dashboard/data_transaksi.php'</script>";
        }else{
            echo "<script>alert('Data Gagal Dihapus');window.location='../dashboard/data_transaksi.php'</script>";
        }
    }

    }

?>
