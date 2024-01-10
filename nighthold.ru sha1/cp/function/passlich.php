<?php
$userid=  $_SESSION["user"]["id"];
$username=  $_SESSION["user"]["username"];
$password = $_POST['newPassword'];
$conn = mysqli_connect("$lichdbip", "$lichdbuser", "$lichdbpass", "$lichdbauth");
    if (!$conn) {
      die("Ошибка: " . mysqli_connect_error());
    }

if (count($_POST) > 0) {



    $result = mysqli_query($conn, "SELECT * from account WHERE id='$userid'");
	
	
	$currpass = sha1(strtoupper($username) . ':' . strtoupper($_POST["currentPassword"]));

    $row = mysqli_fetch_array($result);
    if ($currpass == $row["sha_pass_hash"])
	if ($password == $_POST["confirmPassword"])

	
		{
        mysqli_query($conn, "UPDATE account set sha_pass_hash='" . $password = sha1(strtoupper($username) . ':' . strtoupper($password)) . "', s = '' WHERE id='$userid'");
        $messagesuc = "Пароль успешно изменён!";
    } else {
        $message = "Новые пароли несовпадают!";
	}
	
	else {
        $message = "Старый пароль введён неверно!";
	}
}
?>