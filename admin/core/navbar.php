<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <!-- Dark Logo-->
        <a href="index.php" class="logo logo-dark">
            <span class="logo-sm">
                <img src="../img/suvidha/favicon.jpg" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="../img/suvidha/SuvidhaLogo.png" alt="" height="17">
            </span>
        </a>
        <!-- Light Logo-->
        <a href="index.php" class="logo logo-light">
            <span class="logo-sm">
                <img src="../img/suvidha/favicon.jpg" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="../img/suvidha/SuvidhaLogo.png" alt="" height="40">
            </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">

            <div id="two-column-menu"></div>

            <ul class="navbar-nav" id="navbar-nav">
                <li class="menu-title"><span data-key="t-menu">Menu</span></li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="index.php">
                        <i class="ri-file-list-3-line"></i> <span data-key="t-widgets">Internship Form</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="contact_us_messages.php">
                        <i class="ri-question-answer-line align-middle"></i> <span data-key="t-widgets">Messages</span>
                    </a>
                </li>
                <?php

                    if($_SESSION['role'] == '3' || $_SESSION['role'] == '2'){

                        echo '<li class="nav-item">
                                    <a class="nav-link menu-link" href="staff_approval.php">
                                        <i class="ri-shield-check-line"></i> <span data-key="t-widgets">Staff Approval</span>
                                    </a>
                                </li>';

                    }

                ?>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>

    <div class="sidebar-background"></div>
</div>
