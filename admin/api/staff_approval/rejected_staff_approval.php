<?php

    include 'api/internship_functions/conn.php';

    $limit_rej = 10;
    $offset_rej = (($_SESSION['page_staff_rej'] ?? 1) - 1) * $limit_rej;

    $sql_no_of_rows_rej = "SELECT COUNT(uid) FROM login where role = -1";
    $row_rej = mysqli_query($conn, $sql_no_of_rows_rej);
    $rows_rej = mysqli_fetch_row($row_rej)[0];

    $total_pages_rej = ceil($rows_rej / $limit_rej);

    $sql_rej = "SELECT * FROM login where role = -1 order by uid desc LIMIT $offset_rej, $limit_rej";
    
    $result_rej = mysqli_query($conn, $sql_rej) or die("No record found.");

    $page_results_rej = mysqli_num_rows($result_rej);
    
?>
