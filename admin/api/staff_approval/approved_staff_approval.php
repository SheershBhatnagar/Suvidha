<?php

    include 'api/internship_functions/conn.php';

    $uid = $_SESSION['uid'];
    
    if($_SESSION['role'] == 3)
    {
        $limit_app = 10;
        $offset_app = (($_SESSION['page_staff_app'] ?? 1) - 1) * $limit_app;
    
        $sql_no_of_rows_app = "SELECT COUNT(uid) FROM login where role between 1 and 3 and uid != $uid";
        $row_app = mysqli_query($conn, $sql_no_of_rows_app);
        $rows_app = mysqli_fetch_row($row_app)[0];
    
        $total_pages_app = ceil($rows_app / $limit_app);
    
        $sql_app = "SELECT * FROM login where role between 1 and 3 and uid != $uid order by uid desc LIMIT $offset_app, $limit_app";
        
        $result_app = mysqli_query($conn, $sql_app) or die("No record found.");
    
        $page_results_app = mysqli_num_rows($result_app);
    }

    if($_SESSION['role'] == 2)
    {
        $limit_app = 10;
        $offset_app = (($_SESSION['page_staff_app'] ?? 1) - 1) * $limit_app;

        $sql_no_of_rows_app = "SELECT COUNT(uid) FROM login where role between 1 and 2 and uid != $uid";
        $row_app = mysqli_query($conn, $sql_no_of_rows_app);
        $rows_app = mysqli_fetch_row($row_app)[0];

        $total_pages_app = ceil($rows_app / $limit_app);

        $sql_app = "SELECT * FROM login where role between 1 and 2 and uid != $uid order by uid desc LIMIT $offset_app, $limit_app";
        
        $result_app = mysqli_query($conn, $sql_app) or die("No record found.");

        $page_results_app = mysqli_num_rows($result_app);
    }
    
?>
