<?php 
	include_once("sender.php");
	$url = 'https://bitpay.ir/payment/gateway-result-second'; 
	$api = 'Your-API';
	$trans_id = $_GET['trans_id']; 
	$id_get = $_GET['id_get'];
	$result = get($url,$api,$trans_id,$id_get); 
	
	$parseDecode = json_decode($result);
	
	if($parseDecode->status == 1)
	{
		//true
		
		//mablagh ersali
		echo $parseDecode->amount;
		
		//factore ersali (ekhtiari)
		echo $parseDecode->factorId;
		
		//shomare kart pardakht konanade
		echo $parseDecode->cardNum;
		
	}
	else
	{
		//false
	}
?>
