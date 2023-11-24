<?php

    session_start();
    if($_SESSION['uid'] == null)
    {
        header('Location: signin.php');
    }

?>
