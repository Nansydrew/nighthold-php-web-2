<?php
$link = mysqli_connect("$lichdbip", "$lichdbuser", "$lichdbpass", "$lichdbchar");
$userid=  $_SESSION["user"]["id"];
if (mysqli_connect_errno()) {
    printf("Ошибка подключения: %s\n", mysqli_connect_error());
    exit();
}

if ($result = mysqli_query($link, "SELECT account FROM characters WHERE account = '$userid'")) {
    $row_cnt = mysqli_num_rows($result);
    mysqli_free_result($result);
}
mysqli_close($link);
?>