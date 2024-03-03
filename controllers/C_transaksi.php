<?php 
include_once 'C_koneksi.php';

class C_Penjualan{

    public function tampil(){

        $conn = new C_koneksi();

        $sql = "SELECT * FROM penjualan JOIN customer ON penjualan.CustomerID = customer.CustomerID ORDER BY PenjualanID DESC ";

        $query = mysqli_query($conn->conn(), $sql);

        while ($q = mysqli_fetch_object($query)) {
            $hasil[] = $q;
        }
        if(!empty($hasil)){
            return $hasil;
        };
       }
       
    public function tambah($PenjualanID, $TanggalPenjualan, $TotalHarga, $CustomerID){

        $conn = new C_koneksi();

        $sql = "INSERT INTO penjualan VALUES ('$PenjualanID', '$TanggalPenjualan', '$TotalHarga', '$CustomerID')";  

        $query = mysqli_query($conn->conn(), $sql);
        if ($query){
            echo "<script>alert('Penjualan Berhasil');window.location='../dashboard/index.php'</script>";
        }else {
            echo "<script>alert('Penjualan Gagal');window.location='../dashboard/index.php'</script>";

        }
     }   
         

    public function delete($PenjualanID){
        $conn = new C_koneksi();
        $sql = "DELETE FROM penjualan WHERE PenjualanID = '$PenjualanID'";
        $query = mysqli_query($conn->conn(), $sql);
        if ($query){
            echo "<script>alert('Data Berhasil Dihapus');window.location='../dashboard/index.php'</script>";

        }else{
            echo "<script>alert('Data Gagal Dihapus');window.location='../dashboard/index.php'</script>";
            
        }
    }

    }

?>
