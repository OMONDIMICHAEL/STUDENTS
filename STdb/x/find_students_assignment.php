<!DOCTYPE html>
	<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>
            Students Assignment.
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
   <div class="subDisplay">
        <?php
        session_start();
        include("CONNECTIONS/studentsConnection.php");
        include 'FUNCTIONS/studentsFunctions.php';
        //$userdata = checklogin($con);
        //$userdata = $queryUser['Email'];

        //$user = "SELECT Username from students";

        $sql = "SELECT studentFile,Descriptionn from studentsassignmentupload";
       // $queryUser = "select Email from students where id = '$i_d' limit 1";

        $query=mysqli_query ($con,$sql);
        
        while ($info = mysqli_fetch_array($query)){
            //echo $queryUser['Email'];
            echo $info['Descriptionn'];?><br><br><?php
            
        ?> 
        <embed type = "application/pdf" src = "StudentFile/<?php echo $info['studentFile']; ?>" ><hr>

        <?php
        //$userEmail = checkEmail($con);
        //echo "Hello #"; echo $userEmail['Email']; echo " you are online!";
        }

        ?>
    </div>
</body>
</html>