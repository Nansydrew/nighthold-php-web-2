<?php
$conn = mysqli_connect("$webdbip", "$webdbuser", "$webdbpass", "$webdb");
if (!$conn) {
  die("Ошибка: " . mysqli_connect_error());
}
$sql = "SELECT * FROM news";
if($result = mysqli_query($conn, $sql)){
     
    $rowsCount = mysqli_num_rows($result);
    foreach($result as $row){
		    echo "<div class='news__column'> <a href ='$row[link]'class='news__item news-item'>
			<div class='news-item__image _ibg'><picture> <img src='$row[images]'> </picture></div>
			<div class='news-item__content'><h3 class='news-item__title'>$row[date]</h3>
			<p class='news-item__text'>$row[text]</p></div></a> </div>";
    }
    mysqli_free_result($result);
} else{
    echo "Ошибка: " . mysqli_error($conn);
}
mysqli_close($conn);
?>