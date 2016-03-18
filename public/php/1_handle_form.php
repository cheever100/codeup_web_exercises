<!DOCTYPE html>
<html>
<head>
	<title>Form Feedback</title>
	<style type="text/css" title="text/css" media "all">
	.error {
		font-weight: bold;
		color: #C00;
	}
	</style>
</head>
<body>
<?php
# Script 2.4 - 1_handle_form.php

// check if name was entered:

if (!empty($_REQUEST['name'])) {
	$name = $_REQUEST['name'];
} else {
	$name = NULL;
	echo '<p class="error">You forgot to enter your name!</p>';
}

// check if email was entered:

if (!empty($_REQUEST['email'])) {
	$email = $_REQUEST['email'];
} else {
	$email = NULL;
	echo '<p class="error">You forgot to enter your email address!</p>';
}

// check if comments was entered:

if (!empty($_REQUEST['comments'])) {
	$comments = $_REQUEST['comments'];
} else {
	$comments = NULL;
	echo '<p class="error">You forgot to enter your comments!</p>';
}

// check if gender was entered:

if (isset($_REQUEST['gender'])) {
	$gender = $_REQUEST['gender'];
		if($gender == 'M') {
			$greeting = '<p><b>Good day, Sir!</b></p>';
			} elseif ($gender == 'F') {
				$greeting = '<p><b>Good day, Madam!</b></p>';
				} else {
					$gender = NULL;
					echo '<p class="error">You forgot to select your gender!</p>';
					}
	}
// Print message
if ($name && $email && $gender && $comments) {
	echo "<p>Thank you, $name, for the following comments:<br />
	<tt>$comments</tt></p>
	<p>We will reply to you at $email.</p>\n";
	echo $greeting;
		} else {
			echo '<p class="error">Please go back and fill out the form again.</p>';
		}
?>
</body>
</html>










