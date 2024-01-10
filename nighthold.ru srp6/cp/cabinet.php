<? require_once '../include/config.php'; ?>
<?php
@session_start();
if (!$_SESSION['user']) {

    header('Location: ./');
}

?>
<?php
session_start();
    $conn = mysqli_connect("$lichdbip", "$lichdbuser", "$lichdbpass", "$lichdbauth");
		    if (!$conn) {
        die('Ошибка подключения к базе данных');
    }
	$userid=  $_SESSION["user"]["id"];
mysqli_query($conn, "INSERT INTO account_donate (id) VALUES ('$userid')");
?>
<?php include"../include/main.php" ?>
<html lang="ru" class="js">
<head>
    <meta charset="utf-8">
            <title>Личный кабинет • <?php echo"$row[title]";?></title>
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


<?php include "function/info.php" ?>







    

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
            <div class="col-sm-4">
    <div class="card card-bordered">
        <div class="card-inner">
            <div class="card-title-group align-start mb-2">
                <div class="card-title">

                    <h6 class="title">Бонусы</h6>
                </div>
                <div class="card-tools">
                    <div class="dropdown">
                        <a class="text-soft dropdown-toggle btn btn-sm p-0" data-toggle="dropdown">
                            <em class="icon ni ni-more-h"></em>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <ul class="link-list-plain">
                                <li><a href="donate.php"><em class="icon ni ni-plus-c text-success"></em> Пополнить</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="align-end flex-sm-wrap g-4 flex-md-nowrap">
                <div class="nk-sale-data">
                    <span class="amount text-primary"><? echo $bonuses ?> <em class="icon ni ni-coins"></em></span> 
                </div>
            </div>
        </div>
    </div>
</div>
            <div class="col-sm-4">
                <div class="card card-bordered">
                    <div class="card-inner">
                        <div class="card-title-group align-start mb-2">
                            <div class="card-title">
                                <h6 class="title">Голоса</h6>
                            </div>
                            <div class="card-tools">
                                <div class="dropdown">
                                    <a class="text-soft dropdown-toggle btn btn-sm p-0" data-toggle="dropdown">
                                        <em class="icon ni ni-more-h"></em>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-xs">
                                        <ul class="link-list-plain">
                                            <li><a href="vote.php">Голосовать</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="align-end flex-sm-wrap g-4 flex-md-nowrap">
                            <div class="nk-sale-data">
                                <span class="amount text-primary"><? echo $votes ?> <em class="icon ni ni-coins"></em></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card card-bordered">
                    <div class="card-inner">
                        <div class="card-title-group align-start mb-2">
                            <div class="card-title">
                                <h6 class="title">Персонажей</h6>
                            </div>
                        </div>

                        <div class="align-end flex-sm-wrap g-4 flex-md-nowrap">
                            <div class="nk-sale-data">
							<?php include "function/lichaccount.php"?>
                                <span class="amount mt-1"><? printf("%d", $row_cnt); ?> <em class="icon ni ni-users"></em></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row g-gs">
            <div class="col-12">
                <div class="card card-bordered card-full">
                    <div class="card-inner">
                        <div class="card-title-group">
                            <div class="card-title">
                                <h6 class="title"><span class="mr-2">Аккаунты

</span>

                                                                            <a href="#" class="btn btn-sm btn-primary <?php include"function/block_lich.php"?>" data-toggle="modal" data-target="#createAccountLich">
                                            <em class="icon ni ni-plus-c mr-1"></em>
                                            <span class="d-none d-sm-inline">Создать игровой аккаунт</span>
                                        </a>
										

                                                                    </h6>
                            </div>
                                                    </div>
                    </div>
                    <div class="card-inner p-0 border-top">
<div class="nk-tb-list nk-tb-orders">




<?php include "function/acclich.php"?>
					
								
								
								
								
								
								
								
                                                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="nk-block">
    <div class="card card-bordered">
        <div class="card-inner">
            <div class="nk-help">
                <div class="nk-help-img">
                    <em class="icon ni ni-help-alt" style="font-size: 96px;"></em>
                </div>
                <div class="nk-help-text">
                    <h5>Нужна помощь?</h5>
                    <p class="text-soft">Задайте вопрос или сообщите о проблемах. Наша команда поддержки свяжется с вами в кратчайшие сроки.</p>
                </div>
                <div class="nk-help-action">
                    <a href="../forums" class="btn btn-lg btn-outline-primary">Поддержка</a>
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

