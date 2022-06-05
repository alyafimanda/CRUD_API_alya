<?php
include '../config.php';

$query ="select * from buku";

/**
 * @var $connection PDO
 */
//prepare query
$statement = $connection->query($query);
$statement->setFetchMode(PDO::FETCH_ASSOC);
//jalankan query
$result = $statement->fetchAll();
$output = [
    'buku' => $result,
];
//Output json
header('Content-Type: application/json');
echo json_encode($output);