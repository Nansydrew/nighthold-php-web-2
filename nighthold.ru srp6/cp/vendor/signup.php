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


    $srp6 = list($salt, $verifier) = GetSRP6RegistrationData(strtoupper($username), $password);
	$salt = $srp6['salt'];
    $verifier = $srp6['verifier'];

    mysqli_query($connect, "INSERT INTO `account` (`id`, `NightHoldTag`, `username`, `email`, `salt`, 'verifier') VALUES ('$userid', '$NightHoldTag', '$username', '$email', '$salt', '$verifier')");
	

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

function CalculateSRP6Verifier($username, $password, $salt)
{
    // algorithm constants
    $g = gmp_init(7);
    $N = gmp_init('894B645E89E1535BBDAD5B8B290650530801B18EBFBF5E8FAB3C82872A3E9BB7', 16);
    
    // calculate first hash
    $h1 = sha1(strtoupper($username . ':' . $password), TRUE);
    
    // calculate second hash
    $h2 = sha1($salt.$h1, TRUE);
    
    // convert to integer (little-endian)
    $h2 = gmp_import($h2, 1, GMP_LSW_FIRST);
    
    // g^h2 mod N
    $verifier = gmp_powm($g, $h2, $N);
    
    // convert back to a byte array (little-endian)
    $verifier = gmp_export($verifier, 1, GMP_LSW_FIRST);
    
    // pad to 32 bytes, remember that zeros go on the end in little-endian!
    $verifier = str_pad($verifier, 32, chr(0), STR_PAD_RIGHT);
    
    // done!
    return $verifier;
}

function GetSRP6RegistrationData($username, $password)
{
    // generate a random salt
    $salt = random_bytes(32);
    
    // calculate verifier using this salt
    $verifier = CalculateSRP6Verifier($username, $password, $salt);
    
    // done - this is what you put in the account table!
    return array($salt, $verifier);
}

?>
