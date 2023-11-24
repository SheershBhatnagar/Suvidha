<?php

    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    include 'conn.php';

    if(isset($_GET['approve'])) {
        $sql = "update internship_form set internship_status = 1 where form_id = '$_GET[approve]'";
    
        if(mysqli_query($conn, $sql)) {

            header('Location: ../../index.php');
        }
        else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }

    if(isset($_GET["sendLetter"]))
    {
        $form_id = $_GET["sendLetter"];
        $path = "../../uploads/offer_letters/".$form_id.".pdf";

        function file_exists_safe($file) 
        {
            if (!$fd = fopen($file, 'xb')) 
            {
                return true;
            }

            fclose($fd);
            return false;
        }

        if(file_exists_safe($path))
        {
            $sql = "update internship_form set offer_letter_status = 1 where form_id = '$form_id'";
    
            if(mysqli_query($conn, $sql)) 
            {
                header('Location: ../../mail.php?sendLetter='.$form_id.'&email='.$_GET["email"]);
            }
            else 
            {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
        }
        else
        {
            $sql = "SELECT form_id, fname, lname, email, course, duration, date(date_of_joining) as doj, date(internship_enddate) as enddate FROM internship_form where form_id = '$form_id'";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);

            header('Location: ../generate_pdf.php?form_no='.$form_id.'&fname='.$row["fname"].'&lname='.$row["lname"].'&email='.$row["email"].'&reSendLetter=1&course='.$row["course"].'&duration='.$row["duration"].'&doj='.$doj.'&endDate='.$enddate);
        }
    }

    if(isset($_GET['reject'])) 
    {
        $sql = "update internship_form set internship_status = 3 where form_id = '$_GET[reject]'";
    
        if(mysqli_query($conn, $sql)) {

            header('Location: ../../index.php');
        }
        else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }

    if(isset($_GET['complete'])) 
    {
        $sql = "update internship_form set internship_status = 2 where form_id = '$_GET[complete]'";
    
        if(mysqli_query($conn, $sql)) {

            header('Location: ../../index.php');
        }
        else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }

    if(isset($_GET["edit"]))
    {
        $form_id = $_GET["edit"];

        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $whatsapp = $_POST['whatsapp'];
        $course = $_POST['course'];
        $duration = $_POST['duration'];
        $schoolName = $_POST['school_name'];
        $qualification = $_POST['qualification'];
        $doj = $_POST['doj'];
        $enddate = $_POST['enddate'];

        $doj = $doj.' 00:00:00';
        $enddate = $enddate.' 00:00:00';

        if($enddate == null)
        {
            $enddate = "0000-00-00 00:00:00";
        }

        if($doj == null)
        {
            $doj = "0000-00-00 00:00:00";
        }

        $sql = "update internship_form set fname='$fname', lname='$lname', email='$email', phone='$phone', whatsapp='$whatsapp', course='$course', duration='$duration', schoolName='$schoolName', date_of_joining='$doj', internship_enddate='$enddate' where form_id='$form_id'";

        if(mysqli_query($conn, $sql))
        {
            header('Location: ../../index.php');
        }
    }

?>
