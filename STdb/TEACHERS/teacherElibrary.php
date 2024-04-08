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
        <link rel="stylesheet" href="../CSS/elibrary.css">
        <!--<link rel="stylesheet" href="../CSS/teacherNetworking.css">-->
       <!-- <script src = "../FUNCTIONS/teachersJsFunctions.js"></script>-->
    </head>
    <body>
                <?php require("../HEADER/teacherHeader.php"); ?>
            <div class="bodyContainer">
                <div class="search"><center>
                    <form id="frm" method="POST" action = "../ACTIONS/teacherElibraryFileUpload.php" enctype="multipart/form-data">
                        <div id="input">
                            <h3>
                                UPLOAD REVISION MATERIALS TO THE VIRTUAL LIBRARY.
                            </h3>
                            <input type="file" name="teacherElibraryFile" id="myTeacherfile" required>
                            <br><br>
                            <input type="text" id="descriptionn" name="describE" placeholder="Name the file here..." required>
                        </div><br>
                        <input type="submit" id="sbmt" name="submit" value="Upload the File!">
                        <br>
                    </form></center>
                </div>
                <?php require("../FOOTER/adFooter.php"); ?>
            </div><br><br>
    
    <p><center><?php require("../FOOTER/footer.php"); ?></center></p>
    </body>
    </html>