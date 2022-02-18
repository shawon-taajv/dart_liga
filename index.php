<?php
/**
 * Created by PhpStorm.
 * User: Shawon
 * Date: 2/5/2022
 * Time: 7:46 AM
 */
session_start();
if(!(isset($_SESSION["login"]) && $_SESSION["login"] == "OK")) {
    header("Location: view/login/login.php");
    exit;
}else{
    header("Location: controller/login_action.php");
}
?>