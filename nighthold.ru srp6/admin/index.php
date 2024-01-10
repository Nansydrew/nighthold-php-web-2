<?
require_once '../include/config.php'; 
?>
<?php
    session_start();
    if ($_SESSION['admin']) {
        header('Location: management.php');
    }
?>
<? include '../include/main.php'; ?>
<html lang="ru" class="js">
<head>
    <meta charset="utf-8">
	<meta name="description" content="<?php echo"$row[description]";?>">
    <title>Авторизация • <?php echo"$row[title]";?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../template/nighthold/css/cabinet.css">
    <link rel="shortcut icon" href="images/favicon.ico">


    <script src="../template/nighthold/js/jquery-2.1.1.min.js"></script>
    </head>



<body class="nk-body bg-white npc-default has-aside dark-mode">



<div class="nk-app-root">
    <div class="nk-main ">
            <div class="nk-wrap nk-wrap-nosidebar">
        <div class="nk-content ">
            <div class="nk-split nk-split-page nk-split-md">
                <div class="nk-split-content nk-block-area nk-block-area-column nk-auth-container bg-white">
                    <div class="nk-block nk-block-middle nk-auth-body">
                        <div class="brand-logo pb-5">
                            <a href="./" class="logo-link">
    <img class="logo-light logo-img" src="../template/nighthold/images/main/logo.png" alt="logo">
</a>
                        </div>
                        <div class="nk-block-head">
                            <div class="nk-block-head-content">
                                <h5 class="nk-block-title">Авторизация</h5>
                            </div>
                        </div>
                        
                            
                                                                                                                                                                                                                                                                                                        


                            <div class="col-sm-12 tabs">

                                <div class="tab-content">
                                    <div class="tab-pane active">

                                        <form>                                        
											<div class="form-group">
                                                <div class="form-label-group">
                                                    <label class="form-label" for="username">Логин</label>
                                                </div>
                                                <input type="text" class="form-control form-control-lg"
                                                       id="username" name="username" placeholder="Введите Логин" value="">
                                            </div>
                                            <div class="form-group">
                                                <div class="form-label-group">
                                                    <label class="form-label" for="password">Пароль</label>
                                                </div>
												<div class="form-control-wrap">
                                                    <a tabindex="-1" href="#" class="form-icon form-icon-right passcode-switch is-hidden" data-target="password">
                                                        <em class="passcode-icon icon-show icon ni ni-eye"></em>
                                                        <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                                                    </a>
                                                    <input type="password" class="form-control form-control-lg is-hidden" id="password" name="password" placeholder="Введите пароль">
                                                </div>
                                            </div>
                                                                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-lg btn-primary btn-block login-btn">Войти</button>
                                                </div>
												<p class="msg none"></p>
                                        </form>

                                    </div>


                                    
                                </div>
                            </div>



                    </div>
                    <div class="nk-block nk-auth-footer">
                        <div class="mt-3">
<?php include"../cp/function/footer.php"?>                         </div>
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
<script src="../template/nighthold/js/mainadmin.js"></script>

    

</body>
</html>
