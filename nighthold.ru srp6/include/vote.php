							<?php
$conn = mysqli_connect("$webdbip", "$webdbuser", "$webdbpass", "$webdb");
if (!$conn) {
  die("Ошибка: " . mysqli_connect_error());
}
$sql = "SELECT * FROM vote";
if($result = mysqli_query($conn, $sql)){
     
    $rowsCount = mysqli_num_rows($result);
    foreach($result as $row){
		    echo "                        <li class='list-vote__item'>
                            <a href='$row[link]' class='list-vote__link'>
                                <div class='list-vote__logo'>
                                    <picture>
                                        <img src='$row[images_company]' alt=''>
                                    </picture>
                                </div>
                                <div class='list-vote__title'>$row[name]</div>
                            </a>
                        </li>";
    }
    mysqli_free_result($result);
} else{
    echo "Ошибка: " . mysqli_error($conn);
}
mysqli_close($conn);
?>