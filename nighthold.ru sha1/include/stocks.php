<?php
$conn = mysqli_connect("$webdbip", "$webdbuser", "$webdbpass", "$webdb");
if (!$conn) {
  die("Ошибка: " . mysqli_connect_error());
}
$sql = "SELECT * FROM stocks";
if($result = mysqli_query($conn, $sql)){
     
    $rowsCount = mysqli_num_rows($result);
    foreach($result as $row){
		    echo "<a href='$row[link]' class='slider-info__slide'>
                <div class='slider-info__image _ibg'>
                    <picture>
                        <img src='$row[images]' alt='Image'>
                    </picture>
                </div>
                <div class='slider-info__content'>
                    
                    
                                        <div class='slider-info__tile'>
                        $row[title]
                    </div>
                                        <div class='slider-info__descr'>
                        $row[description]
                    </div>
                </div>
            </a>";
    }
    mysqli_free_result($result);
} else{
    echo "Ошибка: " . mysqli_error($conn);
}
mysqli_close($conn);
?>