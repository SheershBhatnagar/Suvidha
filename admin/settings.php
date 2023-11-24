<!doctype html>

<?php

    include 'global_functions/global_functions.php';

    $pageName = "Settings";

    include 'core/head.php';

    $isError = $_GET['isError'] ?? 0;
    $error = $_GET['error'] ?? "";

    $isMessage = $_GET['isMessage'] ?? 0;
    $message = $_GET['message'] ?? "";

    session_start();
    $uid = $_SESSION['uid'];
    $email = $_SESSION['email'];
    $fname = $_SESSION["fname"] ??"";
    $lname = $_SESSION['lname'];

?>

<body>

    <!-- Begin page -->
    <div id="layout-wrapper">

        <?php

            $headerName = "Settings";

            include 'core/header.php';
            include 'core/navbar.php';

        ?>
        <!-- Left Sidebar End -->
        <!-- Vertical Overlay-->
        <div class="vertical-overlay"></div>

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <div class="position-relative mx-n4 mt-5"></div>

                    <div class="row">
                        <div class="col-xxl-3">
                            <div class="card mt-n5">
                                <div class="card-body p-4">
                                    <div class="text-center">
                                        <h5 class="fs-16 mb-1"><?php echo $fname.' '.$lname; ?></h5>
                                        <p class="text-muted mb-0"><?php if($_SESSION['role'] == 1){echo 'Assistant';} else if($_SESSION['role'] == 2){echo 'HR';} else if($_SESSION['role'] == 3){echo 'Founder';} else {echo "Unapproved"; } ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-9">
                            <div class="card mt-xxl-n5">
                                <div class="card-header">
                                    <ul class="nav nav-tabs-custom rounded card-header-tabs border-bottom-0" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-bs-toggle="tab" href="#personalDetails" role="tab">
                                                <i class="fas fa-home"></i> Personal Details
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#changePassword" role="tab">
                                                <i class="far fa-user"></i> Change Password
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card-body p-4">
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="personalDetails" role="tabpanel">
                                            <form action="api/update_profile.php" method="post">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="firstnameInput" class="form-label">First Name</label>
                                                            <input name="fname" type="text" class="form-control" id="firstnameInput" placeholder="Enter your firstname" value="<?php echo $fname; ?>">
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="lastnameInput" class="form-label">Last Name</label>
                                                            <input name="lname" type="text" class="form-control" id="lastnameInput" placeholder="Enter your lastname" value="<?php echo $lname; ?>">
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="emailInput" class="form-label">Email Address</label>
                                                            <input name="email" type="email" class="form-control" id="emailInput" placeholder="Enter your email" value="<?php echo $email; ?>">
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-lg-12">
                                                        <div class="hstack gap-2 justify-content-end">
                                                            <button name="submit" type="submit" class="btn btn-primary">Update</button>
                                                            <button type="button" class="btn btn-soft-danger">Cancel</button>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                </div>
                                                <!--end row-->
                                            </form>
                                        </div>
                                        <div class="tab-pane" id="changePassword" role="tabpanel">
                                            <form action="api/change_password.php" method="post">
                                                <div class="row g-2">
                                                    <div class="col-lg-4">
                                                        <label class="form-label" for="password-input">Old Password <span class="text-danger">*</span></label>
                                                        <div class="position-relative auth-pass-inputgroup mb-3">
                                                            <input name="oldPass" type="password" class="form-control pe-5 password-input" onpaste="return false" placeholder="Old password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>
                                                            <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon" type="button" id="confirm-password-input"><i class="ri-eye-fill align-middle"></i></button>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-lg-4">
                                                        <label class="form-label" for="password-input">New Password <span class="text-danger">*</span></label>
                                                        <div class="position-relative auth-pass-inputgroup">
                                                            <input name="newPass" type="password" class="form-control pe-5 password-input" onpaste="return false" placeholder="Enter new password" id="password-input" aria-describedby="passwordInput" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>
                                                            <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon" type="button" id="password-addon"><i class="ri-eye-fill align-middle"></i></button>
                                                            <div class="invalid-feedback">
                                                                Please enter new password
                                                            </div>
                                                        </div>
                                                        <div id="password-contain" class="p-3 bg-light mb-2 rounded">
                                                            <h5 class="fs-13">Password must contain:</h5>
                                                            <p id="pass-length" class="invalid fs-12 mb-2">Minimum <b>8 characters</b></p>
                                                            <p id="pass-lower" class="invalid fs-12 mb-2">At <b>lowercase</b> letter (a-z)</p>
                                                            <p id="pass-upper" class="invalid fs-12 mb-2">At least <b>uppercase</b> letter (A-Z)</p>
                                                            <p id="pass-number" class="invalid fs-12 mb-0">A least <b>number</b> (0-9)</p>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-lg-4">
                                                        <label class="form-label" for="password-input">Confirm New Password <span class="text-danger">*</span></label>
                                                        <div class="position-relative auth-pass-inputgroup mb-3">
                                                            <input name="confirmPass" type="password" class="form-control pe-5 password-input" onpaste="return false" placeholder="Confirm New password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" id="confirm-password-input" required>
                                                            <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon" type="button" id="confirm-password-input"><i class="ri-eye-fill align-middle"></i></button>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-lg-12">
                                                        <div class="mb-3">
                                                            <a href="forgot_password.php" class="link-primary">Forgot Password ?</a>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-lg-12">
                                                        <div class="text-end">
                                                            <button name="changePass" type="submit" class="btn btn-success">Change Password</button>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                </div>
                                                <!--end row-->
                                            </form>

                                            <?php

                                                if($isError == 1)
                                                {
                                                    echo '<div class="alert alert-danger alert-dismissible alert-label-icon rounded-label fade show mt-4" role="alert">
                                                            <i class="ri-error-warning-line label-icon"></i>'.$error.'
                                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                                        </div>';
                                                }

                                                if($isMessage == 1)
                                                {
                                                    echo '<div class="alert alert-danger alert-dismissible alert-label-icon rounded-label fade show mt-4" role="alert">
                                                            <i class="ri-check-line label-icon"></i>'.$message.'
                                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                                        </div>';
                                                }

                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->

                </div>
                <!-- container-fluid -->
            </div><!-- End Page-content -->

            <?php

                include 'core/footer.php';

            ?>
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

    <!--start back-to-top-->
    <button onclick="topFunction()" class="btn btn-danger btn-icon" id="back-to-top">
        <i class="ri-arrow-up-line"></i>
    </button>
    <!--end back-to-top-->

    <!--preloader-->
    <div id="preloader">
        <div id="status">
            <div class="spinner-border text-primary avatar-sm" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>
    </div>

    <!-- Theme Settings -->
    <?php

        include 'core/theme_setting.php';

    ?>

    <!-- JAVASCRIPT -->
    <?php

        include 'core/bottom_js.php';

    ?>

    <!-- profile-setting init js -->
    <script src="assets/js/pages/profile-setting.init.js"></script>
    <!-- password-addon init -->
    <script src="assets/js/pages/passowrd-create.init.js"></script>
    
</body>

</html>
