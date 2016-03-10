<?php
// starts a session or finds a session
// allows us to use $_SESSSION superglobal
	session_start();
	
// dumping out session variables (for debugging)
	var_dump($_SESSION);

// variable to hold the username if they were logged in
	$username = ( isset($_SESSION['LOGGED_IN_USER']) ) ? $_SESSION['LOGGED_IN_USER'] : "";

// checking the session for the "LOGGED_IN_USER" key and making sure it has a value
// doing this to find out if they are looged in 
	if(! isset($_SESSION['LOGGED_IN_USER']) || $_SESSION['LOGGED_IN_USER'] == "") {
		
// header redirects to anonther page
		header('Location: /login.php');
		
// stops all other code from running
		die();
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Authorized</title>
</head>
<body>
	<h1></h1>

</body>
</html>
