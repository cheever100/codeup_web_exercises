<?php

try {
	$name = 'Jane';

	if($name != 'Bob')
	{
		throw new Exception('You must be Bob or this will not work');
	}

	} catch (Exception $e) {

		echo "The code in the catch runs if we caught an exception" . PHP_EOL;
		echo "ANY code we run in the catch runs as our failsafe or backup" . PHP_EOL;
	}

	echo "This code runs no matter what" . PHP_EOL;
