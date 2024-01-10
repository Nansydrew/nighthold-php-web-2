<?php
$connlich = mysqli_connect("$lichdbip", "$lichdbuser", "$lichdbpass", "$lichdbauth");
if (!$connlich) {
  die("Ошибка: " . mysqli_connect_error());
}

$userid=  $_SESSION["user"]["id"];
$sql = "SELECT * FROM account WHERE id = '$userid'";
if($result = mysqli_query($connlich, $sql))
{
    $rowsCount = ($result);
    foreach($result as $row){
echo "echo $row[disabled]";
			    }
    $result->free();
} 
else{
    echo "Ошибка: " . $connlich->error;
}
$connlich->close();
?>