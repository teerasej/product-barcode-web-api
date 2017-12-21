<?php
try{
$db = new PDO('mysql:host=' . $host .';dbname=' . $db_name .';charset=utf8', $db_username , $db_password);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch (Exception $e){
    var_dump($e);
}
?>