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
            <title>Пополнения баланса • <?php echo"$row[title]";?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../template/nighthold/css/cabinet.css">
    <link rel="shortcut icon" href="../template/nighthold/images/favicon.ico">
<script src="https://shadowlands.club/assets/js/jquery-2.1.1.min.js"></script>

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
                            
                                                                                                                                                                                                            																																																			
    
<div class="nk-content-wrap" data-select2-id="11">
                            
                                                                                                                                                                                                                                                                                                        

				
                                                                                                                                                                                


                            

    <link rel="stylesheet" href="../template/nighthold/css/css-update.css">

    
                                                                                                                                                                                                


                <div class="nk-block" data-select2-id="10">
                    <div class="row g-gs">
                        <div class="col-lg-12">
                            <div class="card card-bordered">

                                <div class="card-inner">
                                    <div class="donate-content">


                                         <div class="donate-content__col">
			<script>
				document.addEventListener( "DOMContentLoaded", function( event )
				{
					$( "#enotForm" ).submit( function( event )
					{
						var char = $( "#char" ).val();
						var count = $( "#count" ).val();

						$.ajax(
						{
							type: "POST",
							url: "sign.php",
							data: ( { "char" : char, "count" : count } ),
							async: false,
							dataType: "json",
							success: function( response )
							{
								$( "#MERCHANT_ID" ).val( response["merchant_id"] );
								$( "#PAY_SUM" ).val( response["sum"] );
								$( "#PAY_ID" ).val( response["payment_id"] );
								$( "#SIGN" ).val( response["sign"] );
								
								$( 'input[name^="cf[char]"]' ).val( char );
							}
						});
					});
				});
			</script>
											<form id="enotForm" method="get" action="https://enot.io/pay">
				<input type="hidden" name="m" id="MERCHANT_ID" value="{MERCHANT_ID}">
				<input type="hidden" name="oa" id="PAY_SUM" value="{PAY_SUM}">
				<input type="hidden" name="o" id="PAY_ID" value="{PAY_ID}">
				<input type="hidden" name="s" id="SIGN" value="{SIGN}">
				<input type="hidden" name="cf[char]" value="YOUR_PARAMS">
				
                                                <div class="form-group">
                                                    <label class="form-label" for="payment">Способ оплаты</label>
                                                    <div class="input-group" data-select2-id="6">
													
													
                                                        <select class="form-select form-control select2-hidden-accessible" id="payment" name="payment" tabindex="-1" aria-hidden="true">
                                                        <option value="1" selected="" data-select2-id="1">Enot (Банковские карты, Криптовалюты, Perfect Money)</option>                                                            
														                                                      </select>
														<span class="select2 select2-container select2-container--default select2-container--below" style="width: 413px;">
														<span class="selection">
																														</span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                    </div>
                                                </div>

				<div class="form-group">
					<label for="char">Введите логин от аккаунта:</label>
					<input type="text" class="form-control" id="char" name="char" value="<?= $_SESSION['user']['username'] ?>"/>
				</div>
				
                                                <div class="form-group">
                                                    <label class="form-label" for="amount">Количество бонусов</label>
                                                    <div class="input-group">
                                                        <input type="number" class="form-control" min="1" max="10000" id="count" name="count" value="0">
                                                    </div>
                                                </div>

                                                
                                                    <input type="submit" class="btn btn-lg btn-primary">
                                               

                                            </form>
                                        </div>

                                        <div class="donate-content__col">

                                            <div class="donate-content__bonuses">
                                                <label class="form-label" for="server">Информация</label>

<?php include "function/info.php";?>                               
                                                            <div class="donate-content__bonuses-item">
                                                                <div class="donate-content__bonuses-item-col">
                                                                    <div class="donate-content__bonuses-item-name">Баланс</div>
                                                                    <div class="donate-content__bonuses-item-val"><?php echo"$bonuses"; ?> б</div>
                                                                </div>
<?php include "../include/config.php";?>
                                                                <div class="donate-content__bonuses-item-col">
                                                                    <div class="donate-content__bonuses-item-name">Эквивалент</div>
                                                                    <div class="donate-content__bonuses-item-val">
                                                                        1 б = <?php echo"$colbonus"; ?> р
                                                                    </div>
                                                                </div>
                                                            </div>

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    </div>
                                        </div>

                                    </div>

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
<script src="../template/nighthold/js/main.js"></script>















</body>
</html>

