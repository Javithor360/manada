<?php session_start();

    session_destroy();
    $_SESSION = array();
    
    header('location: ../admin/index-login.php');

?>