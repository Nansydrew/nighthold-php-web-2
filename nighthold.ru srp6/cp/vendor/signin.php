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


$check_user = mysqli_query($connect, "SELECT * FROM `account` WHERE `username` = '$username'");

if (mysqli_num_rows($check_user) > 0) {
    $user = mysqli_fetch_assoc($check_user);
    
    if (VerifySRP6Login($username,$password,$user['salt'],$user['verifier'])) {

        


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
}else{
        $response = [
            "status" => false,
            "message" => 'Нет такого пользователя!'
        ];

        echo json_encode($response);
}


function VerifySRP6Login($username, $password, $salt, $verifier)
    {
        // re-calculate the verifier using the provided username + password and the stored salt
        $checkVerifier = CalculateSRP6Verifier($username, $password, $salt);
        
        // compare it against the stored verifier
        return ($verifier === $checkVerifier);
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
