<?php

require_once 'db_connect.php';

$stmt = $dbc->query('SELECT * FROM parks');

$parks = $stmt->fetchAll(PDO::FETCH-ASSOC);

var_dump($parks);

print_r($parks);
