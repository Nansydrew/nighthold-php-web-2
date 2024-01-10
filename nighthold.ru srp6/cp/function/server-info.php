    <li class="nk-menu-heading">
        <h6 class="overline-title text-primary-alt">Статус серверов</h6>
<?php
//Лич реалм 1
$connlich = mysqli_connect("$lichdbip", "$lichdbuser", "$lichdbpass", "$lichdbauth");
if (!$connlich) {
  die("Ошибка: " . mysqli_connect_error());
}
$sql = "SELECT * FROM realmlist where id=1 and allowedSecurityLevel = 0";
if($result = mysqli_query($connlich, $sql))
{
    $rowsCount = ($result);
    foreach($result as $row){
		$realms = $row["online"];
			    }
    $result->free();
} 
else{
    echo "Ошибка: " . $connlich->error;
}
$connlich->close();
?> 
<?php
$conn = mysqli_connect("$webdbip", "$webdbuser", "$webdbpass", "$webdb");
if (!$conn) {
  die("Ошибка: " . mysqli_connect_error());
}
$sql = "SELECT * FROM realms where id=1 and version='lich'";
if($result = mysqli_query($conn, $sql))
{
    $rowsCount = ($result);
    foreach($result as $row){

echo "<li class='nk-menu-item'>
    <a href='#' class='nk-menu-link' data-server='$row[id]'>
                    <span class='nk-menu-icon'><em class='icon ni ni-server'></em></span>
                <span class='nk-menu-text'>$row[name] $row[rate]</span>
				<span class='badge badge-pill badge-success'>Онлайн: $realms </span></a></li>";
			    }
    $result->free();
} 
else{
    echo "Ошибка: " . $conn->error;
}
$conn->close();
?>
                
		
		
<?php
//Лич реалм 2
$connlich = mysqli_connect("$lichdbip", "$lichdbuser", "$lichdbpass", "$lichdbauth");
if (!$connlich) {
  die("Ошибка: " . mysqli_connect_error());
}
$sql = "SELECT * FROM realmlist where id=2 and allowedSecurityLevel = 0";
if($result = mysqli_query($connlich, $sql))
{
    $rowsCount = ($result);
    foreach($result as $row){
		$realms = $row["online"];
			    }
    $result->free();
} 
else{
    echo "Ошибка: " . $connlich->error;
}
$connlich->close();
?> 
<?php
$conn = mysqli_connect("$webdbip", "$webdbuser", "$webdbpass", "$webdb");
if (!$conn) {
  die("Ошибка: " . mysqli_connect_error());
}
$sql = "SELECT * FROM realms where id=2 and version='lich'";
if($result = mysqli_query($conn, $sql))
{
    $rowsCount = ($result);
    foreach($result as $row){

echo "<li class='nk-menu-item'>
    <a href='#' class='nk-menu-link' data-server='$row[id]'>
                    <span class='nk-menu-icon'><em class='icon ni ni-server'></em></span>
                <span class='nk-menu-text'>$row[name] $row[rate]</span>
				<span class='badge badge-pill badge-success'>Онлайн: $realms </span></a></li>";
			    }
    $result->free();
} 
else{
    echo "Ошибка: " . $conn->error;
}
$conn->close();
?>


<?php
//Лич реалм 3
$connlich = mysqli_connect("$lichdbip", "$lichdbuser", "$lichdbpass", "$lichdbauth");
if (!$connlich) {
  die("Ошибка: " . mysqli_connect_error());
}
$sql = "SELECT * FROM realmlist where id=3 and allowedSecurityLevel = 0";
if($result = mysqli_query($connlich, $sql))
{
    $rowsCount = ($result);
    foreach($result as $row){
		$realms = $row["online"];
			    }
    $result->free();
} 
else{
    echo "Ошибка: " . $connlich->error;
}
$connlich->close();
?> 
<?php
$conn = mysqli_connect("$webdbip", "$webdbuser", "$webdbpass", "$webdb");
if (!$conn) {
  die("Ошибка: " . mysqli_connect_error());
}
$sql = "SELECT * FROM realms where id=3 and version='lich'";
if($result = mysqli_query($conn, $sql))
{
    $rowsCount = ($result);
    foreach($result as $row){

echo "<li class='nk-menu-item'>
    <a href='#' class='nk-menu-link' data-server='$row[id]'>
                    <span class='nk-menu-icon'><em class='icon ni ni-server'></em></span>
                <span class='nk-menu-text'>$row[name] $row[rate]</span>
				<span class='badge badge-pill badge-success'>Онлайн: $realms </span></a></li>";
			    }
    $result->free();
} 
else{
    echo "Ошибка: " . $conn->error;
}
$conn->close();
?>

<?php
//Лич реалм 4
$connlich = mysqli_connect("$lichdbip", "$lichdbuser", "$lichdbpass", "$lichdbauth");
if (!$connlich) {
  die("Ошибка: " . mysqli_connect_error());
}
$sql = "SELECT * FROM realmlist where id=4 and allowedSecurityLevel = 0";
if($result = mysqli_query($connlich, $sql))
{
    $rowsCount = ($result);
    foreach($result as $row){
		$realms = $row["online"];
			    }
    $result->free();
} 
else{
    echo "Ошибка: " . $connlich->error;
}
$connlich->close();
?> 
<?php
$conn = mysqli_connect("$webdbip", "$webdbuser", "$webdbpass", "$webdb");
if (!$conn) {
  die("Ошибка: " . mysqli_connect_error());
}
$sql = "SELECT * FROM realms where id=4 and version='lich'";
if($result = mysqli_query($conn, $sql))
{
    $rowsCount = ($result);
    foreach($result as $row){

echo "<li class='nk-menu-item'>
    <a href='#' class='nk-menu-link' data-server='$row[id]'>
                    <span class='nk-menu-icon'><em class='icon ni ni-server'></em></span>
                <span class='nk-menu-text'>$row[name] $row[rate]</span>
				<span class='badge badge-pill badge-success'>Онлайн: $realms </span></a></li>";
			    }
    $result->free();
} 
else{
    echo "Ошибка: " . $conn->error;
}
$conn->close();
?>