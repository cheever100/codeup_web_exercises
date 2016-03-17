<?php
// $connection = new PDO(
// 	'mysql:host=127.0.0.1;dbname=employees',
// 	'vagrant',
// 	'vagrant'
// 	);
// $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// echo $connection->getAttribute(PDO::ATTR_CONNECTION_STATUS);


// Exercise #2
// Create a PDO instance and assign it to the variable $dbc.
// Configure your connection to point to the employees database.
// $dbc = new PDO('mysql:host=127.0.0.1;dbname=employees', 'vagrant', 'vagrant');

// Make sure that instance will use exceptions rather than failing silently.
// $dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Exercise #5:
// Rather than having the connection parameters hard coded, use the following constants:


$connection = new PDO(
	'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME,
	 DB_USER, 
	 DB_PASS
);

$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


