<?php
  var_dump($_GET);
  var_dump($_POST);
?>

<!doctype html>

<html>

<head>
	<title>Jean's First Form</title>

      <style> 
        .login_form {
            background-color: blue;
            text-decoration: underline;
        }
    </style>

</head>

    <body>

    <main>

        

	<header>
            <h2> My First Form</h2>
    </header>


            <section class="login_form"
	           
               <form method="POST" action="/my_first_form.php">



<!-- New Form User Login-->
    
    <p>
    	<label for="User Login">User Login:</label>
    </p>

    <p>
        <label for="username">Username</label>
        
        <input type="text" id="username" name="username" placeholder="Enter your username">
    </p>
    
    <p>
        <label for="password">Password</label>
     
        <input type="text" id="password" name="password" placeholder="Enter your password">
    </p>
    
    <p>
        <button type="submit">Login</button>
    </p>

<!-- New Form Compose an Email-->
	
	<p>
    	<label for="compose an email">Compose an Email:</label>
    </p>

	<p>
        <label for="to">To</label>
        
        <input type="text" id="to" name="to" placeholder="Enter your adressee">
    </p>
    
    <p>
        <label for="from">From</label>
     
        <input type="text" id="from" name="from" placeholder="Enter your name">
    </p>

    <p>
        <label for="subject">Subject</label>
        
        <input type="text" id="subject" name="subject" placeholder="Enter the subject">
    </p>
    
    <p>
        <label for="Message">Message</label>

        <br>

		<textarea id="email_body" name="email_body" rows="40" cols="40">Enter your message</textarea>

    </p>

    <p>

		<input type="checkbox" id="email copy saved" name="Email Copy Saved" value="no">
		<label for="email copy saved">Do not save a copy of this email to my "sent" folder.</label>
	
	<p>
        <button type="send">Send</button>
    </p>

<!-- New Form Multiple Choice Test-->

	<p>
    	<label for="multiple choice test">Multiple Choice Test:</label>
    </p>

	<label> 2016 Academny Awards</label>


      

       <p>How will you follow the show?</p>
		
		<label>
    		<input type="radio" name="q1" value="television">
    		Television
		</label>
<br>
		<label>
    		<input type="radio" name="q1" value="live stream">
    		Live Stream
		</label>
<br>
		<label>
    		<input type="radio" name="q1" value="i will watch an nba game instead.">
    		I will watch an NBA game instead.
		</label>


	<p>If you watch it, who do you think will win for Best Picture?</p>
		
		<label>
    		<input type="radio" name="q2" value="the big short">
    		The Big Short
		</label>
<br>
		<label>
    		<input type="radio" name="q2" value="bridge of spies">
    		Bridge of Spies
		</label>
<br>
		<label>
    		<input type="radio" name="q2" value="brooklyn">
    		Brooklyn
		</label>
<br>
		<label>
    		<input type="radio" name="q2" value="mad max">
    		Mad Max
		</label>
<br>
		<label>
    		<input type="radio" name="q2" value="the martian">
    		The Martian
		</label>
<br>
		<label>
    		<input type="radio" name="q2" value="the revenant">
    		The Revenant
		</label>
<br>
		<label>
    		<input type="radio" name="q2" value="room">
    		Room
		</label>
<br>
		<label>
    		<input type="radio" name="q2" value="spotlight">
    		Spotlight
		</label>		

	<p>What are your favorite categories?</p>

		<label><input type="checkbox" id="os1" name="os[]" value="best picture"> Best Picture</label>
<br>		
		<label><input type="checkbox" id="os2" name="os[]" value="actor in a leading role"> Actor in a Leading Role</label>
<br>		
		<label><input type="checkbox" id="os3" name="os[]" value="actress in a leading role"> Actress in a Leading Role</label>
<br>		
		<label><input type="checkbox" id="os1" name="os[]" value="directing"> Directing</label>
<br>		
		<label><input type="checkbox" id="os2" name="os[]" value="actor in a leading role"> Actor in a Supporting Role</label>
<br>		
		<label><input type="checkbox" id="os3" name="os[]" value="actress in a leading role"> Actress in a Supporting Role</label>
<br>
<br>
		<label for="lf">What are your least favorite categories? </label>
<br>		
			<select id="lf" name="lf[]" multiple>		
    			<option value="documentaris">Documentaries</option>
    			<option value="animated">Animated</option>
    			<option value="shorts">Shorts</option>
			</select>

<!-- New Form Select Testing-->

<br>

	<head>

	<p>Select Testing</p>

	</head>

		<label for="regular film watcher">Do you see films regularly?: </label>
		
			<select id="regular film watcher" name="regular film watcher">
    			<option value="1">Yes</option>
    			<option value="0">No</option>
			</select>

	<p>
        <button type="send">Send</button>
    </p>

</form>

</body>
