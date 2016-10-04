<?php

    session_start();
    unset($_SESSION['loggedin']); 
    session_unset();
    session_destroy();
    

header('location: student_login.php');

?>