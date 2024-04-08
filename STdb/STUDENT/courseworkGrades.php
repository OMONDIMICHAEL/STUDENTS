<?php require("../SESSION/session.php"); ?>
<?php
//include_once("../urlScript.php");  
//strip_php_extension();
?>
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
        <link rel="stylesheet" href="../CSS/students.css">
        <script src = "../FUNCTIONS/studentsJsFunctions.js"></script>
    </head>
    <body>
<!-- /////////////////////////////////////////////////////////// -->
        <header><?php require("../HEADER/studentHeader.php"); ?></header>
<!-- //////////////////////////////////////////////////////////// -->
<main>
    <article class="bodyContainer">
<!-- ////////////////////////////////////////////////////////// -->
        <section class="courseRegister">
            <form action="../ACTIONS/registerCoursework.php" method="post">
                <select name="courseUnit" id="stage" required>
                    <option value="">
                        click to choose a unit.
                    </option>
                    <option value="Networking" name="courseUnit">
                        Networking.
                    </option>
                    <option value="Cabling" name="courseUnit">
                        Cabling.
                    </option>
                    <option value="CPA" name="courseUnit">
                        CPA.
                    </option>
                </select>
                <input type="text" name="enrollKey" id="stage" required placeholder="Enter Coursework Key.">
                <input type="text" name="Ass1" value="0" style="display:none;">
                <input type="text" name="Ass2" value="0" style="display:none;">
                <input type="text" name="Cat1" value="0" style="display:none;">
                <input type="text" name="Cat2" value="0" style="display:none;">
                <input type="text" name="mainExam" value="0" style="display:none;">
                <input type="submit" value="Enroll Coursework." class="submitRegister">
            </form>
        </section>
<!-- ///////////////////////////////////////////////////////// -->
        <section id="tableCoursework">
<!-- ///////////////////////////////////////////////////////////// -->
          <table id="printTable" border = "2">
            <tr>
                <th>
                    Unit Name.
                </th>
                <th>
                    Assignment1.
                </th>
                <th>
                    Assignment2.
                </th>
                <th>
                    Cat1.
                </th>
                <th>
                    Cat2
                </th>
                <th>
                    Total.
                </th>
            </tr>
<!-- //////////////////////////////////////////////////// -->
            <?php
                    /*<<<<<<<<<<<*mikemike3662@gmail.com*>>>>>>>>>>>>
                    <<<<<<<<<<<*mikemike3662@gmail.com*>>>>>>>>>>>> */
                $userdata = checklogin($con);
                $userEmail = $userdata['Email'];
                $query = "SELECT * FROM networkingGrades WHERE userName = '$userEmail'";
                $userDataQuery = mysqli_query($con,$query);
                $totalData = mysqli_num_rows($userDataQuery);
                if ($totalData != 0)
                {
                    while ($result = mysqli_fetch_assoc($userDataQuery))
                    {
                        echo "
                        <tr>
                        <td>".$result['unitName']."</td>
                        <td>".$result['Ass1']."</td>
                        <td>".$result['Ass2']."</td>
                        <td>".$result['Cat1']."</td>
                        <td>".$result['Cat2']."</td>
                        <td>".$result['Cat1'] + $result['Cat2'] + $result['Ass1'] + $result['Ass2']."</td>
                        </tr>
                        ";
                    }
                }
                else 
                echo "SORRY, Course Work Not Graded Yet.";
            ?>
<!-- ////////////////////////////////////////////////////////// -->
            <button class="submitRegister" onclick="printCoursework()">
                Print Coursework.
            </button>
<!-- ////////////////////////////////////////////////////////// -->
          </table>
        </section>
        <br><br>
<!-- ///////////////////////////////////////////////////////////////////// -->
        <?php require("../FOOTER/adFooter.php"); ?>
</article>
</main>
<footer>
    <p><center><?php require("../FOOTER/footer.php"); ?></center></p>
</footer>
</body>
</html>