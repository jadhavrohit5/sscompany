<?php 

session_start();

require_once 'db_connect.php';

// echo $_SESSION['userId'];

if(!$_SESSION['userId']) {
	//header('location: http://localhost:9080/stock/index.php');
	header('location: http://jadhavs-macbook-air.local/southern_scales_company/index.php');
} 



?>