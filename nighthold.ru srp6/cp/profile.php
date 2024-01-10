<? require_once '../include/config.php'; ?>
<?php
@session_start();
if (!$_SESSION['user']) {

    header('Location: ./');
}

?>
<html lang="ru" class="js">
<head>
<?php include"../include/main.php" ?>
    <meta charset="utf-8">
            <title>Настройка профиля • <?php echo"$row[title]";?></title>
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
        <div class="col-12">
            <ul class="nav nav-tabs nav-tabs-mb-icon nav-tabs-card">
                <li class="nav-item">
                    <a class="nav-link active"
                       href="profile.php"
                    >
                        <em class="icon ni ni-lock-alt-fill"></em>
                        <span>Сменить пароль</span>
                    </a>
                </li>
			   <li class="nav-item">
                    <a class="nav-link"
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

<? include"function/passlich.php";?>
    <div class="nk-block">
        <div class="row g-gs">
            <div class="col-12">
                <div class="card card-bordered">
                    <div class="card-inner">
                        <div class="card-head">
                            <h5 class="card-title">Сменить пароль</h5>
                        </div>
                        <form method="POST" action="" onSubmit="return validatePassword()">
                            <div class="row g-4">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-label" for="new_password">Старый пароль</label>
                                        <div class="form-control-wrap">
                                            <input type="password" class="form-control "
                                                   id="currentPassword" name="currentPassword" required>
                                                                                    </div>
                                    </div>
                                </div>
								
                                <div class="col-lg-6">
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-label" for="new_password">Новый пароль</label>
                                        <div class="form-control-wrap">
                                            <input type="password" class="form-control "
                                                   id="newPassword" name="newPassword" required>
                                                                                    </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-label" for="new_password_confirmation">Повторите новый пароль</label>
                                        <div class="form-control-wrap">
                                            <input type="password" class="form-control "
                                                   id="confirmPassword" name="confirmPassword" required>
                                                                                    </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <button type="submit" name="submit" class="btn btn-lg btn-primary ml-auto">Изменить</button>
                                    </div>
                                </div>
								<div class="message"><?php if(isset($message)) { echo $message; } ?></div>
								<div class="messagesuc"><?php if(isset($messagesuc)) { echo $messagesuc; } ?></div>
                            </div>
                        </form>
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

