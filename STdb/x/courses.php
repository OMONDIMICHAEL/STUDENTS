





<!DOCTYPE html PUBLIC"-//W3C//DTD XHTML 1.0 Transitions" "http://www.w3.org/TR/xhtml1/DTD/xhtml-transitional.dtd">
	<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>
            School Homepage.
        </title>
        <link rel="stylesheet" href="CSS/home.css">
    </head>
    <body>
        <div class="topbarContainer">
            <div class="topbarLeft">
                <image src="IMAGES/schoolLogo.jpg" class="schoolLogo" alt="logo">
                    <p><a href="home.php">HOME.</a>  <a href="teachers.php">TEACHERS.</a>  <a href="students.php">STUDENTS.</a>  <a href="elibrary.php">E-LIBRARY.</a>  <br><br><a href="##">FEE PORTAL.</a>  <a href="##">EXAM PORTAL.</a>  <a href="courses.php">COURSES.</a>  <a href="SECURITY/schoolLogOut.php">LOG OUT.</a>  <button onclick="darkMode()">Dark-mode.</button></p>
                    <script>
                        function darkMode() {
                        var element = document.body;
                        element.classList.toggle("dark-mode");
                            }
                        </script>
            </div></div> 
            <div class="bodyContainer">
            <div>
        <?php
       session_start();
        include ("CONNECTIONS/studentsConnection.php");
        include ("FUNCTIONS/studentsFunctions.php");
        $userdata = checklogin($con);
        $enet = $userdata['Email'];

        $sql = "SELECT unitName from unitRegistration where Email='$enet'";
        //$ssql = "SELECT Descriptionn from teachersassignmentupload";

        $query=mysqli_query($con,$sql);
        
        while ($info = mysqli_fetch_array($query)){
            //echo $info['Descriptionn'];?><?php
        ?>
        <!--<embed type = "application/pdf" src = "TeacherFile/">-->
        <?php echo $info['unitName']; ?><hr>

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