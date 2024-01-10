<?php

ini_set( 'display_errors', '0' );
error_reporting( E_ALL );

require '../include/config.php';

// id вашего магазина
$merchant = isset( $_POST['merchant'] ) ? $_POST['merchant'] : 0;

// сумма платежа
$amount = isset( $_POST['amount'] ) ? $_POST['amount'] : 0; 

// id платежа
$payment_id = isset( $_POST['merchant_id'] ) ? $_POST['merchant_id'] : 0; 

$sign = md5( $merchant . ':' . $amount . ':' . $secret_key2 . ':' . $payment_id );

$sign_2 = isset( $_POST['sign_2'] ) ? $_POST['sign_2'] : '';

if ( $sign != $sign_2 )
	die( 'bad sign!' );

$char  = isset( $_POST['custom_field']['char'] )  ? $_POST['custom_field']['char']  : '';

require 'db.class.php';

$db = new DB( $config );

if ( !( $data = $db->fetch( "SELECT id FROM account WHERE username = ?", [ $char ] ) ) )
{
	die( 'Такой аккаунт ' . $char . ' не найден!' );
}

$owner_id = $data['id'];
$count = ( int ) ( $amount / $colbonus ); // TODO: floor || ceil

$payment_status = 0;
$description = 'enot payment id #' . $payment_id;

//$tablename = 'items_delayed';
$sql = "UPDATE account_donate SET bonuses = `bonuses` + ? WHERE id = '$owner_id'";

if ( $db->prepareAndExecute( $sql, [ ( int ) $count] )->rowCount() )
	die( 'Платеж #' . $payment_id . ' принят!' );
	
echo 'Платеж #' . $payment_id . ' не принят!';

?>