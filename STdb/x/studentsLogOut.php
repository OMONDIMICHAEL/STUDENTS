<?php


session_start();

if(isset($_SESSION['$id']))
{
    unset($_SESSION['$id']);
}

header("Location:studentsLogIn.php");
die;