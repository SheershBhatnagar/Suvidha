<?php

    require_once '../../api/conn.php';

    if(isset($_POST['submit']))
    {
        $email = $_POST['email'];
        $pass = $_POST['pass'];

        $sql = "select * from login where email = '$email'";
        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) > 0)
        {
            $row = mysqli_fetch_assoc($result);

            $role = $row['role'];

            if($role == 0)
            {
                header('Location: ../signin.php?isError=1&error=Your account is under review, please wait for the approval!');
                exit();
            }

            if($role == -1)
            {
                header('Location: ../signin.php?isError=1&error=Your account is rejected, you are not allowed to access this part of the website!');
                exit();
            }

            $isVerified = $row['is_verified'];

            if($isVerified == 0)
            {
                header('Location: ../signin.php?isError=1&error=Account is not verified, please verify your account first! <a href="mail.php?email_verify='.$email.'">Verify Here</a>');
                exit();
            }

            if(password_verify($pass, $row['password']))
            {
                $updateLastLoginTime = "update login set last_login_at = now() where email = '$email'";
                
                if(mysqli_query($conn, $updateLastLoginTime))
                {
                    session_start();
                    $_SESSION['uid'] = $row['uid'];
                    $_SESSION['email'] = $email;
                    $_SESSION['fname'] = $row['fname'];
                    $_SESSION['lname'] = $row['lname'];
                    $_SESSION['role'] = $row['role'];
                    unset($_SESSION['code']);
    
                    header('Location: ../mail.php?login='.$email);
                }
            }
            else 
            {
                header('Location: ../signin.php?isError=1&error=Wrong Password');
            }
        }
        else 
        {
            header('Location: ../signin.php?isError=1&error=Account does not exist, please register first! <a href="admin/signup.php">Register</a>');
        }
    }

?>
