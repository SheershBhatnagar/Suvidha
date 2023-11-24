<?php

    if(isset($_POST["changePass"]))
    {
        session_start();

        include 'internship_functions/conn.php';
    
        $oldPass = $_POST['oldPass'];
        $newPass = $_POST['newPass'];
        $confirmPass = $_POST['confirmPass'];
    
        $sql = "SELECT password FROM login where uid = '$_SESSION[uid]'";
    
        $result = mysqli_query($conn, $sql);
    
        $row = mysqli_fetch_assoc($result);
    
        if(password_verify($oldPass, $row["password"]))
        {
            if($newPass == $confirmPass)
            {
                $newPass = password_hash($newPass, PASSWORD_DEFAULT);
    
                $sql = "UPDATE login SET password = '$newPass' where uid = '$_SESSION[uid]'";
    
                if(mysqli_query($conn, $sql))
                {
                    header('Location: ../mail.php?passwordChanged='.$_SESSION['email']);
                }
                else
                {
                    header('Location: ../settings.php?isError=1&error=Something Went Wrong');
                    exit();
                }
            }
            else
            {
                header('Location: ../settings.php?isError=1&error=New Password and Confirm Password does not matched!');
                exit();
            }
        }
        else
        {
            header('Location: ../settings.php?isError=1&error=Wrong Old Password'.$_SESSION['uid']);
            exit();
        }
    }

    if(isset($_GET['passwordSuccess']))
    {
        session_start();
        session_unset();
        session_destroy();

        header('Location: ../signin.php?isMessage=1&message=Password Changed Successfully, please re-login with new password!');
        exit();
    }

?>
