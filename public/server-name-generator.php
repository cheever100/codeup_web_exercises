<?php
function pageController() {
    
    $comAdjs = ['basic', 'collaborative', 'digital', 'interactive', 'mobile', 'portable', 'remote', 'social', 'wearable', 'wireless'];
	$comNouns = ['file', 'laptop', 'printer', 'screen', 'mouse', 'keyboard', 'website', 'monitor', 'skin', 'geek'];

	$rand_key_a = array_rand($comAdjs, 1);   	

	$rand_key_n = array_rand($comNouns, 1);

	$serverName = $comAdjs[$rand_key_a] . " " . $comNouns[$rand_key_n]; 

    return array(
    	'serverNamekey' => $serverName
    );

}

// Call the pageController function and extract all the returned array as local variables.
	extract(pageController());

// Only use echo, conditionals, and loops anywhere within the HTML.



?>

<!DOCTYPE html>
<html>
<head>
    <title>Server Name Generator</title>

<!-- Add CSS to make it fancy. -->
    <style>
		body {background-color:lightyellow;}
		h1   {color:blue;}
	</style>

</head>

<body>
	
	<h1><img src="/img/New-York-Times-logo.jpg" width="150" height="100"></h1>
	<h1>Word Play by Will Short</h1>
	
	<h4><i>Click refresh for random word combinations</i></h4>
  
  	
	<?= $serverNamekey?>



</body>
</html>


 