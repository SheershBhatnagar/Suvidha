<?php
    
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    include 'api/internship_functions/conn.php';

    require '../phpmailer/vendor/autoload.php';
    require 'constants/constants.php';

    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = $mailHost;                     //Set the SMTP server to send through
        $mail->SMTPAuth   = $mailAuth;                                   //Enable SMTP authentication
        $mail->Username   = $mailUsername;                     //SMTP username
        $mail->Password   = $mailPassword;                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
        $mail->Port       = $mailPort;                                //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom($mailUsername, $mailHostName);

        if(isset($_GET['newAccount']))
        {
            $email = $_GET['newAccount'];

            $mail->addAddress($email);

            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'Your account has been created!';
            $mail->Body = 'Congratulations, Your account has been created!';

            $mail->send();

            header('Location: mail.php?email_verify='.$email);
        }

        if(isset($_GET['email_verify']))
        {
            $email = $_GET['email_verify'];

            $mail->addAddress($email);

            $code = rand(100000, 999999);
            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = $code.' is your verification code';
            $mail->Body = 'Your verification code is '.$code;

            $mail->send();

            session_start();
            $_SESSION['email'] = $email;
            $_SESSION['code'] = $code;

            header('Location: twostep_verification.php');
        }

        if(isset($_GET['login']))
        {
            $email = $_GET['login'];

            $mail->addAddress($email);

            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'New Login found!';
            $mail->Body = 'Your account has been recently accessed!';

            $mail->send();

            header('Location: index.php');
        }

        if(isset($_GET['passwordChanged']))
        {
            $email = $_GET['passwordChanged'];

            $mail->addAddress($email);

            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'Your account password has been changed!';
            $mail->Body = 'Your account password has been changed!, We have logged you out you. Please login from new password!';

            $mail->send();

            header('Location: api/change_password.php?passwordSuccess=true');
        }

        if(isset($_GET['forgot']))
        {
            $email = $_GET['forgot'];

            $mail->addAddress($email);

            $code = rand(100000, 999999);
            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = $code.' is your verification code';
            $mail->Body = 'Your verification code is '.$code;

            $mail->send();

            session_start();
            $_SESSION['email'] = $email;
            $_SESSION['code'] = $code;

            header('Location: forgot_password_s2.php');
        }

        if(isset($_GET['logout']))
        {
            $email = $_GET['logout'];

            $mail->addAddress($email);

            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'You have been logged out!';
            $mail->Body = 'You have been logged out!, Sign in again to continue!';

            $mail->send();

            header('Location: signin.php');
        }

        if(isset($_GET['sendLetter']))
        {
            $form_id = $_GET['sendLetter'];
            $email = $_GET['email'];

            $mail->addAddress($email);

            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'Congratulations, You have been selected!';
            $mail->Body = 'This is your offer letter!';

            $mail->addAttachment('uploads/offer_letters/'.$form_id.'.pdf', 'offer_letter.pdf');

            $mail->send();

            header('Location: index.php');
        }

        if(isset($_GET['assistant']))
        {
            $email = $_GET['assistant'];

            $mail->addAddress($email);

            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'You have become assistant!';
            $mail->Body = 'Please respect you role rights!';

            $mail->send();

            header('Location: staff_approval.php');
        }

        if(isset($_GET['hr']))
        {
            $email = $_GET['hr'];

            $mail->addAddress($email);

            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'You have become hr!';
            $mail->Body = 'Please respect you role rights!';

            $mail->send();

            header('Location: staff_approval.php');
        }

        if(isset($_GET['founder']))
        {
            $email = $_GET['founder'];

            $mail->addAddress($email);

            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'You have become founder!';
            $mail->Body = 'Please respect you role rights!';

            $mail->send();

            header('Location: staff_approval.php');
        }

        if(isset($_GET['rejected']))
        {
            $email = $_GET['rejected'];

            $mail->addAddress($email);

            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'Your account has been rejected!';
            $mail->Body = 'Please contact the admin for more details!';

            $mail->send();

            header('Location: staff_approval.php');
        }
        
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        header('Location: index.php?error=Email could not send!');
    }
?>
