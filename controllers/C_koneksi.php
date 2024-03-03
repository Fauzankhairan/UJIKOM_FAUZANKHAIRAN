<?php
use C_koneksi as GlobalC_koneksi;

session_start();

class C_koneksi{

    public function conn(){
        $conn = mysqli_connect('localhost', 'root', '', 'kasir');

        if (!$conn){
            die ("koneksi gagal di buat : ".mysqli_connect_error());
        }else{
            return $conn;
        }
    }
    
}
$conn = new C_koneksi();
$conn->conn();



?>


