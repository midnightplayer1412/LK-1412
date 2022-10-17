<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $subject = 'New Message from Porfolio';
    $body = "User Name : $name . \n"."User Email : $email . \n"."User Message: $message . \n";
    $to = 'ponyuxuan13@gmail.com';
	$headers = "From: $email";

	 
	if (mail($to, $subject, $body, $headers)) {
		echo "<script type='text/javascript'>
			  	alert('Contact Form successfully sent ... ');
			  </script>";
		echo "<script type='text/javascript'> document.location = 'index.html'; </script>";
	} else {
		echo "<script type='text/javascript'>
			  	alert('Email sending failed...');
			  </script>";
		echo "<script type='text/javascript'> document.location = 'index.html'; </script>";	  
	}
?>