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
                    <form id="frm" method="POST" action="../ACTIONS/teacherNetworkAssignmentUpload.php" enctype="multipart/form-data">
                        <div id="input">
                            <p id="uploadAssignment">
                                Upload an Assignment/Notes.
                            </p>
                            <input type="file" name="teacherNetworkingFile" id="myTeacherfile" required>
                            <br><br>
                            <input type="text" id="descriptionn" name="describE" placeholder="Name the assignment here..." required>
                        </div><br>
                        <input type="submit" id="sbmt" name="submit" value="Upload the File!">
                        <br><br>
                    </form><br>
                    <div class="userData">
                        <a class="userData" href = "gradeNetwork.php">Add Course Work.</a>   <a class="userData" href = "finalGradeNetwork.php">Add Final Grade.</a>   <a class="userData" href = "exam_category.php">CAT(coming soon).</a>
                    </div><hr><hr>
                    <div class="files">
                <?php
                    $sql = "SELECT studentFile,describee,studentEmail from studentNetworkingAssignmentUpload";
                    $query = mysqli_query($con,$sql);        
                    while ($info = mysqli_fetch_array($query)){
                ?>
                    <br>
                    <?php echo $info['studentEmail'];?>
                    <br><br>
                    <a href = "../StudentFile/<?php echo $info['studentFile']; ?> " ><?php echo $info['describee'];?></a>
                    <br><br><hr>
                <?php
                    }
                ?>
                </div>
            </div>
            <?php require("../FOOTER/adFooter.php"); ?>
    </div>
    <p><center><?php require("../FOOTER/footer.php"); ?></center></p>
    </body>
</html>