<?php # Script 9.2 - mysqli_connect.php

// Set the database access information as constants:
DEFINE ('DB_USER','parks_user'); 
DEFINE ('DB_PASS','jean123');
DEFINE ('DB_HOST','127.0.0.1'); 
DEFINE ('DB_NAME','parks_db');

// Make the connection:
$connection = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS);

// Return connection error message:
$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


