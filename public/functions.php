<?php

// created function 
  	function inputHas($key) {
// created isset to determine if key is in "REQUEST" array
  		$result = isset($_REQUEST[$key]);
// returns true or false based on whether the key is available.  		
  		return $result;
  	}
	  
// created function 
	function inputGet($key) {
// created ternary operator
		$input = (inputHas($key)) ? $_REQUEST[$key] : "";
// returns the value of key OR null if the key is not set
		return $input;
	}

// created function 
	function escape($input) { 
// returns the input as a safely escaped string
		return htmlspecialchars(strip_tags($input)); 
	}
?>
