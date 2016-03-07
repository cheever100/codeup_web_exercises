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
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
	<body>
		
		<!-- <form method="GET" action="https://duckduckgo.com/">
		    <input type="text" name="q" value="" placeholder="Search DuckDuckGo">
		    <button type="submit">Go!</button>
		</form>
 -->
		<form method="GET" action="https://duckduckgo.com/">
		    <input type="text" name="first_name" value="" placeholder="First Name">
		    <button type="submit">Go!</button>
		</form>

	</body>
</html>
