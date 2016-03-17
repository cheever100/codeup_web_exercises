<?php
$connection = new PDO(
	'mysql:host=127.0.0.1;dbname=employees',
	'vagrant',
	'vagrant'
	);
$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

echo $connection->getAttribute(PDO::ATTR_CONNECTION_STATUS);

// Create a PDO instance and assign it to the variable $dbc.
// Make sure that instance will use exceptions rather than failing silently.
// Configure your connection to point to the employees database.