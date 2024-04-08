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
        <div>
            <table border="1">
                <thead><tr>
                    <th>
                        No.
                    </th>
                    <th>
                        Cat Name.
                    </th>
                    <th>
                        Cat Time.
                    </th>
                    <!--<th>Cat Id.</th>-->
                    <th>
                        Select.
                    </th></tr>
                </thead>
                <tbody>
                    <?php
                        $query = "SELECT * from exam_category";
                        $data = mysqli_query($con,$query);
                        $total = mysqli_num_rows($data);
                        $count = 0;
                        if ($total != 0)
                        {
                            while ($result = mysqli_fetch_assoc($data))
                            {
                                $count = $count + 1;
                                echo "
                                <tr>
                                <th>$count</th>
                                <td>".$result['category']."</td>
                                <td>".$result['exam_time_in_minutes']."</td>
                                <td>" ?><a href="edit_add_exam_questions.php?id=<?php echo $result['id'];?>">Select</a><?php "</td>
                                </tr>
                                ";
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