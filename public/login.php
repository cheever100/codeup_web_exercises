<?php
// starts a session or finds a session
// allows us to use $_SESSSION superglobal
	session_start();
	
// dumping out session variables (for debugging)
	var_dump($_SESSION);

// variables for login check
	$username = 'guest';
	$password = 'password';
	$message = "";

// checking $_POST superglobal for user input to check for login
	$userInputUsername = isset($POST['username']) ? $_POST['username'] : '';
	$userInputUserPassword = isset($POST['password']) ? $_POST['password'] : '';

// checking if 'LOGGED_IN_USER' key isset
// and if it has a value (not empty string)
// telling me that they are logged in and don't need to be here
	if(isset($_SESSION['LOGGED_IN_USER']) && $_SESSION['LOGGED_IN_USER'] != "") {
		
// header redirects to anonther page
		header('Location: /authorized.php');

// stops all other code from running
		die();

// checking to see if both valuse match teh correct login info
// doing this to login user if they entered the correct info
	} else if ($userInputUsername == $username && $userInputUserPassword == $password) {
		$_SESSION['LOGGED_IN_USER'] = $username;

// header redirects to anonther page		
		header("Location: /authorized.php");
		
// stops all other code from running
		die();

// checking to see if they entered the wrong information
// prevents message from showing when user submitted nothing or first time loading
	} else if($userInputUsername != " " || $userInputUserPassword != " "){
		$message = "Incorrect login info.";
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
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