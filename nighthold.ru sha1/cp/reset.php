<? require_once '../include/config.php'; ?>
<?php include"../include/main.php" ?>
<?php 
ini_set( 'display_errors', '0' );
error_reporting( E_ALL );
?>
<!DOCTYPE html>
<html lang="ru" class="js">
<head>
    <meta charset="utf-8">
            <title>Сбросить пароль • <?php echo"$row[title]";?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../template/nighthold/css/cabinet.css">
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
                                <h5 class="nk-block-title">Сбросить пароль</h5>
                            </div>
                        </div>
                        
    <link rel="stylesheet" href="../template/nighthold/css/intlTelInput.css"/>
    <script src="../template/nighthold/js/jquery-2.1.1.min.js"></script>

    

    <?php
include('../include/config.php');
$con = mysqli_connect("$lichdbip","$lichdbuser","$lichdbpass","$lichdbauth");
	if (mysqli_connect_errno()){
		echo "Невозможно установить соединение с MySql: " . mysqli_connect_error();
		die();
		}

$error="";	

if(isset($_POST["email"]) && (!empty($_POST["email"]))){
$email = $_POST["email"];
$email = filter_var($email, FILTER_SANITIZE_EMAIL);
$email = filter_var($email, FILTER_VALIDATE_EMAIL);
if (!$email) {
  	$error .="<div class='alert alert-fill alert-fail alert-icon' role='alert'>
            <em class='icon ni ni-check-circle'></em>
            <strong>Неверный адрес электронной почты. Пожалуйста, введите действительный адрес электронной почты!</strong>
        </div>
	";
	}else{
	$sel_query = "SELECT * FROM `account` WHERE email='".$email."'";
	$results = mysqli_query($con,$sel_query);
	$row = mysqli_num_rows($results);
	if ($row==""){
		$error .= "<div class='alert alert-fill alert-fail alert-icon' role='alert'>
            <em class='icon ni ni-check-circle'></em>
            <strong>Ни один пользователь не зарегистрирован с этим адресом электронной почты!</strong>
        </div>
		"
		;
		}
	}
	if($error!=""){
	echo "<center><div class='error'>".$error."</div>
	<br /><a href='javascript:history.go(-1)'>Назад</a>";
		}else{
	$expFormat = mktime(date("H"), date("i"), date("s"), date("m")  , date("d")+1, date("Y"));
	$expDate = date("Y-m-d H:i:s",$expFormat);
	$key = md5("2048*2 + $email");
	$addKey = substr(md5(uniqid(rand(),1)),3,10);
	$key = $key . $addKey;

mysqli_query($con,
"INSERT INTO `password_reset_temp` (`email`, `key`, `expDate`)
VALUES ('".$email."', '".$key."', '".$expDate."');");


$output='<p>Дорогой пользователь,</p>';
$output.='<p>Пожалуйста, перейдите по следующей ссылке, чтобы сбросить свой пароль.</p>';
$output.='<p>-------------------------------------------------------------</p>';
$output.='<p><a href="https://nighthold.pro/cp/reset-password.php?key='.$key.'&email='.$email.'&action=reset" target="_blank">https://nighthold.pro/cp/reset-password.php?key='.$key.'&email='.$email.'&action=reset</a></p>';		
$output.='<p>-------------------------------------------------------------</p>';
$output.='<p>Пожалуйста, обязательно скопируйте всю ссылку в свой браузер.
Срок действия ссылки истечет через 1 день по соображениям безопасности.</p>';
$output.='<p>Если вы не запрашивали это электронное письмо с забытым паролем, никаких действий
не требуется, ваш пароль не будет сброшен. Однако вы можете войти в
свою учетную запись и сменить пароль безопасности.</p>';   	
$output.='<p>Спасибо,</p>';
$output.='<p>с уважением администрация проекта Nighthold</p>';
$body = $output; 
$subject = "Восстановление пароля - Nighthold.";

$email_to = $email;
$fromserver = "support@nighthold.pro"; 
    require "PHPMailer/src/PHPMailer.php";
    require "PHPMailer/src/SMTP.php";
    require "PHPMailer/src/POP3.php";
    require "PHPMailer/src/Exception.php";
$mail = new PHPMailer\PHPMailer\PHPMailer();
$mail->IsSMTP();
$mail->Host = "smtp.mail.ru"; // Enter your host here
$mail->SMTPAuth = true;
$mail->Username = "support@nighthold.pro"; // Enter your email here
$mail->Password = "5tTbiWv54r"; //Enter your passwrod here
$mail->Port = 587;
$mail->IsHTML(true);
$mail->From = "support@nighthold.pro";
$mail->FromName = "Support Nighthold";
$mail->CharSet = "utf-8"; 
$mail->Sender = $fromserver; // indicates ReturnPath header
$mail->Subject = $subject;
$mail->Body = $body ;
$mail->AddAddress($email_to);
if(!$mail->Send()){
echo "Mailer Error: " . $mail->ErrorInfo;
}else{
echo "<div class='alert alert-fill alert-success alert-icon' role='alert'>
            <em class='icon ni ni-check-circle'></em>
            <strong>Мы отправили вам по электронной почте ссылку для сброса пароля!</strong>
        </div>";
	}

		}	

}else{
?>
                                                        


    <div class="col-sm-12 tabs">

        <div class="tab-content">
            <div class="tab-pane active" id="tab-email">

                <form method="post" action="" name="reset">
                    <div class="form-group">
                        <div class="form-label-group">
                            <label class="form-label" for="email">E-Mail</label>
                        </div>
                        <input id="email" type="email"
                               class="form-control form-control-lg " name="email"
                               value="" required autocomplete="email" placeholder="Введите E-Mail" autofocus>


                                            </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-lg btn-primary btn-block">Отправить ссылку сброса пароля</button>
                    </div>

                </form>

            </div>


            

            
        </div>
    </div>

    <script src="../template/nighthold/js/intlTelInput.min.js"></script>


                    </div>
                    <div class="nk-block nk-auth-footer">
                        <div class="mt-3">
                            <div class="footer__copyright-info">
    <div class="footer__copyright-info--text">
        &copy; 2022 Shadowlands
    </div>
    <div class="footer__copyright-info--policy">
        <a href="../term.php">ПОЛЬЗОВАТЕЛЬСКОЕ СОГЛАШЕНИЕ</a>
        <a href="../policy.php">ПОЛИТИКА КОНФИДЕНЦИАЛЬНОСТИ</a>
    </div>
</div>                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>

<script src="../template/nighthold/js/bundle.js"></script>
<script src="../template/nighthold/js/scripts.js@id=0cdc233a9e6c7e95fcf4"></script>
<script src="../template/nighthold/js/ion.rangeSlider.min.js"></script>



</body>
</html>
<?php } ?>