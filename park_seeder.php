<?php

define('DB_HOST','127.0.0.1'); 
define('DB_NAME','parks_db');
define('DB_USER','parks_user');
define('DB_PASS','jean123');

// use PDO to connect to your parks_db
require 'db_connect.php';

// add a query to delete all the records from national_parks
$SQL = "TRUNCATE national_parks";
$connection->exec($SQL);

// $SQL = "INSERT INTO national_parks (name, location, date_established, areas_in_acres)
// VALUES ('Acadia', 'Maine', '1919-02-26', '47389.67'),
// 	 	('American Samoa', 'American Samoa', '1988-10-31', '9000.00'),
// 	 	('Arches', 'Utah', '1929-04-12', '76518.98'),
// 	 	('Badlands', 'South Dakota', '1978-11-10', '242755.94'),
// 	 	('Big Bend', 'Texas', '1944-06-12', '801163.21'),
// 	 	('Biscayne', 'Florida', '1980-06-28', '172924.07'),
// 	 	('Black Canyon of the Gunnison', 'Colorado', '1999-10-21', '32950.03'),
// 	 	('Bryce Canyon', 'Utah', '1928-02-25', '35835.08'),
// 	 	('Canyonlands', 'Utah', '1964-09-12', '337597.83'),
// 	 	('Capitol Reef', 'Utah', '1971-12-18', '241904.26')";
// $connection->exec($SQL);	 	
	 
// // ANOTHER WAY TO DO IT:
$parks = [
	['name' => 'Acadia', 'location' => 'Maine', 'date_established' => '1919-02-26',
	'areas_in_acres' => '47389.67'],
	['name' => 'American Samoa', 'location' => 'American Samoa', 'date_established' => '1988-10-31',
	'areas_in_acres' => '9000.00'],
	['name' => 'Arches', 'location' => 'Utah', 'date_established' => '1929-04-12',
	'areas_in_acres' => '76518.98'],
	['name' => 'Badlands', 'location' => 'South Dakota', 'date_established' => '1978-11-10',
	'areas_in_acres' => '242755.94'],
	['name' => 'Big Bend', 'location' => 'Texas', 'date_established' => '1944-06-12',
	'areas_in_acres' => '801163.21'],
	['name' => 'Biscayne', 'location' => 'Florida', 'date_established' => '1980-06-28',
	'areas_in_acres' => '172924.07'],
	['name' => 'Black Canyon of the Gunnison', 'location' => 'Colorado', 'date_established' => '1999-10-21',
	'areas_in_acres' => '32950.03'],
	['name' => 'Bryce Canyon', 'location' => 'Utah', 'date_established' => '1928-02-25',
	'areas_in_acres' => '35835.08'],
	['name' => 'Canyonlands', 'location' => 'Utah', 'date_established' => '1964-09-12',
	'areas_in_acres' => '337597.83'],
	['name' => 'Capitol Reef', 'location' => 'Utah', 'date_established' => '1971-12-18',
	'areas_in_acres' => '241904.26']
];

foreach($parks as $park) {
	$query = "INSERT INTO parks (name, description , area_in_acres, date_established, location)
 			  VALUES({$park['name']}, {$park['description']}, {$park['area_in_acres]}, {$park['date_established']}";
	$dbc->exec($query);
}