<?php
$connlich = mysqli_connect("$lichdbip", "$lichdbuser", "$lichdbpass", "$lichdbauth");
if (!$connlich) {
  die("Ошибка: " . mysqli_connect_error());
}

$userid=  $_SESSION["user"]["id"];
$sql = "SELECT * FROM account WHERE id = '$userid'";
if($result = mysqli_query($connlich, $sql))
{
    $rowsCount = ($result);
    foreach($result as $row){
echo "<div class='nk-tb-item account fade show no-chars'>
                                    <div class='nk-tb-col'>
                                        <span class='tb-lead'><a href='#'>Игровой аккаунт</a></span>
                                    </div>
                                    <div class='nk-tb-col'>
                                        <div class='user-card'>
                                            <div class='user-name'>
                                                <span class='tb-lead'>
                                                  Ваш логин: $row[username]
                                                                                                    </span>
                                            </div>
                                        </div>
                                    </div>
									
									
									
									
                                    <div class='nk-tb-col tb-col-md'>
                                        <span class='tb-sub'>
                                          Дата регистрации:  $row[joindate]
                                        </span>
                                    </div>";
			    }
    $result->free();
} 
else{
    echo "Ошибка: " . $connlich->error;
}
$connlich->close();
?>


<?php include "lichaccount.php"?>
                                    <div class='nk-tb-col tb-col-xs'>
                                                                                    <span class='badge badge-dot badge-danger'>Всего персонажей: <? printf("%d", $row_cnt); ?></span>
                                                                            </div>
																			
<?php
$connlich = mysqli_connect("$lichdbip", "$lichdbuser", "$lichdbpass", "$lichdbauth");
if (!$connlich) {
  die("Ошибка: " . mysqli_connect_error());
}

$userid=  $_SESSION["user"]["id"];
$sql = "SELECT * FROM account WHERE id = '$userid'";
if($result = mysqli_query($connlich, $sql))
{
    $rowsCount = ($result);
    foreach($result as $row){
echo "										
                                    <div class='nk-tb-col nk-tb-col-action'>
                                        <div class='dropdown'>
                                            <a class='text-soft dropdown-toggle btn btn-icon btn-trigger' data-toggle='dropdown' aria-expanded='false'>
                                                <em class='icon ni ni-more-h'></em>
                                            </a>
                                            <div class='dropdown-menu dropdown-menu-right' style=''>
                                                <ul class='link-list-plain'>
                                                    <li><a href='profile.php'>Сменить пароль</a></li>

                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>";
			    }
    $result->free();
} 
else{
    echo "Ошибка: " . $connlich->error;
}
$connlich->close();
?>

