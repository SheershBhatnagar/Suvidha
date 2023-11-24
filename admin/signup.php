<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">

<?php

    session_start();
    if(($_SESSION['uid'] ?? null) != null)
    {
        header('Location: index.php');
    }

    $pageName = "Sign Up";
    
    include 'core/head.php';

    $isError = $_GET['isError'] ?? 0;
    $error = $_GET['error'] ?? "";

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
                        <div class="card overflow-hidden m-0">
                            <div class="row justify-content-center g-0">
                                
                                <?php

                                    include 'core/auth_banner.php';

                                ?>

                                <div class="col-lg-6">
                                    <div class="p-lg-5 p-4">
                                        <div>
                                            <h5 class="text-primary">Register Account</h5>
                                            <p class="text-muted">Create your Suvidha Foundation account now.</p>
                                        </div>

                                        <div class="mt-4">
                                            <form class="needs-validation" action="api/sign_up.php" method="POST">

                                                <div class="mb-3">
                                                    <label for="useremail" class="form-label">Email <span class="text-danger">*</span></label>
                                                    <input name="email" type="email" class="form-control" id="useremail" placeholder="Enter email address" required>
                                                    <div class="invalid-feedback">
                                                        Please enter email
                                                    </div>
                                                </div>

                                                <div class="mb-3">
                                                    <label for="username" class="form-label">First Name <span class="text-danger">*</span></label>
                                                    <input name="fname" type="text" class="form-control" id="username" placeholder="Enter first name" required>
                                                    <div class="invalid-feedback">
                                                        Please enter first name
                                                    </div>
                                                </div>

                                                <div class="mb-3">
                                                    <label for="username" class="form-label">Last Name</label>
                                                    <input name="lname" type="text" class="form-control" id="username" placeholder="Enter last name">
                                                    <div class="invalid-feedback">
                                                        Please enter last name
                                                    </div>
                                                </div>

                                                <div class="mb-3">
                                                    <label class="form-label" for="password-input">Password <span class="text-danger">*</span></label>
                                                    <div class="position-relative auth-pass-inputgroup">
                                                        <input name="pass" type="password" class="form-control pe-5 password-input" onpaste="return false" placeholder="Enter password" id="password-input" aria-describedby="passwordInput" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>
                                                        <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon" type="button" id="password-addon"><i class="ri-eye-fill align-middle"></i></button>
                                                        <div class="invalid-feedback">
                                                            Please enter password
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="mb-3">
                                                    <label class="form-label" for="confirm-password-input">Confirm Password</label>
                                                    <div class="position-relative auth-pass-inputgroup mb-3">
                                                        <input name="cpass" type="password" class="form-control pe-5 password-input" onpaste="return false" placeholder="Enter Confirm password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>
                                                        <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon" type="button" id="confirm-password-input"><i class="ri-eye-fill align-middle"></i></button>
                                                    </div>
                                                </div>

                                                <div class="mb-4">
                                                    <p class="mb-0 fs-12 text-muted fst-italic">By registering you agree to the Suvidha Foundation <a href="#" class="text-primary text-decoration-underline fst-normal fw-medium">Terms of Use</a></p>
                                                </div>

                                                <div id="password-contain" class="p-3 bg-light mb-2 rounded">
                                                    <h5 class="fs-13">Password must contain:</h5>
                                                    <p id="pass-length" class="invalid fs-12 mb-2">Minimum <b>8 characters</b></p>
                                                    <p id="pass-lower" class="invalid fs-12 mb-2">At <b>lowercase</b> letter (a-z)</p>
                                                    <p id="pass-upper" class="invalid fs-12 mb-2">At least <b>uppercase</b> letter (A-Z)</p>
                                                    <p id="pass-number" class="invalid fs-12 mb-0">A least <b>number</b> (0-9)</p>
                                                </div>

                                                <div class="mt-4">
                                                    <button name="submit" class="btn btn-success w-100" type="submit">Sign Up</button>
                                                </div>

                                            </form>

                                            <?php

                                                if($isError)
                                                {
                                                    echo '<div class="alert alert-danger alert-dismissible alert-label-icon rounded-label fade show mt-4" role="alert">
                                                            <i class="ri-error-warning-line label-icon"></i>'.$error.'
                                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                                        </div>';
                                                }

                                            ?>

                                        </div>

                                        <div class="mt-5 text-center">
                                            <p class="mb-0">Already have an account ? <a href="signin.php" class="fw-semibold text-primary text-decoration-underline"> Signin</a> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
