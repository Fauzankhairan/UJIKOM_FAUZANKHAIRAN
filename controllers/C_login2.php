<?php
   include_once 'C_koneksi.php';

   
class C_login2{

   public function tampil(){

      $conn = new C_koneksi();

      $sql = "SELECT * FROM staff ORDER BY StaffID DESC";

      $query = mysqli_query($conn->conn(), $sql);

      while ($q = mysqli_fetch_object($query)) {
          $hasil[] = $q;
      }
      if(!empty($hasil)){
         return $hasil;
     }
   }

    public function register($StaffID, $NamaStaff, $email, $password, $role) { 
    
     $conn = new C_koneksi();

     $sql="INSERT INTO staff VALUES ('$StaffID', '$NamaStaff', '$email', '$password', '$role')";

     $query = mysqli_query($conn->conn(), $sql);
     if($query){
      echo "<script>alert('Data Berhasil Ditambah');window.location='../dashboard/data_staff.php'</script>";
     }else {
      echo "<script>alert('Data Gagal Ditambah');window.location='../dashboard/data_staff.php'</script>";
     }
    }

    public function login($email, $password) {
      $conn = new C_koneksi();

      if (isset($_POST['login'])){

         $sql = "SELECT * FROM staff WHERE email = '$email'";
         $query = mysqli_query($conn->conn(), $sql);
         $data = mysqli_fetch_assoc($query);

         if ($data){
            if(password_verify($password, $data['password'])){
               if($data['role'] == 'manager'){

                  $_SESSION["data"] = $data;
                  $_SESSION["login"] = $data;
                  $_SESSION["role"] = $data['role'];


                  echo "<script>alert('Berhasil Login Sebagai Manager');window.location='../dashboard/data_staff.php'</script>";

                  exit; 
               }elseif ($data['role'] == 'staff'){
                  $_SESSION["data"] = $data;
                  $_SESSION["login"] = $data;
                  $_SESSION["role"] = $data['role'];

                  echo "<script>alert('Berhasil Login Sebagai Staff');window.location='../dashboard/index.php'</script>";


                  exit;
             }
            }else{
               echo "<script>alert('Password Salah');window.location='../signin_staff.php'</script>";
            }
            
         }else{
            echo "<script>alert('Email dan Password Salah');window.location='../signin_staff.php'</script>";

         }
      }

    }

    public function edit($StaffID){

      $conn = new C_koneksi();

      $sql = "SELECT * FROM staff WHERE StaffID='$StaffID' ";

      $query = mysqli_query($conn->conn(), $sql);

      while ($q = mysqli_fetch_object($query)) {
          $hasil[] = $q;
      }
      return $hasil;
     }

    public function update($StaffID, $NamaStaff, $email, $password, $role){
      $conn = new C_koneksi();
      $sql = "UPDATE staff SET NamaStaff = '$NamaStaff' , email = '$email' , password = '$password' , role = '$role' WHERE StaffID = '$StaffID'";
      $query = mysqli_query($conn->conn(), $sql);
      if ($query){
          echo "<script>alert('Data Berhasil Diupdate');window.location='../dashboard/data_staff.php'</script>";

      }else {
         echo "<script>alert('Data Gagal Diupdate');window.location='../dashboard/data_staff.php'</script>";

      }
   }  

    public function logout(){
      session_destroy();
      echo "<script>alert('Logout Berhasil');window.location='../signin_staff.php'</script>";
      
      exit;
    }

    public function delete($StaffID){
      $conn = new C_koneksi();
      $sql = "DELETE FROM staff WHERE StaffID = '$StaffID'";
      $query = mysqli_query($conn->conn(), $sql);
      if ($query){
         echo "<script>alert('Data Berhasil DIhapus');window.location='../dashboard/data_staff.php'</script>";

      }else{
         echo "<script>alert('Data Gagal Dihapus');window.location='../dashboard/data_staff.php'</script>";

      }
  }
}
?>