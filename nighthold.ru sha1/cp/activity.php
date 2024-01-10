<? require_once '../include/config.php'; ?>
<?php
@session_start();
if (!$_SESSION['user']) {

    header('Location: /');
}

?>
<?php include"../include/main.php" ?>
<html lang="ru" class="js">
<head>
    <meta charset="utf-8">
            <title>Активные устройства • <?php echo"$row[title]";?></title>
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
                            
                                                                                                                                                                                                                                                                                                        

				
                                                                                                                                                                                

<?php $url = $_SERVER["REQUEST_URI"];?>
                                <div class="nk-block">
    <div class="row g-gs">
        <div class="col-12">
            <ul class="nav nav-tabs nav-tabs-mb-icon nav-tabs-card">
                <li class="nav-item">
                    <a class="nav-link"
                       href="profile.php"
                    >
                        <em class="icon ni ni-lock-alt-fill"></em>
                        <span>Сменить пароль</span>
                    </a>
                </li>
			   <li class="nav-item">
                    <a class="nav-link active"
                        href="activity.php"
                    >
                        <em class="icon ni ni-activity-round-fill"></em>
                        <span>Активные устройства</span>
                    </a>
                </li>

            </ul>
        </div>
    </div>
</div>

    <div class="nk-block">
        <div class="row g-gs">
            <div class="col-12">
                <div class="card card-bordered">
                    <div class="card-inner">
                        <div class="card-head flex-column align-items-start">
                            <h5 class="card-title m-0">Активные устройства</h5>
                            <div class="nk-block-des">
                                <p>При необходимости вы можете выйти из всех других сеансов браузера на всех ваших устройствах. Текущая информация о аккаунте предоставлена ниже. Если вы считаете, что ваша учетная запись была скомпрометирована, вам также следует обновить пароль.</p>
                            </div>
                        </div>
                        <table class="table table-ulogs">
                            <thead class="thead-light">
                            <tr>
                                <th class="tb-col-os"><span class="overline-title">Браузер <span class="d-sm-none">/ IP</span></span></th>
                                <th class="tb-col-ip"><span class="overline-title">IP</span></th>
                                <th class="tb-col-time"><span class="overline-title">Последняя активность</span></th>
                                <th class="tb-col-action"><span class="overline-title">&nbsp;</span></th>
                            </tr>
                            </thead>
                            <tbody>
                                                            <tr>
                                    <td class="tb-col-os"><?php

  $user_agent = $_SERVER["HTTP_USER_AGENT"];
  if (strpos($user_agent, "Firefox") !== false) $browser = "Firefox";
  elseif (strpos($user_agent, "Opera") !== false) $browser = "Opera";
  elseif (strpos($user_agent, "Chrome") !== false) $browser = "Yandex Browser";
  elseif (strpos($user_agent, "Yandex") !== false) $browser = "Yandex";
  elseif (strpos($user_agent, "MSIE") !== false) $browser = "Internet Explorer";
  elseif (strpos($user_agent, "Safari") !== false) $browser = "Safari";
  else $browser = "Неизвестный";
  echo "$browser";

?></td>
                                    <td class="tb-col-ip"><span class="sub-text"><?php echo $_SERVER['SERVER_ADDR'];?></span></td>
									<?php
$connlich = mysqli_connect("$lichdbip", "$lichdbuser", "$lichdbpass", "$lichdbauth");
if (!$connlich) {
  die("Ошибка: " . mysqli_connect_error());
}

$userid=  $_SESSION["user"]["id"];
$sql = "SELECT * FROM account WHERE id = '$userid'";
if($result = mysqli_query($connlich, $sql))
{
    $rowsCount = ($result);
    foreach($result as $row){

			    }
    $result->free();
} 
else{
    echo "Ошибка: " . $connlich->error;
}
$connlich->close();
?>
                                    <td class="tb-col-time"><span class="sub-text"><span class="d-none d-sm-inline-block"><?php echo "$row[last_login]";?></span></span></td>
                                    <td class="tb-col-action">
                                                                                    <span class="badge badge-outline-success">Данное устройство</span>
                                                                            </td>
                                </tr>
                                                        </tbody>
                        </table>
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

