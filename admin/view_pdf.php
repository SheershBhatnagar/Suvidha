<html>

    <?php

        $pageName = "View PDF";

        include 'core/head.php';
        include 'api/internship_functions/conn.php';

        $id = $_GET['id'];
        
    ?>

    <style>
        body {
            margin: 0;
            padding: 0;
        }

        iframe {
            position: absolute;
            left: 0;
            right: 0;
            bottom: 0;
            top: 0;
            border: none;
        }
    </style>

    <body>

        <?php

            $path = "uploads/offer_letters/$id.pdf";

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
                $sql = "update internship_form set letter_viewed_at = now() where form_id = '$id'";
        
                if(mysqli_query($conn, $sql)) 
                {
                    echo '<iframe src="uploads/offer_letters/'.$id.'.pdf" width="100%" style="height:100%"></iframe>';
                }
                else
                {
                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                }
            }
            else
            {
                $sql = "SELECT form_id, fname, lname, email, course, duration, date(date_of_joining) as doj, date(internship_enddate) as enddate FROM internship_form where form_id = $id";
                $result = mysqli_query($conn, $sql);
                $row = mysqli_fetch_assoc($result);

                header('Location: api/generate_pdf.php?form_no='.$id.'&fname='.$row["fname"].'&lname='.$row["lname"].'&email='.$row["email"].'&viewLetter=1&course='.$row["course"].'&duration='.$row["duration"].'&doj='.$doj.'&endDate='.$enddate);
            }

        ?>

    </body>

</html>
