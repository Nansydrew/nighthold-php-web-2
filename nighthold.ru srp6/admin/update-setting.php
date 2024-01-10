<? require_once '../include/config.php'; ?>
<?php
@session_start();
if (!$_SESSION['admin']) {

    header('Location: ./');
}

?>
<? include '../include/main.php'; ?>
<!doctype html>
<html lang="en">

    <head>

        <meta charset="utf-8" />
        <title>Настройка проекта • <?php echo"$row[title]";?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- preloader css -->
        <link rel="stylesheet" href="assets/css/preloader.min.css"
            type="text/css" />

        <!-- Bootstrap Css -->
        <link href="assets/css/bootstrap.min.css" id="bootstrap-style"
            rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css"
            />
        <!-- App Css-->
        <link href="assets/css/app.min.css" id="app-style" rel="stylesheet"
            type="text/css" />

        <!-- Custom Css -->
        <link href="assets/css/custom.css" rel="stylesheet" type="text/css" />
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
<?php include "function/logo.php"?>


                        <!-- App Search-->

                    </div>

<?php include "function/user.php" ?>
                </div>
            </header>

<?php include "function/menu.php" ?>

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
        <!-- end page title -->

<?php include "function/stat.php" ?>
		
<div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Настройка проекта</h4>
                    </div>
                    <div class="card-body p-4">




<?php
$conn = mysqli_connect("$webdbip", "$webdbuser", "$webdbpass", "$webdb");
// если запрос GET
if($_SERVER["REQUEST_METHOD"] === "GET" && isset($_GET["id"]))
{
    $userid = mysqli_real_escape_string($conn, $_GET["id"]);
    $sql = "SELECT * FROM main WHERE id = '$userid'";
    if($result = mysqli_query($conn, $sql)){
        if(mysqli_num_rows($result) > 0){
            foreach($result as $row){
                $title = $row["title"];
                $description = $row["description"];
				$discord = $row["discord"];
				$main__title = $row["main__title"];
				$main__text = $row["main__text"];
				$forum = $row["forum"];
            }
            echo "<form method='post'>
                        <div class='row'>
                            <div class='col-lg-6'>
                                <div>
									<input type='hidden' name='id' value='$userid' />
                                    <div class='mb-3'>
                                        <label for='example-text-input' class='form-label'>Название</label>
                                        <input class='form-control' type='text' name='title' value='$title'>
                                    </div>
                                    <div class='mb-3'>
                                        <label for='example-text-input' class='form-label'>Описание</label>
                                        <input class='form-control' type='text' name='description' value='$description' >
                                    </div>
                                    <div class='mb-3'>
                                        <label for='example-text-input' class='form-label'>Дискорд</label>
                                        <input class='form-control' type='text' name='discord'  value='$discord'>
                                    </div>


                                </div>
                            </div>
                            <div class='col-lg-6'>
                                <div class='mt-3 mt-lg-0'>
                                    <div class='mb-3'>
                                        <label for='example-text-input' class='form-label'>Начать игру заголовок</label>
                                        <input class='form-control' type='text' name='main__title' value='$main__title'>
                                    </div>
                                    <div class='mb-3'>
                                        <label for='example-text-input' class='form-label'>Начать игру описание</label>
                                        <input class='form-control' type='text' name='main__text' value='$main__text'>
                                    </div>
                                    <div class='mb-3'>
                                        <label for='example-text-input' class='form-label'>Форум</label>
                                        <input class='form-control' type='text' name='forum' value='$forum'>
                                    </div>



                                                    </div>
                                                </div>
												<center><div class='mt-4'>
                                                                <input type='submit' class='btn btn-primary w-md'></input>
                                                            </div></center>
                                            </div>
											
											</form>";
        }
        else{
            echo "<center>Такой информации по вашему запросу не существует! <br><br>
	  <a href ='javascript:history.go(-2)' class='btn btn-primary w-md'>Вернуться назад</a>
	   ";
        }
        mysqli_free_result($result);
    } else{
        echo "Ошибка: " . mysqli_error($conn);
    }
}
elseif (isset($_POST["id"]) && isset($_POST["title"]) && isset($_POST["description"]) && isset($_POST["discord"])&& isset($_POST["main__title"])&& isset($_POST["main__text"])&& isset($_POST["forum"])   ) {
      
    $userid = mysqli_real_escape_string($conn, $_POST["id"]);
    $title = mysqli_real_escape_string($conn, $_POST["title"]);
	$description = mysqli_real_escape_string($conn, $_POST["description"]);
    $discord = mysqli_real_escape_string($conn, $_POST["discord"]);
	$main__title = mysqli_real_escape_string($conn, $_POST["main__title"]);
	$main__text = mysqli_real_escape_string($conn, $_POST["main__text"]);
	$forum = mysqli_real_escape_string($conn, $_POST["forum"]);
	
      
    $sql = "UPDATE main SET title = '$title', description = '$description', main__title = '$main__title', main__text = '$main__text', discord = '$discord', forum = '$forum' WHERE id = '$userid'";
    if($result = mysqli_query($conn, $sql)){
       echo "<center>Данные успешно были изменены! <br><br>
	  <a href ='javascript:history.go(-2)' class='btn btn-primary w-md'>Вернуться назад</a>
	   ";
    } else{
        echo "Ошибка: " . mysqli_error($conn);
    }
}
else{
    echo "Некорректные данные";
}
mysqli_close($conn);
?>



											
											
											
											
											
											
											
											
											
											
											
                                        </div>
                                    </div>
                                </div> <!-- end col -->
                            </div>
							

    </div>
    <!-- container-fluid -->
</div>
<!-- End Page-content -->

<!-- apexcharts -->
<script src="assets/libs/apexcharts/apexcharts.min.js"></script>

<!-- Plugins js-->
<script src="assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-world-mill-en.js"></script>
<!-- dashboard init -->
<script src="assets/js/pages/dashboard.init.js"></script>

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
<? include '../include/main.php'; ?>
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <script>document.write(new Date().getFullYear())</script>
                            ©
                            <?php echo"$row[title]";?>
                        </div>
<?php include "function/dev.php" ?>
                    </div>
                </div>
            </footer>

            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->


        <!-- JAVASCRIPT -->
        <script src="assets/libs/jquery/jquery.min.js"></script>
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/node-waves/waves.min.js"></script>
        <script src="assets/libs/feather-icons/feather.min.js"></script>
        <!-- pace js -->
        <script src="assets/libs/pace-js/pace.min.js"></script>

        <script src="assets/js/app.js"></script>

    </body>

</html>