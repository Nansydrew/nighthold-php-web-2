            <div class="nk-header-menu">
                <ul class="nk-menu nk-menu-main">

<?php
$conn = mysqli_connect("$webdbip", "$webdbuser", "$webdbpass", "$webdb");
if (!$conn) {
  die("Ошибка: " . mysqli_connect_error());
}

$sql = "SELECT * FROM menu_cp_top";
if($result = mysqli_query($conn, $sql))
{
    $rowsCount = ($result);
	echo "<li class='nk-menu-item'>";
    foreach($result as $row){

echo "<li class='nk-menu-item'>
    <a href='$row[link]' class='nk-menu-link ' >
                <span class='nk-menu-text'>$row[name]</span>
        
    </a>";
			    }
				echo"</li>";
    $result->free();
} 
else{
    echo "Ошибка: " . $conn->error;
}
$conn->close();
?>

                </ul>
            </div>