<?php
require("../SESSION/session.php");
require("../CONNECTIONS/studentsConnection.php");
require("../FUNCTIONS/studentsFunctions.php");
if (isset($_POST['submit'])) {
    $userdata = checklogin($con);
    $messo = $_POST['textMessage'];
    $roomNum = $_GET['roomNo'];
    $user=$userdata['Email'];
    $getPassword="SELECT * FROM createRoomtbl WHERE roomNo = '$roomNum'";
    $password = mysqli_query($con,$getPassword);
    $roomPass=mysqli_fetch_assoc($password);
    $gotPass=$roomPass['roomPassword'];
    $writeText = "INSERT INTO createRoomtbl(roomNo,welcomeMessage,roomPassword,user) VALUES('$roomNum','$messo','$gotPass','$user')";
    mysqli_query($con,$writeText);
    ?>
    <script>
        window.location="../STUDENT/userRoom.php?roomNo=<?php echo $roomNum ?>";
    </script>
    <?php
    # code...
}


?>