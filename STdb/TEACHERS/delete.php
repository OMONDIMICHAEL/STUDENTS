<?php
//session_start();
include ("../CONNECTIONS/teachersConnection.php");
//include ("../FUNCTIONS/teachersFunctions.php");
$id = $_GET['id'];
$queryDelete = "DELETE from exam_category where id = $id ";
$delete = mysqli_query($con,$queryDelete);
?>
<script> window.alert("Cat Category Deleted Successfully");
        window.location.href = "../TEACHERS/exam_category.php";
        </script>