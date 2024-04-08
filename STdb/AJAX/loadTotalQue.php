<?php include("../SESSION/session.php"); ?>
<?php
    //<<<<<<<<<<<*mikemike3662@gmail.com*>>>>>>>>>>>>
    //<<<<<<<<<<<*mikemike3662@gmail.com*>>>>>>>>>>>>  
    
    include("../CONNECTIONS/studentsConnection.php");
    include("../FUNCTIONS/studentsFunctions.php");
    $totalQue  = 0;
    //$catt = $_GET['examCategory'];
        $sql = ("SELECT * from catQuestions where category = '$_SESSION[exam_category]' ");
        $query = mysqli_query($con,$sql);        
        $totalQue = mysqli_num_rows($query);
        echo $totalQue;
        ?>