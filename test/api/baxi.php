<?php 

if (isset($_POST['phoneNumber'])) 
	{
		$apibase = 'https://payments.baxipay.com.ng/api/baxipay/services/airtime/request';
		$phonenumber = $_POST['phoneNumber'];
		$amount = $_POST['Rechargeamount'];
		$network = $_POST['Rechargeoperator'];
		$agentReference = 'Smartvox'.substr(str_shuffle(md5(time())), 0, 20);
		$url  = $apibase.'?phone='.$phonenumber.'&amount='.$amount.'&service_type='.$network.'&plan=prepaid&agentId=212&agentReference='.$agentReference;
		$curl = curl_init();
		// 1. Set the CURLOPT_RETURNTRANSFER option to true
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		// 2. Set the CURLOPT_POST option to true for POST request
		curl_setopt($curl, CURLOPT_POST, true);
		// 3. Request Url
		curl_setopt($curl, CURLOPT_URL, $url);
		//This are header that produce json results and hold the api key
		$headers = array();
		$headers[] = 'Accept: */*';
		$headers[] = 'X-Api-Key: 5adea9-044a85-708016-7ae662-646d59';
		$headers[] = 'Content-Type: application/json';
		$headers[] = 'X-Csrf-Token: ';
		curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
		//Execute code
		$result = curl_exec($curl);
		if (curl_errno($curl)) {
		    echo 'Error:' . curl_error($curl);
		}
		//close connection
		curl_close($curl);
		$json = $result;
		$data = json_decode($json);
		echo $result . PHP_EOL;
	}

if (isset($_POST['dataoperator'])) { 	
		$ch = curl_init();
		$network = $_POST['dataoperator'];
		curl_setopt($ch, CURLOPT_URL, 'https://payments.baxipay.com.ng/api/baxipay/services/databundle/bundles?service_type='.$network);
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
		$json = $result;
		$data = json_decode($json);
		echo $result . PHP_EOL;
 } 


?>