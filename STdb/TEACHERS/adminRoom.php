<?php
require("../SESSION/session.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>virtual school</title>
    <link rel="icon" href="../IMAGES/schoolLogo.jpg" type="image/x-icon">
    <link rel="stylesheet" href="../CSS/teachers.css">
    <script type="text/javascript" src="../FUNCTIONS/teachersJsFuntions.js"></script>
</head>
<body>
    <header>
        <?php require("../HEADER/teacherHeader.php"); ?>
    </header>
    <main>
        <article>
            <section>
            <?php
                        $roomNum = $_GET['roomNo']; ?>
                <form method="POST" action="../ACTIONS/sendMessage.php?roomNo=<?php echo $roomNum ?>">
                    <?php
                        // $roomNum = $_GET['roomNo'];
                        /*$message = $con->prepapre("SELECT * FROM createRoomtbl WHERE roomNo = ?");
                        $message->bind_param("s", $roomNum);
                        $message->execute();
                        $messages = $message->get_result();
                        $wroteMessage = mysqli_fetch_assoc($messages);
                        echo $wroteMessage['welcomeMessage'];*/
                        $message = "SELECT * FROM createRoomtbl WHERE roomNo = '$roomNum'";
                        $messages=mysqli_query($con,$message);
                        while ($wroteMessage=mysqli_fetch_assoc($messages)) {
                            ?>
                                <section id="messageSection">
                                    <span id="user"><?php
                                        echo $wroteMessage['user'];?></span><br><span id="message"><?php
                                        echo $wroteMessage['welcomeMessage']; 
                                    ?></span>
                                    <br>
                                </section><hr>
                            <?php
                        }
                    ?><br>
                    <input type="text" id="messageTextbox" name="textMessage" placeholder="write a message" required>
                    <button name="submit" id="chartbtn">CHART.</button>
                </form>
            </section>
        </article>
    </main>
    <footer>
        &copy; Copyright 2024.
    </footer>
</body>
</html>