<? require_once '../include/config.php'; ?>
<?php
    session_start();
    if ($_SESSION['user']) {
        header('Location: cabinet.php');
    }
?>
<html lang="ru" class="js">
<head>
<?php include"../include/main.php" ?>
    <meta charset="utf-8">
	<meta name="description" content="<?php echo"$row[description]";?>">
    <title>Регистрация • <?php echo"$row[title]";?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../template/nighthold/css/cabinet.css">
	<link rel="stylesheet" href="../template/nighthold/css/intlTelInput.css"/>
    <link rel="shortcut icon" href="../template/nighthold/images/favicon.ico">


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
                                <h5 class="nk-block-title">Регистрация</h5>
                            </div>
                        </div>


    <div class="col-sm-12 tabs">
        <div class="tab-content">
            <div class="tab-pane active">

                <form>                 
					<div class="form-group">
                        <label class="form-label" for="name">Логин<small style="display: block;font-size: 11px;">(используйте латинские буквы и введите не более 14 символов)</small></label>
                        <input type="text" class="form-control form-control-lg "
                               id="name" name="username" placeholder="Введите свой логин" value="">
                                            </div>
					<div class="form-group">
                        <label class="form-label" for="NightHoldTag">NightHoldTag<small style="display: block;font-size: 11px;">NightHoldTag - ваше публичное имя (никнейм), используется на форуме и виден всем другим игрокам. </small></label>
                        <input type="text" class="form-control form-control-lg "
                               id="NightHoldTag" name="NightHoldTag" placeholder="NightHoldTag" value="">
                                            </div>
                    <div class="form-group">
                        <label class="form-label" for="email">E-Mail</label>
                        <input type="text" class="form-control form-control-lg "
                               id="email" name="email" placeholder="Введите E-Mail" value="">
                                            </div>
                    <div class="form-group">
                        <label class="form-label" for="password">Пароль <small style="display: block;font-size: 11px;">(используйте латинские буквы и введите не менее 8 символов)</small></label>
<div class="form-control-wrap">
                            <a tabindex="-1" href="#" class="form-icon form-icon-right passcode-switch is-hidden" data-target="password">
                                <em class="passcode-icon icon-show icon ni ni-eye"></em>
                                <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                            </a>
                            <input type="password" class="form-control form-control-lg is-hidden" id="password" name="password" placeholder="Введите пароль">
                                                    </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="password_confirmation">Подтвердите пароль</label>
                        <div class="form-control-wrap">
                            <a tabindex="-1" href="#" class="form-icon form-icon-right passcode-switch" data-target="password_confirmation">
                                <em class="passcode-icon icon-show icon ni ni-eye"></em>
                                <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                            </a>
                            <input type="password" class="form-control form-control-lg "
                                   id="password_confirmation" name="password_confirmation"
                                   placeholder="Введите пароль ещё раз">
                                                    </div>
													</div>
                    <div class="form-group">
                        <div class="custom-control custom-control-xs custom-checkbox flex-wrap">
                            <input type="checkbox" class="custom-control-input " id="ok" name="ok" value="1" checked required>
                            <label class="custom-control-label" for="ok" name="ok">
                                Я согласен с <a tabindex="-1" href="../terms.php">пользовательским соглашением</a> &amp;
                                <a tabindex="-1" href="../policy.php">политикой конфиденциальности</a>.
                            </label>
                                                    </div>
                    </div>

                                                <div class="form-group">
                            <button type="submit" class="btn btn-lg btn-primary btn-block register-btn">Зарегистрироваться</button>
                        </div>
						 <p class="msg none"></p>
                </form>

            </div>
            
        </div>


    </div>


    <div class="form-note-s2 pt-4">
        У Вас уже есть аккаунт?
        <a href="./"><strong>Авторизоваться</strong></a>
    </div>


    <script src="../template/nighthold/js/intlTelInput.min.js"></script>
                    </div>
                    <div class="nk-block nk-auth-footer">
                        <div class="mt-3">
<?php include"function/footer.php"?>                       </div>
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
