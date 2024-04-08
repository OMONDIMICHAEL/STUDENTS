<?php require("../SESSION/session.php"); ?>
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
                            <form action = "../ACTIONS/finalTeacherCpaGrade.php" method="post">
                                <h>CPA Final Grade.</h><br><hr>
                                    <input type="text" name="userEmail" id="stage" required placeholder="Enter Student Email.">
                                    <select id="stage" name="userUnit">
                                        <option value="CPA" name="userUnit">CPA</option>
                                    </select>
                                    <input type="text" name="mainExam" id="stage" required placeholder="Enter The Exam marks."><br><br>
                                    <input type="submit" value="Add CPA Marks." class="submitRegister"><hr><hr><br>
                            </form>
                        </div>
        <?php include("../FOOTER/adFooter.php"); ?>
</div>
<p><center><?php include("../FOOTER/footer.php"); ?></center></p>
    </body>
</html>