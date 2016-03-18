<!DOCTYPE html>
<html>
<head>
	<title>Form Feedback</title>
</head>
<body>
<?php
# Script 2.2 - handle_form.php
$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$comments = $_REQUEST['comments'];

// adding a conditional for gender
if (isset($_REQUEST['gender'])) {
	$gender = $_REQUEST['gender'];
}else {
	$gender = NULL;
}


// Print submitted information:
echo "<p>Thank you, <b>$name</b>, for the following comments:
<br /><tt>$comments</tt><p>
<p>We will reply to you at <i>$email</i>.</p>\n";

// Print message based on gender value:
if($gender == 'M') {
	echo '<p><b>Good day, Sir!</b></p>';
	} elseif ($gender == 'F') {
		echo '<p><b>Good day, Madam!</b></p>';
			} else {
			echo '<p><b>You forgot to enter your gender!</b></p>';
}
?>

</body>

</html>