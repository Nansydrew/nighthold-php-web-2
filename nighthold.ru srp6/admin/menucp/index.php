<? require_once '../../include/config.php'; ?>
<?php
@session_start();
if (!$_SESSION['admin']) {

    header('Location: ./');
}

?>
<? include '../../include/main.php'; ?>
<!doctype html>
<html lang="en">

    <head>

        <meta charset="utf-8" />
        <title>Управление меню личного кабинета • <?php echo"$row[title]";?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- App favicon -->
        <link rel="shortcut icon" href="../assets/images/favicon.ico">

        <!-- preloader css -->
        <link rel="stylesheet" href="../assets/css/preloader.min.css"
            type="text/css" />

        <!-- Bootstrap Css -->
        <link href="../assets/css/bootstrap.min.css" id="bootstrap-style"
            rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="../assets/css/icons.min.css" rel="stylesheet" type="text/css"
            />
        <!-- App Css-->
        <link href="../assets/css/app.min.css" id="app-style" rel="stylesheet"
            type="text/css" />

        <!-- Custom Css -->
        <link href="../assets/css/custom.css" rel="stylesheet" type="text/css" />
		<script src="https://kit.fontawesome.com/803ae4140f.js" crossorigin="anonymous"></script>
    </head>

    <body>

        <!-- <body data-layout="horizontal"> -->

        <!-- Begin page -->
        <div id="layout-wrapper">

            <header id="page-topbar">
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
<?php include "../function/logo.php"?>


                        <!-- App Search-->

                    </div>

<?php include "../function/user.php" ?>
                </div>
            </header>

<?php include "../function/menu.php" ?>

<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center
                    justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">Статистика проекта</h4>


                </div>
            </div>
        </div>
<?php include "../function/stat.php" ?>
		
<div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Управление верхнего меню личного кабинета</h4>
                    </div>
					
                    <div class="card-body p-4">


<div class="card-body">
                        <div class="table-responsive">
                            <table class="table mb-0">

                                <thead class="table-light">
                                    <tr>
                                        <th>#</th>
                                        <th>Названия</th>
                                        <th>Ссылки</th>
										<th>Редактировать пункт</th>
										<th>Удалить пункт</th>
                                    </tr>
                                </thead>

<?php
$conn = mysqli_connect("$webdbip", "$webdbuser", "$webdbpass", "$webdb");
if (!$conn) {
  die("Ошибка: " . mysqli_connect_error());
}
$sql = "SELECT * FROM menu_cp_top";
if($result = mysqli_query($conn, $sql)){
     
    $rowsCount = mysqli_num_rows($result);
    foreach($result as $row){
		echo "                    
                                <tbody>
                                    <tr>
                                        <th scope='row'>$row[id]</th>
                                        <td>$row[name]</td>
                                        <td>$row[link]</td>
										<td>
                                                                <a href ='update-menucptop.php?id=$row[id]' class='btn btn-primary-edit'>Изменить</a>
                                                            </td>
										<td>
                                                                <a href ='del-menucptop.php?id=$row[id]' class='btn btn-primary-del'>Удалить</a>
                                                            </td>
                                    </tr>
                                </tbody>
                            ";
    }
    mysqli_free_result($result);
} else{
    echo "Ошибка: " . mysqli_error($conn);
}
mysqli_close($conn);
?>
</table>

                        </div>
                    </div>
							<center><br><br>
	  <a href ="add-menucptop.php?id=1" class="btn btn-primary-add w-md">Добавить пункт</a>				
							
											
											
											
											
											
											
											
											
                                        </div>
                                    </div>
                                </div> <!-- end col -->
                            </div>
			

<div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Управление бокового меню личного кабинета</h4>
                    </div>
					
                    <div class="card-body p-4">


<div class="card-body">
                        <div class="table-responsive">
                            <table class="table mb-0">

                                <thead class="table-light">
                                    <tr>
                                        <th>#</th>
                                        <th>Названия</th>
                                        <th>Ссылки</th>
                                        <th>Иконки</th>
										<th>Редактировать пункт</th>
										<th>Удалить пункт</th>
                                    </tr>
                                </thead>

<?php
$conn = mysqli_connect("$webdbip", "$webdbuser", "$webdbpass", "$webdb");
if (!$conn) {
  die("Ошибка: " . mysqli_connect_error());
}
$sql = "SELECT * FROM menu_cp";
if($result = mysqli_query($conn, $sql)){
     
    $rowsCount = mysqli_num_rows($result);
    foreach($result as $row){
		echo "                    
                                <tbody>
                                    <tr>
                                        <th scope='row'>$row[id]</th>
                                        <td>$row[name]</td>
                                        <td>$row[link]</td>
                                        <td>$row[icon]</td>
										<td>
                                                                <a href ='update-menucp.php?id=$row[id]' class='btn btn-primary-edit'>Изменить</a>
                                                            </td>
										<td>
                                                                <a href ='del-menucp.php?id=$row[id]' class='btn btn-primary-del'>Удалить</a>
                                                            </td>
                                    </tr>
                                </tbody>
                            ";
    }
    mysqli_free_result($result);
} else{
    echo "Ошибка: " . mysqli_error($conn);
}
mysqli_close($conn);
?>
</table>

                        </div>
                    </div>
							<center><br><br>
	  <a href ="add-menucp.php?id=1" class="btn btn-primary-add w-md">Добавить пункт</a>				
							
											
											
											
											
											
											
											
											
                                        </div>
                                    </div>
                                </div> <!-- end col -->
                            </div>

							

    </div>
    <!-- container-fluid -->
</div>
<!-- End Page-content -->

<!-- apexcharts -->
<script src="../assets/libs/apexcharts/apexcharts.min.js"></script>

<!-- Plugins js-->
<script src="../assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="../assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-world-mill-en.js"></script>
<!-- dashboard init -->
<script src="../assets/js/pages/dashboard.init.js"></script>

<script type="text/javascript">
    function initCounterNumber() {
            var counter = document.querySelectorAll('.counter-value');
            var speed = 250; // The lower the slower
            counter.forEach(function (counter_value) {
                function updateCount() {
                    var target = +counter_value.getAttribute('data-target');
                    var count = +counter_value.innerText;
                    var inc = target / speed;
                    if (inc < 1) {
                        inc = 1;
                    }
                    // Check if target is reached
                    if (count < target) {
                        // Add inc to count and output in counter_value
                        counter_value.innerText = (count + inc).toFixed(0);
                        // Call function every ms
                        setTimeout(updateCount, 1);
                    } else {
                        counter_value.innerText = target;
                    }
                };
                updateCount();
            });
        }

        $(document).ready( function() {
            initCounterNumber();
        });
        
    </script></div>
<? include '../../include/main.php'; ?>
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <script>document.write(new Date().getFullYear())</script>
                            ©
                            <?php echo"$row[title]";?>
                        </div>
<?php include "../function/dev.php" ?>
                    </div>
                </div>
            </footer>

            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->


        <!-- JAVASCRIPT -->
        <script src="../assets/libs/jquery/jquery.min.js"></script>
        <script src="../assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="../assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="../assets/libs/simplebar/simplebar.min.js"></script>
        <script src="../assets/libs/node-waves/waves.min.js"></script>
        <script src="../assets/libs/feather-icons/feather.min.js"></script>
        <!-- pace js -->
        <script src="../assets/libs/pace-js/pace.min.js"></script>

        <script src="../assets/js/app.js"></script>

    </body>

</html>