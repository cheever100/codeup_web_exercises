<?php
	
// $_GET is PHP's globally accessible variable that contains any additional key=>value pairs sent with an HTTP GET request from a client
echo "The \$_GET SUPERGLOBAL is: ";
var_dump($_GET);

// $_SERVER is another SUPERGLOBAL in PHP. 
// $_SERVER['QUERY_STRING'] is a key that represents the string anywhere after the `?` character in the URL.
echo "The \$_SERVER['QUERY_STRING'] is: " . $_SERVER['QUERY_STRING'];
    
    function pageController() {
        
        $counter = isset($_GET['counter'])? $_GET['counter']:0;	   	

        return array(
            'counter'=> $counter
        );
	}

	extract(pageController());
?>


<!DOCTYPE html>
<html>
    <head>
        <title>PHP + HTML</title>
    </head>
    <body>
        <h1><?= $counter?></h1>
       <a href="counter.php?counter=<?= $counter+1?>">up</a>
       <a href="counter.php?counter=<?= $counter-1?>">down</a>
    </body>
</html>