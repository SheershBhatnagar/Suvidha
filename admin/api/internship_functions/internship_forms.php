<?php

    include '../api/conn.php';

    $limit = 25;
    $offset = (($_SESSION['page'] ?? 1) - 1) * $limit;

    $sql_no_of_rows = "SELECT COUNT(form_id) FROM internship_form";
    $row = mysqli_query($conn, $sql_no_of_rows);
    $rows = mysqli_fetch_row($row)[0];

    $total_pages = ceil($rows / $limit);

    $sql = "SELECT form_id, fname, lname, email, phone, whatsapp, schoolName, qualifications, course, duration, offer_letter, internship_status, offer_letter_status, form_filled_at, letter_viewed_at, date(date_of_joining) as doj, date(internship_enddate) as enddate FROM internship_form order by form_id desc LIMIT $offset, $limit";
    
    $result = mysqli_query($conn, $sql) or die("No record found.");

    $page_results = mysqli_num_rows($result);
    
?>
