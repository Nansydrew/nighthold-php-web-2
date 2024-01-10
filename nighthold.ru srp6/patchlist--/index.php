<?
require_once '../include/config.php'; 
?>
<html lang="ru">
<?php include"../include/main.php" ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../template/nighthold/images/favicon.ico" type="image/x-icon">
    <meta name="description" content="<?php echo"$row[description]";?>">
    <meta name="format-detection" content="telephone=no">
    <meta name="robots" content="noindex, nofollow">
    <base href="">
            <title>Список патчей • <?php echo"$row[title]";?></title>
        <link rel="stylesheet" href="../template/nighthold/css/main_home.min.css">
    <link rel="stylesheet" href="../template/nighthold/css/addition.css">



</head>
<body>

<!-- Header -->
<div class="wrapper">
<header class="header">
        <div class="header__wrapper">
            <div class="header__container _container">

                <div class="header__body">

                    <button type="button" class="menu__icon icon-menu">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>

                    <div class="header__menu menu">
    <nav class="menu__body">
        <ul class="menu__list">
		
<?php include "../include/menu.php"?>

            <li class="menu__item" style="padding-left: 53px;">
                <a href="../cp" class="actions-header__user menu__link">Личный кабинет</a>
            </li>

        </ul>
    </nav>
</div>


                </div>

            </div>
        </div>
    </header>

<!-- Main -->
    <div class="nk-app-root">
        <div class="nk-main ">
            <div class="nk-wrap ">

    <main class="page">


      <div class="page__soc soc vertical-figure">
<div class="vertical-figure__body">
<div class="vertical-figure__line vertical-figure__line_top"></div>
<ul class="soc__list">


<?php include"../include/social.php" ?>

</ul>
<div class="vertical-figure__line vertical-figure__line_bottom"></div>
</div>
</div>

      <section class="page__main main">
        <div class="main__container _container">

          <div class="main__body">
            <a href="../" class="main__logo">
              <picture>
                <img src="../template/nighthold/images/main/logo.png" alt="Image">
              </picture>
              <div class="main__logo-eyes">
                <img src="../template/nighthold/images/main/eyes.png" alt="Image">
              </div>
            </a>
          </div>

          <div class="main__news news">

	
<div class ="Pane-bg _container">




<div class="contain-masthead align-center padding-top-normal padding-bottom-normal">
                            <h1 class="font-semp-xxxLarge-white margin-top-none margin-bottom-normal">
                                <div>Список патчей</div>
                            </h1>
                            <div class="Content font-bliz-light-small-beige contain-large margin-bottom-double-normal">
                                <div><p>Данные файлы предназначены для ручной загрузки, в случае если у вас не запускается лаунчер , при ручной загрузке следует контролировать дату обновления файла и загружать вручную заново.</p></div>
                            </div>
                        </div>





<table class="resp-tab">
    <thead>
        <tr>
            <th>Название вместе с директорией</th>
            <th>Дата обновления</th>
            <th>Ссылка на скачивания</th>
        </tr>
    </thead>
	<tbody>
	<?php
$conn = mysqli_connect("$webdbip", "$webdbuser", "$webdbpass", "$webdb");
if (!$conn) {
  die("Ошибка: " . mysqli_connect_error());
}
$sql = "SELECT * FROM patch_list";
if($result = mysqli_query($conn, $sql)){
     
    $rowsCount = mysqli_num_rows($result);
    foreach($result as $row){
		    echo "
               <tr>
            <td>$row[title]</td>
            <td>$row[updated_at]</td>
            <td><a href='$row[slug]' class='linkdownload '>Скачать</a></td>
        </tr>
    ";
    }
    mysqli_free_result($result);
} else{
    echo "Ошибка: " . mysqli_error($conn);
}
mysqli_close($conn);
?>
</tbody>
</table>   
<br>



</div>
   <div class="main__rock main-rock">
          <div class="main-rock__item main-rock__1 layer"></div>
          <div class="main-rock__item main-rock__2 layer"></div>
          <div class="main-rock__item main-rock__3 layer"></div>
          <div class="main-rock__item main-rock__4 layer"></div>
        </div> 
</div>
        </div>


      </section>











    </main>
            </div>
        </div>
    </div>
<div class="Divider"></div>
    <section class="page__slider info">

        <!-- Bottom -->
        <div class="info__container _container">




        <div class="info__line gorizontal-line"></div>

        <div class="info__body">

            <div class="info__column">
                <div class="info__item item-info">
                    <h3 class="item-info__title">Discord канал</h3>
<?php include"../include/main.php" ?>
                    <iframe src="<?php echo"$row[discord]";?>" width="350" height="500" allowtransparency="true" frameborder="0" sandbox="allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts"></iframe>

                </div>
            </div>

            <div class="info__column">
                <div class="info__item item-info">
                    <h3 class="item-info__title">Голосуй за нас</h3>

                    <ul class="item-info__list-vote list-vote">
					

<?php include"../include/vote.php"?>

                    </ul>
                </div>
            </div>

            <div class="info__column">
                <div class="info__item item-info">
                    <h3 class="item-info__title">Темы с форума</h3>

                    <ul class="item-info__forums forums-list">

<?php include"../include/forum.php"?>
	
	


        
</ul>
                </div>
            </div>

        </div>


    </div>

    <div class="info__rock info-rock">
        <div data-depth="0.2" class="info-rock__item info-rock__1"></div>
        <div data-depth="0.2" class="info-rock__item info-rock__2"></div>
        <div data-depth="0.2" class="info-rock__item info-rock__3"></div>
        <div data-depth="0.2" class="info-rock__item info-rock__4"></div>
        <div data-depth="0.2" class="info-rock__item info-rock__5"></div>
    </div>
        <!-- Footer -->
        <div class="info__line gorizontal-line"></div>
<?php include"../include/main.php" ?>
<footer class="footer">
    <div class="footer__copy">
        © <?php echo"$row[title]";?>, INC., 2021 - 2022
    </div>

</footer>


    </section>


<div class="anim">
    <div class="anim__smokes">
        <div class="anim__smoke smoke_2"></div>
        <div class="anim__smoke smoke_3"></div>
        <div class="anim__smoke smoke_4"></div>
    </div>

    <div class="anim__sparks right">
        <div class="anim__sparks-spark-3"></div>
        <div class="anim__sparks-spark-4"></div>
    </div>
</div>

</div>



<!-- Scripts -->
<div class="md-overlay"></div>

<script src="../template/nighthold/js/vendor.min.js"></script>
<script src="../template/nighthold/js/main_home.min.js"></script>
<script src="../template/nighthold/js/jquery-2.1.1.min.js"></script>


</body>
</html>