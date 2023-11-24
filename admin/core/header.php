<header id="page-topbar">
    <div class="layout-width">
        <div class="navbar-header">
            <div class="d-flex">

                <h4 class="card-title mb-0 flex-grow-1"><?php echo $headerName; ?></h4>
                
            </div>

            <div class="d-flex align-items-center">

                <div class="ms-1 header-item d-none d-sm-flex">
                    <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle" data-toggle="fullscreen">
                        <i class='bx bx-fullscreen fs-22'></i>
                    </button>
                </div>

                <div class="ms-1 header-item d-none d-sm-flex">
                    <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle light-dark-mode">
                        <i class='bx bx-moon fs-22'></i>
                    </button>
                </div>

                <div class="dropdown ms-sm-3 header-item topbar-user">
                    <button type="button" class="btn" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="d-flex align-items-center">
                            <span class="text-start">
                                <span class="d-none d-xl-inline-block fw-medium user-name-text"><?php echo $_SESSION['fname'].' '.$_SESSION['lname']; ?></span>
                                <span class="d-none d-xl-block fs-12 user-name-sub-text"><?php if($_SESSION['role'] == 1){echo 'Assistant';} else if($_SESSION['role'] == 2){echo 'HR';} else if($_SESSION['role'] == 3){echo 'Founder';} else {echo "Unapproved"; } ?></span>
                            </span>
                        </span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end">
                        <!-- item-->
                        <h6 class="dropdown-header">Welcome <?php echo $_SESSION['fname'] ?>!</h6>
                        <h6 class="dropdown-header"><?php echo $_SESSION['email'] ?></h6>
                        <a class="dropdown-item" href="settings.php"><i class="mdi mdi-cog-outline text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Settings</span></a>
                        <form action="logout.php" method="POST">
                            <button class="dropdown-item" name="submit" type="submit"><i class="mdi mdi-logout text-muted fs-16 align-middle me-1"></i> <span class="align-middle" data-key="t-logout">Logout</span></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
