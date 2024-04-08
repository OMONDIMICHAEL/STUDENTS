<?php
       require("../SESSION/session.php");
        include ("../CONNECTIONS/studentsConnection.php");
        include ("../FUNCTIONS/studentsFunctions.php");
        

        if($_SERVER ['REQUEST_METHOD']=="POST")
        {
            /*$query = "SELECT * FROM catQuestions";
            $data = mysqli_query($con,$query);
            $result = mysqli_fetch_assoc($data);*/
                $userdata = checklogin($con);
                $email = $userdata['Email'];
                $choice = $result['id'];
                $answer = $result['answer'];
                $queNo = $result['question_Num'];
        $catAnswer = "INSERT INTO cat1Answers(studentEmail,question_Num,choice,answer)  values ('$email','$queNo','$choice','$answer')";
        mysqli_query($con,$catAnswer);
        ?><script> window.alert("Success!!");</script> <?php
        //"Location: ../students.php";
        die;
        }
        else{
            ?><script> window.alert("Error!!");</script> <?php
            die;
        }

        ?>