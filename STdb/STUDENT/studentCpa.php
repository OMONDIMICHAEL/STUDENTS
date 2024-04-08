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
        <script src = "../FUNCTIONS/studentsJsFunctions.js"></script>
    </head>
    <body>
        <!-- ///////////////////////////////////////////////////// -->
        <header><?php require("../HEADER/studentHeader.php"); ?></header>
        <!-- ////////////////////////////////////////////////////// -->
        <main>
    <article class="bodyContainer">
        <!-- ///////////////////////////////////////////////////////////// -->
    <form id="frm" method="POST" action="../ACTIONS/studentCpaAssignmentUpload.php" enctype="multipart/form-data">
        <section id="input">
            <p id="uploadAssignment">
                Upload an Assignment.
            </p>
             <!--it should appear on teachers assignment in student page.-->
            <input type="file" name="studentCpaFile" id="myTeacherfile" required>
            <br>
            <!--<label for="myTeacherfile" id="label">Must choose a file</label>--><br>
            <input type="text" id="descriptionn" name="describE" placeholder="Name the assignment here..." required>
        </section><br>
        <input type="submit" id="sbmt" name="submit" value="Upload the File!">
        <br>
    </form>
<!-- //////////////////////////////////////// -->
    <hr><hr>
    <!-- ////////////////////////////////////////////// -->
    <section class="userData">
        <button onclick="startCPACat1();" id="sbmt">
            CAT1.
        </button>
        <button onclick="startCPACat2();" id="sbmt">
            CAT2.
        </button>
    </section>
    <!-- //////////////////////////////////////////////// -->
    <section>
    <?php
        $sql = "SELECT teacherFile,describee from teacherCpaAssignmentUpload";
        $query = mysqli_query($con,$sql);
        while ($info = mysqli_fetch_array($query)){
            ?>
            <br><br>
        <a href = "../TeacherFile/<?php echo $info['teacherFile']; ?> " target="_blank"><?php echo $info['describee'];?></a>
        <hr>
        <?php
        }
        ?>
    </section>
    <!-- ///////////////////////////////////////////////////////////////// -->
    <?php require("../FOOTER/adFooter.php"); ?>
    </article>
    </main>
    <footer>
        <p><center><?php require("../FOOTER/footer.php"); ?></center></p>
    </footer>
    </body>
</html>