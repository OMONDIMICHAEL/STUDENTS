<?php
    require("../CONNECTIONS/teachersConnection.php");
    require("../FUNCTIONS/teachersFunctions.php");
if (isset($_POST['submit'])) {
    $day = $_POST['day'];
    $time = $_POST['time'];
    $room = $_POST['room'];
    $hours = $_POST['hours'];
    $lecname = $_POST['lecname'];
    $unitname = $_POST['unitname'];
    $unitcode = $_POST['unitcode'];
    $updatetable = "UPDATE cit2 set day = '$day', time = '$time', room = '$room', hours = '$hours', lecname = '$lecname', unitname = '$unitname', unitcode = '$unitcode' where no = $_POST[no]";
    mysqli_query($con,$updatetable);
echo "Success... Thank you!";
echo '<a href = ../TEACHERS/admin.php>'; echo "Back to DASHBOARD."; echo '</a>';
}
?>