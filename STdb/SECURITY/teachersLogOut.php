<?php
    /*<<<<<<<<<<<*mikemike3662@gmail.com*>>>>>>>>>>>>
    <<<<<<<<<<<*mikemike3662@gmail.com*>>>>>>>>>>>> */
session_start();
//if(isset($_SESSION['$id']))
//{}
    header("Location:teachersLogIn.php");
    session_unset();
    session_destroy();
    die;
?>