<?php
try{

$pdo = new pdo("mysql: host=localhost ; dbname=monshop;charset=utf8", "root", "");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
}catch(Exception $e){
    $e->getMessage();
}


?>