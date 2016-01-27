<!DOCTYPE html>

<html>

<head>
	<meta charset="utf-8">
	<title>My Second HTML Form</title>
</head>

<body>

<?php
  var_dump($_GET);
  var_dump($_POST);
?>

<!-- NEW FORM Exercise 1.2. User Login-->

	<form method="GET" action="/my_second_form.php">

		<p>User Login</p>

		<p>
			<label for="username">
				Username
			</label>

			<input type="text" id="username" name="username" placeholder="username here">
		</p>
		
		<p>
			<label for="password">
				Password
			</label>
			<input type="password" id="password" name="password" placeholder="password here">
		</p>

		<p>
			<button type="submit">
				Login
			</button>
		</p>

	</form>

<!-- NEW FORM Exercise 1.2.2 Compose An Email-->

	<form meth="POST" action="/my_second_form.php">

		<p>Compose an Email</p>

		<p>
			<label for="to">
				To
			</label>
			<input type="text" id="to" name="to">
		</p>

		<p>
			<label for="from">
				From
			</label>
			<input type="text" id="from" name="from">
		</p>

		<p>
			<label for="subject">
				Subject
			</label>
			<input type="text" id="subject" name="subject">
		</p>

		<p>
			<label for="message">
				Message
			</label>
			<br>
			<textarea id="email_body" name="email_body" row="5" cols="40">
				
			</textarea>
		</p>

		<p>
			<input type="submit" value="Send">
		</p>

		<label for="composeanemail">Do you want to save a copy in your sent folder?
		</label>
		<input type="checkbox" id="composeanemail" name="composeanemail" value="yes" checked>		

	</form>

<!-- NEW FORM Exercise 1.2.2 Multiple Choice Test-->

	<form meth="POST" action="/my_second_form.php">

		<p>Multiple Choice Test</p>

		<p>What is the most common type of transportation you take to Codeup each day?</p>
		
		<label>
			<input type="radio" name="q1" value="car">
			Car
		</label>
		<br>
		<label>
			<input type="radio" name="q1" value="bus">
			Bus
		</label>
		<br>
		<label>
			<input type="radio" name="q1" value="bike">
			Bike
		</label>
		<br>
		<label>
			<input type="radio" name="q1" value="walk">
			Walk
		</label>
		<br>
			<input type="submit">


	</form>


</body>

</html>


