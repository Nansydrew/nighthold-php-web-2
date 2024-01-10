<?php

session_start();
require_once "../../include/config.php";
    $connect = mysqli_connect("$lichdbip", "$lichdbuser", "$lichdbpass", "$lichdbauth");
		    if (!$connect) {
        die('Ошибка подключения к базе данных');
    }

$userid=  $_SESSION["user"]["id"];

$username = $_POST['username'];
$NightHoldTag = $_POST['NightHoldTag'];
$email = $_POST['email'];
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

$check_NightHoldTag = mysqli_query($connect, "SELECT * FROM `account` WHERE `NightHoldTag` = '$NightHoldTag'");
if (mysqli_num_rows($check_NightHoldTag) > 0) {
    $response = [
        "status" => false,
        "type" => 1,
        "message" => "Такой NightHoldTag уже существует",
        "fields" => ['NightHoldTag']
    ];

$check_email = mysqli_query($connect, "SELECT * FROM `account` WHERE `email` = '$email'");
if (mysqli_num_rows($check_email) > 0) {
    $response = [
        "status" => false,
        "type" => 1,
        "message" => "Такая почта уже существует",
        "fields" => ['email']
    ];

    echo json_encode($response);
    die();
}


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

if ($NightHoldTag === '') {
    $error_fields[] = 'NightHoldTag';
}

if ($email === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $error_fields[] = 'email';
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
	

    mysqli_query($connect, "INSERT INTO `account` (`id`, `NightHoldTag`, `username`, `email`, `sha_pass_hash`) VALUES ('$userid', '$NightHoldTag', '$username', '$email', '$password')");
	

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
