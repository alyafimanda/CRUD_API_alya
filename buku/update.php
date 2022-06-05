<?php
include '../config.php';
/**
 * @var $connection PDO
 */
//Prepare query
$isbn = $_POST['isbn'];
$judul = $_POST['judul'];


$query = "update buku set judul = 'Adel-sturi' 
          where isbn = '41225'";
$statement = $connection->query($query);
$statement->setFetchMode(PDO::FETCH_ASSOC);

//jalankan query
$results = $statement->fetchAll();

//output JSON
header('Content-Type: application/json');
echo json_encode($results);