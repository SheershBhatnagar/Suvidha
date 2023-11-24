<?php

    require_once 'internship_functions/conn.php';

    if(isset($_POST['submit']))
    {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $cpass = $_POST['cpass'];

        if($pass == $cpass)
        {
            $sqlEmailCheck = "select * from login where email = '$email'";
            $resultEmailCheck = mysqli_query($conn, $sqlEmailCheck);

            if(mysqli_num_rows($resultEmailCheck) == 0) 
            {
                $pass = password_hash($pass, PASSWORD_DEFAULT);

                // $stmt = mysqli_prepare($conn, "INSERT INTO login (fname, lname, email, password) VALUES (?, ?, ?, ?)");
                // mysqli_stmt_bind_param($stmt, "ssss", $fname, $lname, $email, $pass);

                // echo '7';

                // mysqli_stmt_execute($stmt) or die("$conn->error");

                $sql = "INSERT INTO login (fname, lname, email, password) VALUES ('$fname', '$lname', '$email', '$pass')";

                if(mysqli_query($conn, $sql))
                {
                    header('Location: ../mail.php?newAccount='.$email);
                }
                else
                {
                    header('Location: ../signup.php?isError=true&error=Something went wrong, please try again!');
                }
            }
            else 
            {
                header('Location: ../signup.php?isError=true&error=Account from this email already exist, please login! <a href="../signin.php">Login</a>');
            }
        }
        else
        {
            header('Location: ../signup.php?isError=true&error=Password do not matched!');
        }
    }

?>
