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
<!-- //////////////////////////////////////////// -->
        <header><?php require("../HEADER/studentHeader.php"); ?></header>
<!-- //////////////////////////////////////////////////// -->
<main>
    <article class="bodyContainer">
<!-- ///////////////////////////////////////////// -->
        <button class="submitRegister" onclick="printCoursework()">Print Slip.</button>
<!-- /////////////////////////////////////////////////// -->
            <section id="tableCoursework">
                <section id="printTable">
                      <table class="t" border = "1">
                        <caption>
                            <image src="../IMAGES/schoolLogo.jpg" class="schoolLogo" alt="logo" onclick="show()" id="logoIcon">
                        </caption>
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
                                Cat2.
                            </th>
                            <th>
                                Final Exam.
                            </th>
                            <th>
                                Total.
                            </th>
                            <th>
                                Grade.
                            </th>
                        </tr>
<!-- /////////////////////////////////////////////////////////////////////// -->
                    <?php
                        /*<<<<<<<<<<<*mikemike3662@gmail.com*>>>>>>>>>>>>
                        <<<<<<<<<<<*mikemike3662@gmail.com*>>>>>>>>>>>> */
                    $userdata = checklogin($con);
                    $userEmail = $userdata['Email'];
                    $query = "SELECT * FROM networkingGrades WHERE userName = '$userEmail'";
                    $userDataQuery = mysqli_query($con,$query);
                    $totalData = mysqli_num_rows($userDataQuery);
// //////////////////////////////////////////////////////////////
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
                            <td>".$result['mainExam']."</td>
                            <td>".$result['Cat1'] + $result['Cat2'] + $result['Ass1'] + $result['Ass2'] + $result['mainExam']."</td>
                            <td> "?><?php if($result['Cat1'] + $result['Ass1'] + $result['mainExam'] >= 100){ echo "A";} else if($result['Cat1'] + $result['Ass1'] + $result['mainExam'] >= 73){ echo "A-";} else if($result['Cat1'] + $result['Ass1'] + $result['mainExam'] >= 69){ echo "B+";} else if($result['Cat1'] + $result['Ass1'] + $result['mainExam'] >= 66){ echo "B";} else if($result['Cat1'] + $result['Ass1'] + $result['mainExam'] >= 63){ echo "B-";} else if($result['Cat1'] + $result['Ass1'] + $result['mainExam'] >= 59){ echo "C+";} else if($result['Cat1'] + $result['Ass1'] + $result['mainExam'] >= 56){ echo "C";} else if($result['Cat1'] + $result['Ass1'] + $result['mainExam'] >= 53){ echo "C-";} else if($result['Cat1'] + $result['Ass1'] + $result['mainExam'] >= 49){ echo "D+";} else if($result['Cat1'] + $result['Ass1'] + $result['mainExam'] >= 46){ echo "D";} else if($result['Cat1'] + $result['Ass1'] + $result['mainExam'] >= 43){ echo "D-";} else if($result['Cat1'] + $result['Ass1'] + $result['mainExam'] <= 39){ echo "F";}"</td>
                            </tr>
                            ";
                        }
                    }
// ///////////////////////////////////////////////////////////////////
                    else {
                    echo "SORRY, Final Exams Not Graded Yet.";
                    }
                    ?>
<!-- /////////////////////////////////////////////////////////////////////// -->
                <tr>
                    <table>
                <tr>
                            <td colspan="6"><br><p><?php
                echo "STUDENT EMAIL:    "; echo $userdata['Email'];?></p></td>
                        </tr>
                        <tr>
                            <td colspan="6"><p><?php
                echo "STUDENT NAME:    "; echo $userdata['Username'];?></p></td>
                        </tr>
                        <tr>
                            <td colspan="6"><p><?php
                echo "Dean School of Technology";?></p></td>
                        </tr>
                        <tr>
                            <td colspan="6"><p><?php
                echo "Sign:......................";?></p></td>
                        </tr>
                        <tr>
                            <td colspan="6"><p><?php
                echo "Date:",date("d-m-Y");?></p></td>
                        </tr>
                    </table>
                </tr>
                </table>
                </section>
            </section>
<!-- ///////////////////////////////////////////////////////////////////// -->
            <?php require("../FOOTER/adFooter.php") ?>
</article>
</main>
<footer>
    <p><center><?php require("../FOOTER/footer.php"); ?></center></p>
</footer>
</body>
</html>