



<!DOCTYPE html>
	<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>
            Exam Portal.
        </title>
        <link rel="stylesheet" href="CSS/teacherExamPortal.css">
    </head>
    <body>
        <div class="topbarContainer">
            <div class="topbarLeft">
                <image src="IMAGES/schoolLogo.jpg" class="schoolLogo" alt="logo">
                    <p><a href="home.php">HOME.</a>  <a href="teachers.php">TEACHERS.</a>  <a href="students.php">STUDENTS.</a>  <a href="elibrary.php">E-LIBRARY.</a>  <br><br><a href="##">FEE PORTAL.</a>  <a href="studentExamPortal.php">EXAM PORTAL.</a>  <a href="SECURITY/teachersLogOut.php">LOG OUT.</a>  <button onclick="darkMode()">Dark-mode.</button></p>
                    <script>
                        function darkMode() {
                        var element = document.body;
                        element.classList.toggle("dark-mode");
                            }
                        </script>
                </div></div>
    <div class="bodyContainer"><hr>
        <div class="assignmentDiv">
            <a href="studentAssignment1.php" class="examLink">
                Assignment 1.
            </a>
        </div><hr><br>
        <div class="assignmentDiv">
            <a href="studentCat1.php" class="examLink">
                Cat 1.
            </a>
        </div><hr>
    </div>
<p><center><?php include("footer.php"); ?></center></p>
    </body>
    </html>