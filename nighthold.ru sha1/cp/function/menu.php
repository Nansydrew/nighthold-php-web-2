    <li class="nk-menu-heading">
        <h6 class="overline-title text-primary-alt">Личный кабинет</h6>
    </li>
<?php
$conn = mysqli_connect("$webdbip", "$webdbuser", "$webdbpass", "$webdb");
if (!$conn) {
  die("Ошибка: " . mysqli_connect_error());
}

$sql = "SELECT * FROM menu_cp";
if($result = mysqli_query($conn, $sql))
{
    $rowsCount = ($result);
	echo "<li class='nk-menu-item'>";
    foreach($result as $row){

echo "
    <a href='$row[link]' class='nk-menu-link ' >
                    <span class='nk-menu-icon'><em class='icon ni ni-$row[icon]'></em></span>
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