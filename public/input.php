
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>National Parks Exercise</title>
    <!-- order matters, my own stylesheet must go underneath -->

    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">

    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab' rel='stylesheet' type='text/css'> 
    <!---external personalized stylesheet-->
    
    <link rel="stylesheet" type="text/css" href="/css/cards.css">
    <style type="text/css">

    /*css here*/

    </style>  

</head>
<body>
    <div id="wrapper">

    <?php foreach($parks as $park): ?>
    <h2><?=$park['name'] ?><h2>
    <h3><?=$park['location'] ?><h3>
    <h3><?=$park['date_established'] ?><h3>
    <h3><?=$park['area_in_acres'] ?><h3>
    <?php endforeach; ?>
     
    <?php if($page < $total_pages) { ?> 
    <a href="national_parks.php?page=<?=($page+1)?>">NEXT</a><br>
    <?php } ?>
  
    <?php if($page > 1 ) { ?>     
    <a href="national_parks.php?page=<?=($page-1)?>">PREVIOUS</a><br>
    <?php } ?>
     <!--html here-->


    </div> <!-- end wrapper   --> 

<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="/js/bootstrap.js"></script>

<script src="/jquery-ui-1.11.4.custom/js/query-ui.min.css"></script>
<script type="text/javascript">
      /*--js here--*/
</script>
<!---personalized js external file-->
  </body>
  </html>  