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
                $Ass2 = filter_var($_POST['Ass2'], FILTER_SANITIZE_STRING);

                $courseworkReg = $con->prepare("SELECT * FROM networkingGrades WHERE userName = ? && unitName = ?");
                $courseworkReg->bind_param("ss", $studentEmail,$studentUnit);
                $courseworkReg->execute();
                $resalt = $courseworkReg->get_result();
                $rowNum = $resalt->fetch_assoc();
                if ($rowNum < 1) {
                    ?>
                    <script type="text/javascript">
                        window.alert("The student has not enrolled on this unit yet");
                        window.location = "../TEACHERS/gradeCpa.php";
                    </script>
                    <?php
                    die; 
                }
                
        $Ass2Grade = $con->prepare("UPDATE networkingGrades set Ass2 = ? where userName = ? && unitName = ? ");
        $Ass2Grade->bind_param("sss",$Ass2,$studentEmail,$studentUnit);
        $Ass2Grade->execute();
        ?>
        <script> window.alert("Grade Added Successfully");
        window.location.href = "../TEACHERS/gradeCpa.php";
        </script> 
        <?php
        die;
                }
        else{
            ?>
            <script> window.alert("Invalid Information");
            window.location.href = "../TEACHERS/gradeCpa.php";
            </script> 
            <?php
            die;
        }
?>