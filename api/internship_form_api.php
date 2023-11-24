<?php

    require_once 'conn.php';

    if(isset($_POST['submit']))
    {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $whatsapp = $_POST['whatsapp'];
        $schoolName = $_POST['schoolName'];
        $qualification = $_POST['qualification'];
        $course = $_POST['course'];
        $duration = $_POST['duration'];

        $stmt = mysqli_prepare($conn, "INSERT INTO internship_form (fname, lname, email, phone, whatsapp, schoolName, qualifications, course, duration) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
        mysqli_stmt_bind_param($stmt, "sssssssss", $fname, $lname, $email, $phone, $whatsapp, $schoolName, $qualification, $course, $duration);

        mysqli_stmt_execute($stmt);

        if(mysqli_stmt_affected_rows($stmt) > 0)
        {
            header('Location: ../internship_form.php');
        }
        else
        {
            echo "Message not sent";
        }
    }

?>
