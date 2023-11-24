<!doctype html>

<?php

    session_start();
    if($_SESSION['uid'] == null)
    {
        header('Location: signin.php');
    }

    if(!$_SESSION['role'] == '2' || !$_SESSION['role'] == '1')
    {
        header('Location: index.php');
    }

    $pageName = "Dashboard - Staff Approval";

    include 'core/head.php';
    include 'constants/constants.php';

    $_SESSION['page_staff_unapp'] = $_GET['page_staff_unapp'] ?? 1;
    $_SESSION['page_staff_app'] = $_GET['page_staff_app'] ?? 1;
    $_SESSION['page_staff_rej'] = $_GET['page_staff_rej'] ?? 1;

?>

<body>

    <!-- Begin page -->
    <div id="layout-wrapper">

        <!-- header start -->
        <?php

            $headerName = "Staff Approval";

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
                                                <h4 class="card-title mb-0 flex-grow-1">Waiting</h4>
                                            </div><!-- end card header -->

                                            <div class="card-body">
                                                <div class="table-responsive table-card">
                                                    <table class="table table-borderless table-centered align-middle table-nowrap mb-0">
                                                        <thead class="text-muted table-light">
                                                            <tr>
                                                                <th scope="col">User ID</th>
                                                                <th scope="col">Name</th>
                                                                <th scope="col">Email</th>
                                                                <th scope="col">Role</th>
                                                                <th scope="col">Verified</th>
                                                                <th scope="col">Last Logged In At</th>
                                                                <th scope="col">Actions</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>

                                                            <?php

                                                                include 'api/staff_approval/unapproved_staff_approval.php';

                                                                while($row = mysqli_fetch_assoc($result_unapp)) {

                                                                    $uid = $row['uid'];
                                                                    $email = $row['email'];
                                                                    $verified = $row['is_verified'];

                                                                    if($verified == 1)
                                                                    {
                                                                        $verified = '<i class="ri-checkbox-circle-fill"></i>';
                                                                    }
                                                                    else
                                                                    {
                                                                        $verified = '<i class="ri-checkbox-blank-circle-line"></i>';
                                                                    }

                                                                    // Button Constants
                                                                    $btnApprove = '<a href="api/staff_approval/staff_approval_functions.php?approve='.$email.'" class="btn btn-sm btn-success" style="margin-right: 5px;">Approve</a>';
                                                                    $btnUnapprove = '<a href="api/staff_approval/staff_approval_functions.php?unapprove='.$email.'" class="btn btn-sm btn-danger" style="margin-right: 5px;">Reject</a>';

                                                                    echo '<tr>
                                                                        <td>'.$uid.'</td>
                                                                        <td>'.$row["fname"].' '.$row["lname"].'</td>
                                                                        <td>'.$row["email"].'</td>
                                                                        <td>'.$internshipWaiting.'</td>
                                                                        <td>'.$verified.'</td>
                                                                        <td>'.$row["last_login_at"].'</td>
                                                                        <td>
                                                                            <div>
                                                                                '.$btnApprove.$btnUnapprove.'
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
                                                            Showing <span class="fw-semibold"><?php echo $page_results_unapp; ?></span> of <span class="fw-semibold"><?php echo $rows_unapp; ?></span> Results
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-auto  mt-3 mt-sm-0">
                                                        <ul class="pagination pagination-separated pagination-sm mb-0 justify-content-center">
                                                            
                                                        <?php

                                                            if($_SESSION['page_staff_unapp'] > 1)
                                                            {
                                                                echo '
                                                                <li class="page-item">
                                                                    <a href="staff_approval.php?page_staff_unapp='.($_SESSION['page_staff_unapp'] - 1).'" class="page-link"><i class="ri-arrow-left-line"></i></a>
                                                                </li>
                                                                ';
                                                            }

                                                            if($_SESSION['page_staff_unapp'] > 3)
                                                            {
                                                                echo '
                                                                    <li class="page-item">
                                                                        <a href="staff_approval.php?page_staff_unapp=1" class="page-link">1</a>
                                                                    </li>
                                                                    <li class="page-item disabled">
                                                                        <a href="#" class="page-link">...</a>
                                                                    </li>
                                                                    ';
                                                            }

                                                            if($_SESSION['page_staff_unapp'] - 2 > 0)
                                                            {
                                                                echo '
                                                                    <li class="page-item">
                                                                        <a href="staff_approval.php?page_staff_unapp='.($_SESSION['page_staff_unapp'] - 2).'" class="page-link">'.($_SESSION['page_staff_unapp'] - 2).'</a>
                                                                    </li>
                                                                    ';
                                                            }

                                                            if($_SESSION['page_staff_unapp'] - 1 > 0)
                                                            {
                                                                echo '
                                                                    <li class="page-item">
                                                                        <a href="staff_approval.php?page_staff_unapp='.($_SESSION['page_staff_unapp'] - 1).'" class="page-link">'.($_SESSION['page_staff_unapp'] - 1).'</a>
                                                                    </li>
                                                                    ';
                                                            }

                                                            echo '
                                                                <li class="page-item active">
                                                                    <a href="staff_approval.php?page_staff_unapp='.$_SESSION['page_staff_unapp'].'" class="page-link">'.$_SESSION['page_staff_unapp'].'</a>
                                                                </li>
                                                                ';

                                                            if($_SESSION['page_staff_unapp'] + 1 < $total_pages_unapp + 1)
                                                            {
                                                                echo '
                                                                    <li class="page-item">
                                                                        <a href="staff_approval.php?page_staff_unapp='.($_SESSION['page_staff_unapp'] + 1).'" class="page-link">'.($_SESSION['page_staff_unapp'] + 1).'</a>
                                                                    </li>
                                                                    ';
                                                            }

                                                            if($_SESSION['page_staff_unapp'] + 2 < $total_pages_unapp + 1)
                                                            {
                                                                echo '
                                                                    <li class="page-item">
                                                                        <a href="staff_approval.php?page_staff_unapp='.($_SESSION['page_staff_unapp'] + 2).'" class="page-link">'.($_SESSION['page_staff_unapp'] + 2).'</a>
                                                                    </li>
                                                                    ';
                                                            }

                                                            if($_SESSION['page_staff_unapp'] < $total_pages_unapp - 2)
                                                            {
                                                                echo '
                                                                    <li class="page-item disabled">
                                                                        <a href="#" class="page-link">...</a>
                                                                    </li>
                                                                    <li class="page-item">
                                                                        <a href="staff_approval.php?page_staff_unapp='.$total_pages_unapp.'" class="page-link">'.$total_pages_unapp.'</a>
                                                                    </li>
                                                                    ';
                                                            }

                                                            if($_SESSION['page_staff_unapp'] < $total_pages_unapp)
                                                            {
                                                                echo '
                                                                    <li class="page-item">
                                                                        <a href="staff_approval.php?page_staff_unapp='.($_SESSION['page_staff_unapp'] + 1).'" class="page-link"><i class="ri-arrow-right-line"></i></a>
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
                                                <h4 class="card-title mb-0 flex-grow-1">Approved</h4>
                                            </div><!-- end card header -->

                                            <div class="card-body">
                                                <div class="table-responsive table-card">
                                                    <table class="table table-borderless table-centered align-middle table-nowrap mb-0">
                                                        <thead class="text-muted table-light">
                                                            <tr>
                                                                <th scope="col">User ID</th>
                                                                <th scope="col">Name</th>
                                                                <th scope="col">Email</th>
                                                                <th scope="col">Role</th>
                                                                <th scope="col">Verified</th>
                                                                <th scope="col">Last Logged In At</th>
                                                                <th scope="col">Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>

                                                            <?php

                                                                include 'api/staff_approval/approved_staff_approval.php';

                                                                while($row = mysqli_fetch_assoc($result_app)) {

                                                                    $uid = $row['uid'];
                                                                    $email = $row['email'];
                                                                    $verified = $row['is_verified'];
                                                                    $role = $row['role'];
                                                                    $roleDropdown = '';

                                                                    if($verified == 1)
                                                                    {
                                                                        $verified = '<i class="ri-checkbox-circle-fill"></i>';
                                                                    }
                                                                    else
                                                                    {
                                                                        $verified = '<i class="ri-checkbox-blank-circle-line"></i>';
                                                                    }

                                                                    if($role == 1)
                                                                    {
                                                                        $role = 'Assistant';
                                                                    }
                                                                    else if($role == 2)
                                                                    {
                                                                        $role = 'HR';
                                                                    }
                                                                    else if($role == 3)
                                                                    {
                                                                        $role = 'Founder';
                                                                    }

                                                                    $roleDropdownHR = '
                                                                                        <div class="btn-group">
                                                                                            <button type="button" class="btn btn-sm btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">'.$role.'</button>
                                                                                            <div class="dropdown-menu">
                                                                                                <a class="dropdown-item" href="api/staff_approval/staff_approval_functions.php?approve='.$email.'">Assistant</a>
                                                                                                <a class="dropdown-item" href="api/staff_approval/staff_approval_functions.php?hr='.$email.'">HR</a>
                                                                                            </div>
                                                                                        </div>';

                                                                    $roleDropdownFounder = '
                                                                                            <div class="btn-group">
                                                                                                <button type="button" class="btn btn-sm btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">'.$role.'</button>
                                                                                                <div class="dropdown-menu">
                                                                                                    <a class="dropdown-item" href="api/staff_approval/staff_approval_functions.php?approve='.$email.'">Assistant</a>
                                                                                                    <a class="dropdown-item" href="api/staff_approval/staff_approval_functions.php?hr='.$email.'">HR</a>
                                                                                                    <div class="dropdown-divider"></div>
                                                                                                    <a class="dropdown-item" href="api/staff_approval/staff_approval_functions.php?founder='.$email.'">Founder</a>
                                                                                                </div>
                                                                                            </div>';

                                                                    if($_SESSION['role'] == 3)
                                                                    {
                                                                        $roleDropdown = $roleDropdownFounder;
                                                                    }
                                                                    else if($_SESSION['role'] == 2)
                                                                    {
                                                                        $roleDropdown = $roleDropdownHR;
                                                                    }
                                                                    else
                                                                    {
                                                                        $roleDropdown = '';
                                                                    }

                                                                    // Button Constants
                                                                    $btnUnapprove = '<a href="api/staff_approval/staff_approval_functions.php?unapprove='.$email.'" class="btn btn-sm btn-danger" style="margin-right: 5px;">Reject</a>';

                                                                    echo '<tr>
                                                                        <td>'.$uid.'</td>
                                                                        <td>'.$row["fname"].' '.$row["lname"].'</td>
                                                                        <td>'.$row["email"].'</td>
                                                                        <td>'.$roleDropdown.'</td>
                                                                        <td>'.$verified.'</td>
                                                                        <td>'.$row["last_login_at"].'</td>
                                                                        <td>
                                                                            <div>
                                                                                '.$btnUnapprove.'
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
                                                            Showing <span class="fw-semibold"><?php echo $page_results_app; ?></span> of <span class="fw-semibold"><?php echo $rows_app; ?></span> Results
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-auto  mt-3 mt-sm-0">
                                                        <ul class="pagination pagination-separated pagination-sm mb-0 justify-content-center">
                                                            
                                                        <?php

                                                            if($_SESSION['page_staff_app'] > 1)
                                                            {
                                                                echo '
                                                                <li class="page-item">
                                                                    <a href="staff_approval.php?page_staff_app='.($_SESSION['page_staff_app'] - 1).'" class="page-link"><i class="ri-arrow-left-line"></i></a>
                                                                </li>
                                                                ';
                                                            }

                                                            if($_SESSION['page_staff_app'] > 3)
                                                            {
                                                                echo '
                                                                    <li class="page-item">
                                                                        <a href="staff_approval.php?page_staff_app=1" class="page-link">1</a>
                                                                    </li>
                                                                    <li class="page-item disabled">
                                                                        <a href="#" class="page-link">...</a>
                                                                    </li>
                                                                    ';
                                                            }

                                                            if($_SESSION['page_staff_app'] - 2 > 0)
                                                            {
                                                                echo '
                                                                    <li class="page-item">
                                                                        <a href="staff_approval.php?page_staff_app='.($_SESSION['page_staff_app'] - 2).'" class="page-link">'.($_SESSION['page_staff_app'] - 2).'</a>
                                                                    </li>
                                                                    ';
                                                            }

                                                            if($_SESSION['page_staff_app'] - 1 > 0)
                                                            {
                                                                echo '
                                                                    <li class="page-item">
                                                                        <a href="staff_approval.php?page_staff_app='.($_SESSION['page_staff_app'] - 1).'" class="page-link">'.($_SESSION['page_staff_app'] - 1).'</a>
                                                                    </li>
                                                                    ';
                                                            }

                                                            echo '
                                                                <li class="page-item active">
                                                                    <a href="staff_approval.php?page_staff_app='.$_SESSION['page_staff_app'].'" class="page-link">'.$_SESSION['page_staff_app'].'</a>
                                                                </li>
                                                                ';

                                                            if($_SESSION['page_staff_app'] + 1 < $total_pages_app + 1)
                                                            {
                                                                echo '
                                                                    <li class="page-item">
                                                                        <a href="staff_approval.php?page_staff_app='.($_SESSION['page_staff_app'] + 1).'" class="page-link">'.($_SESSION['page_staff_app'] + 1).'</a>
                                                                    </li>
                                                                    ';
                                                            }

                                                            if($_SESSION['page_staff_app'] + 2 < $total_pages_app + 1)
                                                            {
                                                                echo '
                                                                    <li class="page-item">
                                                                        <a href="staff_approval.php?page_staff_app='.($_SESSION['page_staff_app'] + 2).'" class="page-link">'.($_SESSION['page_staff_app'] + 2).'</a>
                                                                    </li>
                                                                    ';
                                                            }

                                                            if($_SESSION['page_staff_app'] < $total_pages_app - 2)
                                                            {
                                                                echo '
                                                                    <li class="page-item disabled">
                                                                        <a href="#" class="page-link">...</a>
                                                                    </li>
                                                                    <li class="page-item">
                                                                        <a href="staff_approval.php?page_staff_app='.$total_pages_app.'" class="page-link">'.$total_pages_app.'</a>
                                                                    </li>
                                                                    ';
                                                            }

                                                            if($_SESSION['page_staff_app'] < $total_pages_app)
                                                            {
                                                                echo '
                                                                    <li class="page-item">
                                                                        <a href="staff_approval.php?page_staff_app='.($_SESSION['page_staff_app'] + 1).'" class="page-link"><i class="ri-arrow-right-line"></i></a>
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
                                                <h4 class="card-title mb-0 flex-grow-1">Rejected</h4>
                                            </div><!-- end card header -->

                                            <div class="card-body">
                                                <div class="table-responsive table-card">
                                                    <table class="table table-borderless table-centered align-middle table-nowrap mb-0">
                                                        <thead class="text-muted table-light">
                                                            <tr>
                                                                <th scope="col">User ID</th>
                                                                <th scope="col">Name</th>
                                                                <th scope="col">Email</th>
                                                                <th scope="col">Role</th>
                                                                <th scope="col">Verified</th>
                                                                <th scope="col">Last Logged In At</th>
                                                                <th scope="col">Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>

                                                            <?php

                                                                include 'api/staff_approval/rejected_staff_approval.php';

                                                                while($row = mysqli_fetch_assoc($result_rej)) {

                                                                    $uid = $row['uid'];
                                                                    $email = $row['email'];
                                                                    $verified = $row['is_verified'];

                                                                    if($verified == 1)
                                                                    {
                                                                        $verified = '<i class="ri-checkbox-circle-fill"></i>';
                                                                    }
                                                                    else
                                                                    {
                                                                        $verified = '<i class="ri-checkbox-blank-circle-line"></i>';
                                                                    }

                                                                    // Button Constants
                                                                    $btnApprove = '<a href="api/staff_approval/staff_approval_functions.php?approve='.$email.'" class="btn btn-sm btn-success" style="margin-right: 5px;">Approve</a>';

                                                                    echo '<tr>
                                                                        <td>'.$uid.'</td>
                                                                        <td>'.$row["fname"].' '.$row["lname"].'</td>
                                                                        <td>'.$row["email"].'</td>
                                                                        <td>'.$internshipRejected.'</td>
                                                                        <td>'.$verified.'</td>
                                                                        <td>'.$row["last_login_at"].'</td>
                                                                        <td>
                                                                            <div>
                                                                                '.$btnApprove.'
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
                                                            Showing <span class="fw-semibold"><?php echo $page_results_rej; ?></span> of <span class="fw-semibold"><?php echo $rows_rej; ?></span> Results
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-auto  mt-3 mt-sm-0">
                                                        <ul class="pagination pagination-separated pagination-sm mb-0 justify-content-center">
                                                            
                                                        <?php

                                                            if($_SESSION['page_staff_rej'] > 1)
                                                            {
                                                                echo '
                                                                <li class="page-item">
                                                                    <a href="staff_approval.php?page_staff_rej='.($_SESSION['page_staff_rej'] - 1).'" class="page-link"><i class="ri-arrow-left-line"></i></a>
                                                                </li>
                                                                ';
                                                            }

                                                            if($_SESSION['page_staff_rej'] > 3)
                                                            {
                                                                echo '
                                                                    <li class="page-item">
                                                                        <a href="staff_approval.php?page_staff_rej=1" class="page-link">1</a>
                                                                    </li>
                                                                    <li class="page-item disabled">
                                                                        <a href="#" class="page-link">...</a>
                                                                    </li>
                                                                    ';
                                                            }

                                                            if($_SESSION['page_staff_rej'] - 2 > 0)
                                                            {
                                                                echo '
                                                                    <li class="page-item">
                                                                        <a href="staff_approval.php?page_staff_rej='.($_SESSION['page_staff_rej'] - 2).'" class="page-link">'.($_SESSION['page_staff_rej'] - 2).'</a>
                                                                    </li>
                                                                    ';
                                                            }

                                                            if($_SESSION['page_staff_rej'] - 1 > 0)
                                                            {
                                                                echo '
                                                                    <li class="page-item">
                                                                        <a href="staff_approval.php?page_staff_rej='.($_SESSION['page_staff_rej'] - 1).'" class="page-link">'.($_SESSION['page_staff_rej'] - 1).'</a>
                                                                    </li>
                                                                    ';
                                                            }

                                                            echo '
                                                                <li class="page-item active">
                                                                    <a href="staff_approval.php?page_staff_rej='.$_SESSION['page_staff_rej'].'" class="page-link">'.$_SESSION['page_staff_rej'].'</a>
                                                                </li>
                                                                ';

                                                            if($_SESSION['page_staff_rej'] + 1 < $total_pages_rej + 1)
                                                            {
                                                                echo '
                                                                    <li class="page-item">
                                                                        <a href="staff_approval.php?page_staff_rej='.($_SESSION['page_staff_rej'] + 1).'" class="page-link">'.($_SESSION['page_staff_rej'] + 1).'</a>
                                                                    </li>
                                                                    ';
                                                            }

                                                            if($_SESSION['page_staff_rej'] + 2 < $total_pages_rej + 1)
                                                            {
                                                                echo '
                                                                    <li class="page-item">
                                                                        <a href="staff_approval.php?page_staff_rej='.($_SESSION['page_staff_rej'] + 2).'" class="page-link">'.($_SESSION['page_staff_rej'] + 2).'</a>
                                                                    </li>
                                                                    ';
                                                            }

                                                            if($_SESSION['page_staff_rej'] < $total_pages_rej - 2)
                                                            {
                                                                echo '
                                                                    <li class="page-item disabled">
                                                                        <a href="#" class="page-link">...</a>
                                                                    </li>
                                                                    <li class="page-item">
                                                                        <a href="staff_approval.php?page_staff_rej='.$total_pages_rej.'" class="page-link">'.$total_pages_rej.'</a>
                                                                    </li>
                                                                    ';
                                                            }

                                                            if($_SESSION['page_staff_rej'] < $total_pages_rej)
                                                            {
                                                                echo '
                                                                    <li class="page-item">
                                                                        <a href="staff_approval.php?page_staff_rej='.($_SESSION['page_staff_rej'] + 1).'" class="page-link"><i class="ri-arrow-right-line"></i></a>
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
