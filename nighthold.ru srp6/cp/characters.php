<? require_once '../include/config.php'; ?>
<?php
@session_start();
if (!$_SESSION['user']) {

    header('Location: ./');
}

?>
<?php include"../include/main.php" ?>
<html lang="ru" class="js">
<head>
    <meta charset="utf-8">
            <title>Мои персонажи • <?php echo"$row[title]";?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../template/nighthold/css/cabinet.css">
    <link rel="shortcut icon" href="../template/nighthold/images/favicon.ico">


    </head>



<body class="nk-body bg-white npc-default has-aside dark-mode">



<div class="nk-app-root">
    <div class="nk-main ">
            <div class="nk-wrap ">

        <div class="nk-header nk-header-fixed is-light">
    <div class="container-lg wide-xl">
        <div class="nk-header-wrap">
            <div class="nk-header-brand">
    <a href="./" class="logo-link">
    <img class="logo-light logo-img" src="../template/nighthold/images/main/logo.png">
</a>
</div>

<?php include "function/menu-top.php"; ?>
<?php include "function/user.php"; ?>


        </div>
    </div>
</div>

        <div class="nk-content ">
            <div class="container wide-xl">
                <div class="nk-content-inner">

                    <div class="nk-aside bg-transparent" data-content="sideNav" data-toggle-overlay="true" data-toggle-screen="lg" data-toggle-body="true">
                        <div class="nk-sidebar-menu" data-simplebar>


                            <ul class="nk-menu">






<?php include "function/menu.php"; ?>




<?php include "function/server-info.php"?>









    

    </li>
</ul>





</script>
                        </div>
                        <div class="nk-aside-close">
                            <a href="#" class="toggle" data-target="sideNav"><em class="icon ni ni-cross"></em></a>
                        </div>
                    </div>

                    <div class="nk-content-body">
                        <div class="nk-content-wrap">
                            
                                                                                                                                                                                                                                                                                                        

				
                                                                                                                                                                                


                                <div class="nk-block">
        <div class="row g-gs">
            <div class="col-12">
                <div class="card card-bordered">
                    <div class="card-inner">
                        <div class="card-title-group">
                            <h5 class="card-title">
                                <span class="mr-2">Персонажи <span class="text-primary"></span></span>
                            </h5>
                        </div>
                    </div>
                    <div class="card-inner p-0 border-top">
                        <div class="nk-tb-list nk-tb-ulist is-compact">
                            <div class="nk-tb-item nk-tb-head">
								<div class="nk-tb-col"><span class="sub-text">#</span></div>
                                <div class="nk-tb-col"><span class="sub-text">Персонаж</span></div>
                                <div class="nk-tb-col tb-col-md"><span class="sub-text">Уровень</span></div>
								<div class="nk-tb-col tb-col-md"><span class="sub-text">Убито сегодня</span></div>
                                <div class="nk-tb-col tb-col-md"><span class="sub-text">Убито всего</span></div>
                                <div class="nk-tb-col tb-col-xl"><span class="sub-text">Класс</span></div>
                                <div class="nk-tb-col tb-col-xl"><span class="sub-text">Последний вход</span></div>
                            </div>
							
							
							
							<?php
$connlich = mysqli_connect("$lichdbip", "$lichdbuser", "$lichdbpass", "$lichdbchar");
if (!$connlich) {
  die("Ошибка: " . mysqli_connect_error());
}
mysqli_set_charset($connlich, "utf8");  
$userid=  $_SESSION["user"]["id"];
$sql = "SELECT * FROM characters where account = $userid";
	
if($result = mysqli_query($connlich, $sql))
{
	
	$id = 1;
	
    $rowsCount = ($result);

    foreach($result as $row)

	{
		
	    if ($row['class'] == 1){
        $class = 'Воин';
    }
    if ($row['class'] == 2){
        $class = 'Паладин';
    }
    if ($row['class'] == 3){
        $class = 'Охотник';
    }
    if ($row['class'] == 4){
        $class = 'Разбойник';
    }
    if ($row['class'] == 5){
        $class = 'Жрец';
    }
    if ($row['class'] == 6){
        $class = 'Рыцарь смерти';
    }
    if ($row['class'] == 7){
        $class = 'Шаман';
    }
    if ($row['class'] == 8){
        $class = 'Маг';
    }
    if ($row['class'] == 9){
        $class = 'Чернокнижник';
    }
    if ($row['class'] == 11){
        $class = 'Друид';
    }	
		
		
echo "

<div class='nk-tb-item'>
								<div class='nk-tb-col'><span class='sub-text'>$id</span></div>
                                <div class='nk-tb-col'><span class='sub-text'>$row[name]</span></div>
                                <div class='nk-tb-col tb-col-md'><span class='sub-text'>$row[level]</span></div>
								<div class='nk-tb-col tb-col-md'><span class='sub-text'>$row[todayKills]</span></div>
                                <div class='nk-tb-col tb-col-md'><span class='sub-text'>$row[totalKills]</span></div>
                                <div class='nk-tb-col tb-col-xl'><span class='sub-text'>$class</span></div>";$id++;
								?>
								
                                <div class='nk-tb-col tb-col-xl'><span class='sub-text'><?php $timestamp = $row['logout_time'];
echo(date("d.m.Y H:i:s", $timestamp));?></span></div>
								
                            </div>	
<?php
			    }
    $result->free();
} 
else{
    echo "Ошибка: " . $connlich->error;
}
$connlich->close();
?>
				                            		
							
	


                            
                        </div>
                    </div>
					
                </div>
            </div>
        </div>
    </div>																																											
    




                        </div>

<?php include"function/footer.php"?>

                    </div>

                </div>
            </div>
        </div>
    </div>


    </div>
</div>

<script src="../template/nighthold/js/bundle.js"></script>
<script src="../template/nighthold/js/scripts.js"></script>
<script src="../template/nighthold/js/ion.rangeSlider.min.js"></script>
<script src="../template/nighthold/js/jquery-3.4.1.min.js"></script>
<script src="../template/nighthold/js/main.js"></script>








</body>
</html>

