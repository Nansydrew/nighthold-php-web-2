<? require_once '../include/config.php'; ?>
<?php include"../include/main.php" ?>
<!DOCTYPE html>
<html lang="ru" class="js">
<head>
    <meta charset="utf-8">
            <title>Сбросить пароль • <?php echo"$row[title]";?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../template/nighthold/css/cabinet.css">
    <link rel="shortcut icon" href="../template/nighthold/images/favicon.ico">
	<link rel="stylesheet" href="../template/nighthold/css/intlTelInput.css"/>


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
                        


    

<?php
include('../include/config.php');
$con = mysqli_connect("$lichdbip","$lichdbuser","$lichdbpass","$lichdbauth");
	if (mysqli_connect_errno()){
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
		die();
		}
		
if (isset($_GET["key"]) && isset($_GET["email"])
&& isset($_GET["action"]) && ($_GET["action"]=="reset")
&& !isset($_POST["action"])){
$key = $_GET["key"];
$email = $_GET["email"];
$curDate = date("Y-m-d H:i:s");
$query = mysqli_query($con,"
SELECT * FROM `password_reset_temp` WHERE `key`='".$key."' and `email`='".$email."';");
$row = mysqli_num_rows($query);
if ($row==""){
$error .= "<div class='alert alert-fill alert-fail alert-icon' role='alert'>
            <em class='icon ni ni-check-circle'></em>
            <strong>Ссылка недействительна или срок действия истек. Либо вы скопировали неправильную ссылку из электронного письма, либо вы уже использовали ключ, и в этом случае он деактивируется.</strong>
        </div>
		<center><p><a href='reset.php'>Кликните сюда</a> чтобы сбросить пароль.</p></center>
";
	}else{
	$row = mysqli_fetch_assoc($query);
	$expDate = $row['expDate'];
	if ($expDate >= $curDate){
	?>
                                                        


    <div class="col-sm-12 tabs">

        <div class="tab-content">
            <div class="tab-pane active" id="tab-email">

                <form method="post" action="" name="update">

				<input type="hidden" name="action" value="update" />
				<input type="hidden" name="email" value="<?php echo $email;?>"/>
                    <div class="form-group">
                        <label class="form-label" for="password">Пароль <small style="display: block;font-size: 11px;">(используйте латинские буквы и введите не менее 8 символов)</small></label>
<div class="form-control-wrap">
                            <a tabindex="-1" href="#" class="form-icon form-icon-right passcode-switch is-hidden" data-target="password">
                                <em class="passcode-icon icon-show icon ni ni-eye"></em>
                                <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                            </a>
                            <input type="password" class="form-control form-control-lg is-hidden" id="pass1" name="pass1" placeholder="Введите пароль">
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
                                   id="pass2" name="pass2"
                                   placeholder="Введите пароль ещё раз">
                                                    </div>
													</div>

                    <div class="form-group">
                        <button type="submit" id = "reset"class="btn btn-lg btn-primary btn-block">Сменить пароль</button>
                    </div>

                </form>

<?php
}else{
$error .= "<div class='alert alert-fill alert-fail alert-icon' role='alert'>
            <em class='icon ni ni-check-circle'></em>
            <strong>Срок действия ссылки истек. Вы пытаетесь использовать ссылку с истекшим сроком действия, которая действительна только 24 часа (1 день после запроса).</strong>
        </div>
		<center><p><a href='/'>Назад</p></center>";
				}
		}
if($error!=""){
	echo "<div class='error'>".$error."</div><br />";
	}			
} // isset email key validate end


if(isset($_POST["email"]) && isset($_POST["action"]) && ($_POST["action"]=="update")){
$error="";
$pass1 = mysqli_real_escape_string($con,$_POST["pass1"]);
$pass2 = mysqli_real_escape_string($con,$_POST["pass2"]);







$email = $_POST["email"];
$curDate = date("Y-m-d H:i:s");
if ($pass1!=$pass2){
		$error .= "<div class='alert alert-fill alert-fail alert-icon' role='alert'>
            <em class='icon ni ni-check-circle'></em>
            <strong>Пароль не совпадает, оба пароля должны быть одинаковыми.</strong>
        </div>
		<center><p><a href='javascript:history.go(-1)'>Назад</p></center>
		
		";
		}
	if($error!=""){
		echo "<div class='error'>".$error."</div><br />";
		}else{
?>
<?php
$conn = mysqli_connect("$lichdbip", "$lichdbuser", "$lichdbpass", "$lichdbauth");
if (!$conn) {
  die("Ошибка: " . mysqli_connect_error());
}
$sql = "SELECT * FROM account where email = '$email'";
if($result = mysqli_query($conn, $sql))
{
    $rowsCount = ($result);
            foreach($result as $row){
                $username= $row["username"];
                
            }
    $result->free();
} 
else{
    echo "Ошибка: " . $conn->error;
}
$conn->close();
?>
<?
$password = $_POST['pass1'];
mysqli_query($con,"UPDATE `account` SET `sha_pass_hash`='" . $password = sha1(strtoupper($username) . ':' . strtoupper($password)) . "', s = '' WHERE `email`='".$email."';");	



mysqli_query($con,"DELETE FROM `password_reset_temp` WHERE `email`='".$email."';");		
	
echo "<div class='alert alert-fill alert-success alert-icon' role='alert'>
            <em class='icon ni ni-check-circle'></em>
            <strong>Поздравляю! Ваш пароль был успешно обновлен.</strong>
        </div>
		<center><p><a href='./'>Кликните сюда</a> чтобы войти.</p></center>
";
		}		
}
?>
            </div>


            

            
        </div>
    </div>

    <script src="../template/nighthold/js/intlTelInput.min.js"></script>


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