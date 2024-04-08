<?php
//<<<<<<<<<<<*mikemike3662@gmail.com*>>>>>>>>>>>>
//<<<<<<<<<<<*mikemike3662@gmail.com*>>>>>>>>>>>>
require("../SESSION/session.php");
        require ("../CONNECTIONS/teachersConnection.php");
        require ("../FUNCTIONS/teachersFunctions.php");
        if($_SERVER ['REQUEST_METHOD']=="POST")
        {
                $studentEmail = filter_var($_POST['userEmail'], FILTER_SANITIZE_STRING);
                $studentUnit = filter_var($_POST['userUnit'], FILTER_SANITIZE_STRING);
                $Ass1 = filter_var($_POST['Ass1'], FILTER_SANITIZE_STRING);
                
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

        $ass1Grade = $con->prepare("UPDATE networkingGrades set Ass1 = ?  where userName = ? && unitName = ?");
        $ass1Grade->bind_param("sss",$Ass1,$studentEmail,$studentUnit);
        $ass1Grade->execute();
        ?>
        <script> window.alert("Grade Added Successfully");
        window.location.href = "../TEACHERS/gradeCpa.php";
        </script> 
        <?php
        die;
                }
            
        else{
            ?>
            <script> window.alert("Invalid Information!!");
            window.location.href = "../TEACHERS/gradeCpa.php";
            </script> 
            <?php
            die;
        }
?>