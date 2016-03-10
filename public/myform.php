<?php
  
  if($_POST['formSubmit'] == "Submit") {
    $varMovie = $_POST['formMovie'];
    $varName = $_POST['formName'];
  }
?>

// "action” specifies what page to submit the form to.
// "method” indicates how the form is submitted

<!DOCTYPE html>
<html>
<head></head>
<body>
<form action="myform.php" method="post">
    
    Which is your favorite movie?
    <input type="text" name="formMovie" maxlength="50" value="<?=$varMovie;?>">
 
    What is your name?
    <input type="text" name="formName" maxlength="50" value="<?=$varName;?>">
 
    <input type="submit" name="formSubmit" value="Submit">

</form>
</body>
</html>
