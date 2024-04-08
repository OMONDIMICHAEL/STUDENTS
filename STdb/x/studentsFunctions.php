<?php
function checklogin($con){
if(isset($_SESSION['id'])){
    $i_d = $_SESSION['id'];

    $query = "select * from students where id = '$i_d' limit 1";

    $result = mysqli_query($con,$query);
    if($result && mysqli_num_rows($result) > 0){
        $userdata = mysqli_fetch_assoc($result);
        return $userdata;
    }
}

header("Location: studentsLogIn.php");

die;
}

/*function checkfile($con)
{
    if(isset($_SESSION['id'])){
        $i_d = $_SESSION['id'];
    
        $query = "select * from studentsassignmentupload where id = '$i_d' limit 1";
    
        $result = mysqli_query($con,$query);
        if($result && mysqli_num_rows($result) > 0){
            $userdata = mysqli_fetch_assoc($result);
            return $userfile;
        }
    }die;
}*/


?>