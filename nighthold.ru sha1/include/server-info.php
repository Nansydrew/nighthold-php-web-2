<?
require_once 'config.php'; 
?>
              <nav class="tabs-server__nav">

	<?php
$conn = mysqli_connect("$webdbip", "$webdbuser", "$webdbpass", "$webdb");
if (!$conn) {
  die("Ошибка: " . mysqli_connect_error());
}
$sql = "SELECT * FROM realms where id = 1 and version = 'lich'";
if($result = mysqli_query($conn, $sql))

{
    $rowsCount = mysqli_num_rows($result);
    foreach($result as $row){
		    echo "              
                  <div class='tabs-server__item _tabs-item   _$row[class]'>
                    <div class='tabs-server__item-icon'>
                      <picture>
                        <img src='$row[icon]'>
                      </picture>
                    </div>
                    <h2><span>$row[name] <span>$row[rate]</span></span></h2>
                  </div>
				  
              ";
			    }
    $result->free();
} 
else{
    echo "Ошибка: " . $conn->error;
}
$conn->close();
?>      
              
			  
			                

	<?php
$conn = mysqli_connect("$webdbip", "$webdbuser", "$webdbpass", "$webdb");
if (!$conn) {
  die("Ошибка: " . mysqli_connect_error());
}
$sql = "SELECT * FROM realms where id = 2 and version = 'lich'";
if($result = mysqli_query($conn, $sql))

{
    $rowsCount = mysqli_num_rows($result);
    foreach($result as $row){
		    echo "              
                  <div class='tabs-server__item _tabs-item   _$row[class]'>
                    <div class='tabs-server__item-icon'>
                      <picture>
                        <img src='$row[icon]'>
                      </picture>
                    </div>
                    <h2><span>$row[name] <span>$row[rate]</span></span></h2>
                  </div>
				  
              ";
			    }
    $result->free();
} 
else{
    echo "Ошибка: " . $conn->error;
}
$conn->close();
?>  

	<?php
$conn = mysqli_connect("$webdbip", "$webdbuser", "$webdbpass", "$webdb");
if (!$conn) {
  die("Ошибка: " . mysqli_connect_error());
}
$sql = "SELECT * FROM realms where id = 3 and version = 'lich'";
if($result = mysqli_query($conn, $sql))

{
    $rowsCount = mysqli_num_rows($result);
    foreach($result as $row){
		    echo "              
                  <div class='tabs-server__item _tabs-item   _$row[class]'>
                    <div class='tabs-server__item-icon'>
                      <picture>
                        <img src='$row[icon]'>
                      </picture>
                    </div>
                    <h2><span>$row[name] <span>$row[rate]</span></span></h2>
                  </div>
				  
              ";
			    }
    $result->free();
} 
else{
    echo "Ошибка: " . $conn->error;
}
$conn->close();
?> 

	<?php
$conn = mysqli_connect("$webdbip", "$webdbuser", "$webdbpass", "$webdb");
if (!$conn) {
  die("Ошибка: " . mysqli_connect_error());
}
$sql = "SELECT * FROM realms where id = 4 and version = 'lich'";
if($result = mysqli_query($conn, $sql))

{
    $rowsCount = mysqli_num_rows($result);
    foreach($result as $row){
		    echo "              
                  <div class='tabs-server__item _tabs-item   _$row[class]'>
                    <div class='tabs-server__item-icon'>
                      <picture>
                        <img src='$row[icon]'>
                      </picture>
                    </div>
                    <h2><span>$row[name] <span>$row[rate]</span></span></h2>
                  </div>
				  
              ";
			    }
    $result->free();
} 
else{
    echo "Ошибка: " . $conn->error;
}
$conn->close();
?> 

	<?php
$conn = mysqli_connect("$webdbip", "$webdbuser", "$webdbpass", "$webdb");
if (!$conn) {
  die("Ошибка: " . mysqli_connect_error());
}
$sql = "SELECT * FROM realms where id = 5 and version = 'lich'";
if($result = mysqli_query($conn, $sql))

{
    $rowsCount = mysqli_num_rows($result);
    foreach($result as $row){
		    echo "              
                  <div class='tabs-server__item _tabs-item   _$row[class]'>
                    <div class='tabs-server__item-icon'>
                      <picture>
                        <img src='$row[icon]'>
                      </picture>
                    </div>
                    <h2><span>$row[name] <span>$row[rate]</span></span></h2>
                  </div>
				  
              ";
			    }
    $result->free();
} 
else{
    echo "Ошибка: " . $conn->error;
}
$conn->close();
?> 
              </nav>










              <div class="tabs-server__body">
	<?php
//Лич реалм 1
$conn = mysqli_connect("$webdbip", "$webdbuser", "$webdbpass", "$webdb");
if (!$conn) {
  die("Ошибка: " . mysqli_connect_error());
}
$sql = "SELECT * FROM realms where id=1 and version='lich'";
if($result = mysqli_query($conn, $sql))
{
    $rowsCount = mysqli_num_rows($result);
    foreach($result as $row){
echo"	  
			  
                <div class='tabs-server__block block-server _tabs-block  _$row[class]'>
                  <div class='block-server__icon'>
                    <picture>
                      <img src='$row[icon]' alt='Image'>
                    </picture>
                  </div>
                  <div class='block-server__header'>
                    <h2 class='block-server__title'>$row[name]<span>$row[rate]</span></h2>";

			    }
    $result->free();
} 
else{
    echo "Ошибка: " . $conn->error;
}
$conn->close();
?> 

	<?php
$conn = mysqli_connect("$lichdbip", "$lichdbuser", "$lichdbpass", "$lichdbauth");
if (!$conn) {
  die("Ошибка: " . mysqli_connect_error());
}
$sql = "SELECT * FROM realmlist where id=1 and allowedSecurityLevel = 0";
if($result = mysqli_query($conn, $sql))
{
    $rowsCount = mysqli_num_rows($result);
    foreach($result as $row){
echo"<div class='block-server__counter'>Онлайн: <span> $row[online]</span></div>
</div>
                  ";
			    }
    $result->free();
} 
else{
    echo "Ошибка: " . $conn->error;
}
$conn->close();
?>  
       
				  	<?php
$conn = mysqli_connect("$webdbip", "$webdbuser", "$webdbpass", "$webdb");
if (!$conn) {
  die("Ошибка: " . mysqli_connect_error());
}
$sql = "SELECT * FROM realms where id=1 and version='lich'";
if($result = mysqli_query($conn, $sql))
{
    $rowsCount = mysqli_num_rows($result);
    foreach($result as $row){
echo"                  <div class='block-server__text'>
                    $row[description]
                  </div>
                  <ul class='block-server__list'>

                                        <li class='block-server__item-block'>
                      <div class='block-server__item'>
                        <div class='block-server__info'>
                          $row[rate]
                        </div>
                        <div class='block-server__info-title'>Опыт</div>
                      </div>
                    </li>
                    
                                        <li class='block-server__item-block'>
                      <div class='block-server__item'>
                        <div class='block-server__info'>
                          $row[proffesion]
                        </div>
                        <div class='block-server__info-title'>Профессии</div>
                      </div>
                    </li>
                      
                                            <li class='block-server__item-block'>
                      <div class='block-server__item'>
                        <div class='block-server__info'>
                          $row[gold]
                        </div>
                        <div class='block-server__info-title'>Золото</div>
                      </div>
                    </li>
                      
                                            <li class='block-server__item-block'>
                      <div class='block-server__item'>
                        <div class='block-server__info'>
                          $row[rep]
                        </div>
                        <div class='block-server__info-title'>Репутация</div>
                      </div>
                    </li>
                      
                                            <li class='block-server__item-block'>
                      <div class='block-server__item'>
                        <div class='block-server__info'>
                          $row[loot]
                        </div>
                        <div class='block-server__info-title'>Добыча</div>
                      </div>
                    </li>
                      
                                            <li class='block-server__item-block'>
                      <div class='block-server__item'>
                        <div class='block-server__info'>
                          $row[honor]
                        </div>
                        <div class='block-server__info-title'>Очки чести</div>
                      </div>
                    </li>
                    
                  </ul>
                </div>";
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
$conn = mysqli_connect("$webdbip", "$webdbuser", "$webdbpass", "$webdb");
if (!$conn) {
  die("Ошибка: " . mysqli_connect_error());
}
$sql = "SELECT * FROM realms where id=2 and version='lich'";
if($result = mysqli_query($conn, $sql))
{
    $rowsCount = mysqli_num_rows($result);
    foreach($result as $row){
		echo "                <div class='tabs-server__block block-server _tabs-block _$row[class]'>
                  <div class='block-server__icon'>
                    <picture>
                      <img src='$row[icon]' alt='Image'>
                    </picture>
                  </div>
                  <div class='block-server__header'>
                    <h2 class='block-server__title'>$row[name]<span>$row[rate]</span></h2>";

			    }
    $result->free();
} 
else{
    echo "Ошибка: " . $conn->error;
}
$conn->close();
?> 

	<?php
$conn = mysqli_connect("$lichdbip", "$lichdbuser", "$lichdbpass", "$lichdbauth");
if (!$conn) {
  die("Ошибка: " . mysqli_connect_error());
}
$sql = "SELECT * FROM realmlist where id=2 and allowedSecurityLevel = 0";
if($result = mysqli_query($conn, $sql))
{
    $rowsCount = mysqli_num_rows($result);
    foreach($result as $row){
echo"<div class='block-server__counter'>Онлайн: <span> $row[online]</span></div>
                  </div> ";
			    }
    $result->free();
} 
else{
    echo "Ошибка: " . $conn->error;
}
$conn->close();
?>  
                   
				  	<?php
$conn = mysqli_connect("$webdbip", "$webdbuser", "$webdbpass", "$webdb");
if (!$conn) {
  die("Ошибка: " . mysqli_connect_error());
}
$sql = "SELECT * FROM realms where id=2 and version='lich'";
if($result = mysqli_query($conn, $sql))
{
    $rowsCount = mysqli_num_rows($result);
    foreach($result as $row){
echo"                  <div class='block-server__text'>
                    $row[description]
                  </div>
                  <ul class='block-server__list'>

                                        <li class='block-server__item-block'>
                      <div class='block-server__item'>
                        <div class='block-server__info'>
                          $row[rate]
                        </div>
                        <div class='block-server__info-title'>Опыт</div>
                      </div>
                    </li>
                    
                                        <li class='block-server__item-block'>
                      <div class='block-server__item'>
                        <div class='block-server__info'>
                          $row[proffesion]
                        </div>
                        <div class='block-server__info-title'>Профессии</div>
                      </div>
                    </li>
                      
                                            <li class='block-server__item-block'>
                      <div class='block-server__item'>
                        <div class='block-server__info'>
                          $row[gold]
                        </div>
                        <div class='block-server__info-title'>Золото</div>
                      </div>
                    </li>
                      
                                            <li class='block-server__item-block'>
                      <div class='block-server__item'>
                        <div class='block-server__info'>
                          $row[rep]
                        </div>
                        <div class='block-server__info-title'>Репутация</div>
                      </div>
                    </li>
                      
                                            <li class='block-server__item-block'>
                      <div class='block-server__item'>
                        <div class='block-server__info'>
                          $row[loot]
                        </div>
                        <div class='block-server__info-title'>Добыча</div>
                      </div>
                    </li>
                      
                                            <li class='block-server__item-block'>
                      <div class='block-server__item'>
                        <div class='block-server__info'>
                          $row[honor]
                        </div>
                        <div class='block-server__info-title'>Очки чести</div>
                      </div>
                    </li>
                    
                  </ul>
                </div>";
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
$conn = mysqli_connect("$webdbip", "$webdbuser", "$webdbpass", "$webdb");
if (!$conn) {
  die("Ошибка: " . mysqli_connect_error());
}
$sql = "SELECT * FROM realms where id=3 and version='lich'";
if($result = mysqli_query($conn, $sql))
{
    $rowsCount = mysqli_num_rows($result);
    foreach($result as $row){
		echo "                <div class='tabs-server__block block-server _tabs-block _$row[class]'>
                  <div class='block-server__icon'>
                    <picture>
                      <img src='$row[icon]' alt='Image'>
                    </picture>
                  </div>
                  <div class='block-server__header'>
                    <h2 class='block-server__title'>$row[name]<span>$row[rate]</span></h2>";

			    }
    $result->free();
} 
else{
    echo "Ошибка: " . $conn->error;
}
$conn->close();
?> 

	<?php
$conn = mysqli_connect("$lichdbip", "$lichdbuser", "$lichdbpass", "$lichdbauth");
if (!$conn) {
  die("Ошибка: " . mysqli_connect_error());
}
$sql = "SELECT * FROM realmlist where id=3 and allowedSecurityLevel = 0";
if($result = mysqli_query($conn, $sql))
{
    $rowsCount = mysqli_num_rows($result);
    foreach($result as $row){
echo"<div class='block-server__counter'>Онлайн: <span> $row[online]</span></div>
                  </div> ";
			    }
    $result->free();
} 
else{
    echo "Ошибка: " . $conn->error;
}
$conn->close();
?>  
                   
				  	<?php
$conn = mysqli_connect("$webdbip", "$webdbuser", "$webdbpass", "$webdb");
if (!$conn) {
  die("Ошибка: " . mysqli_connect_error());
}
$sql = "SELECT * FROM realms where id=3 and version='lich'";
if($result = mysqli_query($conn, $sql))
{
    $rowsCount = mysqli_num_rows($result);
    foreach($result as $row){
echo"                  <div class='block-server__text'>
                    $row[description]
                  </div>
                  <ul class='block-server__list'>

                                        <li class='block-server__item-block'>
                      <div class='block-server__item'>
                        <div class='block-server__info'>
                          $row[rate]
                        </div>
                        <div class='block-server__info-title'>Опыт</div>
                      </div>
                    </li>
                    
                                        <li class='block-server__item-block'>
                      <div class='block-server__item'>
                        <div class='block-server__info'>
                          $row[proffesion]
                        </div>
                        <div class='block-server__info-title'>Профессии</div>
                      </div>
                    </li>
                      
                                            <li class='block-server__item-block'>
                      <div class='block-server__item'>
                        <div class='block-server__info'>
                          $row[gold]
                        </div>
                        <div class='block-server__info-title'>Золото</div>
                      </div>
                    </li>
                      
                                            <li class='block-server__item-block'>
                      <div class='block-server__item'>
                        <div class='block-server__info'>
                          $row[rep]
                        </div>
                        <div class='block-server__info-title'>Репутация</div>
                      </div>
                    </li>
                      
                                            <li class='block-server__item-block'>
                      <div class='block-server__item'>
                        <div class='block-server__info'>
                          $row[loot]
                        </div>
                        <div class='block-server__info-title'>Добыча</div>
                      </div>
                    </li>
                      
                                            <li class='block-server__item-block'>
                      <div class='block-server__item'>
                        <div class='block-server__info'>
                          $row[honor]
                        </div>
                        <div class='block-server__info-title'>Очки чести</div>
                      </div>
                    </li>
                    
                  </ul>
                </div>";
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
$conn = mysqli_connect("$webdbip", "$webdbuser", "$webdbpass", "$webdb");
if (!$conn) {
  die("Ошибка: " . mysqli_connect_error());
}
$sql = "SELECT * FROM realms where id=4 and version='lich'";
if($result = mysqli_query($conn, $sql))
{
    $rowsCount = mysqli_num_rows($result);
    foreach($result as $row){
		echo "                <div class='tabs-server__block block-server _tabs-block _$row[class]'>
                  <div class='block-server__icon'>
                    <picture>
                      <img src='$row[icon]' alt='Image'>
                    </picture>
                  </div>
                  <div class='block-server__header'>
                    <h2 class='block-server__title'>$row[name]<span>$row[rate]</span></h2>";

			    }
    $result->free();
} 
else{
    echo "Ошибка: " . $conn->error;
}
$conn->close();
?> 

	<?php
$conn = mysqli_connect("$lichdbip", "$lichdbuser", "$lichdbpass", "$lichdbauth");
if (!$conn) {
  die("Ошибка: " . mysqli_connect_error());
}
$sql = "SELECT * FROM realmlist where id=4 and allowedSecurityLevel = 0";
if($result = mysqli_query($conn, $sql))
{
    $rowsCount = mysqli_num_rows($result);
    foreach($result as $row){
echo"<div class='block-server__counter'>Онлайн: <span> $row[online]</span></div>
                  </div> ";
			    }
    $result->free();
} 
else{
    echo "Ошибка: " . $conn->error;
}
$conn->close();
?>  
                   
				  	<?php
$conn = mysqli_connect("$webdbip", "$webdbuser", "$webdbpass", "$webdb");
if (!$conn) {
  die("Ошибка: " . mysqli_connect_error());
}
$sql = "SELECT * FROM realms where id=4 and version='lich'";
if($result = mysqli_query($conn, $sql))
{
    $rowsCount = mysqli_num_rows($result);
    foreach($result as $row){
echo"                  <div class='block-server__text'>
                    $row[description]
                  </div>
                  <ul class='block-server__list'>

                                        <li class='block-server__item-block'>
                      <div class='block-server__item'>
                        <div class='block-server__info'>
                          $row[rate]
                        </div>
                        <div class='block-server__info-title'>Опыт</div>
                      </div>
                    </li>
                    
                                        <li class='block-server__item-block'>
                      <div class='block-server__item'>
                        <div class='block-server__info'>
                          $row[proffesion]
                        </div>
                        <div class='block-server__info-title'>Профессии</div>
                      </div>
                    </li>
                      
                                            <li class='block-server__item-block'>
                      <div class='block-server__item'>
                        <div class='block-server__info'>
                          $row[gold]
                        </div>
                        <div class='block-server__info-title'>Золото</div>
                      </div>
                    </li>
                      
                                            <li class='block-server__item-block'>
                      <div class='block-server__item'>
                        <div class='block-server__info'>
                          $row[rep]
                        </div>
                        <div class='block-server__info-title'>Репутация</div>
                      </div>
                    </li>
                      
                                            <li class='block-server__item-block'>
                      <div class='block-server__item'>
                        <div class='block-server__info'>
                          $row[loot]
                        </div>
                        <div class='block-server__info-title'>Добыча</div>
                      </div>
                    </li>
                      
                                            <li class='block-server__item-block'>
                      <div class='block-server__item'>
                        <div class='block-server__info'>
                          $row[honor]
                        </div>
                        <div class='block-server__info-title'>Очки чести</div>
                      </div>
                    </li>
                    
                  </ul>
                </div>";
			    }
    $result->free();
} 
else{
    echo "Ошибка: " . $conn->error;
}
$conn->close();
?> 



<?php
//Лич реалм 5
$conn = mysqli_connect("$webdbip", "$webdbuser", "$webdbpass", "$webdb");
if (!$conn) {
  die("Ошибка: " . mysqli_connect_error());
}
$sql = "SELECT * FROM realms where id=5 and version='lich'";
if($result = mysqli_query($conn, $sql))
{
    $rowsCount = mysqli_num_rows($result);
    foreach($result as $row){
		echo "                <div class='tabs-server__block block-server _tabs-block _$row[class]'>
                  <div class='block-server__icon'>
                    <picture>
                      <img src='$row[icon]' alt='Image'>
                    </picture>
                  </div>
                  <div class='block-server__header'>
                    <h2 class='block-server__title'>$row[name]<span>$row[rate]</span></h2>";

			    }
    $result->free();
} 
else{
    echo "Ошибка: " . $conn->error;
}
$conn->close();
?> 

	<?php
$conn = mysqli_connect("$lichdbip", "$lichdbuser", "$lichdbpass", "$lichdbauth");
if (!$conn) {
  die("Ошибка: " . mysqli_connect_error());
}
$sql = "SELECT * FROM realmlist where id=5 and allowedSecurityLevel = 0";
if($result = mysqli_query($conn, $sql))
{
    $rowsCount = mysqli_num_rows($result);
    foreach($result as $row){
echo"<div class='block-server__counter'>Онлайн: <span> $row[online]</span></div>
                  </div> ";
			    }
    $result->free();
} 
else{
    echo "Ошибка: " . $conn->error;
}
$conn->close();
?>  
                   
				  	<?php
$conn = mysqli_connect("$webdbip", "$webdbuser", "$webdbpass", "$webdb");
if (!$conn) {
  die("Ошибка: " . mysqli_connect_error());
}
$sql = "SELECT * FROM realms where id=5 and version='lich'";
if($result = mysqli_query($conn, $sql))
{
    $rowsCount = mysqli_num_rows($result);
    foreach($result as $row){
echo"                  <div class='block-server__text'>
                    $row[description]
                  </div>
                  <ul class='block-server__list'>

                                        <li class='block-server__item-block'>
                      <div class='block-server__item'>
                        <div class='block-server__info'>
                          $row[rate]
                        </div>
                        <div class='block-server__info-title'>Опыт</div>
                      </div>
                    </li>
                    
                                        <li class='block-server__item-block'>
                      <div class='block-server__item'>
                        <div class='block-server__info'>
                          $row[proffesion]
                        </div>
                        <div class='block-server__info-title'>Профессии</div>
                      </div>
                    </li>
                      
                                            <li class='block-server__item-block'>
                      <div class='block-server__item'>
                        <div class='block-server__info'>
                          $row[gold]
                        </div>
                        <div class='block-server__info-title'>Золото</div>
                      </div>
                    </li>
                      
                                            <li class='block-server__item-block'>
                      <div class='block-server__item'>
                        <div class='block-server__info'>
                          $row[rep]
                        </div>
                        <div class='block-server__info-title'>Репутация</div>
                      </div>
                    </li>
                      
                                            <li class='block-server__item-block'>
                      <div class='block-server__item'>
                        <div class='block-server__info'>
                          $row[loot]
                        </div>
                        <div class='block-server__info-title'>Добыча</div>
                      </div>
                    </li>
                      
                                            <li class='block-server__item-block'>
                      <div class='block-server__item'>
                        <div class='block-server__info'>
                          $row[honor]
                        </div>
                        <div class='block-server__info-title'>Очки чести</div>
                      </div>
                    </li>
                    
                  </ul>
                </div>";
			    }
    $result->free();
} 
else{
    echo "Ошибка: " . $conn->error;
}
$conn->close();
?> 
                
              </div>
           