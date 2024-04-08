



<!DOCTYPE html PUBLIC"-//W3C//DTD XHTML 1.0 Transitions" "http://www.w3.org/TR/xhtml1/DTD/xhtml-transitional.dtd">
	<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>
            Upload Notes.
        </title>
        <link rel="stylesheet" href="CSS/teachers.css">
    </head>
    <body>
        <div class="topbarContainer">
            <div class="topbarLeft">
                <image src="IMAGES/schoolLogo.jpg" class="schoolLogo" alt="logo">
                    <p><a href="home.php">HOME.</a>  <a href="teachers.php">TEACHERS.</a>  <a href="students.php">STUDENTS.</a>  <a href="elibrary.php">E-LIBRARY.</a>  <br><br><a href="##">FEE PORTAL.</a>  <a href="##">EXAM PORTAL.</a>  <a href="SECURITY/teachersLogOut.php">LOG OUT.</a>  <button onclick="darkMode()">Dark-mode.</button></p>
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
            welcome Back <?php echo $userdata['username'];?>!
        </div>
        <div id="input">
            <p id="uploadNotes">
                Upload Notes below.
            </p>
             <!--it should appear on teachers notes in student page.-->
            <input type="file" name = "teacherFile" id="myTeacherfile" required>
            <br>
            <label for="myTeacherfile" id="label">Must choose a file</label>
        </div><br>
        <input type="submit" id="sbmt" name="submit" value="Upload the File!">
        <br>
    </form>
        <br>
        <a href="find_students_assignment.php" id="uplds">
                Find Students Submission.
        </a>
        <br>
    </div>

    <?php
session_start();
include("CONNECTIONS/teachersConnection.php");
include("FUNCTIONS/teachersFunctions.php");

$userdata = checklogin($con);

if($_SERVER ['REQUEST_METHOD']=="POST")
{
    //$teacherFile = $_POST['teacherFile'];
    $teacherFile = $_FILES['teacherFile']['name'];
    $teacherFile_type = $_FILES['teacherFile']['type'];
    $teacherFile_size = $_FILES['teacherFile']['size'];
    $teacherFile_tem_loc = $_FILES['teacherFile']['tmp_name'];
    $teacherFile_store = "TeacherFile/".$teacherFile;

    move_uploaded_file($teacherFile_tem_loc,$teacherFile_store);

    if(!empty($teacherFile))
    {
        $query = "INSERT INTO teachersnotesupload (teacherFile) values ('$teacherFile')";

        mysqli_query ($con,$query);
        die;
    }
    else
    {
        echo "wrong file type";
    }
}    

?>
    </body>
    </html>