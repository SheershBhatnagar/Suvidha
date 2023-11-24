<?php

    include 'api/internship_functions/conn.php';

    $limit_res = 10;
    $offset_res = (($_SESSION['page_contact_res'] ?? 1) - 1) * $limit_res;

    $sql_no_of_rows_res = "SELECT COUNT(contact_id) FROM contact_us where resolved = 1";
    $row_res = mysqli_query($conn, $sql_no_of_rows_res);
    $rows_res = mysqli_fetch_row($row_res)[0];

    $total_pages_res = ceil($rows_res / $limit_res);

    $sql_res = "SELECT * FROM contact_us where resolved = 1 order by contact_id desc LIMIT $offset_res, $limit_res";
    
    $result_res = mysqli_query($conn, $sql_res) or die("No record found.");

    $page_results_res = mysqli_num_rows($result_res);
    
?>
