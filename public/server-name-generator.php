<?php
// create two arrays:
// One containing at least 10 adjectives.
// One containing at least 10 nouns.

$comAdjs = ['basic', 'collaborative', 'digital', 'interactive', 'mobile', 'portable', 'remote', 'social', 'wearable', 'wireless'];
$comNouns = ['file', 'laptop', 'printer', 'screen', 'mouse', 'keyboard', 'website', 'monitor', 'skin', 'geek'];
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
  
<?php $rand_key = array_rand($comAdjs, 1);   	

	  $rand_key = array_rand($comNouns, 1); ?>   	

<?= $comAdjs[$rand_key] . " " . $comNouns[$rand_key]; ?>   

</body>
</html>


 