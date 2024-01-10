<? require_once '../include/config.php'; ?>
<?php
@session_start();
if (!$_SESSION['user']) {

    header('Location: ./');
}

?>
<?php include"../include/main.php" ?>
<html lang="ru" class="js">
<head>
    <meta charset="utf-8">
            <title>Голосование • <?php echo"$row[title]";?></title>
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
                            
                                                                                                                                                                                                            																																																			
    
                       <div class="nk-content-wrap">
                            
                                                                                                                                                                                                                                                                                                        

				
                                                                                                                                                                                


                                <div class="nk-block">
        <div class="row g-gs">
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
        </div>
        <div class="row g-gs">






<div class="col-12">
                <div class="card card-bordered">
                    <div class="card-inner">
                        <div class="card-title-group">
                            <h5 class="card-title">
                                <span class="mr-2">Временно недоступно! <span class="text-primary"></span></span>
                            </h5>
                        </div>
                    </div>
                    <div class="card-inner p-0 border-top">
                        <div class="nk-tb-list nk-tb-ulist is-compact">

							
							
							
							

							
							
							
							


	                            		
							
	


                            
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
<script src="../template/nighthold/js/jquery-3.4.1.min.js"></script>
<script src="../template/nighthold/js/main.js"></script>









</body>
</html>

