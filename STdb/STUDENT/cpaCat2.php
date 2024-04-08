<?php include("../SESSION/session.php"); ?>
<?php
//include_once("../urlScript.php");  
//strip_php_extension();
?>
<!--
    <<<<<<<<<<<*mikemike3662@gmail.com*>>>>>>>>>>>>
    <<<<<<<<<<<*mikemike3662@gmail.com*>>>>>>>>>>>>  -->
    <!DOCTYPE html>
    <html lang="en" dir="ltr">
    <head> 
    <meta charset = "UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="mikemike3662@gmail.com">
    <meta name="description" content="This is a virtual school">
<title>
    virtual school.
</title>
<link rel="icon" href="../IMAGES/schoolLogo.jpg" type="image/x-icon">
        <link rel="stylesheet" href="../CSS/teacherNetworking.css">

    </head>
    <body>
<!-- ///////////////////////////////////////////////////////// -->
        <header><?php require("../HEADER/studentHeader.php"); ?></header>
<!-- ///////////////////////////////////////////////////////// -->
<main>
    <article class="bodyContainer">
<!-- ////////////////////////////////////////////////////////// -->
        <section class="app">
            <h1 id="countDownTimer"></h1>
<!-- //////////////////////////////////////////////////////// -->
            <section class="quiz">
                <h2 id="networkingCat1Question"></h2>
<!-- /////////////////////////////////////////////////////////// -->
                <section id="answer-buttons">
                    <button class="btn"></button>
                    <button class="btn"></button>
                    <button class="btn"></button>
                </section>
<!-- //////////////////////////////////////////////////////////////// -->
                <button id="next-btn">next</button>
<!-- /////////////////////////////////////////////////////////////////// -->
                <form method="post" action="../ACTIONS/submitCpaCat2.php">
                    <input type="text" name="catScore" id="scores" style="display:none;">
                    <input type="text" value="CPA" name="userUnit" id="userUnit" style="display:none;">
                    <p id="timeOut" class="blink"></p>
                    <input type="submit" name="submit" value="SUBMIT CAT." id="sbmt" style="display: none;">
                </form>
            </section>
        </section>
                <?php require("../FOOTER/adFooter.php"); ?>
    </article>
    </main>
    <footer>
        <p><center><?php require("../FOOTER/footer.php"); ?></center></p>
    </footer>
    <script src = "../FUNCTIONS/studentsJsFunctions.js"></script>
    <script src = "../JAVASCRIPT/networkingCat2Questions.js"></script>   
    
</body>
</html>