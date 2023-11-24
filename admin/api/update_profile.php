<?php

    include("internship_functions/conn.php");

    if(isset($_POST["submit"]))
    {
        session_start();
        $uid = $_SESSION["uid"];
        $fname = $_POST["fname"];
        $lname = $_POST["lname"];
        $email = $_POST["email"];

        $sql = "update login set fname='$fname', lname='$lname', email='$email' where uid = $uid";

        if(mysqli_query($conn, $sql))
        {
            $sql_fetch_new_details = "select * from login where uid = $uid";
            $result = mysqli_query($conn, $sql_fetch_new_details);
            $row = mysqli_fetch_assoc($result);
            
            $_SESSION["fname"] = $row["fname"];
            $_SESSION["lname"] = $row["lname"];
            $_SESSION["email"] = $row["email"];

            header('Location: ../settings.php');
        }
    }

?>
