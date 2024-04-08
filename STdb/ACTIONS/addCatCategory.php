<?php require("../SESSION/session.php"); ?>
<?php
//<<<<<<<<<<<*mikemike3662@gmail.com*>>>>>>>>>>>>
//<<<<<<<<<<<*mikemike3662@gmail.com*>>>>>>>>>>>>
        require ("../CONNECTIONS/teachersConnection.php");
        require ("../FUNCTIONS/teachersFunctions.php");
        if($_SERVER ['REQUEST_METHOD']=="POST")
        {
                $catCategory = filter_var($_POST['examname'], FILTER_SANITIZE_STRING);
                $catTime = filter_var($_POST['examtime'], FILTER_SANITIZE_STRING);
               // $catId = $_POST['catId'];
        $queryCatCategory = $con->prepare("INSERT INTO exam_category(category,exam_time_in_minutes)  values (?,?)");
        $queryCatCategory->bind_param("ss",$catCategory,$catTime);
        $queryCatCategory->execute();
        // mysqli_query($con,$queryCatCategory);
        ?>
        <script> window.alert("Cat Category Added Successfully");
        window.location.href = "../TEACHERS/exam_category.php";
        </script>
        <?php
        die;
                }
        else{
            ?><script> window.alert("Try Again Later.");
        window.location.href = "../TEACHERS/cat_category.php";
        </script> <?php
            die;
        }
?>