<?php

// Add some PHP code to the top of the login page that checks the POST'ed username and password. 
	$username = 'guest';
	$password = 'password';
	
	$attemptedUsername = isset($_POST['username']) ? $_POST['username'] : ' ';
	$attemptedPassword = isset($_POST['password']) ? $_POST['password'] : ' ';

// If the username is equal to "guest" and the password is equal to "password", redirect to the authorized.php.
	if($attemptedPassword == $password && $username == $attemptedUsername) {
		header("Location: /authorized.php");
		die();

	} else if($attemptedUsername != " " || $attemptedPassword != " "){
		echo "Login failed.";
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>POST Example</title>
</head>
<body>
	<form method="POST">
		<label for="username">Username</label>
		<input id="username" type="username"><br>
		<label for="password">Password</label>
		<input id="password" type="password"><br>
		<input type="submit">

</body>
</html>
