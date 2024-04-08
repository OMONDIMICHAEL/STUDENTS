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
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="mikemike3662@gmail.com">
    <meta name="description" content="This is a virtual school">
<title>
    virtual school.
</title>
<link rel="icon" href="../IMAGES/schoolLogo.jpg" type="image/x-icon">
        <link rel="stylesheet" href="../CSS/teacherNetworking.css">
        <script type="text/javascript" src = "../FUNCTIONS/studentsJsFunctions.js"></script>
    </head>
    <body>
        <!-- //////////////////////////////////////////////////// -->
        <header><?php require("../HEADER/studentHeader.php"); ?></header>
        <!-- /////////////////////////////////////////////// -->
        <main>
    <article class="bodyContainer">
        <!-- ///////////////////////////////////////////////////// -->
        <?php
                $sql = "SELECT * from exam_category";
                $query = mysqli_query($con,$sql);        
                while ($info = mysqli_fetch_array($query)){
        ?>
                <br><input type="button" onclick="setExamTypeSession(this.value);" id="sbmt" value="<?php echo $info['category']; ?>">
                <br><br><hr>
        <?php
                }
        ?>
        <!-- ////////////////////////////////////////////////////////// -->
            <script type="text/javascript">
                function setExamTypeSession(exam_category){
                    var xmlhttp = new XMLHttpRequest();
                    xmlhttp.onreadystatechange = function(){
                        if(xmlhttp.readyState ==4 && xmlhttp.status ==200){
                            window.location = "dashboard.php";
                        }
                    };
                    xmlhttp.open("GET","../AJAX/setExamTypeSession.php?exam_category="+ exam_category,true);
                    xmlhttp.send(null);
                    }
            </script>
            <!-- //////////////////////////////////////////////////////////// -->
            <?php include("../FOOTER/adFooter.php"); ?>
    </article>
    </main>
    <footer>
        <p><center><?php include("../FOOTER/footer.php"); ?></center></p>
    </footer>
    </body>
</html>