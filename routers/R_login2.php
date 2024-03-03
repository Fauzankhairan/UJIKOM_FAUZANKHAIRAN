<?php
include_once '../controllers/C_login2.php';

$login2 = new C_login2();


    if ($_GET['aksi'] == 'register') {

        $StaffID = $_POST['StaffID'];
        $NamaStaff = $_POST['NamaStaff'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $password = password_hash($password, PASSWORD_DEFAULT);
        $role = $_POST['role'];
        
        $login2->register($StaffID=0, $NamaStaff, $email, $password, $role);
    }
    
    elseif ($_GET ['aksi'] == 'login'){
        $email = $_POST['email'];
        $password = $_POST['password'];

        $login2->login($email, $password);
    }

    elseif ($_GET['aksi'] == 'update') {

        $StaffID = $_POST['StaffID'];
        $NamaStaff = $_POST['NamaStaff'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $role = $_POST['role'];

        $login2->update($StaffID, $NamaStaff, $email, $password, $role);

    }
    elseif ($_GET['aksi'] == "logout"){
        $login2->logout();
    }
    elseif ($_GET['aksi'] == 'hapus') {

        $StaffID = $_GET['StaffID'];
        $login2->delete($StaffID);
    }

?>