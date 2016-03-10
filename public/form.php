<?php

	var_dump($_POST);

	$username = 'ryanorsinger';
	$password = 'crummypassword';

	if(isset($_POST['username'])) {
		$attemptedUsername = isset($_POST['username']) ? $_POST['username'] : ' ';
	} else {
	$attemptedPassword = ' ';
	}

	$attemptedPassword = isset($_POST['password']) ? $_POST['password'] : ' ';

	if($attemptedPassword == $password && $username == $attemptedUsername) {
		echo "You have successfully logged in";
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
