<?php require ("../SESSION/session.php"); ?>
<?php
//<<<<<<<<<<<*mikemike3662@gmail.com*>>>>>>>>>>>>
//<<<<<<<<<<<*mikemike3662@gmail.com*>>>>>>>>>>>>
        require ("../CONNECTIONS/teachersConnection.php");
        require ("../FUNCTIONS/teachersFunctions.php");
        if($_SERVER ['REQUEST_METHOD']=="POST")
        {
            $userdata = checklogin($con);
    if(!isset($_SESSION['no'])){
        //$i_d = $_SESSION['id'];
        ?><script> window.alert("Failed!! You Must Login To Continue.");</script> <?php
    die;
    }
                $studentEmail = filter_var($_POST['userEmail'], FILTER_SANITIZE_STRING);
                $studentUnit = filter_var($_POST['userUnit'], FILTER_SANITIZE_STRING);
                $Ass2 = filter_var($_POST['Cat1'], FILTER_SANITIZE_STRING);

                $courseworkReg = $con->prepare("SELECT * FROM networkingGrades WHERE userName = ? && unitName = ?");
                $courseworkReg->bind_param("ss", $studentEmail,$studentUnit);
                $courseworkReg->execute();
                $resalt = $courseworkReg->get_result();
                $rowNum = $resalt->fetch_assoc();
                if ($rowNum < 1) {
                    ?>
                    <script type="text/javascript">
                        window.alert("The student has not enrolled on this unit yet");
                        window.location = "../TEACHERS/gradeNetwork.php";
                    </script>
                    <?php
                    die;
                }

        $ass2Grade = $con->prepare("UPDATE networkingGrades set Ass2 = ?  where userName = ? && unitName = ?");
        $ass2Grade->bind_param("sss", $Ass2,$studentEmail,$studentUnit);
        $ass2Grade->execute();
        ?>
            <script> window.alert("Grade Added Successfully");
                window.location.href = "../TEACHERS/gradeNetwork.php";
            </script> 
        <?php
        die;
        }    
        else {
            ?>
            <script> window.alert("Wrong Email type.");
            window.location.href = "../TEACHERS/gradeNetwork.php";
            </script> 
            <?php
            die;
        }
    ?>
