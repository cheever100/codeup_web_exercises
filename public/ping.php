// CONTROLLER 
<?php
// receiving from pong
    function pageController() {
        
        $counter = isset($_GET['counter'])? $_GET['counter']:0;
        $choice = isset($_GET['choice']) ? $_GET['choice'] : '';  	

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
        <h1><?= $counter?></h1>
       

       <?php if ($choice == 'HIT') { ?>
			<p>It's a hit!</p>
		<?php } else if ($choice == 'MISS') { ?>
     		<p>It's a miss!</p>
     	<?php } ?>

<!-- sending to pong -->
       <a href="pong.php?counter=<?=$counter+1?>&choice=HIT">HIT</a>
       <a href="pong.php?choice=MISS">MISS</a> 
    </body>
</html>
