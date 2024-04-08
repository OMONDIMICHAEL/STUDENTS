<?php include("../SESSION/session.php"); ?>
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
        <link rel="stylesheet" href="../CSS/teacherNetworking.css">
        <script src = "../FUNCTIONS/teachersJsFunctions.js"></script>
    </head>
<body>
                <?php require("../HEADER/teacherHeader.php"); ?>
    <div class="bodyContainer">
        <a class="userData" href="catQuestions.php">Add/Delete Questions.</a>
            <form id="frm" method="POST" action = "../ACTIONS/addCatCategory.php" enctype="multipart/form-data">
                <div id="input">
                    <p>Category.</p>
                    <input type="text" id="stage" name = "examname" placeholder="Enter the category of the cat here" required>
                    <br>
                    <p>Time.</p>
                    <input type="text" id="stage" name="examtime" placeholder="Enter the time limit for the cat here" required>
                    <br><!--
                    <p>Cat ID.</p>
                    <input type="text" id="stage" name = "catId" placeholder="Enter the category Id of the cat here" required>
                    <br><br>-->
                </div>
                <input type="submit" id="sbmt" name="submit" value="Upload CAT!">
                <br>
            </form>
            <div>
                <table border="1">
                    <thead>
                        <tr>
                            <th>
                                No.
                            </th>
                            <th>
                                Cat Name.
                            </th>
                            <th>
                                Cat Time.
                            </th><!--
                            <th>Cat ID</th>-->
                            <th>
                                Edit.
                            </th>
                            <th>
                                Delete.
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $query = "SELECT * FROM exam_category";
                            $data = mysqli_query($con,$query);
                            $total = mysqli_num_rows($data);
                            $count = 0;

                            if ($total != 0)
                            {
                                while ($result = mysqli_fetch_assoc($data))
                                {
                                    $count = $count + 1;
                                    ?>
                                    <tr>
                                    <th><?php echo  $count ?></th>
                                    <td><?php echo $result['category'] ?></td>
                                    <td><?php echo $result['exam_time_in_minutes'] ?></td>
                                    <!--<td><?php //echo $result['catId'] ?></td>-->
                                    <td><a class="bodyLink" href="edit_exam.php?id=<?php echo $result['id'];?>">Edit</a></td>
                                    <td><a class="bodyLink" href="delete.php?id=<?php echo $result['id'];?>">Delete</a></td>
                                    
                                    </tr>
                                    <?php
                                }
                            }
                            else
                            echo "SORRY, NO RECORD FOUND IN THE DATABASE";
                        ?>
                    </tbody>
                </table>
            </div>
            <?php include("../FOOTER/adFooter.php"); ?>
</div>
<p><center><?php include("../FOOTER/footer.php"); ?></center></p>
</body>
</html>