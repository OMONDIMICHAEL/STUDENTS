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
        <!-- ///////////////////////////////////////////// -->
        <header><?php require("../HEADER/studentHeader.php"); ?></header>
        <!-- //////////////////////////////////////////////// -->
        <main>
<article class="bodyContainer">
    <!-- ////////////////////////////////////////////////////// -->
                    <form id="frm" method="POST" action = "../ACTIONS/studentNetworkAssignmentUpload.php" enctype="multipart/form-data">
                        <section id="input">
                            <p id="uploadAssignment">
                                Upload an Assignment.
                            </p>
                            <input type="file" name="studentNetworkingFile" id="myTeacherfile" required>
                            <br><br>
                            <input type="text" id="descriptionn" name="describE" placeholder="Name the assignment here..." required>
                        </section><br>
                        <input type="submit" id="sbmt" name="submit" value="Upload the File!">
                        <br>
                    </form>
                    <hr><hr>
                    <!-- /////////////////////////////////////////////// -->
                    <script type="text/javascript">
                        function openCat() {
                        window.location.href = "selectExam.php";
                    }
                    </script>
                    <!-- ///////////////////////////////////////////////// -->
                <section class="userData">
                    <button id="sbmt" onclick="openCat()">
                    not yet.
                    </button>
                    <button onclick="startCat1()" id="sbmt">
                        CAT1.
                    </button>
                    <button onclick="startCat2()" id="sbmt">
                        CAT2.
                    </button>
                </section>
            <!-- ///////////////////////////////////////////////////////////////// -->
    <section class="files">
            <?php
                $sql = "SELECT teacherFile,describee from teacherNetworkingAssignmentUpload";
                $query = mysqli_query($con,$sql);        
                while ($info = mysqli_fetch_array($query)){
                    ?>
                    <br>
                <a href = "../TeacherFile/<?php echo $info['teacherFile']; ?> " target="_blank"><?php echo $info['describee'];?></a><br><br><hr>
                <?php
                }
            ?>
    </section>
    <!-- ////////////////////////////////////////////////////////////////// -->
    <?php require("../FOOTER/adFooter.php"); ?>
</article>
</main>
<footer>
    <p class="copyright"><center><?php require("../FOOTER/footer.php"); ?></center></p>
</footer>
    <script src = "../FUNCTIONS/studentsJsFunctions.js"></script>
    </body>
</html>