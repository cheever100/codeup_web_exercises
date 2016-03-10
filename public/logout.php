<?php
// starts a session or finds a session
// allows us to use $_SESSSION superglobal
	session_start();

	function clearSession() {

// clear $_SESSION array
		session_unset();

// delete session data on the server and send the client a new cookie 
		session_regenerate_id();
	}
clearSession();
header('Location: /login.php');
die();

?>