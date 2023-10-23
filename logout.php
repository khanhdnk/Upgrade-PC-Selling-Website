<?php 
    session_start();

    session_unset();
    //unset session
    session_destroy();
    //destroy session
    header("Location: ./login.php");
    //after logout headback to login page
?>