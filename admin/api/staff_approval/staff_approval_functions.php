<?php

    include '../internship_functions/conn.php';

    if(isset($_GET['approve']))
    {
        $approve = $_GET['approve'];

        $sql = "update login set role = 1 where email = '$approve'";

        if(mysqli_query($conn, $sql)) {

            header('Location: ../../mail.php?assistant='.$approve);
        }
        else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }

    if(isset($_GET['unapprove']))
    {
        $unapprove = $_GET['unapprove'];

        $sql = "update login set role = -1 where email = '$unapprove'";

        if(mysqli_query($conn, $sql)) {

            header('Location: ../../mail.php?rejected='.$unapprove);
        }
        else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }

    if(isset($_GET['hr']))
    {
        $hr = $_GET['hr'];

        $sql = "update login set role = 2 where email = '$hr'";

        if(mysqli_query($conn, $sql)) 
        {
            $_SESSION['role'] = 2;
            header('Location: ../../mail.php?hr='.$hr);
        }
        else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }

    if(isset($_GET['founder']))
    {
        $founder = $_GET['founder'];

        $sql = "update login set role = 3 where email = '$founder'";

        if(mysqli_query($conn, $sql)) {

            $_SESSION['role'] = 3;
            header('Location: ../../mail.php?founder='.$founder);
        }
        else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }

?>
