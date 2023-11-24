<!doctype html>

<?php

    if(isset($_POST['submit']) || ($_SESSION['role'] ?? 0) == 0)
    {
        session_start();
        $email = $_SESSION['email'];

        session_unset();
        session_destroy();

        header('Location: mail.php?logout='.$email);
    }
    else
    {
        header('Location: index.php');
    }

    $pageName = "Logout";
    
    include 'core/head.php';
    include 'constants/constants.php';

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
                                    <div class="p-lg-5 p-4 text-center">
                                        <lord-icon src="https://cdn.lordicon.com/hzomhqxz.json" trigger="loop" colors="primary:#405189,secondary:#08a88a" style="width:180px;height:180px"></lord-icon>

                                        <div class="mt-4 pt-2">
                                            <h5>You are Logged Out</h5>
                                            <p class="text-muted">Thank you for using <span class="fw-semibold"><?php print($foundationName); ?></span> admin dashboard</p>
                                            <div class="mt-4">
                                                <a href="signin.php" class="btn btn-success w-100">Sign In</a>
                                            </div>
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

</body>

</html>