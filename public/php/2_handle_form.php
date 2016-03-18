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
# Script 2.5 - 2_handle_form.php #4

// basic form validation:

if ( !empty($_POST['name']) &&
		!empty($_POST['comments']) &&
		!empty($_POST['email'])) {
		echo "<p>Thank you, {$_POST['name']}</b>, for the following comments:<br />
		<tt>{$_POST['comments']}</tt></p>
		<p>We will reply to you at 
		<i>{$_POST['email']}</i>.</p>\n";
			} else {
				echo '<p>Please go back and fill out the form again.</p>';
			}


?>
</body>
</html>










