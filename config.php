<?php
$dbserver = 'localhost';
$dbname = 'kuliahweb';
$dbuser = 'root';
$dbpass = '';
$dsn = "mysql:host={$dbserver};dbname={$dbname}";

$connection = null;

try {
    $connection = new PDO($dsn, $dbuser, $dbpass);
    //echo "Koneksi sukses";
}catch (Exception $exception){
    die("Terjadi error :" .$exception->getMessage());
};