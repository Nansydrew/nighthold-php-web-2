<?
require_once 'include/config.php';
?>
<html lang="ru">
<?php include"include/main.php" ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="template/nighthold/images/favicon.ico" type="image/x-icon">
    <meta name="description" content="<?php echo"$row[description]";?>">
    <meta name="format-detection" content="telephone=no">
    <meta name="robots" content="noindex, nofollow">
    <base href="">
            <title><?php echo"$row[title]";?></title>
        <link rel="stylesheet" href="template/nighthold/css/main_home.min.css">
    <link rel="stylesheet" href="template/nighthold/css/addition.css">



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

<?php include "include/menu.php"?>

            <li class="menu__item" style="padding-left: 53px;">
                <a href="./cp" class="actions-header__user menu__link">Личный кабинет</a>
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


<?php include"include/social.php" ?>

</ul>
<div class="vertical-figure__line vertical-figure__line_bottom"></div>
</div>
</div>

      <section class="page__main main">
        <div class="main__container _container">

          <div class="main__body">
            <a href="../" class="main__logo">
              <picture>
                <img src="template/nighthold/images/main/logo.png" alt="Image">
              </picture>
              <div class="main__logo-eyes">
                <img src="template/nighthold/images/main/eyes.png" alt="Image">
              </div>
            </a>
<?php include"include/main.php" ?>
            <h1 class="main__title">
              <?php echo"$row[main__title]";?>
            </h1>

            <div class="main__text">
              <?php echo"$row[main__text]";?>
            </div>

            <a href="#howtostart" class="main__button">
              <span>Начать игру</span>
            </a>
          </div>

          <div class="main__news news">


<?php include"include/news.php"?>

</div>
        </div>

        <div class="main__rock main-rock">
          <div class="main-rock__item main-rock__1 layer"></div>
          <div class="main-rock__item main-rock__2 layer"></div>
          <div class="main-rock__item main-rock__3 layer"></div>
          <div class="main-rock__item main-rock__4 layer"></div>
        </div>
      </section>



      <div class="page__server server">
        <div class="server__container _container">

          <div class="server__image">
            <picture>
              <img src="template/nighthold/images/server/bg.png" alt="Image">
            </picture>
          </div>

          <div class="server__content">

            <div class="server__tabs tabs-server _tabs">







<?php include"include/server-info.php"?>








            </div>
          </div>

        </div>
      </div>


    </main>
            </div>
        </div>
    </div>

    <section class="page__slider info">

        <!-- Bottom -->
        <div class="info__container _container">


        <div class="info__slider slider-info">
    <div class="slider-info__arrows slider-arrows">
        <button type="button" class="slider-arrow slider-arrow_prev"></button>
        <button type="button" class="slider-arrow slider-arrow_next"></button>
    </div>

    <div class="slider-info__body _swiper">







<?php include"include/stocks.php"?>



    </div>
</div>



        <div class="info__line gorizontal-line"></div>

        <div class="info__body">

            <div class="info__column">
                <div class="info__item item-info">
                    <h3 class="item-info__title">Discord канал</h3>
<?php include"include/main.php" ?>
                    <iframe src="<?php echo"$row[discord]";?>" width="350" height="500" allowtransparency="true" frameborder="0" sandbox="allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts"></iframe>

                </div>
            </div>

            <div class="info__column">
                <div class="info__item item-info">
                    <h3 class="item-info__title">Голосуй за нас</h3>

                    <ul class="item-info__list-vote list-vote">


<?php include"include/vote.php"?>

                    </ul>
                </div>
            </div>

            <div class="info__column">
                <div class="info__item item-info">
                    <h3 class="item-info__title">Темы с форума</h3>

                    <ul class="item-info__forums forums-list">


<?php include "include/forum.php"?>




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
<?php include"include/main.php" ?>
<footer class="footer">
    <div class="footer__copy">
         Developed by
    </div>
	<a href="https://isdteam.ru" rel="dofollow" title="Website development ISDteam" target="_blank" class="footer__logo ISDteam">
        <img src="template/nighthold/images/isd.png" alt="Website development ISDteam">
    </a>

</footer>


    </section>




<?php include "include/howtostart.php" ?>





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

<script src="template/nighthold/js/vendor.min.js"></script>
<script src="template/nighthold/js/main_home.min.js"></script>
<script src="template/nighthold/js/jquery-2.1.1.min.js"></script>


</body>
</html>
