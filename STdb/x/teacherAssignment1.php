



<!DOCTYPE html>
	<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>
            Teachers Homepage.
        </title>
        <link rel="stylesheet" href="CSS/teacherAssignment1.css">
    </head>
    <body>
        <div class="topbarContainer">
            <div class="topbarLeft">
                <image src="IMAGES/schoolLogo.jpg" class="schoolLogo" alt="logo">
                    <p><a href="home.php">HOME.</a>  <a href="teachers.php">TEACHERS.</a>  <a href="students.php">STUDENTS.</a>  <a href="elibrary.php">E-LIBRARY.</a>  <br><br><a href="##">FEE PORTAL.</a>  <a href="teacherExamPortal.php">EXAM PORTAL.</a>  <a href="SECURITY/teachersLogOut.php">LOG OUT.</a>  <button onclick="darkMode()">Dark-mode.</button></p>
                    <script>
                        function darkMode() {
                        var element = document.body;
                        element.classList.toggle("dark-mode");
                            }
                        </script>
                </div></div>
    <div class="bodyContainer">
        <form id="frm" method="post" enctype="multipart/form-data">
        <div class="welcome">
            welcome Back <?php echo $userdata['Username'];?>
        </div>
        <div id="input">
            <p id="uploadAssignment">
                Upload an Assignment.
            </p>
             <!--it should appear on teachers assignment in student page.-->
            <input type="file" name = "teacherFile" id="myTeacherfile" required>
            <br>
            <label for="myTeacherfile" id="label">Must choose a file</label><br>
            <input type="text" id="descriptionn" name="describe" placeholder="Name the assignment here..." required>
        </div><br>
        <input type="submit" id="sbmt" name="submit" value="Upload the File!">
        <br>
    </form>
    </div>
<p><center><?php include("footer.php"); ?></center></p>
    </body>
    </html>