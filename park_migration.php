<?php

define('DB_HOST','127.0.0.1'); 
define('DB_NAME','parks_db');
define('DB_USER','parks_user');
define('DB_PASS','jean123');

require 'db_connect.php';


 

// echo $connection->getAttribute(PDO::ATTR_CONNECTION_STATUS);


$SQL = "DROP TABLE IF EXISTS national_parks";

$connection->exec($SQL);

$SQL = "CREATE TABLE national_parks (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    name  VARCHAR(100) NOT NULL,
    location VARCHAR(100) NOT NULL,
    date_established date,
    areas_in_acres double,
    primary key (id)
);";
$connection->exec($SQL);
