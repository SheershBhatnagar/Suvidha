<?php

    $pdfName = $_GET['form_no'] ?? 0;
    $email = $_GET['email'] ?? 0;
    $fname = $_GET['fname'] ?? "First Name";
    $lname = $_GET['lname'] ?? "Last Name";
    $duration = $_GET['duration'] ?? 0;
    $course = $_GET['course'] ?? "Course";
    $doj = $_GET['doj'] ?? 0;
    $endDate = $_GET['endDate'] ?? 0;

    $viewLetter = $_GET['viewLetter'] ?? 0;
    $reSendLetter = $_GET['reSendLetter'] ?? 0;

    include 'internship_functions/conn.php';

    if($doj == 0 || $doj == null)
    {
        $sqlSetDoj = "UPDATE internship_form SET date_of_joining = now() WHERE form_id = $pdfName";
        if(mysqli_query($conn, $sqlSetDoj))
        {
            $sqlFetchDoj = "SELECT date(date_of_joining) as doj FROM internship_form WHERE form_id = $pdfName";
            $result = mysqli_query($conn, $sqlFetchDoj);
            $row = mysqli_fetch_assoc($result);
            $doj = $row['doj'];
        }
    }

    if($endDate == 0 || $endDate == null)
    {
        $sqlSetEnddate = "UPDATE internship_form SET internship_enddate = date_of_joining+INTERVAL $duration WHERE form_id = $pdfName";
        if(mysqli_query($conn, $sqlSetEnddate))
        {
            $sqlFetchEnddate = "SELECT date(internship_enddate) as enddate FROM internship_form WHERE form_id = $pdfName";
            $result = mysqli_query($conn, $sqlFetchEnddate);
            $row = mysqli_fetch_assoc($result);
            $endDate = $row['enddate'];
        }
    }

    require '../../dompdf/vendor/autoload.php';

    use Dompdf\Dompdf;
    use Dompdf\Options;

    $options = new Options;
    $options->setChroot('../../');
    $options->setIsRemoteEnabled(true);

    $dompdf = new Dompdf($options);

    $html = file_get_contents("../templates/offer_letter_template.html");

    $html = str_replace(["{{ fname }}", "{{ lname }}", "{{ doj }}", "{{ enddate }}", "{{ course }}"], [$fname, $lname, $doj, $endDate, $course], $html);

    $dompdf->loadHtml($html);

    $dompdf->setPaper('A4', 'portrait');

    $dompdf->render();

    $dompdf->add_info('Author', 'Suvidha Mahila Mandal');

    $pdf = $dompdf->output();

    file_put_contents("../uploads/offer_letters/".$pdfName.".pdf", $pdf);

    $finalPDFName = $pdfName.".pdf";

    $sql = "UPDATE internship_form SET offer_letter = '$finalPDFName' WHERE form_id = '$pdfName'";

    if(mysqli_query($conn, $sql))
    {
        if($viewLetter == 0)
        {   
            if($reSendLetter == 0)
            {
                header('Location: ../index.php');
            }
            else
            {
                header('Location: ../mail.php?sendLetter='.$pdfName.'&email='.$email);
            }
        }
        else
        {
            header('Location: ../view_pdf.php?id='.$pdfName);
        }
    }
    else
    {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

?>
