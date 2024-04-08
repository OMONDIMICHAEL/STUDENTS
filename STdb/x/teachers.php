



<!DOCTYPE html>
	<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>
            Teachers Homepage.
        </title>
        <link rel="stylesheet" href="CSS/teachers.css">
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
            <div class="courseRegister">
                <form action="ACTIONS/teacherRegisterUnit.php" method="post">
                <select name="courseUnit" id="stage" required>
                    <option value="">
                        click to choose a unit.
                    </option>
                    <option value="teacherNetworking.php" name="courseUnit">
                        Networking.
                    </option>
                    <option value="teacherCabling.php" name="courseUnit">
                        Cabling.
                    </option>
                    <option value="teacherCpa.php" name="courseUnit">
                        CPA.
                    </option>
                </select>
                <input type="text" name="enrollKey" id="stage" required placeholder="Enter Unit Key.">
                <input type="text" name="unitName" id="stage" required placeholder="Enter Unit Name.">
                <input type="submit" value="Register Unit." class="submitRegister">
                </form>
            </div>
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
        <!-- <p class="uploadnotes">
            Upload Notes.
        </p>
        it should appear on teachers notes in student page.
        <input type="file" id="myFile">
        <br>
        <label for="myFile" id="label">Must choose a File</label> <br><br>
        <input type="submit" id="sbmt" name="submit" value="Upload the File!">-->
    </form>
        <br>
        <a href="find_students_assignment.php" id="uplds">
                Find Students Submission.
        </a>
        <br><br><br>
        <a href="upload_notes.html" id="uplds">
                Upload Student Notes.
        </a>
    <br><br>
    <!--<a href="asigndisplay.php">egxampl</a>-->
<div>
    <?php
session_start();
include("CONNECTIONS/teachersConnection.php");
include("FUNCTIONS/teachersFunctions.php");


$userdata = checklogin($con);
echo "Hello #"; echo $userdata['Email']; echo " you are online!";

/*if($_SERVER ['REQUEST_METHOD']=="POST")
{
    $description = $_POST['describe'];
    $teacherFile = $_FILES['teacherFile']['name'];
    $teacherFile_type = $_FILES['teacherFile']['type'];
    $teacherFile_size = $_FILES['teacherFile']['size'];
    $teacherFile_tem_loc = $_FILES['teacherFile']['tmp_name'];
    $teacherFile_store = "TeacherFile/".$teacherFile;

    move_uploaded_file($teacherFile_tem_loc,$teacherFile_store);

    if(!empty($teacherFile))
    {
        $sql = "INSERT INTO teachersassignmentupload(teacherFile,Descriptionn) values ('$teacherFile','$description')";

       mysqli_query ($con,$sql);
       ?><script> window.alert("Submission Added Successfully");</script> <?php
        die;
    }
    else
    {
        ?><script> window.alert("Wrong File Type!!");</script> <?php
    }
} */   
?><hr><hr><?php
        $userdata = checklogin($con);
        $enet = $userdata['Email'];
        //$courseUnit = $_POST['courseUnit'];
        //$id = "select Unit from unitKey where Unitname = ['unitName']";
        //$result = mysqli_query($con,$id);
        
        $sql = "SELECT UnitLink,UnitName from teacherUnitRegistration where Email='$enet'";
        //$ssql = "SELECT Descriptionn from teachersassignmentupload";
        //$idquery = mysqli_query($con,$id);
        $query=mysqli_query($con,$sql);
        
        while ($info = mysqli_fetch_array($query)){
            //echo $info['Descriptionn'];?><?php
        ?><br>
        <!--<embed type = "application/pdf" src = "TeacherFile/">-->
        <?php //echo $info['unitName']; 
            ?><a href="<?php echo $info['UnitLink'];?>"><?php echo $info['UnitName'];?></a><?php
        ?><hr>

        <?php
        //$userEmail = checkEmail($con);
        //echo "Hello #"; echo $userEmail['Email']; echo " you are online!";
        }

        ?>
    </div>
    </div>
<p><center><?php include("footer.php"); ?></center></p>
    </body>
    </html>