<?php 
// $apibase: "https://payments.baxipay.com.ng/api/baxipay/";
// $username: "baxi_test";
// $usersecret: "5xjqQ7MafFJ5XBTN";
// $apikey: "5adea9-044a85-708016-7ae662-646d59"; 
// Authorization: $apikey;

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://payments.baxipay.com.ng/api/baxipay/services/airtime/request?phone=08055636587&amount=500&service_type=glo&plan=prepaid&agentId=212&agentReference=AX14s68P1Z2');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);

$headers = array();
$headers[] = 'Accept: */*';
$headers[] = 'X-Api-Key: 5adea9-044a85-708016-7ae662-646d59';
$headers[] = 'X-Csrf-Token: ';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close($ch);


?>

