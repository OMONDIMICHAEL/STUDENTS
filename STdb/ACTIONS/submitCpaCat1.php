<?php
//<<<<<<<<<<<*mikemike3662@gmail.com*>>>>>>>>>>>>
//<<<<<<<<<<<*mikemike3662@gmail.com*>>>>>>>>>>>>
require("../SESSION/session.php");
require("../CONNECTIONS/studentsConnection.php");
require("../FUNCTIONS/studentsFunctions.php");
if($_SERVER ['REQUEST_METHOD']=="POST")
{
    $userdata = checklogin($con);
    $studentMail = filter_var($userdata['Email'], FILTER_SANITIZE_STRING);
    $catScore = filter_var($_POST['catScore'], FILTER_SANITIZE_STRING);
     $studentUnit = filter_var($_POST['userUnit'], FILTER_SANITIZE_STRING);
        $ass1Grade = $con->prepare("UPDATE networkingGrades set Cat1 = ?  where userName = ? && unitName = ?");
        $ass1Grade->bind_param("sss", $catScore,$studentMail,$studentUnit);
        $ass1Grade->execute();
        ?>
        <script> window.alert("Cat Submitted Successfully");
        window.location = ("../STUDENT/studentCpa.php");
        </script> <?php
        die;
    }
?>