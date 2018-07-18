<?php
session_start();
//error_reporting(0);

require('user-functions.php');
require_once $_SERVER['DOCUMENT_ROOT'].'/global_functions.php';
require_once('connection.php');

if (logged_in() === true){
$session_user_id = $_SESSION['user_id'];
$user_data = user_data($_SESSION['user_id'],'user_login','user_pass','user_email','user_registered','display_name','allow_emails');
 if(user_active($user_data['user_login']) === false){
    //session_destroy();
    //header('Location:/index.php');
    //exit();
}
}
?>