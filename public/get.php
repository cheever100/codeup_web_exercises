<?php

// $_GET is PHP's globally accessible variable that contains any additional key=>value pairs sent with an HTTP GET request from a client
echo "The \$_GET SUPERGLOBAL is: ";
var_dump($_GET);

// $_SERVER is another SUPERGLOBAL in PHP. 
// $_SERVER['QUERY_STRING'] is a key that represents the string anywhere after the `?` character in the URL.
echo "The \$_SERVER['QUERY_STRING'] is: " . $_SERVER['QUERY_STRING'];

?>