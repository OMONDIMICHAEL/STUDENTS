<?php
//<<<<<<<<<<<*mikemike3662@gmail.com*>>>>>>>>>>>>
//<<<<<<<<<<<*mikemike3662@gmail.com*>>>>>>>>>>>>

// delete on deployment


session_start();
require("../CONNECTIONS/studentsConnection.php");
require("../FUNCTIONS/studentsFunctions.php");
if($_SERVER ['REQUEST_METHOD']=="POST")
{
    $description = filter_var($_POST['describe'], FILTER_SANITIZE_STRING);
    $studentFile = $_FILES['studentFile']['name'];
    $studentFile_type = $_FILES['studentFile']['type'];
    $studentFile_size = $_FILES['studentFile']['size'];
    $studentFile_tem_loc = $_FILES['studentFile']['tmp_name'];
    $studentFile_store = "../StudentFile/".$studentFile;
    if(!empty($studentFile))
    {
        $query = $con->prepare("INSERT INTO studentsassignmentupload(studentFile,Descriptionn) values (?,?)");
        $query->bind_param("ss",$studentFile,$description);
        move_uploaded_file($studentFile_tem_loc,$studentFile_store);    
        $query->execute();
        ?><script> window.alert("Submission Added Successfully");</script> <?php
        die;
    }
    else
    {
        ?><script> window.alert("Wrong File Type!!");</script> <?php
    }
}
?>