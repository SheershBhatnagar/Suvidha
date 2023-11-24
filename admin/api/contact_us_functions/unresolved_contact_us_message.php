<?php

    include 'api/internship_functions/conn.php';

    $limit_unres = 10;
    $offset_unres = (($_SESSION['page_contact_unres'] ?? 1) - 1) * $limit_unres;

    $sql_no_of_rows_unres = "SELECT COUNT(*) FROM contact_us where resolved = 0";
    $row_unres = mysqli_query($conn, $sql_no_of_rows_unres);
    $rows_unres = mysqli_fetch_row($row_unres)[0];

    $total_pages_unres = ceil($rows_unres / $limit_unres);

    $sql_unres = "SELECT * FROM contact_us where resolved = 0 order by contact_id desc LIMIT $offset_unres, $limit_unres";
    
    $result_unres = mysqli_query($conn, $sql_unres);

    $page_results_unres = mysqli_num_rows($result_unres);
    
?>
