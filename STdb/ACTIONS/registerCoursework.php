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
    $userEmail = filter_var($userdata['Email'], FILTER_SANITIZE_STRING);
    $enrollKey = filter_var($_POST['enrollKey'], FILTER_SANITIZE_STRING);
    $Ass1 = filter_var($_POST['Ass1'], FILTER_SANITIZE_STRING);
    $Ass2 = filter_var($_POST['Ass2'], FILTER_SANITIZE_STRING);
    $Cat1 = filter_var($_POST['Cat1'], FILTER_SANITIZE_STRING);
    $Cat2 = filter_var($_POST['Cat2'], FILTER_SANITIZE_STRING);
    $mainExam = filter_var($_POST['mainExam'], FILTER_SANITIZE_STRING);
    if(!empty($courseUnit))
    {
        $keyConfirm = $con->prepare("SELECT * from courseworkUnitKey where unitKey = ?");
        $keyConfirm->bind_param("s",$enrollKey);
        $keyConfirm->execute();
        $resultsKeyConfirm = $keyConfirm->get_result();
        if($resultsKeyConfirm)
        {
            if($resultsKeyConfirm && mysqli_num_rows($resultsKeyConfirm)>0)
            {
        $enrollConfirm = $con->prepare("SELECT * from networkingGrades where userName = ? && unitName = ?");
        $enrollConfirm->bind_param("ss",$userEmail,$courseUnit);
        $enrollConfirm->execute();
        $resultsEnrollConfirm = $enrollConfirm->get_result();
        if($resultsEnrollConfirm && mysqli_num_rows($resultsEnrollConfirm)>0)
            { 
                ?>
                    <script>
                        window.alert("Coursework Already Enrolled!!");
                        window.location.href = "../STUDENT/courseworkGrades.php";
                    </script>
                <?php
                    die; 
                }
 ?> <?php
        $query = $con->prepare("INSERT INTO networkingGrades(userName,unitName,Ass1,Ass2,Cat1,Cat2,mainExam) values (?,?,?,?,?,?,?)");
        $query->bind_param("sssssss",$userEmail,$courseUnit,$Ass1,$Ass2,$Cat1,$Cat2,$mainExam);
        $query->execute();
        ?>
        <script> window.alert("Course Enrolled Successfully");
        window.location.href = "../STUDENT/courseworkGrades.php";
        </script> 
        <?php
        die;
            }
        else{
            ?>
            <script> window.alert("Failed to Enroll Coursework.");
            window.location.href = "../STUDENT/courseworkGrades.php";
            </script> <?php
            die;
        }
        }
   }
}
?>