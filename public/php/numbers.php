<!DOCTYPE html>
<html>
<head>
	<title>Numbers</title>
</head>

	<body>

	<?php # Script 1.8 - numbers.php

	// Create the variables:
	$quantity = 30;
	$price = 119.95;
	$taxrate = .05;
	
	// Calculate the total:
	$total = $quantity * $price;
	$total = $total + ($total * $taxrate);
	// Calculate and add the tax.

	// Format the total:
	$total = number_format ($total, 2);

	// Print the results:
	echo "<h3>Using double quotation marks:</h3>";
	echo "<p>You are purchasing <b>$quantity</b> widgets(s) at a cost
	of <b>\$$price</b> each. With tax, the total comes to <b>\$$total</b>.</p>\n";

	// Print the results:
	echo '<h3>Using single quotation marks:</h3>';
	echo '<p>You are purchasing <b>$quantity</b> widgets(s) at a cost
	of <b>\$$price</b> each. With tax, the total comes to <b>\$$total</b>.</p>\n';

	?>
	</body>
	</html>