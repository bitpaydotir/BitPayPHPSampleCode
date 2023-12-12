<?php 
	include_once("sender.php");
	
	$url = 'https://bitpay.ir/payment/gateway-send'; 
	$api = 'Your-API';
	$amount = 10000;
	$redirect = 'REDIRECT-PAGE';
	$name = '';//ekhtiari
	$email = '';//ekhtiari
	$description = '';//ekhtiari
	$factorId = 1;//ekhtiari
	
	$result = send($url,$api,$amount,$redirect,$factorId,$name,$email,$description); 
	
	if($result > 0 && is_numeric($result))
	{
		$go = "https://bitpay.ir/payment/gateway-$result-get"; 
		header("Location: $go");
	} 
?>
