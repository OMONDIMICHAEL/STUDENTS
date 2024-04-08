<?php
//<<<<<<<<<<<*mikemike3662@gmail.com*>>>>>>>>>>>>
//<<<<<<<<<<<*mikemike3662@gmail.com*>>>>>>>>>>>>
require("../SESSION/session.php");
require("../CONNECTIONS/teachersConnection.php");
require("../FUNCTIONS/teachersFunctions.php");
$userdata = checklogin($con);
if($_SERVER ['REQUEST_METHOD']=="POST")
{
    $courseUnit = filter_var($_POST['courseUnit'], FILTER_SANITIZE_STRING);
    $userEmail = filter_var($userdata['Email'], FILTER_SANITIZE_STRING);
    $enrollKey = filter_var($_POST['enrollKey'], FILTER_SANITIZE_STRING);
    $unitName = filter_var($_POST['unitName'], FILTER_SANITIZE_STRING);
    if(!empty($courseUnit))
    {
        $keyConfirm = $con->prepare("SELECT * from teacheUnitKey where UnitKey = ?");
        $keyConfirm->bind_param("s", $enrollKey);
        $keyConfirm->execute();
        $resultsKeyConfirm = $keyConfirm->get_result();
        if($resultsKeyConfirm)
        {
            if($resultsKeyConfirm && mysqli_num_rows($resultsKeyConfirm)>0)
            {
        $enrollConfirm = $con->prepare("SELECT * from teacherUnitRegistration where UnitLink = ? && Email = ?");
        $enrollConfirm->bind_param("ss", $courseUnit,$userEmail);
        $enrollConfirm->execute();
        $resultsEnrollConfirm = $enrollConfirm->get_result();
        if($resultsEnrollConfirm && mysqli_num_rows($resultsEnrollConfirm)>0)
            { ?><script> window.alert("Unit Already Registered!!");
                    window.location.href  = "../TEACHERS/teachers.php";
                </script>
             <?php die; }
 ?> <?php
        $query = $con->prepare("INSERT INTO teacherUnitRegistration(Email,UnitLink,UnitName) values (?,?,?)");
        $query->bind_param("sss", $userEmail,$courseUnit,$unitName);
        $query->execute();
        ?>
        <script> window.alert("Unit Added Successfully");
        window.location.href = "../TEACHERS/teachers.php";
        </script> 
        <?php
        die;
            }
        else{
            ?>
            <script> window.alert("Wrong Unit Key.");
            window.location.href  = "../TEACHERS/teachers.php";
            </script> 
            <?php
            die;
        }
        }
   }
}
?>