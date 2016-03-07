<?php
	
    function pageController() {
        var_dump($_GET);
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