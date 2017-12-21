<?php

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept');

require 'config/setting.php';
require 'config/db-init.php';

$postData = json_decode(file_get_contents("php://input"));
$barcode = $postData->barcode;

$statement = $db->prepare("SELECT * FROM product WHERE code = :barcode");
$statement->execute(array(':barcode' => $barcode));
$results = $statement->fetchAll();

echo json_encode($results);
?>