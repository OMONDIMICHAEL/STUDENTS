<?php
require("../SESSION/session.php");
require("../CONNECTIONS/studentsConnection.php");
require("../FUNCTIONS/studentsFunctions.php");
$userdata = checklogin($con);

if (isset($_POST['submit'])) {
    $roomNo = filter_var($_POST['roomNo'], FILTER_SANITIZE_STRING);
    $welcomeMessage = filter_var($_POST['welcomeMessage'], FILTER_SANITIZE_STRING);
    $roomPassword = filter_var($_POST['roomPassword'], FILTER_SANITIZE_STRING);
    $user = filter_var($userdata['Email'], FILTER_SANITIZE_STRING);
    
    $createQuery = $con->prepare("INSERT INTO createRoomtbl(roomNo,welcomeMessage,roomPassword,user) VALUES(?,?,?,?)");
    $createQuery->bind_param("ssss", $roomNo,$welcomeMessage,$roomPassword,$user);
    $createQuery->execute();
    ?>
        <script>
            alert("Room Created Succesfully.");
            location="../STUDENT/userChartRoom.php";
        </script>
    <?php
}

?>