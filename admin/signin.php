<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">

<?php

    session_start();
    if(($_SESSION['uid'] ?? null) != null)
    {
        header('Location: index.php');
    }

    $pageName = "Sign In";
    
    include 'core/head.php';
    include 'constants/constants.php';

    $isError = $_GET['isError'] ?? 0;
    $error = $_GET['error'] ?? "";

    $isMessage = $_GET['isMessage'] ?? 0;
    $message = $_GET['message'] ?? "";

?>

<body>

    <!-- auth-page wrapper -->
    <div class="auth-page-wrapper auth-bg-cover py-5 d-flex justify-content-center align-items-center min-vh-100">
        <div class="bg-overlay"></div>
        <!-- auth-page content -->
        <div class="auth-page-content overflow-hidden pt-lg-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card overflow-hidden">
                            <div class="row g-0">
                                
                                <?php

                                    include 'core/auth_banner.php';

                                ?>
                                <!-- end col -->

                                <div class="col-lg-6">
                                    <div class="p-lg-5 p-4">
                                        <div>
                                            <h5 class="text-primary">Welcome Back !</h5>
                                            <p class="text-muted">Sign in to continue to Dashboard.</p>
                                        </div>

                                        <div class="mt-4">
                                            <form method="POST" action="api/sign_in.php">

                                                <div class="mb-3">
                                                    <label for="username" class="form-label">Email</label>
                                                    <input name="email" type="text" class="form-control" id="username" placeholder="Enter email" required>
                                                </div>

                                                <div class="mb-3">
                                                    <label class="form-label" for="confirm-password-input">Password</label>
                                                    <div class="position-relative auth-pass-inputgroup mb-3">
                                                        <input name="pass" type="password" class="form-control pe-5 password-input" onpaste="return false" placeholder="Enter password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>
                                                        <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon" type="button" id="confirm-password-input"><i class="ri-eye-fill align-middle"></i></button>
                                                    </div>
                                                </div>

                                                <div class="float-end mb-4">
                                                    <a href="forgot_password.php" class="text-muted">Forgot password?</a>
                                                </div>

                                                <div class="mt-4">
                                                    <button name="submit" class="btn btn-success w-100" type="submit">Sign In</button>
                                                </div>

                                            </form>

                                            <!-- Error -->
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

                                        <div class="mt-5 text-center">
                                            <p class="mb-0">Don't have an account ? <a href="signup.php" class="fw-semibold text-primary text-decoration-underline"> Signup</a> </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- end col -->
                            </div>
                            <!-- end row -->
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->

                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end auth page content -->

        <!-- footer -->
        <?php

            include 'core/auth_footer.php';

        ?>
        <!-- end Footer -->
    </div>
    <!-- end auth-page-wrapper -->

    <!-- JAVASCRIPT -->
    <?php

        include 'core/bottom_js.php';

    ?>

    <!-- password-addon init -->
    <script src="assets/js/pages/passowrd-create.init.js"></script>
    
</body>

</html>