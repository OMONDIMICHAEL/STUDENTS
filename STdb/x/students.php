<!DOCTYPE html>
	<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>
            Students Homepage.
        </title>
        <link rel="stylesheet" href="CSS/students.css">
    </head>
    <body>
        <div class="topbarContainer">
            <div class="topbarLeft">
                <image src="IMAGES/schoolLogo.jpg" class="schoolLogo" alt="logo" onclick="show()" id="logoIcon">
                <script>
        function show() {
            /* Access image by id and change
            the display property to block*
            document.getElementById('logoIcon')
                .style.display = "block";
            document.getElementById('logoIcon')
                .style.display = "none";*/
        }
    </script>
                    <p><a href="home.php">HOME.</a>  <a href="teachers.php">TEACHERS.</a>  <a href="students.php">STUDENTS.</a>  <a href="elibrary.php">E-LIBRARY.</a>  <br><br><a href="##">FEE PORTAL.</a>  <a href="studentExamPortal.php">EXAM PORTAL.</a>  <a href="courses.php">COURSES.</a>  <a href="SECURITY/studentsLogOut.php">LOG OUT.</a>  <button onclick="darkMode()">Dark-mode.</button></p>
                    <script>
                        function darkMode() {
                        var element = document.body;
                        element.classList.toggle("dark-mode");
                            }
                    </script>
            </div>
        </div>
    <div class="bodyContainer">
        <div class="bodyContent">
            <div class="courseRegister">
                <form action="ACTIONS/registerUnit.php" method="post">
                <select name="courseUnit" id="stage" required>
                    <option value="">
                        click to choose a unit.
                    </option>
                    <option value="networking.php" name="courseUnit">
                        Networking.
                    </option>
                    <option value="cabling.php" name="courseUnit">
                        Cabling.
                    </option>
                    <option value="cpa.php" name="courseUnit">
                        CPA.
                    </option>
                    <option value="elibrary.php" id="stageg" name="courseUnit">
                        elib.
                    </option>
                    <option value="home.php" name="courseUnit">
                        home.
                    </option>
                </select>
                <input type="text" name="enrollKey" id="stage" required placeholder="Enter Unit Key.">
                <input type="text" name="unitName" id="stage" required placeholder="Enter Unit Name.">
                <input type="submit" value="Register Unit." class="submitRegister">
                </form>
            </div>
            <form action="ACTIONS/student.php" id="frm" method="post" enctype="multipart/form-data" >
            <div class="welcome">
                <!--welcome * <?php //session_start();
///include("studentsConnection.php");
//include("studentsFunctions.php"); $userdata = checklogin($con); echo $userdata['Email']; echo " you are online!";?>!-->
            </div>
            <div id="input">
                <p id="uploadAssignment">
                    Browse to sellect a file below.
                </p>
                <input type="file" name = "studentFile" id="myStudentfile" required><br>
                <label for="myStudentfile" id = "label">Must choose a File</label><br>
            <input type="text" id="descriptionn" name="describe" placeholder="Name the assignment here..." required>
            </div>
            <br>
            <input type="submit" name="submit" id="sbmt" value="Submit the File!">
        </form>
        
        <br>
            <a href="find_teachers_assignment.php" id="findAss">
                Find Teacher's Assignments.
            </a>
            <br><br><br>
            <a href="find_teachers_notes.html" id="findNotes">
                Find Teacher's Notes.
            </a>
            <br>
        </div>
<br>
        <div>
        <?php
       session_start();
        include ("CONNECTIONS/studentsConnection.php");
        include ("FUNCTIONS/studentsFunctions.php");

        $userdata = checklogin($con);
        echo "Hello #"; echo $userdata['Email']; echo " you are online!";
?><hr><hr><?php
        $userdata = checklogin($con);
        $enet = $userdata['Email'];
        //$courseUnit = $_POST['courseUnit'];
        //$id = "select Unit from unitKey where Unitname = ['unitName']";
        //$result = mysqli_query($con,$id);
        
        $sql = "SELECT UnitLink,UnitName from unitRegistration where Email='$enet'";
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