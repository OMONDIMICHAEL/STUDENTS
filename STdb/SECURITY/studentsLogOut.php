<?php
    /*<<<<<<<<<<<*mikemike3662@gmail.com*>>>>>>>>>>>>
    <<<<<<<<<<<*mikemike3662@gmail.com*>>>>>>>>>>>> */
session_start();
    header("Location:studentsLogIn.php");
    session_unset();
    session_destroy();
    die;

?>