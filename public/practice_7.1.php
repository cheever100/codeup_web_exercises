<!doctype html>

<html>
<head>
	<title></title>

	<style>
	#row-header{color: blue;}
	#row-lines{text-align: center}

	</style>

</head>
<body>

	<h2>Table</h2>                     
		  
	<table border="1">

		<tr>
		  <th id="row-header">Favorite Things</th>
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
