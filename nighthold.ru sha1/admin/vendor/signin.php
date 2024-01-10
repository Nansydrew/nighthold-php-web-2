<?php
session_start();
require_once "../../include/config.php";
    $connect = mysqli_connect("$webdbip", "$webdbuser", "$webdbpass", "$webdb");

$id = $_POST['id'];
$password = $_POST['password'];
$username = $_POST['username'];

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

$password = md5($password);

$check_user = mysqli_query($connect, "SELECT * FROM `admin` WHERE `username` = '$username' AND `sha_pass_hash` = '$password'");
if (mysqli_num_rows($check_user) > 0) {

    $admin = mysqli_fetch_assoc($check_user);


    $_SESSION['admin'] = [
        "id" => $admin['id'],
		"username" => $admin['username']
    ];


    $response = [
        "status" => true
    ];

    echo json_encode($response);

} else {

    $response = [
        "status" => false,
        "message" => 'Неверный логин или пароль'
    ];

    echo json_encode($response);
}
?>
