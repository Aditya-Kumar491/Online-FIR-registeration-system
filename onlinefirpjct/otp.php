<?php

$msn =  $_POST["aadhar"];
$curl = curl_init();


curl_setopt_array($curl, array(
	CURLOPT_URL => "https://d7-verify.p.rapidapi.com/send",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "POST",
	CURLOPT_POSTFIELDS => "{ \"expiry\": 900, \"message\": \"Your otp code is {code}\", \"mobile\":$msn, \"sender_id\": 6788\"SMSInfo\"}",
	CURLOPT_HTTPHEADER => array(
		"accept: application/json",
		"content-type: application/json",
		"x-rapidapi-host: d7-verify.p.rapidapi.com",
		"x-rapidapi-key: c754442e38msh0a725ef184f99bep1da6d6jsn4dd104bdee6a"
	),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
	echo "cURL Error #:" . $err;
} else {
	echo $response;
}