<?php 
// $apibase: "https://payments.baxipay.com.ng/api/baxipay/";
// $username: "baxi_test";
// $usersecret: "5xjqQ7MafFJ5XBTN";
// $apikey: "5adea9-044a85-708016-7ae662-646d59"; 
// Authorization: $apikey;

$curl = curl_init();

// 1. Set the CURLOPT_RETURNTRANSFER option to true
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
// 2. Set the CURLOPT_POST option to true for POST request
curl_setopt($curl, CURLOPT_POST, true);
// 3. Set the request data as JSON using json_encode function
curl_setopt($curl, CURLOPT_POSTFIELDS,  json_encode($data));
// 3. Request Url
curl_setopt($curl, CURLOPT_URL, 'https://payments.baxipay.com.ng/api/baxipay/services/airtime/request?phone=08055636587&amount=500&service_type=glo&plan=prepaid&agentId=212&agentReference=AX14s68P1Z2');
$headers = array();
$headers[] = 'Accept: */*';
$headers[] = 'X-Api-Key: 5adea9-044a85-708016-7ae662-646d59';
$headers[] = 'Content-Type: application/json';
$headers[] = 'X-Csrf-Token: ';
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($curl);
if (curl_errno($curl)) {
    echo 'Error:' . curl_error($curl);
}
curl_close($curl);

echo $response . PHP_EOL;


?>

