<?php
/* Template name:Logout */
session_start();
session_destroy();
session_unset();
header('Location:/login.php');
?>