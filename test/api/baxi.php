
<?php

// kvstore API url
$url = 'https://kvstore.p.rapidapi.com/collections';

// Collection object
$data = [
  'collection' => 'RapidAPI'
];

// Initializes a new cURL session
$curl = curl_init($url);

// Set the CURLOPT_RETURNTRANSFER option to true
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

// Set the CURLOPT_POST option to true for POST request
curl_setopt($curl, CURLOPT_POST, true);

// Set the request data as JSON using json_encode function
curl_setopt($curl, CURLOPT_POSTFIELDS,  json_encode($data));

// Set custom headers for RapidAPI Auth and Content-Type header
curl_setopt($curl, CURLOPT_HTTPHEADER, [
  'X-RapidAPI-Host: kvstore.p.rapidapi.com',
  'X-RapidAPI-Key: 7xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx',
  'Content-Type: application/json'
]);

// Execute cURL request with all previous settings
$response = curl_exec($curl);

// Close cURL session
curl_close($curl);

echo $response . PHP_EOL;?>
