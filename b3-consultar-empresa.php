<?php

// Utilizando file_get_contents
$url = 'https://api.b3.com.br/b3api/v1/stock/PETR4';
$options = array(
    'http' => array(
        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
        'method'  => 'GET',
        'timeout' => 60
    )
);
$context  = stream_context_create($options);
$result = file_get_contents($url, false, $context);

// Utilizando cURL
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$result = curl_exec($ch);
curl_close($ch);

$result = json_decode($result, true);

print_r($result);