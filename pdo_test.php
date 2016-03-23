<?php

define('DB_HOST','127.0.0.1'); 
define('DB_NAME','employees');
define('DB_USER','vagrant');
define('DB_PASS','vagrant');

// Exercise #3:
// Use require to include db_connect.php.

require 'db_connect.php';

// Echo the PDO connection status 

echo $dbc->getAttribute(PDO::ATTR_CONNECTION_STATUS);



