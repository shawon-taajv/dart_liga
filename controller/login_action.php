<?php
/**
 * Created by PhpStorm.
 * User: Shawon
 * Date: 2/6/2022
 * Time: 1:27 PM
 */

/*==Redirect to Dashboard==*/
session_start();
require_once "../model/login.php";

$login = new login();

// get username, password, role from session
$password = crypt($_SESSION['password'],md5($_SESSION['password']));
$login->setUsername($_SESSION['username']);
$login->setPassword($password);
$login_data = $login->loginAction();

if(!empty($login_data->id)){
    $role = $login_data->role;
    if($role=="admin"){
        header('Location: ../view/admin/index.php');
    }
    else{
        header('Location: ../view/player/index.php');
    }
}else{
    header('Location: ../view/login/login.php?e_msg=Invalid Username or Password!!');
}
?>