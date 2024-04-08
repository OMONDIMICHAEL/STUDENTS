<?php include("../SESSION/session.php"); ?>
    <?php
    //<<<<<<<<<<<*mikemike3662@gmail.com*>>>>>>>>>>>>
    //<<<<<<<<<<<*mikemike3662@gmail.com*>>>>>>>>>>>>  
    include("../CONNECTIONS/studentsConnection.php");
    include("../FUNCTIONS/studentsFunctions.php");
    
        $userdata = checklogin($con);
        if(!isset($_SESSION['no'])){
            ?><script>window.location = "../SECURITY/studentsLogin.php";</script><?php
        die;
        }
 
if (!isset($_SESSION["end_time"])) {
    echo "00:00:00";
    // code...
}
else{
    $time1 = gmdate("H:i:s",strtotime($_SESSION["end_time"])-strtotime(date("Y-m-d H:i:s")));
    if (strtotime ($_SESSION["end_time"])<strtotime(date("Y-m-d H:i:s"))) {
        echo "00:00:00";
        // code...
    }
    else{
        echo $time1;
    }
}
 ?>