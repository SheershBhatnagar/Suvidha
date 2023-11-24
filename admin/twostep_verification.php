<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">

<?php

    session_start();
    if(($_SESSION['uid'] ?? null) != null)
    {
        header('Location: index.php');
    }

    $pageName = "Verify Email";

    include 'core/head.php';
    include 'constants/constants.php';

    $email = $_SESSION['email'];
    $code = $_SESSION['code'];

    $isError = $_GET['isError'] ?? 0;
    $error = $_GET['error'] ?? "";

    if(isset($_POST['submit']))
    {
        $codeInput = $_POST['codeInput'];

        if($code == $codeInput)
        {
            include '../api/conn.php';

            $sql = "update login set is_verified = 1 where email = '$email'";

            if(mysqli_query($conn, $sql))
            {
                header('Location: signin.php?isMessage=1&message=Account verified successfully!, please login!');
            }
            else
            {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
        }
        else
        {
            $isError = 1;
            $error = "Verification Code not matched!";
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
                                        <div class="mb-4">
                                            <div class="avatar-lg mx-auto">
                                                <div class="avatar-title bg-light text-primary display-5 rounded-circle">
                                                    <i class="ri-mail-line"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-muted text-center mx-lg-3">
                                            <h4 class="">Verify Your Email</h4>
                                            <p>Please enter the 6 digit code sent to <span class="fw-semibold"><?php echo $email; ?></span></p>
                                        </div>

                                        <div class="mt-4">
                                            <form autocomplete="off" method="post" action="twostep_verification.php">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="mb-3">
                                                            <input name="codeInput" required type="number" class="form-control form-control-lg bg-light border-secondary text-center" maxLength="6">
                                                        </div>
                                                    </div><!-- end col -->
                                                </div>

                                                <div class="mt-3">
                                                    <button name="submit" type="submit" class="btn btn-success w-100">Verify</button>
                                                </div>

                                            </form>

                                            <?php

                                                if($isError == 1)
                                                {
                                                    echo '<div class="alert alert-danger alert-dismissible alert-label-icon rounded-label fade show mt-4" role="alert">
                                                            <i class="ri-error-warning-line label-icon"></i>'.$error.'
                                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                                        </div>';
                                                }

                                            ?>

                                        </div>

                                        <div class="mt-5 text-center">
                                            <p class="mb-0">Didn't receive a code ? <a href="twostep_verification.php?email='<?php echo $email; ?>'" class="fw-semibold text-primary text-decoration-underline">Resend</a> </p>
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

    <!-- two-step-verification js -->
    <script src="assets/js/pages/two-step-verification.init.js"></script>

</body>

</html>
