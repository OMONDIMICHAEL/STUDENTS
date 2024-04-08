<?php require("../SESSION/session.php"); ?>
<?php
//include_once("../urlScript.php");  
//strip_php_extension();
?>
<!--
    <<<<<<<<<<<*mikemike3662@gmail.com*>>>>>>>>>>>>
    <<<<<<<<<<<*mikemike3662@gmail.com*>>>>>>>>>>>>  -->
<!DOCTYPE html PUBLIC"-//W3C//DTD XHTML 1.0 Transitions" "http://www.w3.org/TR/xhtml1/DTD/xhtml-transitional.dtd">
	<html lang="en">
	<head> 
    <meta charset = "UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="mikemike3662@gmail.com">
    <meta name="description" content="This is a virtual school">
<title>
    virtual school.
</title>
<link rel="icon" href="../IMAGES/schoolLogo.jpg" type="image/x-icon">
        <link rel="stylesheet" href="../CSS/elibrary.css">
        <script src = "../FUNCTIONS/studentsJsFunctions.js"></script>
    </head>
    <body>
        <!-- /////////////////////////////////////////////////// -->
        <header><?php require("../HEADER/studentHeader.php"); ?></header>
        <!-- ////////////////////////////////////////////////////// -->
        <main>
    <article class="bodyContainer">
        <!-- ///////////////////////////////////////////////////////// -->
        <section class="search">
            <!-- ////////////////////////////////////////////////// -->
                        <form id="frm" method="POST" action="studentElibrary.php" enctype="multipart/form-data">
                            <input type="text" placeholder="e.g. networking2023sem1" class="searchBox" name="search">
                            <button name="submit" class="searchButton" >
                                    search.
                            </button>
                        </form>
                        <!-- //////////////////////////////////////////// -->
                <section class="searchTable"><br><br>
                            <table border="2" class = "libTable">
            <?php
                            if(isset($_POST['submit'])){
                                $search = $_POST['search'];
                                if(empty($search)){
                                    echo 'Enter the paper name please.';
                                    die;
                                }
                                $sql = "SELECT * FROM teacherElibraryFileUpload WHERE describee LIKE '%$search%' limit 1 ";
                                $results = mysqli_query($con,$sql);
                                if ($results) {
                                    if (mysqli_num_rows($results)>0) {
                                        echo ' <thead>
                                        <tr>
                                        <th>Available Results.</th>
                                        </tr>
                                        </thead>
                                        ' ;
                                        while($row = mysqli_fetch_assoc($results)){
                                        echo ' <tbody>
                                        <tr>
                                        <td><br> '?><?php $sql2 = "SELECT teacherFile,describee from teacherElibraryFileUpload where describee like '%$search%'";
                                        $query2 = mysqli_query($con,$sql2);
                                        while($info2 = mysqli_fetch_array($query2)){
            ?>
                            <section>
                                    <b><?php echo $info2['describee']; ?></b><br><br><a class="bodyLink" href = "../TeacherFile/<?php echo $info2['teacherFile']; ?>"><b>DOWNLOAD FILE.</b></a>
                            </section>
                                    <br><hr>
    <!-- ///////////////////////////////////////////////////////////////// -->
                                    <?php
                                    }'?></td>
                                    </tr>
                                    </tbody> ' ;
                                        }
                                    }
                                    else{
                                        echo "Paper Not FOUND!!";
                                    }
                                }
                            }
            ?>
                            </table>
            </section><br><br>
        </section>
            <!-- //////////////////////////////////////////////////////////// -->
        <?php require("../FOOTER/adFooter.php"); ?>
    </article>
    </main>
    <footer>
        <p><center><?php require("../FOOTER/footer.php"); ?></center></p>
    </footer>
    </body>
    </html>