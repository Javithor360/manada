<?php session_start();

    $goback= $_SERVER['HTTP_REFERER'];
    $lang = $_GET['lang'];
    $_SESSION['lang'] = $lang;
    header("location: $goback");
?>