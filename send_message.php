<?php 
	
	$name = htmlspecialchars($_POST['name'], ENT_QUOTES);
	$email = htmlspecialchars($_POST['email']);
	$message = htmlspecialchars($_POST['message'], ENT_QUOTES);

	$message_body = "Name: ".$name.", Email: ".$email.", Message: ".$message;

	mail('touhidur002@gmail.com', 'Portfolio message', $message_body);

	
 ?>