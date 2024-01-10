<?php

ini_set( 'display_errors', '0' );
error_reporting( E_ALL );

header( "Content-type: application/json" );

$XMLHttpRequest = isset( $_SERVER['HTTP_X_REQUESTED_WITH'] ) && $_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest';

if ( $XMLHttpRequest ) 
{
	require '../include/config.php';
	
	$char  = isset( $_POST['char'] )  ? $_POST['char']  : '';
	$count = isset( $_POST['count'] ) ? $_POST['count'] : 0;
	
	// Сумма платежа + множитель в конфиге
	$sum = ( $count * $colbonus ); 
	
	// ID платежа
	$payment_id = time(); 

	$sign = md5( $merchant_id . ':' . $sum . ':' . $secret_key1 . ':' . $payment_id );
	
	$data = [
		'merchant_id'	=> $merchant_id,
		'sum' 			=> $sum,
		'payment_id' 	=> $payment_id,
		'sign' 			=> $sign
	];
}
else
{
	$data = [
		'error' => [
			'code' => 403,
			'message' => 'Forbidden'
		]
	];
}

echo json_encode( $data );

?>