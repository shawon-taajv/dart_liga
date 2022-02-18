<?php
/**
 * Created by PhpStorm.
 * User: Shawon
 * Date: 2/6/2022
 * Time: 12:25 PM
 */
require_once "../model/login.php";


$login = new login();

if(!empty($_POST['username'])){
    //$password = crypt($_POST['password'],md5($_POST['password']));
    $login->setUsername($_POST['username']);
    $login->setPassword($_POST['password']);
    $login_data = $login->loginAction();
    if(!empty($login_data[2])){
        session_start();
        $_SESSION['username'] = $login_data[0];
        $_SESSION['user_role'] = $login_data[3];
        if($_SESSION['user_role']=="admin"){
            header('Location: ../view/admin/index.php');
        }else{
            header('Location: ../view/player/index.php');
        }

    }else{
        $sd =   var_dump($login_data);
        header("Location: ../view/login/login.php?e_msg=Invalid Username OR Password!!" .$sd);

    }
}

if(!empty($_POST['logout'])){
    session_start();
    session_unset();
    session_destroy();
    header('Location: ../../index.php');
}





