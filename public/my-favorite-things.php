<?php

	function pageController() {
    
    	$favThings = ['breakfast', 'walking', 'musicals', 'inventions', 'biographies'];	

		$data = [
			'favThings' => $favThings
		];
	
    	return $data;    	
	}

	extract(pageController());

	// var_dump($favThings);



?>

<!doctype html>
<html>
<head>
<title></title>

<!-- added bootstrap to get table-striped -->
	<link rel="stylesheet" href="/css/bootstrap.css">
	
	<style>
	#row-header {color: blue; font-size: 200%; text-align: center; width: 300px; border-style: solid;}
	.row-lines {color: red; font-size: 100%; text-align: center; width: 300px; border-style: solid;}
	</style>

</head>
<body>             
	
<!-- Use CSS to add a light gray background on every other row for a nice effect. -->
	<table class="table table-striped"; border="1">
		<tr>
			<th id="row-header">Favorite Things</th>
		</tr>

<!-- Use an HTML table to display favorite things. -->
  	<?php foreach ($favThings as $favThing) : ?>
		<tr><td class="row-lines"><?= $favThing ?><td></tr>
	<?php endforeach; ?>
		    
	</table>

</body>
</html>		