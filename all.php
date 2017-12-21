<?php

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept');

require('config/setting.php');
require('config/db-init.php');

$statement = $db->prepare("SELECT * FROM product");
$statement->execute();
$results = $statement->fetchAll();

echo json_encode($results);

?>
