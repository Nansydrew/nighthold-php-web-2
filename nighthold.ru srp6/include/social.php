<?php
$conn = mysqli_connect("$webdbip", "$webdbuser", "$webdbpass", "$webdb");
if (!$conn) {
  die("Ошибка: " . mysqli_connect_error());
}
$sql = "SELECT * FROM social_link";
if($result = mysqli_query($conn, $sql)){
     
    $rowsCount = mysqli_num_rows($result);
    foreach($result as $row){
		    echo "<li class='soc__item'>
			<a href='$row[link]' class='$row[class]'></a>";
    }
    echo "</li>";
    mysqli_free_result($result);
} else{
    echo "Ошибка: " . mysqli_error($conn);
}
mysqli_close($conn);
?>