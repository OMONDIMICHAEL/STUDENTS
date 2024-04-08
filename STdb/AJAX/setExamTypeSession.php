<?php include("../SESSION/session.php"); ?>
    <?php
    //<<<<<<<<<<<*mikemike3662@gmail.com*>>>>>>>>>>>>
    //<<<<<<<<<<<*mikemike3662@gmail.com*>>>>>>>>>>>>  
    include("../CONNECTIONS/studentsConnection.php");
    include("../FUNCTIONS/studentsFunctions.php");
$exam_category = $_GET["exam_category"];
$_SESSION["exam_category"] = $exam_category;

        $sql = ("SELECT * from exam_category where category = '$exam_category'");
        $query = mysqli_query($con,$sql);        
        while ($info = mysqli_fetch_array($query)){
            $_SESSION["exam_time"] = $info["exam_time_in_minutes"];
        }
        $date = date("Y-m-d H:i:s");
        $_SESSION["end_time"] = date("Y-m-d H:i:s",strtotime($date."+$_SESSION[exam_time] minutes"));
        $_SESSION["exam_start"] = "yes";
        ?>
