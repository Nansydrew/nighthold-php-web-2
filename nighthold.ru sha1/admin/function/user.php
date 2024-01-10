<?php
$conn = mysqli_connect("$webdbip", "$webdbuser", "$webdbpass", "$webdb");
if (!$conn) {
  die("Ошибка: " . mysqli_connect_error());
}
$sql = "SELECT * FROM admin";
if($result = mysqli_query($conn, $sql)){
     
    $rowsCount = mysqli_num_rows($result);
    foreach($result as $row){
    }
    mysqli_free_result($result);
} else{
    echo "Ошибка: " . mysqli_error($conn);
}
mysqli_close($conn);
?>
                    <div class="d-flex">
                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item
                                bg-soft-light border-start border-end"
                                id="page-header-user-dropdown"
                                data-bs-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <img class="rounded-circle header-profile-user"
                                    src="../../../admin/assets/images/users/Puff.jpg"
                                    alt="Header Avatar">
                                <span class="d-none d-xl-inline-block ms-1
                                    fw-medium"><?php echo"$row[username]";?></span>
                                <i class="mdi mdi-chevron-down d-none
                                    d-xl-inline-block"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- item-->
                                <a class="dropdown-item" href="#"><i class="mdi
                                        mdi-lock font-size-16 align-middle
                                        me-1"></i> Чисто для вида брат.</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="logout.php"><i class="mdi
                                        mdi-logout font-size-16 align-middle
                                        me-1"></i> Выйти</a>
                            </div>
                        </div>

                    </div>