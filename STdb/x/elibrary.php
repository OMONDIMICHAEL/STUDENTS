<!DOCTYPE html PUBLIC"-//W3C//DTD XHTML 1.0 Transitions" "http://www.w3.org/TR/xhtml1/DTD/xhtml-transitional.dtd">
	<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>
            E-library Homepage
        </title>
        <link rel="stylesheet" href="CSS/elibrary.css">
        
    </head>
    <body>
        <div class="topbarContainer">
            <div class="topbarLeft">
                <image src="IMAGES/schoolLogo.jpg" class="schoolLogo" alt="logo">
                    <p><a href="home.php">HOME.</a>  <a href="teachers.php">TEACHERS.</a>  <a href="students.php">STUDENTS.</a>  <a href="elibrary.php">E-LIBRARY.</a>  <br><br><a href="##">FEE PORTAL.</a>  <a href="##">EXAM PORTAL.</a>  <button onclick="darkMode()">Dark-mode.</button></p>
                    <script>
                        function darkMode() {
                        var element = document.body;
                        element.classList.toggle("dark-mode");
                            }
                        </script>
                </div></div>
    <div class="bodyContainer">
        <div class="search">
            <!--the search button-->
        <input type="text" placeholder="type any paper..." class="searchBox" name="search">
        <button type="submit" class="searchButton" >
            <i class="fa fa-search">
                search
            </i>
        </button>
        </div>
        <div class="libContainer">
            <div class="computerScience" id="libContent">
                Computer Science.
            </div>
            <div class="cpa" id="libContent">
                Certified Personal Accountant.
            </div>
            <div class="it" id="libContent">
                Information Technology.
            </div>
            <div class="education" id="libContent">
                Education.
            </div>
        </div>
    </div>
    <?php
session_start();
include("CONNECTIONS/studentsConnection.php");
include("FUNCTIONS/studentsFunctions.php");

$userdata = checklogin($con);
echo "Hello #"; echo $userdata['Email']; echo " you are online!";

?>

    <p><center><?php include("footer.php"); ?></center></p>
    </body>
    </html>