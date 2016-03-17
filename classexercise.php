<?php
require 'configuration.php';
require 'pdo.php';
echo $connection->getAttribute(PDO::ATTR_CONNECTION_STATUS);

$sql = <<<QUERY
	CREATE TABLE teams(
		team_id INT UNSIGNED NOT NULL AUTO_INCREMENT,
		name VARCHAR(100) NOT NULL,
		PRIMARY KEY (team_id)
	)
QUERY;
$connection->exec($sql);
echo "Table teams created";