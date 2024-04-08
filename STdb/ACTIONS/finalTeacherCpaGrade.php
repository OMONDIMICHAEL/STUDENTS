<?php
//<<<<<<<<<<<*mikemike3662@gmail.com*>>>>>>>>>>>>
//<<<<<<<<<<<*mikemike3662@gmail.com*>>>>>>>>>>>>
       session_start();
        require ("../CONNECTIONS/teachersConnection.php");
        require ("../FUNCTIONS/teachersFunctions.php");
        if($_SERVER ['REQUEST_METHOD']=="POST")
        {
                $studentEmail = filter_var($_POST['userEmail'], FILTER_SANITIZE_STRING);
                $studentUnit = filter_var($_POST['userUnit'], FILTER_SANITIZE_STRING);
                $mainExam = filter_var($_POST['mainExam'], FILTER_SANITIZE_STRING);

                $checkEmail = $con->prepare("SELECT * FROM students WHERE Email = ?");
                $checkEmail->bind_param("s",$studentEmail);
                $checkEmail->execute();
                $emailResult = $checkEmail->get_result();
                if ($emailResult && mysqli_num_rows($emailResult)<1) {
                        ?>
                        <script type="text/javascript">
                                alert("The student Email is missing.");
                                location.href = "../TEACHERS/finalGradeCpa.php";
                        </script><?php
                }
        $mainExamGrade = $con->prepare("UPDATE networkingGrades set mainExam = ?  where userName = ? && unitName = ?");
        $mainExamGrade->bind_param("sss",$mainExam,$studentEmail,$studentUnit);
        $mainExamGrade->execute();
        // mysqli_query($con,$mainExamGrade);        
        ?>
                <script>
                        window.alert("Grade Added Successfully");
                        location.href = "../TEACHERS/finalGradeCpa.php";
                </script>
        <?php
        }
        else{
            ?><script> window.alert("Wrong Email type.");</script> <?php
            die;
        }
?>