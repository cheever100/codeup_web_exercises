<!DOCTYPE html>
<html>
<head>
	<title>Constants</title>
</head>

	<body>

	<?php # Script 1.9 - constants.php

	// Set today's date as a constant:
	DEFINE ('TODAY', 'March 15, 2016');

	// Print a message, using predefined constants and the TODAY constant:

	echo "<p>Today is " . TODAY . ".<br />This server is running version <b>" . 
	PHP_VERSION . "</b> of PHP on the <b>" . PHP_OS . "</b> operating system.</p>";

	?>
	</body>
	</html>