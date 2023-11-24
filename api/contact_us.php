<?php

    require_once 'conn.php';

    if(isset($_POST['submit']))
    {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $message = $_POST['message'];

        $stmt = mysqli_prepare($conn, "INSERT INTO contact_us (fname, lname, email, phone, message) VALUES (?, ?, ?, ?, ?)");
        mysqli_stmt_bind_param($stmt, "sssss", $fname, $lname, $email, $phone, $message);

        mysqli_stmt_execute($stmt);

        if(mysqli_stmt_affected_rows($stmt) > 0)
        {
            header('Location: ../contacts.php');
        }
        else
        {
            echo "Message not sent";
        }
    }

?>
