<?php
//<<<<<<<<<<<*mikemike3662@gmail.com*>>>>>>>>>>>>
//<<<<<<<<<<<*mikemike3662@gmail.com*>>>>>>>>>>>>
session_start();
require("../CONNECTIONS/studentsConnection.php");
require("../FUNCTIONS/studentsFunctions.php");
$userdata = checklogin($con);
if($_SERVER ['REQUEST_METHOD']=="POST")
{
    $courseUnit = filter_var($_POST['courseUnit'], FILTER_SANITIZE_STRING);
    $userEmail = $userdata['Email'];
    $enrollKey = filter_var($_POST['enrollKey'], FILTER_SANITIZE_STRING);
    $unitName = filter_var($_POST['unitName'], FILTER_SANITIZE_STRING);
    if(!empty($courseUnit))
    {
        $keyConfirm = $con->prepare("SELECT * from unitKey where UnitKey = ?");
        $keyConfirm->bind_param("s",$enrollKey);
        $keyConfirm->execute();
        $resultsKeyConfirm = $keyConfirm->get_result();
        if($resultsKeyConfirm)
        {
            if($resultsKeyConfirm && mysqli_num_rows($resultsKeyConfirm)>0)
            {
        $enrollConfirm = $con->prepare("SELECT * from unitRegistration where UnitLink = ?");
        $enrollConfirm->bind_param("s",$courseUnit);
        $enrollConfirm->execute();
        $resultsEnrollConfirm = $enrollConfirm->get_result();
        if($resultsEnrollConfirm && mysqli_num_rows($resultsEnrollConfirm)>0)
            {
                ?>
                <script>
                    alert("Unit Already Registered!!");
                    location.href = "../STUDENT/students.php";
                </script>
                <?php
                die;
            }
             ?> <?php 
        $query = $con->prepare("INSERT INTO unitRegistration(Email,UnitLink,UnitName) values (?,?,?)");
        $query->bind_param("sss",$userEmail,$courseUnit,$unitName);    
        $query->execute();
        ?>
        <script> window.alert("Unit Added Successfully");
        window.location.href = "../STUDENT/students.php";
        </script> 
    <?php
        die;
            }
        else{
            ?><script> window.alert("Wrong Unit Key.");
            window.location.href = "../STUDENT/students.php";
            </script> <?php
            die;
        }
        }
   }
}
?>