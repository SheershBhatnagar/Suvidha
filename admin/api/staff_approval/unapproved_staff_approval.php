<?php

    include 'api/internship_functions/conn.php';

    $limit_unapp = 10;
    $offset_unapp = (($_SESSION['page_staff_unapp'] ?? 1) - 1) * $limit_unapp;

    $sql_no_of_rows_unapp = "SELECT COUNT(uid) FROM login where role = 0";
    $row_unapp = mysqli_query($conn, $sql_no_of_rows_unapp);
    $rows_unapp = mysqli_fetch_row($row_unapp)[0];

    $total_pages_unapp = ceil($rows_unapp / $limit_unapp);

    $sql_unapp = "SELECT * FROM login where role = 0 order by uid desc LIMIT $offset_unapp, $limit_unapp";
    
    $result_unapp = mysqli_query($conn, $sql_unapp) or die("No record found.");

    $page_results_unapp = mysqli_num_rows($result_unapp);
    
?>
