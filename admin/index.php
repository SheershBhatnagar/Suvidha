<!doctype html>

<?php

    session_start();
    if($_SESSION['uid'] == null)
    {
        header('Location: signin.php');
    }

    $isError = isset($_GET['error']) ? true : false;
    $error = $_GET['error'] ?? '';

    $pageName = "Dashboard - Internship Forms";

    include 'core/head.php';
    include 'constants/constants.php';

    $_SESSION['page'] = $_GET['page'] ?? 1;

    include 'api/internship_functions/internship_forms.php';
    include 'api/internship_functions/internship_functions.php';

?>

<body>

    <!-- Begin page -->
    <div id="layout-wrapper">

        <!-- header start -->
        <?php

            $headerName = "Internship Forms";

            include 'core/header.php';

        ?>
        <!-- header end -->

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

                                        <?php
                                        
                                            if($isError) {
                                                echo '<div class="alert alert-danger alert-dismissible alert-label-icon rounded-label fade show" role="alert">
                                                        <i class="ri-error-warning-line label-icon"></i>'.$error.'
                                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                                    </div>
                                                ';
                                            }

                                        ?>

                                        <div class="card">
                                            <div class="card-body">
                                                <div class="table-responsive table-card">
                                                    <table class="table table-borderless table-centered align-middle table-nowrap mb-0">
                                                        <thead class="text-muted table-light">
                                                            <tr>
                                                                <th scope="col">Form No.</th>
                                                                <th scope="col">Name</th>
                                                                <th scope="col">Email</th>
                                                                <th scope="col">Phone Number</th>
                                                                <th scope="col">WhatsApp Number</th>
                                                                <th scope="col">Course</th>
                                                                <th scope="col">Duration</th>
                                                                <th scope="col">Status</th>
                                                                <th scope="col">Actions</th>
                                                                <th scope="col"></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>

                                                            <?php

                                                                while($row = mysqli_fetch_assoc($result)) 
                                                                {
                                                                    $form_id = $row['form_id'];
                                                                    $doj = $row['doj'];
                                                                    $enddate = $row['enddate'];

                                                                    // Button Constants
                                                                    $btnApprove = '<a href="api/internship_functions/internship_functions.php?approve='.$form_id.'" class="btn btn-sm btn-success" style="margin-right: 5px;">Approve</a>';
                                                                    $btnReject = '<a href="api/internship_functions/internship_functions.php?reject='.$form_id.'" class="btn btn-sm btn-danger">Reject</a>';
                                                                    $btnComplete = '<a href="api/internship_functions/internship_functions.php?complete='.$form_id.'" class="btn btn-sm btn-secondary" style="margin-right: 5px;">Complete</a>';

                                                                    $btnGenerateLetter = '<a href="api/generate_pdf.php?form_no='.$form_id.'&fname='.$row["fname"].'&lname='.$row["lname"].'&course='.$row["course"].'&duration='.$row["duration"].'&doj='.$doj.'&endDate='.$enddate.'" class="btn btn-sm btn-success" style="margin-right: 5px;">Generate Letter</a>';

                                                                    $btnViewLetter = '<a href="view_pdf.php?id='.$form_id.'" target="_blank" class="btn btn-sm btn-primary" style="margin-right: 5px;">View Letter</a>';
                                                                    $btnSendLetter = '<a href="api/internship_functions/internship_functions.php?sendLetter='.$form_id.'&email='.$row["email"].'" class="btn btn-sm btn-success" style="margin-right: 5px;">Send Letter</a>';
                                                                    $btnResendLetter = '<a href="api/internship_functions/internship_functions.php?sendLetter='.$form_id.'&email='.$row["email"].'" class="btn btn-sm btn-primary" style="margin-right: 5px;">Resend Letter</a>';
                                                                    
                                                                    //Dropdown Buttons Constants
                                                                    $btnViewLetterDropdown = '<li><a href="view_pdf.php?id='.$form_id.'" target="_blank" class="dropdown-item"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> View Offer Letter</a></li>';
                                                                    $btnResendLetterDropdown = '<li><a href="" class="dropdown-item"><i class="ri-reply-all-fill align-bottom me-2 text-muted"></i> Resend Letter</a></li>';
                                                                    $btnMarkIncompleteDropdown = '<li><a href="api/internship_functions/internship_functions.php?approve='.$form_id.'" class="dropdown-item"><i class="ri-arrow-go-back-line align-bottom me-2 text-muted"></i> Mark Incomplete</a></li>';
                                                                    $btnRejectDropdown = '<li><a href="api/internship_functions/internship_functions.php?reject='.$form_id.'" class="dropdown-item text-danger"><i class="ri-close-fill align-bottom me-2 text-danger"></i> Reject</a></li>';
                                                                    $btnEditDropdown = '<li class="dropdown-item" data-bs-toggle="modal" data-bs-target="#exampleModalgrid_'.$form_id.'"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</li>';

                                                                    $isDropDown = false;
                                                                    $status = "";
                                                                    $actionButtons = "";
                                                                    $dropdownButtons = "";

                                                                    // Internship Status
                                                                    if($row["internship_status"] == 0) {
                                                                        $status = $internshipWaiting;
                                                                        $actionButtons = $btnApprove.$btnReject;
                                                                        $isDropDown = true;
                                                                        $dropdownButtons = $btnEditDropdown;
                                                                    }
                                                                    else if($row["internship_status"] == 1 && $row["offer_letter"] == null) {
                                                                        $status = $internshipOngoing;
                                                                        $actionButtons = $btnGenerateLetter.$btnReject;
                                                                        $isDropDown = true;
                                                                        $dropdownButtons = $btnEditDropdown;
                                                                    }
                                                                    else if($row["internship_status"] == 1 && $row["offer_letter"] != null && $row["offer_letter_status"] == 0 && $row['letter_viewed_at'] == null) {
                                                                        $status = $internshipOngoing;
                                                                        $actionButtons = $btnViewLetter.$btnReject;
                                                                        $isDropDown = true;
                                                                        $dropdownButtons = $btnEditDropdown;
                                                                    }
                                                                    else if($row["internship_status"] == 1 && $row["offer_letter"] != null && $row["offer_letter_status"] == 0 && $row['letter_viewed_at'] != null) {
                                                                        $status = $internshipOngoing;
                                                                        $actionButtons = $btnSendLetter.$btnReject;
                                                                        $isDropDown = true;
                                                                        $dropdownButtons = $btnEditDropdown.$btnViewLetterDropdown;
                                                                    }
                                                                    else if($row["internship_status"] == 1 && $row["offer_letter"] != null && $row["offer_letter_status"] == 1 && $row['letter_viewed_at'] != null) {
                                                                        $status = $internshipOngoing;
                                                                        $actionButtons = $btnComplete.$btnResendLetter.$btnReject;
                                                                        $isDropDown = true;
                                                                        $dropdownButtons = $btnEditDropdown.$btnViewLetterDropdown;
                                                                    }
                                                                    else if($row["internship_status"] == 2 && $row["offer_letter"] != null && $row["offer_letter_status"] == 1 && $row['letter_viewed_at'] != null) {
                                                                        $status = $internshipCompleted;
                                                                        $actionButtons = $btnResendLetter;
                                                                        $isDropDown = true;
                                                                        $dropdownButtons = $btnEditDropdown.$btnViewLetterDropdown.$btnMarkIncompleteDropdown;
                                                                    }
                                                                    else {
                                                                        $status = $internshipRejected;
                                                                        $actionButtons = $btnApprove;
                                                                        $isDropDown = true;
                                                                        $dropdownButtons = $btnEditDropdown;
                                                                    }

                                                                    echo '<!-- Grids in modals -->
                                                                            <div class="modal fade" id="exampleModalgrid_'.$form_id.'" tabindex="-1" aria-labelledby="exampleModalgridLabel" aria-modal="true" data-bs-backdrop="static">
                                                                                <div class="modal-dialog">
                                                                                    <div class="modal-content">
                                                                                        <div class="modal-header">
                                                                                            <h5 class="modal-title" id="exampleModalgridLabel">'.$row['fname'].' '.$row['lname'].'</h5>
                                                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                                        </div>
                                                                                        <div class="modal-body">
                                                                                            <form action="api/internship_functions/internship_functions.php?edit='.$form_id.'" method="post">
                                                                                                <div class="row g-4">
                                                                                                    <div class="col-lg-6">
                                                                                                        <div>
                                                                                                            <label for="firstName" class="form-label">First Name</label>
                                                                                                            <input type="text" name="fname" class="form-control" id="firstName" placeholder="Enter first name" value="'.$row['fname'].'">
                                                                                                        </div>
                                                                                                    </div><!--end col-->
                                                                                                    <div class="col-lg-6">
                                                                                                        <div>
                                                                                                            <label for="lastName" class="form-label">Last Name</label>
                                                                                                            <input type="text" name="lname" class="form-control" id="lastName" placeholder="Enter last name" value="'.$row['lname'].'">
                                                                                                        </div>
                                                                                                    </div><!--end col-->
                                                                                                    <div class="col-lg-12">
                                                                                                        <div>
                                                                                                            <label for="emailInput" class="form-label">Email</label>
                                                                                                            <input type="email" name="email" class="form-control" id="emailInput" placeholder="Enter your email" value="'.$row['email'].'">
                                                                                                        </div>
                                                                                                    </div><!--end col-->
                                                                                                    <div class="col-lg-6">
                                                                                                        <div>
                                                                                                            <label for="emailInput" class="form-label">Phone Number</label>
                                                                                                            <input type="text" name="phone" class="form-control" id="emailInput" placeholder="Enter phone number" value="'.$row['phone'].'">
                                                                                                        </div>
                                                                                                    </div><!--end col-->
                                                                                                    <div class="col-lg-6">
                                                                                                        <div>
                                                                                                            <label for="emailInput" class="form-label">WhatsApp Number</label>
                                                                                                            <input type="text" name="whatsapp" class="form-control" id="emailInput" placeholder="Enter whatsapp number" value="'.$row['whatsapp'].'">
                                                                                                        </div>
                                                                                                    </div><!--end col-->
                                                                                                    <div class="col-lg-6">
                                                                                                        <div>
                                                                                                            <label for="firstName" class="form-label">Course</label>
                                                                                                            <input type="text" name="course" class="form-control" id="firstName" placeholder="Enter course" value="'.$row['course'].'">
                                                                                                        </div>
                                                                                                    </div><!--end col-->
                                                                                                    <div class="col-lg-6">
                                                                                                        <div>
                                                                                                            <label for="lastName" class="form-label">Duration</label>
                                                                                                            <input type="text" name="duration" class="form-control" id="lastName" placeholder="Enter duration" value="'.$row['duration'].'">
                                                                                                        </div>
                                                                                                    </div><!--end col-->
                                                                                                    <div class="col-lg-6">
                                                                                                        <div>
                                                                                                            <label for="firstName" class="form-label">School Name</label>
                                                                                                            <input type="text" name="school_name" class="form-control" id="firstName" placeholder="Enter school name" value="'.$row['schoolName'].'">
                                                                                                        </div>
                                                                                                    </div><!--end col-->
                                                                                                    <div class="col-lg-6">
                                                                                                        <div>
                                                                                                            <label for="lastName" class="form-label">Qualification</label>
                                                                                                            <input type="text" name="qualification" class="form-control" id="lastName" placeholder="Enter qualification" value="'.$row['qualifications'].'">
                                                                                                        </div>
                                                                                                    </div><!--end col-->
                                                                                                    <div class="col-lg-6">
                                                                                                        <div>
                                                                                                            <div>
                                                                                                                <label for="exampleInputdate" class="form-label">Date of Joining</label>
                                                                                                                <input type="date" name="doj" class="form-control" id="exampleInputdate" value="'.$doj.'">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div><!--end col-->
                                                                                                    <div class="col-lg-6">
                                                                                                        <div>
                                                                                                            <div>
                                                                                                                <label for="exampleInputdate" class="form-label">Internship Ending Date</label>
                                                                                                                <input type="date" name="enddate" class="form-control" id="exampleInputdate" value="'.$enddate.'">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div><!--end col-->
                                                                                                    <br><br>
                                                                                                    <div class="col-lg-12">
                                                                                                        <div class="hstack gap-2 justify-content-end">
                                                                                                            <button type="button" class="btn btn-soft-danger" data-bs-dismiss="modal">Close</button>
                                                                                                            <button type="submit" class="btn btn-primary">Submit</button>
                                                                                                        </div>
                                                                                                    </div><!--end col-->
                                                                                                </div><!--end row-->
                                                                                            </form>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                    ';

                                                                    echo '<tr>
                                                                        <td>'.$form_id.'</td>
                                                                        <td>'.$row["fname"].' '.$row["lname"].'</td>
                                                                        <td>'.$row["email"].'</td>
                                                                        <td>'.$row["phone"].'</td>
                                                                        <td>'.$row["whatsapp"].'</td>
                                                                        <td>'.$row["course"].'</td>
                                                                        <td>'.$row["duration"].'</td>
                                                                        <td>'.$status.'</td>
                                                                        <td>
                                                                            <div>
                                                                                '.$actionButtons.'
                                                                            </div>
                                                                        </td>
                                                                        ';

                                                                        if($isDropDown) 
                                                                        {
                                                                            echo '
                                                                            <td>
                                                                                <div class="dropdown d-inline-block">
                                                                                    <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                                        <i class="ri-more-fill align-middle"></i>
                                                                                    </button>
                                                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                                                        '.$dropdownButtons.'
                                                                                    </ul>
                                                                                </div>
                                                                            </td>
                                                                            ';
                                                                        }
                                                                        
                                                                    echo '</tr>';
                                                                }

                                                            ?>
                                                            <!-- end tr -->
                                                        </tbody><!-- end tbody -->
                                                    </table><!-- end table -->
                                                </div>

                                                <div class="align-items-center mt-4 pt-2 justify-content-between row text-center text-sm-start" style="vertical-align: bottom;">
                                                    <div class="col-sm">
                                                        <div class="text-muted">
                                                            Showing <span class="fw-semibold"><?php echo $page_results; ?></span> of <span class="fw-semibold"><?php echo $rows; ?></span> Results
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-auto  mt-3 mt-sm-0">
                                                        <ul class="pagination pagination-separated pagination-sm mb-0 justify-content-center align-items-center">
                                                        
                                                            <?php

                                                                if($_SESSION['page'] > 1)
                                                                {
                                                                    echo '
                                                                    <li class="page-item">
                                                                        <a href="index.php?page='.($_SESSION['page'] - 1).'" class="page-link"><i class="ri-arrow-left-line"></i></a>
                                                                    </li>
                                                                    ';
                                                                }

                                                                if($_SESSION['page'] > 3)
                                                                {
                                                                    echo '
                                                                        <li class="page-item">
                                                                            <a href="index.php?page=1" class="page-link">1</a>
                                                                        </li>
                                                                        <li class="page-item disabled">
                                                                            <a href="#" class="page-link">...</a>
                                                                        </li>
                                                                        ';
                                                                }

                                                                if($_SESSION['page'] - 2 > 0)
                                                                {
                                                                    echo '
                                                                        <li class="page-item">
                                                                            <a href="index.php?page='.($_SESSION['page'] - 2).'" class="page-link">'.($_SESSION['page'] - 2).'</a>
                                                                        </li>
                                                                        ';
                                                                }

                                                                if($_SESSION['page'] - 1 > 0)
                                                                {
                                                                    echo '
                                                                        <li class="page-item">
                                                                            <a href="index.php?page='.($_SESSION['page'] - 1).'" class="page-link">'.($_SESSION['page'] - 1).'</a>
                                                                        </li>
                                                                        ';
                                                                }

                                                                echo '
                                                                    <li class="page-item active">
                                                                        <a href="index.php?page='.$_SESSION['page'].'" class="page-link">'.$_SESSION['page'].'</a>
                                                                    </li>
                                                                    ';

                                                                if($_SESSION['page'] + 1 < $total_pages + 1)
                                                                {
                                                                    echo '
                                                                        <li class="page-item">
                                                                            <a href="index.php?page='.($_SESSION['page'] + 1).'" class="page-link">'.($_SESSION['page'] + 1).'</a>
                                                                        </li>
                                                                        ';
                                                                }

                                                                if($_SESSION['page'] + 2 < $total_pages + 1)
                                                                {
                                                                    echo '
                                                                        <li class="page-item">
                                                                            <a href="index.php?page='.($_SESSION['page'] + 2).'" class="page-link">'.($_SESSION['page'] + 2).'</a>
                                                                        </li>
                                                                        ';
                                                                }

                                                                if($_SESSION['page'] < $total_pages - 2)
                                                                {
                                                                    echo '
                                                                        <li class="page-item disabled">
                                                                            <a href="#" class="page-link">...</a>
                                                                        </li>
                                                                        <li class="page-item">
                                                                            <a href="index.php?page='.$total_pages.'" class="page-link">'.$total_pages.'</a>
                                                                        </li>
                                                                        ';
                                                                }

                                                                if($_SESSION['page'] < $total_pages)
                                                                {
                                                                    echo '
                                                                        <li class="page-item">
                                                                            <a href="index.php?page='.($_SESSION['page'] + 1).'" class="page-link"><i class="ri-arrow-right-line"></i></a>
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
        include 'core/bottom_js.php';

    ?>

</body>

</html>
