<?php
include 'config.php';
include 'class.shoes.php';
header('Content-Type: application/json');
$shoes = new shoes();
$list=$shoes->get_shoes();
echo "{\"shoes\":";
echo json_encode($list);
echo "}";
?>