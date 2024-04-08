<article class="topbarContainer">
            <section class="inContainer">
                <section class="topbarLeft">
                                <image src="../IMAGES/schoolLogo.jpg" class="schoolLogo" alt="logo">|
                            <a class="topBarLink" href="teachers.php" title="go to your units">DASHBOARD.</a>|
                            <a class="topBarLink" href="teacherElibrary.php" title="upload papers to the library">LIBRARY.</a>|
                            <a class="topBarLink" href="../ACCOUNTANT/schoolAccountant.php" title="record student fee payment">ACCOUNTANT.</a>|
                            <a class="topBarLink" href="javascript:void(0)" onclick="openRoom()">CHART ROOM.</a>|
                            <a class="topBarLink" href="admin.php" title="view and edit timetable">TIMETABLE.</a>|
                            <a class="topBarLink" href="../SECURITY/teachersLogOut.php" title="log out">SIGN OUT.</a>|
                </section><hr>
                    <?php
                    //<<<<<<<<<<<*mikemike3662@gmail.com*>>>>>>>>>>>>
                    //<<<<<<<<<<<*mikemike3662@gmail.com*>>>>>>>>>>>>
                    require("../CONNECTIONS/teachersConnection.php");
                    require("../FUNCTIONS/teachersFunctions.php");
                    ?>
                    <section class= "userData">
                        <?php
                            $userdata = checklogin($con);
                            if(!isset($_SESSION['no'])){
                                session_destroy();
                                session_unset();
                        ?>
                            <script>window.location = "../SECURITY/teachersLogIn.php";</script>
                        <?php
                            die;
                            }
                            elseif (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 3600)) {
                                session_destroy();
                                session_unset();
                                ?><script>window.location = "../SECURITY/teachersLogIn.php";</script><?php
                            }
                            $_SESSION['LAST_ACTIVITY'] = time();
                            echo "Hello #";?><a class="userData" href="mailto:<?php $userdata = checklogin($con); echo $userdata['Email']; ?>"><?php echo $userdata['Email'] ?></a><?php echo " you are online!";
                        ?>
                            <img src="../IMAGES/smiley.png" alt="greetings" class="likeIcon"/>
                    </section><hr><hr>
            </section>
        </article>