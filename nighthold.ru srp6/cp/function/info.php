<?php
$conn = mysqli_connect("$lichdbip", "$lichdbuser", "$lichdbpass", "$lichdbauth");
    if (!$conn) {
      die("Ошибка: " . mysqli_connect_error());
    }

	
$userid=  $_SESSION["user"]["id"];
$sql = "SELECT * FROM account_donate WHERE id = '$userid'";
    if($result = mysqli_query($conn, $sql)){
        if(mysqli_num_rows($result) > 0){
            foreach($result as $row){
                $bonuses = $row["bonuses"];
                $votes = $row["votes"];
                
            }
        }
        mysqli_free_result($result);
    } 

	
	
	else{
        echo "Ошибка: " . mysqli_error($conn);
    }
    mysqli_close($conn);

?>