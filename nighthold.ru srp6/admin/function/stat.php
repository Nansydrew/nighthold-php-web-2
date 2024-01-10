        <div class="row">
            <div class="col-xl-3 col-md-6">
                <!-- card -->
                <div class="card card-h-100">
                    <!-- card body -->
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-6">
                                <span class="text-muted mb-3 lh-1 d-block
                                    text-truncate">Всего аккаунтов</span>
                                <h4 class="mb-3">
<?php
$link = mysqli_connect("$lichdbip", "$lichdbuser", "$lichdbpass", "$lichdbauth");
if (mysqli_connect_errno()) {
    printf("Ошибка подключения: %s\n", mysqli_connect_error());
    exit();
}

if ($result = mysqli_query($link, "SELECT * FROM account")) {
    $totalacc = mysqli_num_rows($result);
    mysqli_free_result($result);
}
mysqli_close($link);
?>
                                   <font color="green"> <span class="counter-value" data-target="<? printf("%d", $totalacc); ?>"></span></font>
                                </h4>
                            </div>
                        </div>
                    </div><!-- end card body -->
                </div><!-- end card -->
            </div><!-- end col -->

            <div class="col-xl-3 col-md-6">
                <!-- card -->
                <div class="card card-h-100">
                    <!-- card body -->
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-6">
                                <span class="text-muted mb-3 lh-1 
                                    text-truncate">Всего забаненных аккаунтов</span>
                                <h4 class="mb-3">
<?php
$link = mysqli_connect("$lichdbip", "$lichdbuser", "$lichdbpass", "$lichdbauth");
if (mysqli_connect_errno()) {
    printf("Ошибка подключения: %s\n", mysqli_connect_error());
    exit();
}

if ($result = mysqli_query($link, "SELECT * FROM account_banned")) {
    $totalaccban = mysqli_num_rows($result);
    mysqli_free_result($result);
}
mysqli_close($link);
?>
                                    <font color="red"> <span class="counter-value" data-target="<? printf("%d", $totalaccban); ?>"></span></font>
                                </h4>
                            </div>

                        </div>
                    </div><!-- end card body -->
                </div><!-- end card -->
            </div><!-- end col-->

            <div class="col-xl-3 col-md-6">
                <!-- card -->
                <div class="card card-h-100">
                    <!-- card body -->
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-6">
                                <span class="text-muted mb-3 lh-1
                                    text-truncate">Всего премиум аккаунтов</span>
                                <h4 class="mb-3">
<?php
$link = mysqli_connect("$lichdbip", "$lichdbuser", "$lichdbpass", "$lichdbauth");
if (mysqli_connect_errno()) {
    printf("Ошибка подключения: %s\n", mysqli_connect_error());
    exit();
}

if ($result = mysqli_query($link, "SELECT * FROM account_premium where active = 1")) {
    $totalaccprem = mysqli_num_rows($result);
    mysqli_free_result($result);
}
mysqli_close($link);
?>
                                    <font color="gold"> <span class="counter-value" data-target="<? printf("%d", $totalaccprem); ?>"></span></font>
                                </h4>
                            </div>

                        </div>
                    </div><!-- end card body -->
                </div><!-- end card -->
            </div><!-- end col -->

            <div class="col-xl-3 col-md-6">
                <!-- card -->
                <div class="card card-h-100">
                    <!-- card body -->
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-6">
                                <span class="text-muted mb-3 lh-1
                                    text-truncate">Всего реалмов</span>
                                <h4 class="mb-3">
<?php
$link = mysqli_connect("$lichdbip", "$lichdbuser", "$lichdbpass", "$lichdbauth");
if (mysqli_connect_errno()) {
    printf("Ошибка подключения: %s\n", mysqli_connect_error());
    exit();
}

if ($result = mysqli_query($link, "SELECT * FROM realmlist")) {
    $totalrealm = mysqli_num_rows($result);
    mysqli_free_result($result);
}
mysqli_close($link);
?>
                                    <font color="blue"> <span class="counter-value" data-target="<? printf("%d", $totalrealm); ?>"></span></font>
                                </h4>
                            </div>
                        </div>
                    </div><!-- end card body -->
                </div><!-- end card -->
            </div><!-- end col -->
        </div><!-- end row-->