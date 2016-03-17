<?php
// starts a session or finds a session
// allows us to use $_SESSSION superglobal
	session_start();

// creates a function 
  	function inputHas($key) {
  		$result = isset($_REQUEST[$key]);
  		return $result; // returns true or false based on whether the key is available 
  	}
	  

// creates a function 
  	function inputGet($key) {
  		$result = isset($_REQUEST[$key]);
  		echo $result; //returns the value specified by the key, or null if the key is not set.
  	} else {
  		echo "null";
  	}
	

// checking if 'inputGet' key isset: returns the value specified by the key, or null if the key is not set.
	if(isset($_REQUEST['inputGet']) {
		$message = 'true';
	} else {
		$message = 'false';
	}

// escape($input): returns the input as a safely escaped string.
	if(isset($_REQUEST['inputGet']) {
		$message = 'true';
	} else {
		$message = 'false';
	}


		


?>





