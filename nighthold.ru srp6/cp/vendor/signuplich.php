<?php

session_start();
require_once "../../include/config.php";
    $connect = mysqli_connect("$lichdbip", "$lichdbuser", "$lichdbpass", "$lichdbauth");
		    if (!$connect) {
        die('Ошибка подключения к базе данных');
    }

$userid=  $_SESSION["user"]["id"];
$id = $_POST['id'];
$username = $_POST['username'];
$password = $_POST['password'];
$password_confirmation = $_POST['password_confirmation'];

$check_username = mysqli_query($connect, "SELECT * FROM `account` WHERE `username` = '$username'");
if (mysqli_num_rows($check_username) > 0) {
    $response = [
        "status" => false,
        "type" => 1,
        "message" => "Такой логин уже существует",
        "fields" => ['username']
    ];

    echo json_encode($response);
    die();
}

$error_fields = [];

if ($username === '') {
    $error_fields[] = 'username';
}

if ($password === '') {
    $error_fields[] = 'password';
}

if ($password_confirmation === '') {
    $error_fields[] = 'password_confirmation';
}


if (!empty($error_fields)) {
    $response = [
        "status" => false,
        "type" => 1,
        "message" => "Проверьте правильность полей",
        "fields" => $error_fields
    ];

    echo json_encode($response);

    die();
}

if ($password === $password_confirmation) {


    $password = sha1(strtoupper($username) . ':' . strtoupper($password));

	mysqli_query($connectlegion, "INSERT INTO `battlenet_accounts` (`id`, `email`, `sha_pass_hash`) VALUES ('$userid', '$email', '$password')");
	mysqli_query($connectlegion, "INSERT INTO account_donate (id) VALUES ('$userid')");
	

    $response = [
        "status" => true,
        "message" => "Регистрация прошла успешно!",
    ];
    echo json_encode($response);


} else {
    $response = [
        "status" => false,
        "message" => "Пароли не совпадают",
    ];
    echo json_encode($response);
}

?>
