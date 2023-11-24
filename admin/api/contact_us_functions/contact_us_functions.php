<?php

    include '../internship_functions/conn.php';

    $message_id = $_GET['message_id'];

    if(isset($_GET['resolve'])) 
    {
        $sql = "update contact_us set resolved = 1, resolved_at = now() where contact_id = '$message_id'";

        if(mysqli_query($conn, $sql)) {

            header('Location: ../../contact_us_messages.php');
        }
        else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }

    if(isset($_GET['unresolve'])) 
    {
        $sql = "update contact_us set resolved = 0, resolved_at = now() where contact_id = '$message_id'";

        if(mysqli_query($conn, $sql)) {

            header('Location: ../../contact_us_messages.php');
        }
        else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }

?>
