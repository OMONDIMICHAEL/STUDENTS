<?php require("../SESSION/session.php"); ?>
<?php
//include_once("../urlScript.php");  
//strip_php_extension();
?>
<!DOCTYPE html>
	<html lang="en" dir="ltr">
	<head> 
    <meta charset = "UTF-8">
    <meta name="author" content="mikemike3662@gmail.com">
    <meta name="description" content="This is a virtual school">
<title>
    virtual school.
</title>
<link rel="icon" href="../IMAGES/schoolLogo.jpg" type="image/x-icon">
        <link rel="stylesheet" href="../CSS/teacherNetworking.css">
        <script src = "../FUNCTIONS/teachersJsFunctions.js"></script>
    </head>
    <body>
                <?php require("../HEADER/teacherHeader.php"); ?>
    <div class="bodyContainer">
                <div class="courseGrade">
                    <form action = "../ACTIONS/teacherCpaGradeAss1.php" method="post">
                        <h>CPA Coursework.</h><br><hr>
                            <input type="text" name="userEmail" id="stage" required placeholder="Enter Student Email.">
                            <select id="stage" name="userUnit">
                                <option value="CPA" name="userUnit">Assignment1</option>
                            </select>
                            <input type="text" name="Ass1" id="stage" required placeholder="Enter Assignment1 marks."><br><br>
                            <input type="submit" value="Add Assignment1 Marks." class="submitRegister"><hr><hr><br>
                    </form>
                </div>
            <div class="courseGrade">
                    <form action = "../ACTIONS/teacherCpaGradeAss2.php" method="post">
                            <input type="text" name="userEmail" id="stage" required placeholder="Enter Student Email.">
                            <select id="stage" name="userUnit">
                                <option value="CPA" name="userUnit">Assignment2</option>
                            </select>
                            <input type="text" name="Ass2" id="stage" required placeholder="Enter Ass2 marks."><br><br>
                            <input type="submit" value="Add Assignment2 Marks." class="submitRegister">
                    </form>
            </div>
        <?php include("../FOOTER/adFooter.php"); ?>
    </div>
<p><center><?php include("../FOOTER/footer.php"); ?></center></p>
    </body>
</html>