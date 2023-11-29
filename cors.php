<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
header("Allow: GET, POST, OPTIONS, PUT, DELETE");
header("Referrer-Policy: strict-origin-when-cross-origin"); 
$method = $_SERVER['REQUEST_METHOD'];
if ($method == "OPTIONS") {
    die();
} 
?>
