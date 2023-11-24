<!doctype html>
<html lang="en" data-layout="vertical" data-bs-theme="light" data-topbar="light" data-sidebar="dark" data-sidebar-size="sm-hover" data-sidebar-image="img-1" data-preloader="disable">

<?php

    session_start();
    if($_SESSION['uid'] == null)
    {
        header('Location: signin.php');
    }

    $pageName = "Dashboard - Contact Us Messages";

    include 'core/head.php';
    include 'constants/constants.php';

    $_SESSION['page_contact_unres'] = $_GET['page_contact_unres'] ?? 1;
    $_SESSION['page_contact_res'] = $_GET['page_contact_res'] ?? 1;

?>

<body>

    <!-- Begin page -->
    <div id="layout-wrapper">

        <!-- header start -->
        <?php

            $headerName = "Contact Us Messages";

            include 'core/header.php';

        ?>
        <!-- header end -->

        <!-- removeNotificationModal -->
        <div id="removeNotificationModal" class="modal fade zoomIn" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="NotificationModalbtn-close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mt-2 text-center">
                            <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop" colors="primary:#f7b84b,secondary:#f06548" style="width:100px;height:100px"></lord-icon>
                            <div class="mt-4 pt-2 fs-15 mx-4 mx-sm-5">
                                <h4>Are you sure ?</h4>
                                <p class="text-muted mx-4 mb-0">Are you sure you want to remove this Notification ?</p>
                            </div>
                        </div>
                        <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                            <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn w-sm btn-danger" id="delete-notification">Yes, Delete It!</button>
                        </div>
                    </div>

                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
        <!-- ========== App Menu ========== -->
        <?php

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

                    <div class="row">
                        <div class="col">

                            <div class="h-100">
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="card">
                                            <div class="card-header align-items-center d-flex">
                                                <h4 class="card-title mb-0 flex-grow-1">Unresolved</h4>
                                            </div><!-- end card header -->

                                            <div class="card-body">
                                                <div class="table-responsive table-card">
                                                    <table class="table table-borderless table-centered align-middle table-nowrap mb-0">
                                                        <thead class="text-muted table-light">
                                                            <tr>
                                                                <th scope="col">Message ID</th>
                                                                <th scope="col">Name</th>
                                                                <th scope="col">Email</th>
                                                                <th scope="col">Phone</th>
                                                                <th scope="col">Message</th>
                                                                <th scope="col">Messaged At</th>
                                                                <th scope="col">Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>

                                                            <?php

                                                                include 'api/contact_us_functions/unresolved_contact_us_message.php';

                                                                while($row = mysqli_fetch_assoc($result_unres)) {

                                                                    $message_id = $row['contact_id'];

                                                                    // Button Constants
                                                                    $btnResolved = '<a href="api/contact_us_functions/contact_us_functions.php?message_id='.$message_id.'&resolve=1" class="btn btn-sm btn-success" style="margin-right: 5px;">Resolve</a>';

                                                                    echo '<tr>
                                                                        <td>'.$message_id.'</td>
                                                                        <td>'.$row["fname"].' '.$row["lname"].'</td>
                                                                        <td>'.$row["email"].'</td>
                                                                        <td>'.$row["phone"].'</td>
                                                                        <td>'.$row["message"].'</td>
                                                                        <td>'.$row["messaged_at"].'</td>
                                                                        <td>
                                                                            <div>
                                                                                '.$btnResolved.'
                                                                            </div>
                                                                        </td>
                                                                    </tr>';
                                                                }

                                                            ?>
                                                            <!-- end tr -->
                                                        </tbody><!-- end tbody -->
                                                    </table><!-- end table -->
                                                </div>

                                                <div class="align-items-center mt-4 pt-2 justify-content-between row text-center text-sm-start" style="vertical-align: bottom;">
                                                    <div class="col-sm">
                                                        <div class="text-muted">
                                                            Showing <span class="fw-semibold"><?php echo $page_results_unres; ?></span> of <span class="fw-semibold"><?php echo $rows_unres; ?></span> Results
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-auto  mt-3 mt-sm-0">
                                                        <ul class="pagination pagination-separated pagination-sm mb-0 justify-content-center">
                                                            
                                                        <?php

                                                            if($_SESSION['page_contact_unres'] > 1)
                                                            {
                                                                echo '
                                                                <li class="page-item">
                                                                    <a href="contact_us_messages.php?page_contact_unres='.($_SESSION['page_contact_unres'] - 1).'" class="page-link"><i class="ri-arrow-left-line"></i></a>
                                                                </li>
                                                                ';
                                                            }

                                                            if($_SESSION['page_contact_unres'] > 3)
                                                            {
                                                                echo '
                                                                    <li class="page-item">
                                                                        <a href="contact_us_messages.php?page_contact_unres=1" class="page-link">1</a>
                                                                    </li>
                                                                    <li class="page-item disabled">
                                                                        <a href="#" class="page-link">...</a>
                                                                    </li>
                                                                    ';
                                                            }

                                                            if($_SESSION['page_contact_unres'] - 2 > 0)
                                                            {
                                                                echo '
                                                                    <li class="page-item">
                                                                        <a href="contact_us_messages.php?page_contact_unres='.($_SESSION['page_contact_unres'] - 2).'" class="page-link">'.($_SESSION['page_contact_unres'] - 2).'</a>
                                                                    </li>
                                                                    ';
                                                            }

                                                            if($_SESSION['page_contact_unres'] - 1 > 0)
                                                            {
                                                                echo '
                                                                    <li class="page-item">
                                                                        <a href="contact_us_messages.php?page_contact_unres='.($_SESSION['page_contact_unres'] - 1).'" class="page-link">'.($_SESSION['page_contact_unres'] - 1).'</a>
                                                                    </li>
                                                                    ';
                                                            }

                                                            echo '
                                                                <li class="page-item active">
                                                                    <a href="contact_us_messages.php?page_contact_unres='.$_SESSION['page_contact_unres'].'" class="page-link">'.$_SESSION['page_contact_unres'].'</a>
                                                                </li>
                                                                ';

                                                            if($_SESSION['page_contact_unres'] + 1 < $total_pages_unres + 1)
                                                            {
                                                                echo '
                                                                    <li class="page-item">
                                                                        <a href="contact_us_messages.php?page_contact_unres='.($_SESSION['page_contact_unres'] + 1).'" class="page-link">'.($_SESSION['page_contact_unres'] + 1).'</a>
                                                                    </li>
                                                                    ';
                                                            }

                                                            if($_SESSION['page_contact_unres'] + 2 < $total_pages_unres + 1)
                                                            {
                                                                echo '
                                                                    <li class="page-item">
                                                                        <a href="contact_us_messages.php?page_contact_unres='.($_SESSION['page_contact_unres'] + 2).'" class="page-link">'.($_SESSION['page_contact_unres'] + 2).'</a>
                                                                    </li>
                                                                    ';
                                                            }

                                                            if($_SESSION['page_contact_unres'] < $total_pages_unres - 2)
                                                            {
                                                                echo '
                                                                    <li class="page-item disabled">
                                                                        <a href="#" class="page-link">...</a>
                                                                    </li>
                                                                    <li class="page-item">
                                                                        <a href="contact_us_messages.php?page_contact_unres='.$total_pages_unres.'" class="page-link">'.$total_pages_unres.'</a>
                                                                    </li>
                                                                    ';
                                                            }

                                                            if($_SESSION['page_contact_unres'] < $total_pages_unres)
                                                            {
                                                                echo '
                                                                    <li class="page-item">
                                                                        <a href="contact_us_messages.php?page_contact_unres='.($_SESSION['page_contact_unres'] + 1).'" class="page-link"><i class="ri-arrow-right-line"></i></a>
                                                                    </li>
                                                                    ';
                                                            }

                                                        ?>

                                                        </ul>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- end row-->

                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="card">
                                            <div class="card-header align-items-center d-flex">
                                                <h4 class="card-title mb-0 flex-grow-1">Resolved</h4>
                                            </div><!-- end card header -->

                                            <div class="card-body">
                                                <div class="table-responsive table-card">
                                                    <table class="table table-borderless table-centered align-middle table-nowrap mb-0">
                                                        <thead class="text-muted table-light">
                                                            <tr>
                                                                <th scope="col">Message ID</th>
                                                                <th scope="col">Name</th>
                                                                <th scope="col">Email</th>
                                                                <th scope="col">Phone</th>
                                                                <th scope="col">Message</th>
                                                                <th scope="col">Messaged At</th>
                                                                <th scope="col">Resolved At</th>
                                                                <th scope="col">Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>

                                                            <?php

                                                                include 'api/contact_us_functions/resolved_contact_us_message.php';

                                                                while($row = mysqli_fetch_assoc($result_res)) {

                                                                    $message_id = $row['contact_id'];

                                                                    // Button Constants
                                                                    $btnUnresolved = '<a href="api/contact_us_functions/contact_us_functions.php?message_id='.$message_id.'&unresolve=0" class="btn btn-sm btn-danger" style="margin-right: 5px;">Un Resolve</a>';

                                                                    echo '<tr>
                                                                        <td>'.$message_id.'</td>
                                                                        <td>'.$row["fname"].' '.$row["lname"].'</td>
                                                                        <td>'.$row["email"].'</td>
                                                                        <td>'.$row["phone"].'</td>
                                                                        <td>'.$row["message"].'</td>
                                                                        <td>'.$row["messaged_at"].'</td>
                                                                        <td>'.$row["resolved_at"].'</td>
                                                                        <td>
                                                                            <div>
                                                                                '.$btnUnresolved.'
                                                                            </div>
                                                                        </td>
                                                                    </tr>';
                                                                }

                                                            ?>
                                                            <!-- end tr -->
                                                        </tbody><!-- end tbody -->
                                                    </table><!-- end table -->
                                                </div>

                                                <div class="align-items-center mt-4 pt-2 justify-content-between row text-center text-sm-start" style="vertical-align: bottom;">
                                                    <div class="col-sm">
                                                        <div class="text-muted">
                                                            Showing <span class="fw-semibold"><?php echo $page_results_res; ?></span> of <span class="fw-semibold"><?php echo $rows_res; ?></span> Results
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-auto  mt-3 mt-sm-0">
                                                        <ul class="pagination pagination-separated pagination-sm mb-0 justify-content-center">
                                                            
                                                        <?php

                                                            if($_SESSION['page_contact_res'] > 1)
                                                            {
                                                                echo '
                                                                <li class="page-item">
                                                                    <a href="contact_us_messages.php?page_contact_res='.($_SESSION['page_contact_res'] - 1).'" class="page-link"><i class="ri-arrow-left-line"></i></a>
                                                                </li>
                                                                ';
                                                            }

                                                            if($_SESSION['page_contact_res'] > 3)
                                                            {
                                                                echo '
                                                                    <li class="page-item">
                                                                        <a href="contact_us_messages.php?page_contact_res=1" class="page-link">1</a>
                                                                    </li>
                                                                    <li class="page-item disabled">
                                                                        <a href="#" class="page-link">...</a>
                                                                    </li>
                                                                    ';
                                                            }

                                                            if($_SESSION['page_contact_res'] - 2 > 0)
                                                            {
                                                                echo '
                                                                    <li class="page-item">
                                                                        <a href="contact_us_messages.php?page_contact_res='.($_SESSION['page_contact_res'] - 2).'" class="page-link">'.($_SESSION['page_contact_res'] - 2).'</a>
                                                                    </li>
                                                                    ';
                                                            }

                                                            if($_SESSION['page_contact_res'] - 1 > 0)
                                                            {
                                                                echo '
                                                                    <li class="page-item">
                                                                        <a href="contact_us_messages.php?page_contact_res='.($_SESSION['page_contact_res'] - 1).'" class="page-link">'.($_SESSION['page_contact_res'] - 1).'</a>
                                                                    </li>
                                                                    ';
                                                            }

                                                            echo '
                                                                <li class="page-item active">
                                                                    <a href="contact_us_messages.php?page_contact_res='.$_SESSION['page_contact_res'].'" class="page-link">'.$_SESSION['page_contact_res'].'</a>
                                                                </li>
                                                                ';

                                                            if($_SESSION['page_contact_res'] + 1 < $total_pages_res + 1)
                                                            {
                                                                echo '
                                                                    <li class="page-item">
                                                                        <a href="contact_us_messages.php?page_contact_res='.($_SESSION['page_contact_res'] + 1).'" class="page-link">'.($_SESSION['page_contact_res'] + 1).'</a>
                                                                    </li>
                                                                    ';
                                                            }

                                                            if($_SESSION['page_contact_res'] + 2 < $total_pages_res + 1)
                                                            {
                                                                echo '
                                                                    <li class="page-item">
                                                                        <a href="contact_us_messages.php?page_contact_res='.($_SESSION['page_contact_res'] + 2).'" class="page-link">'.($_SESSION['page_contact_res'] + 2).'</a>
                                                                    </li>
                                                                    ';
                                                            }

                                                            if($_SESSION['page_contact_res'] < $total_pages_res - 2)
                                                            {
                                                                echo '
                                                                    <li class="page-item disabled">
                                                                        <a href="#" class="page-link">...</a>
                                                                    </li>
                                                                    <li class="page-item">
                                                                        <a href="contact_us_messages.php?page_contact_res='.$total_pages_res.'" class="page-link">'.$total_pages_res.'</a>
                                                                    </li>
                                                                    ';
                                                            }

                                                            if($_SESSION['page_contact_res'] < $total_pages_res)
                                                            {
                                                                echo '
                                                                    <li class="page-item">
                                                                        <a href="contact_us_messages.php?page_contact_res='.($_SESSION['page_contact_res'] + 1).'" class="page-link"><i class="ri-arrow-right-line"></i></a>
                                                                    </li>
                                                                    ';
                                                            }

                                                        ?>

                                                        </ul>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- end row-->
                            </div> <!-- end .h-100-->

                            
                        </div> <!-- end col -->
                    </div>
                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

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

</body>

</html>
