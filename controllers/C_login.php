<?php
   include_once 'C_koneksi.php';

class C_login{

   public function tampil(){

      $conn = new C_koneksi();

      $sql = "SELECT * FROM customer ORDER BY CustomerID DESC";

      $query = mysqli_query($conn->conn(), $sql);

      while ($q = mysqli_fetch_object($query)) {
          $hasil[] = $q;
      }
      if(!empty($hasil)){
          return $hasil;
      };
     }

    public function register($CustomerID, $nama, $alamat, $NomorTelepon) { 
    
     $conn = new C_koneksi();

     $sql="INSERT INTO customer VALUES ('$CustomerID', '$nama', '$alamat', '$NomorTelepon')";

     $query = mysqli_query($conn->conn(), $sql);
     if($query){
         echo "<script>alert('Data Berhasil Ditambah');window.location='../dashboard/data_customer.php'</script>";
     }else {
         echo "<script>alert('Data Gagal DItambah');window.location='../dashboard/data_customer.php'</script>";
     }

    }
}
?>