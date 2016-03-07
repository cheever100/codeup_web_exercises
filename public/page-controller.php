<?php

function pageController() {
	$data = [];
	$data['title'] = "Page Congrollers . . . ";
	return $data;
}

extract(pageController());

fuction pageController() {
	$nouns = [];
	$adjectives = [];
	$data = [];
	$data['serverName'] = generateServerName($nouns, $adjetives);
	return $data;
}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1><?= $title; ?></h1>
</body>
</html>

<?php

function pageController()
{
    // Initialize an empty data array.
    $data = array();

    // Add data to be used in the html view.
    $data['message'] = 'Hello Codeup!';

    // Return the completed data array.
    return $data;
}

// Call the pageController function and extract all the returned array as local variables.
extract(pageController());

// Only use echo, conditionals, and loops anywhere within the HTML.
?>
<!DOCTYPE html>
<html>
    <head>
        <title>PHP + HTML</title>
    </head>
    <body>
        <?php echo $message; ?>
    </body>
</html>