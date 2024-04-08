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
    <link rel="stylesheet" href="../CSS/students.css">
    <script type="text/javascript" src="../FUNCTIONS/studentsJsFunctions.js"></script>
</head>
<body>
    <header>
        <?php require("../HEADER/studentHeader.php") ?>
    </header>
    <main>
        <article>
            <section><button onclick="openJoinUserRoom()" id="joinRoombtn">Join Room.</button><button onclick="openCreateUserRoom()" id="createRoombtn">Create Room.</button></section>
        </article>
        <article id="createRoomArticle">
            <section>
                <form method="POST" action="../ACTIONS/createUserRoom.php">
                    <fieldset>
                        <legend>Fill in all the details.</legend>
                        <label for="roomNo" class="txt">Room Number.</label><br>
                        <input type="text" id="roomNo" name="roomNo" class="txt" placeholder="mjRoom202" required><br><br>
                        <label for="welcomeMessage" class="txt">Welcome Message.</label><br>
                        <input type="text" id="welcomeMessage" name="welcomeMessage" placeholder="hey i'm xxx welcome to my room" class="txt" required><br><br>
                        <label for="roomPassword" class="txt">Room Password.</label><br>
                        <input type="text" id="roomPassword" name="roomPassword" class="txt" required><br><hr>
                        <button name="submit" id="createbtn">CREATE!</button>
                    </fieldset>
                </form>
            </section>
        </article>
        <article id="joinRoomArticle">
            <section>
                <form method="POST" action="../ACTIONS/joinUserRoom.php">
                    <fieldset>
                        <legend>Fill in all the details.</legend>
                        <label for="roomNo" class="txt">Room Number.</label><br>
                        <input type="text" id="roomNo" name="roomNo" class="txt" placeholder="mjRoom202" required><br><br>
                        <label for="roomPassword" class="txt">Room Password.</label><br>
                        <input type="password" id="roomPassword" name="roomPassword" class="txt" required><br><hr>
                        <button name="submit" id="createbtn">JOIN!</button>
                    </fieldset>
                </form>
            </section>
        </article>
    </main>
    <footer>&copy; Copyright 2024</footer>
</body>
</html>