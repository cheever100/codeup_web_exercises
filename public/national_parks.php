<?php

define('DB_HOST','127.0.0.1'); 
define('DB_NAME','parks_db');
define('DB_USER','parks_user');
define('DB_PASS','jean123');

require_once '../db_connect.php';
require_once '../input.php';

// Step 1: list the national parks from your database. 

$stmt = $connection->query('SELECT * FROM national_parks');

$parks = $stmt->fetchAll(PDO::FETCH_ASSOC);


// var_dump($parks);

// Step 2: Modify your query to load only four parks at a time. 
// Use a parameter in $_GET to determine which page the user is 
// on and load only the appropriate parks for that page.


// FROM DON

$page = Input::has('page')? Input::get('page') : 1;

$limit = 4;

$offset = ($limit * $page)-$limit;

$stmt = $dbc->query("SELECT * FROM national_parks LIMIT $limit OFFSET $offset");
 
$parks = $stmt->fetchAll(PDO::FETCH_ASSOC);


//php either back ticks or nothing, pdostate obj -> with fetchColumn string with num, typecasted below
$count = $dbc->query("SELECT count('id') FROM national_parks")->fetchColumn();

$total_pages = $count/4;

