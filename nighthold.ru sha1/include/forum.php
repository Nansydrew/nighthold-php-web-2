

<?php
$conn = mysqli_connect("$forumdbip", "$forumdbuser", "$forumdbpass", "$forumdb");

if (!$conn) {
  die("Ошибка: " . mysqli_connect_error());
}
$sql = "SELECT * FROM thread ORDER BY threadid DESC LIMIT 5";


if($result = mysqli_query($conn, $sql)){
     
    $rowsCount = mysqli_num_rows($result);
    foreach($result as $row){


		 
		    echo "";
?>
	
            <li class="forums-list__item">
        <a href="https://<?=$settings['forum']; ?>/threads/<?php echo"$row[title]"; ?>.<?php echo"$row[threadid]"; ?>" class="forums-list__link">
            <div class="forums-list__avatar">
                    <img src="../template/nighthold/images/info/ava.jpg" alt="Image">
            </div>
            <div class="forums-list__content">
                <div class="forums-list__title"><?php echo"$row[title]"; ?><br></div>
                <div class="forums-list__info">
                    <div class="forums-list__date">
					
						
					
					
					<?php $timestamp = $row['lastpost'];
echo(date("d.m.Y H:i:s", $timestamp));?>

</div>
                    <div class='forums-list__author'>Автор: <?php echo"$row[postusername]"; ?></div>
                </div>
            </div>
        </a>
    </li>
	
<?php
    }
    mysqli_free_result($result);
} else{
    echo "Ошибка: " . mysqli_error($conn);
}
mysqli_close($conn);
?>
