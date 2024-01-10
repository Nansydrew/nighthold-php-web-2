<?php
session_start();
require_once "../../include/config.php";
    $connect = mysqli_connect("$lichdbip", "$lichdbuser", "$lichdbpass", "$lichdbauth");

$id = $_POST['id'];
$email = $_POST['email'];
$password = $_POST['password'];
$username = $_POST['username'];
$joindate = $_POST['joindate'];

$error_fields = [];

if ($email === '') {
    $error_fields[] = 'email';
}

if ($password === '') {
    $error_fields[] = 'password';
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

$password = sha1(strtoupper($username) . ':' . strtoupper($password));

$check_user = mysqli_query($connect, "SELECT * FROM `account` WHERE `username` = '$username' AND `sha_pass_hash` = '$password'");
if (mysqli_num_rows($check_user) > 0) {

    $user = mysqli_fetch_assoc($check_user);


    $_SESSION['user'] = [
        "id" => $user['id'],
        "email" => $user['email'],
		"username" => $user['username'],
		"joindate" => $user['joindate']
    ];

	


    $response = [
        "status" => true
    ];

    echo json_encode($response);

} else {

    $response = [
        "status" => false,
        "message" => 'Не верный логин или пароль'
    ];

    echo json_encode($response);
}
?>
