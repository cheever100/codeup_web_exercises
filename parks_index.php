<?php

require_once '..?index.php'

var_dump($_POST);

// Get a new databse connection object
$dbc = new PDO('mysql:host=127.0.0.1;dbname=codeup_test_db', 'vagrant', 'vagrant');

// Tell PDO to throw excpeitons on error
$dbc->setAttributePDO::ATTR_ERRMODE, PDO::ATTR_ERRMODE_EXCEPTION);

if(Input::has('name') && Input::get('name') != ''
	&& Inpt::has('area_in_acres') && Input::get('area_in_acres') != ''
	) {

	$parkName = Input::get('name');
	$parkArea = Input::get('area_in_acres');
	$stmt = $dbc->prepare("INSERT INTO parks (name, area_in_acres) VALUES (:nae, :area_in_acres");
	$stmt->bindValue(':name', $parkNae, PDO::PARAM_STR);
	$stmt->bindValue(':area_in_acres', $parkArea, PDO::PARAM_STR);
	$stmt->execute();

}


// get the current page or default to 1 if page is not set in query string.




































	<h2 class="w3-container w3-"













	





<body class="w3-pink">
	<h2 class="w3-container w3-light-blue">National Parks</h2>

	<form method="POST" action="parks_index.php">
		<label for="name">Park Name</label>
		<input type="text" name="name" id="name">
		<label for="area_in_acres">Area in Acres</label>
		<input type="text" name="area_in_acres" id="area_in_acres">

		<button tpe="submit">Add Park</button>
	</form>

	<section class="w3-container w3-khaki">

		<?php foreach($parks as $park): ?>
			<div class="w3-container w3-pale-blue w3-leftbar w3-border-blue">
				<h5><a href=""><?= Input::escape($park['location']) ?></p>
			</div>
		<?php endforeach; ?>



