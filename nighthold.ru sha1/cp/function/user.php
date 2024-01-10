            <div class="nk-header-tools">
    <ul class="nk-quick-nav">
        <li class="dropdown user-dropdown">
            <a href="#" class="dropdown-toggle mr-lg-n1" data-toggle="dropdown">
                <div class="user-toggle">
                    <div class="user-avatar sm">
                        <em class="icon ni ni-user-alt"></em>
                    </div>
                </div>
            </a>
            <div class="dropdown-menu dropdown-menu-md dropdown-menu-right dropdown-menu-s1">
                <div class="dropdown-inner user-card-wrap bg-lighter d-none d-md-block">
                    <div class="user-card">
                        <div class="user-avatar">
                            <em class="icon ni ni-user-alt"></em>
                        </div>
                        <div class="user-info">
                            <span class="lead-text"><?= $_SESSION['user']['username'] ?></span>
                            <span class="sub-text"><a href="email.php" class="__cf_email__"><?= $_SESSION['user']['email'] ?></a></span>
                        </div>
                        <div class="user-action">
                            <a class="btn btn-icon mr-n2" href="profile.php"><em class="icon ni ni-setting"></em></a>
                        </div>
                    </div>
                </div>
                <div class="dropdown-inner">
                    <ul class="link-list">
                        <li>
                            <a href="profile.php">
                                <em class="icon ni ni-setting-alt"></em>
                                <span>Настройки профиля</span>
                            </a>
                        </li>
                        <li>
                            <a href="activity.php">
                                <em class="icon ni ni-activity-alt"></em>
                                <span>Активные устройства</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="dropdown-inner">
                    <ul class="link-list">
                        <li>
                            <a href="logout.php">
                                <em class="icon ni ni-signout"></em>
                                <span>Выход</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </li>
        <li class="d-lg-none">
            <a href="#" class="toggle nk-quick-nav-icon mr-n1" data-target="sideNav"><em class="icon ni ni-menu"></em></a>
        </li>
    </ul>
</div>