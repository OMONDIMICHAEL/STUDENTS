<?php
require("../SESSION/session.php");
require("../CONNECTIONS/teachersConnection.php");
require("../FUNCTIONS/teachersFunctions.php");
$userdata = checklogin($con);

if (isset($_POST['submit'])) {
    $roomNo = filter_var($_POST['roomNo'], FILTER_SANITIZE_STRING);
    $roomPassword = filter_var($_POST['roomPassword'], FILTER_SANITIZE_STRING);
    $user = filter_var($userdata['Email'], FILTER_SANITIZE_STRING);

    $queryRoomstbl = $con->prepare("SELECT * FROM createRoomtbl WHERE roomNo = ?");
    $queryRoomstbl->bind_param("s", $roomNo);
    $queryRoomstbl->execute();
    $rooms=$queryRoomstbl->get_result();

    if ($rooms) {
        if ($rooms && mysqli_num_rows($rooms)>0) {
            $roomNums=mysqli_fetch_assoc($rooms);
            if ($roomNums['roomPassword'] === $roomPassword) {
                ?>
                <script>
                    window.location = "../TEACHERS/adminRoom.php?roomNo=<?php echo $roomNums['roomNo'] ?>";
                </script>
                <?php
                die;
            }
            else {
                ?>
                <script>
                    window.alert("Invalid Password");
                    window.location = "../TEACHERS/adminChartRoom.php";
                </script>
                <?php
            }
        }
        else {
            ?>
            <script>
                window.alert("Invalid Room Number");
                window.location = "../TEACHERS/adminChartRoom.php";
            </script>
            <?php
        }
    }

}

?>