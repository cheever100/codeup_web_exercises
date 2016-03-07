<!doctype html>

<html>
<head>
	<title></title>
	<style type="text/css">
	table {border="2"};
	
	</style>
</head>
<body>

	<h2>Table</h2>                     
		  
	<table>

		<tr>
		  <th>Favorite Things</th>
		</tr>

  	<?php

  	$favThings = ['breakfast', 'walking', 'musicals', 'inventions', 'biographies'];	

  	foreach ($favThings as $favThing) {
		
		$item = $favThing;

		echo "<tr>" . PHP_EOL;

		echo "<td>" . $item . "</td>" . PHP_EOL;
	}

  	?>
		    
	</table>

</body>
</html>		
