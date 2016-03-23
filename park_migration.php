<?php

define('DB_HOST','127.0.0.1'); 
define('DB_NAME','parks_db');
define('DB_USER','parks_user');
define('DB_PASS','jean123');

require_once 'db_connect.php';


$SQL = "DROP TABLE IF EXISTS national_parks";

$connection->exec($SQL);

$SQL = "CREATE TABLE national_parks (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    name  VARCHAR(100) NOT NULL,
    location VARCHAR(100) NOT NULL,
    date_established DATE NOT NULL,
    areas_in_acres DOUBLE NOT NULL,
    primary key (id)
);";
$connection->exec($SQL);
