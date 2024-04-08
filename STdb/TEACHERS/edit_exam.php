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
        <?php
            $id = $_GET["id"];
            $queryEdit = "SELECT * from exam_category where id = $id";
            $edit = mysqli_query($con,$queryEdit);
            while($result = mysqli_fetch_assoc($edit))
            {
                $category = $result["category"];
                $time = $result["exam_time_in_minutes"];
            }

        ?>
        <!-- action = "../ACTIONS/editCat.php -->
             <form id="frm" method="POST" >
                <div id="input">
                    <p>Category.</p>
                    <input type="text" id="stage" name = "examname" placeholder="Enter the category of the cat here" value="<?php echo $category; ?>" required>
                    <br>
                    <p>Time in minutes.</p>
                    <input type="text" id="stage" name = "examtime" placeholder="Enter the time limit for the cat here" value="<?php echo $time; ?>"  required>
                    <br><br>
                </div>
                <input type="submit" id="sbmt" name="submit" value="Update CAT!">
                <br>
            </form>
            <?php
            if(isset ($_POST["submit"]))
{
//$id = $_GET[id];
$catTime = $_POST['examtime'];
$catCategory = $_POST['examname'];
$queryEdit = ("UPDATE exam_category set category = '$catCategory', exam_time_in_minutes = '$catTime' where id=$id");
mysqli_query($con,$queryEdit);
?>

<script> window.alert("Cat Category Edited Successfully");
        window.location.href = "../TEACHERS/exam_category.php";
        </script>
<?php
}
 ?>
            <?php include("../FOOTER/adFooter.php"); ?>
    </div>
    <p><center><?php include("../FOOTER/footer.php"); ?></center></p>
</body>
</html>