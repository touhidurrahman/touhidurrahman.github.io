<?php 
	
	$message = $_POST['ip_address'];
	
	$url = "http://ip-api.com/json/".$client_ip_address;
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
	$result1 = curl_exec($ch);
	$result = json_decode($result1);

	$country = $result -> country;

	$message_body = "Country: ".$country.", IP: ".$message;
	mail('touhidur002@gmail.com', 'Portfolio Visitor', $message_body);

 ?>