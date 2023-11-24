<!doctype html>

<?php

    session_start();

    $pageName = "Forgot Password";

    include 'core/head.php';

    $isError = $_GET['isError'] ?? 0;
    $error = $_GET['error'] ?? "";

    if(isset($_POST['submit']))
    {
        $email = $_SESSION['email'];

        include '../api/conn.php';

        $pass = $_POST['pass'];
        $cpass = $_POST['confirmPass'];

        if($pass == $cpass)
        {
            $newPass = password_hash($pass, PASSWORD_DEFAULT);

            $sql = "UPDATE login SET password = '$newPass' where email = '$email'";

            if(mysqli_query($conn, $sql))
            {
                header('Location: mail.php?passwordChanged='.$email);
            }
            else
            {
                header('Location: forgot_password_s3.php?isError=1&error=Something Went Wrong');
                exit();
            }
        }
        else
        {
            header('Location: forgot_password_s3.php?isError=1&error=New Password and Confirm Password does not matched!');
            exit();
        }
    }

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
                            <div class="row justify-content-center g-0">
                                
                                <?php

                                    include 'core/auth_banner.php';

                                ?>
                                <!-- end col -->

                                <div class="col-lg-6">
                                    <div class="p-lg-5 p-4">
                                        <h5 class="text-primary">Create new password</h5>
                                        <p class="text-muted">Your new password must be different from previous used password.</p>

                                        <div class="p-2">
                                            <form action="forgot_password_s3.php" method="post">
                                                <div class="mb-3">
                                                    <label class="form-label" for="password-input">New Password</label>
                                                    <div class="position-relative auth-pass-inputgroup">
                                                        <input name="pass" type="password" class="form-control pe-5 password-input" onpaste="return false" placeholder="Enter New password" id="password-input" aria-describedby="passwordInput" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>
                                                        <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon" type="button" id="password-addon"><i class="ri-eye-fill align-middle"></i></button>
                                                    </div>
                                                    <div id="passwordInput" class="form-text">Must be at least 8 characters.</div>
                                                </div>

                                                <div id="password-contain" class="p-3 bg-light mb-2 rounded">
                                                    <h5 class="fs-13">Password must contain:</h5>
                                                    <p id="pass-length" class="invalid fs-12 mb-2">Minimum <b>8 characters</b></p>
                                                    <p id="pass-lower" class="invalid fs-12 mb-2">At <b>lowercase</b> letter (a-z)</p>
                                                    <p id="pass-upper" class="invalid fs-12 mb-2">At least <b>uppercase</b> letter (A-Z)</p>
                                                    <p id="pass-number" class="invalid fs-12 mb-0">A least <b>number</b> (0-9)</p>
                                                </div>

                                                <div class="mb-3">
                                                    <label class="form-label" for="confirm-password-input">Confirm New Password</label>
                                                    <div class="position-relative auth-pass-inputgroup mb-3">
                                                        <input name="confirmPass" type="password" class="form-control pe-5 password-input" onpaste="return false" placeholder="Confirm password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>
                                                        <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon" type="button" id="confirm-password-input"><i class="ri-eye-fill align-middle"></i></button>
                                                    </div>
                                                </div>

                                                <div class="mt-4">
                                                    <button name="submit" class="btn btn-success w-100" type="submit">Reset Password</button>
                                                </div>

                                            </form>
                                        </div>

                                        <div class="mt-5 text-center">
                                            <p class="mb-0">Wait, I remember my password... <a href="signin.php" class="fw-semibold text-primary"> Click here</a></p>
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