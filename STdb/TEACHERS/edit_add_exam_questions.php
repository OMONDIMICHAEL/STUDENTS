<?php require("../SESSION/session.php"); ?>
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
        <link rel="stylesheet" href="../CSS/teacherNetworking.css">
        <script src = "../FUNCTIONS/teachersJsFunctions.js"></script>
    </head>
<body>
                <?php require("../HEADER/teacherHeader.php"); ?>
    <div class="bodyContainer">
        <?php
            $id = $_GET['id'];
            $queryId = "SELECT * FROM exam_category WHERE id = $id";
            $dataId = mysqli_query($con,$queryId);
            $totalId = mysqli_num_rows($dataId);
            $resultId = mysqli_fetch_array($dataId);
            $exam_category = $resultId['category'];
        ?>
        <?php
                if($_SERVER ['REQUEST_METHOD']=="POST")
        {
                //$exam_category = $_GET['category'];
                $loop = 0;
                $count = 0;
                $no = "SELECT * from catQuestions where category = '$exam_category' order by id asc";
                $noo = mysqli_query($con,$no);
                $count = mysqli_num_rows($noo);
                if ($count == 0) {
                        # code...
                }
                else {
                        while($row = mysqli_fetch_array($noo)){
                                $loop = $loop + 1;
                        $updateNo = "UPDATE catQuestions set question_no = '$loop' where id = $row[id]";
                        mysqli_query($con,$updateNo);
                        }
                }
                $loop = $loop + 1;
                //$questionNo = $_POST['questionNo'];
                 $question = $_POST['question'];
                 $choice1 = $_POST['choice1'];
                 $choice2 = $_POST['choice2'];
                 $answer = $_POST['answer'];
                 //$category = $_POST['category'];
         $queryAddQuiz = "INSERT INTO catQuestions(question_no,question,choice1,choice2,answer,category)  values('$loop','$question','$choice1','$choice2','$answer','$exam_category')";
         mysqli_query($con,$queryAddQuiz);
         ?>
         <script> window.alert("Cat Quiz Added Successfully");
         window.location.href = window.location.href;
        
         </script>
         <?php
         die;
         }
         /*else{
             ?><script> window.alert("Try Again Later.");
         window.location.href = "../TEACHERS/edit_add_exam_questions.php";
         </script> <?php
             die;
         }*/
?>
                <p>  <a href = "catQuestions.php">Add/Delete Questions.</a> in <?php echo $resultId['category'];?> category.</p>
                <form id="frm" method="POST">
                     <!-- action = "../ACTIONS/addCatQuestion.php" -->
                    <div id="input">
                        <!-- <p>Question No.</p> -->
                        <!-- <input type="text" name = "questionNo" placeholder="Enter the question number here" required> -->
                        <br>
                        <p>Question.</p>
                        <input type="text" name="question" placeholder="Enter the question here" required>
                        <br>
                        <p>Choice1.</p>
                        <input type="text" name="choice1" placeholder="Enter choice1 here" required>
                        <br>
                        <p>Choice2.</p>
                        <input type="text" name="choice2" placeholder="Enter choice2 here" required>
                        <br>
                        <p>Answer.</p>
                        <input type="text" name="answer" placeholder="Enter answer here" required>
                        <br>
                        <p>Category.</p>
                        <input type="text" name="category" placeholder="Enter the category here" value="<?php echo $resultId['category'];?>" required>
                        
                        <br><br>
                    </div>
                    <input type="submit" id="sbmt" name="submit" value="Add Question!">
                    <br>
                </form>
                
                <div>
                    <table border="1">
                        <thead><tr>
                            <th>
                                Question No.
                            </th>
                            <th>
                                Question.
                            </th>
                            <th>
                                Choice1.
                            </th>
                            <th>
                                Choice2.
                            </th>
                            <th>
                                Answer.
                            </th>
                        <th>Category.</th>
                        </tr>
                        </thead>
                        <tbody>
        <?php
       //$exam_category = $resultId['category'];
            $questionTable = "SELECT * FROM catQuestions WHERE category = '$exam_category' ORDER by question_no asc";
            $dataTable = mysqli_query($con,$questionTable);
            $totalTable = mysqli_num_rows($dataTable);
            $count = 0;

            if ($totalTable != 0)
            {
                while ($resultTable = mysqli_fetch_assoc($dataTable))
                {
                    $count = $count + 1;
                    echo "
                    <tr>
                    <td>".$resultTable['question_no']."</td>
                    <td>".$resultTable['question']."</td>
                    <td>".$resultTable['choice1']."</td>
                    <td>".$resultTable['choice2']."</td>
                    <td>".$resultTable['answer']."</td>
                    <td>".$resultTable['category']."</td>
                    </tr>
                    ";
                }
            }
            else{
            echo "SORRY, NO RECORD FOUND IN THE DATABASE";}
        ?>
                        </tbody>
                    </table>
                </div>
                
                <?php include("../FOOTER/adFooter.php"); ?>
    </div>
    <p><center><?php include("../FOOTER/footer.php"); ?></center></p>
</body>
</html>