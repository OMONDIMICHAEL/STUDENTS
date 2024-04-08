<article class="topbarContainer">
             <section class="inContainer">
                <section class="topbarLeft">
                            <img src="../IMAGES/schoolLogo.jpg" class="schoolLogo" alt="logo" onclick="show()" id="logoIcon">
                            <a class="topBarLink" href="students.php">DASHBOARD.</a>|
                            <a class="topBarLink" href="studentElibrary.php">LIBRARY.</a>|
                            <a class="topBarLink" href="studentFee.php">FEES.</a>|
                            <a class="topBarLink" href="javascript:void(0)" onclick="openUserRoom()">CHART ROOM.</a>|
                            <a class="topBarLink" href="timetable.php">TIMETABLE.</a>|
                            <a class="topBarLink" href = "../SECURITY/studentsLogOut.php">SIGN OUT.</a>|
                </section><hr>
        
                    <section class= "userData">
                        <?php
                            require("../CONNECTIONS/studentsConnection.php");
                            require("../FUNCTIONS/studentsFunctions.php");
                            //userdata is all the details of the person logged in
                            $userdata = checklogin($con);
                            if(!isset($_SESSION['no'])){
                                session_destroy();
                                session_unset();
                                //if there is no session then means the person is not logged in so take the person to login page
                            ?>
                            <script>window.location = "../SECURITY/studentsLogIn.php";</script>
                            <?php
                            die;
                            }
                            elseif (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 3600)) {
                                //if the session has been inactive for more than one hour then destroy the session so the user logs in again
                                session_destroy();
                                session_unset();
                                ?><script>window.location = "../SECURITY/studentsLogIn.php";</script><?php
                            }
                            //return the session's last active time to the current time
                            $_SESSION['LAST_ACTIVITY'] = time();
                            echo "Hello #";?><a class="userData" href="mailto:<?php $userdata = checklogin($con); echo $userdata['Email']; ?>"><?php echo $userdata['Email'] ?></a><?php echo " you are online!";
                        ?>
                            <img src="../IMAGES/smiley.png" alt="greetings" class="likeIcon"/>
                    </section><hr><hr>
            </section>
        </article>