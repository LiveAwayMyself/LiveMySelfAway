<?php

    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $from = 'BlogPost'; 
    $to = 'Nicolas@Minoviajuli.com.ar'; 
    $subject = '¿Hello there?';
    $human = $_POST['human'];
			
    $body = "From: $name\n E-Mail: $email\n Message:\n $message";
				
    if ($_POST['submit'] && $human == '9') {				 
        if (mail ($to, $subject, $body, $from)) { 
	    // redirect afterwords, if needed
       header('Location: About.html');;
	} else { 
	    echo '<p>Something went wrong, go back and try again!</p>'; 
	} 
    } else if ($_POST['submit'] && $human != '9') {
	echo '<p>You answered the anti-spam question incorrectly!</p>';
    }
?>