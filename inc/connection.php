<?php

$connect_problem = "Възникна проблем с връзката!";
$hostname = "muscle.com";
$username = "muscle";
$password = "test";
$databaseName = "ne e realna baza";

$connect = mysqli_connect($hostname, $username, $password, $databaseName) or die($connect_problem);
$connect->set_charset("utf8");
?>