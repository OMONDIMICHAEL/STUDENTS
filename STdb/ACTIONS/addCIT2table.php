<?php
    require("../CONNECTIONS/teachersConnection.php");
    require("../FUNCTIONS/teachersFunctions.php");
// /////////////////////////////////////////////////////////////
if (isset($_POST['submit'])) {
$number = $_POST['no'];
$day = $_POST['day'];
$time = $_POST['time'];
$room = $_POST['room'];
$hours = $_POST['hours'];
$lecname = $_POST['lecname'];
$unitname = $_POST['unitname'];
$unitcode = $_POST['unitcode'];
// ///////////////////////////////////////////////////////////////
$cit2Query = ("INSERT INTO cit2(no,day,time,room,hours,lecname,unitname,unitcode) values('$number','$day','$time','$room','$hours','$lecname','$unitname','$unitcode')");
mysqli_query($con,$cit2Query);
echo "Success... Thank you!";
echo '<a href = ../TEACHERS/admin.php>'; echo "Back to DASHBOARD."; echo '</a>';
}
?>