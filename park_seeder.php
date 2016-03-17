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

$SQL = "INSERT INTO national_parks (name, location, date_established, areas_in_acres)
VALUES ('Acadia', 'Maine', '1919-02-26', '47389.67'),
	 	('American Samoa', 'American Samoa', '1988-10-31', '9000.00'),
	 	('Arches', 'Utah', '1929-04-12', '76518.98'),
	 	('Badlands', 'South Dakota', '1978-11-10', '242755.94'),
	 	('Big Bend', 'Texas', '1944-06-12', '801163.21'),
	 	('Biscayne', 'Florida', '1980-06-28', '172924.07'),
	 	('Black Canyon of the Gunnison', 'Colorado', '1999-10-21', '32950.03'),
	 	('Bryce Canyon', 'Utah', '1928-02-25', '35835.08'),
	 	('Canyonlands', 'Utah', '1964-09-12', '337597.83'),
	 	('Capitol Reef', 'Utah', '1971-12-18', '241904.26')";
$connection->exec($SQL);	 	
	 