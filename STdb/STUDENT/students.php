<?php
require("../SESSION/session.php");
?>
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
        <!-- ////////////////////////////////////////////// -->
        <header><?php require("../HEADER/studentHeader.php"); ?></header>
        <!-- ////////////////////////////////////////////// -->
        <main>
            <article>
                <section class="bodyContainer">
                    <!-- //////////////////////////////////////////////////// -->
                                <section class="courseRegister">
                                    <form action = "../ACTIONS/registerUnit.php" method="post">
                                        <select name="courseUnit" id="stage" required>
                                            <option value="">
                                                click to choose a unit.
                                            </option>
                                            <option value="studentNetworking.php" name="courseUnit">
                                                Networking.
                                            </option>
                                            <option value="studentCabling.php" name="courseUnit">
                                                Cabling.
                                            </option>
                                            <option value="studentCpa.php" name="courseUnit">
                                                CPA.
                                            </option>
                                        </select>
                                        <input type="text" name="enrollKey" id="stage" required placeholder="Enter Unit Key.">
                                        <select name="unitName" id="stage" required>
                                            <option value="">
                                                Enter Unit Name.
                                            </option>
                                            <option value="Networking." name="unitName">
                                                Networking.
                                            </option>
                                            <option value="Cabling." name="unitName">
                                                Cabling.
                                            </option>
                                            <option value="CPA." name="unitName">
                                                CPA.
                                            </option>
                                        </select>
                                        <input type="submit" value="Register Unit." class="submitRegister">
                                    </form>
                                </section><br>
                                <!-- ///////////////////////////////////////////-->
                                <section class="userData">
                                            <a href = "courseworkGrades.php" class="userData">
                                                My Course Work.
                                            </a>|
                                            <a href = "finalGrades.php" class ="userData">
                                                Final Results.
                                            </a>
                                </section>
                                <br><br>
                        <!-- ///////////////////////////////////////////////////// -->
                        <section class="files">
                            <?php
                                $userdata = checklogin($con);
                                $enet = $userdata['Email'];
                                //select units from unit registration registered by the email in the current session
                                $sql = "SELECT UnitLink,UnitName from unitRegistration where Email='$enet'";
                                $query=mysqli_query($con,$sql);
                                while ($info = mysqli_fetch_array($query)){
                                    //display the units with their corresponding unit names
                                    ?>
                                    <br>
                                        <a class="unitLink" href="<?php echo $info['UnitLink'];?>"><?php echo $info['UnitName'];?></a>
                                    <br><br><hr>
                                <?php
                                } 
                            ?>
                        </section>
                        <!-- ///////////////////////////////////////////////// -->
                            <?php require("../FOOTER/adFooter.php"); ?>
                </section>
            </article>
        </main>
        <footer>
            <p><center><?php require("../FOOTER/footer.php"); ?></center></p>
        </footer>
    </body>
    </html>
