<?php

include_once "functions.php";
// CONTROLLER 
// receiving from pong
    function pageController() {
        
        $counter = inputGet('counter');
        $choice = inputGet('choice');  	

        return array(
            'counter'=> $counter,
            'choice' => $choice,
        );
	}

	extract(pageController());
?>

<!-- VIEW -->
<!DOCTYPE html>
<html>
    <head>
        <title>PING</title>
    </head>
    <body>
        <h1><?=$counter?></h1>
       
       	<?php if ($choice == 'HIT') { ?>
			<p>It's a hit!</p>
		<?php } else if ($choice == 'MISS') { ?>
     		<p>It's a miss!</p>
     	<?php } ?>

<!-- sending to pong -->
<!-- Additional key-value pairs after the first get separated by an ampersand (&).  -->
       <a href="pong.php?counter=<?=$counter+1?>&choice=HIT">HIT</a>
       <a href="pong.php?choice=MISS">MISS</a> 
    </body>
</html>