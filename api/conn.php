<?php

    $SERVERNAME = "localhost";
    $USERNAME = "root";
    $PASSWORD = "password";
    $DBNAME = "suvidha";

    $conn = mysqli_connect($SERVERNAME, $USERNAME, $PASSWORD, $DBNAME);

    if(!$conn){
        die("Connection failed: ".mysqli_connect_error());
    }

?>
