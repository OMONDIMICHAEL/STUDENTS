<?php require("../SESSION/session.php"); ?>
<?php
//include_once("../urlScript.php");  
//strip_php_extension();
?>
<!--
    <<<<<<<<<<<*mikemike3662@gmail.com*>>>>>>>>>>>>
    <<<<<<<<<<<*mikemike3662@gmail.com*>>>>>>>>>>>>  -->
<!DOCTYPE html>
	<html lang="en" dir="ltr">
        <head> 
    <meta charset = "UTF-8">
    <meta name="author" content="mikemike3662@gmail.com">
    <meta name="description" content="This is a virtual school">
<title>
    virtual school.
</title>
<link rel="icon" href="../IMAGES/schoolLogo.jpg" type="image/x-icon">
            <link rel="stylesheet" href="../CSS/teachers.css">
            <script type="text/javascript" src = "../FUNCTIONS/teachersJsFunctions.js"></script>
        </head>
    <body>
                <?php require("../HEADER/teacherHeader.php"); ?>
    <div class="bodyContainer">
            <div class="courseRegister">
                <form action="../ACTIONS/teacherRegisterUnit.php" method="post">
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
                    <!-- <input type="text" name="unitName" id="stage" required placeholder="Enter Unit Name."> -->
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
            </div><br><br>
            <div class="files">
                <?php
                    $userdata = checklogin($con);
                    $enet = $userdata['Email'];
                    $sql = "SELECT UnitLink,UnitName from teacherUnitRegistration where Email='$enet'";
                    $query=mysqli_query($con,$sql);
                    while ($info = mysqli_fetch_array($query)){
                ?>
                    <br>
                    <a class="unitLink" href="<?php echo $info['UnitLink'];?>"><?php echo $info['UnitName'];?></a>
                    <br><br><hr>
                <?php
                    }
                ?>
                </div>
                <?php require("../FOOTER/adFooter.php"); ?>
    </div>
<p><center><?php require("../FOOTER/footer.php"); ?></center></p>
    </body>
    </html>