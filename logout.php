<?php 

require_once 'php_action/core.php';

// remove all session variables
session_unset(); 

// destroy the session 
session_destroy(); 

//header('location: http://localhost:9080/stock/index.php');
header('location: http://jadhavs-macbook-air.local/southern_scales_company/index.php');

?>