<?php
//<<<<<<<<<<<*mikemike3662@gmail.com*>>>>>>>>>>>>
//<<<<<<<<<<<*mikemike3662@gmail.com*>>>>>>>>>>>>
require("../SESSION/session.php");
        require ("../CONNECTIONS/teachersConnection.php");
        require ("../FUNCTIONS/teachersFunctions.php");
        if($_SERVER ['REQUEST_METHOD']=="POST")
        {
                $describe = filter_var($_POST['describE'], FILTER_SANITIZE_STRING);
                $teacherFile = $_FILES['teacherElibraryFile']['name'];
                $teacherFile_type = $_FILES['teacherElibraryFile']['type'];
                $teacherFile_size = $_FILES['teacherElibraryFile']['size'];
                $teacherFile_tem_loc = $_FILES['teacherElibraryFile']['tmp_name'];
                $teacherFile_store = "../TeacherFile/".$teacherFile;
              
                $teacherFileName = $_FILES['teacherElibraryFile']['name'];
                $teacherFileExtension = pathinfo($teacherFileName, PATHINFO_EXTENSION);
                if($teacherFileExtension !== 'pdf' && $teacherFileExtension !== 'docx' && $teacherFileExtension !== 'docx' && $teacherFileExtension !== 'ppt' && $teacherFileExtension !== 'pptx') {
                    ?>
                    <script> window.alert("Failed!! Make sure your file has one of the following file teacherFileExtensionensions then try again; .pdf, .doc, .docx, .ppt or .pptx");
                    window.location.href = "../TEACHERS/teacherElibrary.php";
                    </script> 
                    <?php
                    die;
                }
                 define('KB', 1024);
                define('MB', 1048576);
                define('GB', 1073741824);
                define('TB', 1099511627776);
                if ($_FILES['teacherElibraryFile']['size'] > 15*MB) {
                    ?><script> window.alert("Error! The File Is Bigger Than The Maximum.");
              window.location.href= = "../TEACHERS/teacherElibrary.php";
              </script> <?php
                    die;
                    // code...
                }
        $elibraryFile = $con->prepare("INSERT INTO teacherElibraryFileUpload(teacherFile,describee)  values (?,?)");
        $elibraryFile->bind_param("ss",$teacherFile,$describe);
        move_uploaded_file($teacherFile_tem_loc,$teacherFile_store);
        $elibraryFile->execute();
        ?>
        <script> window.alert("File Added Successfully");
        window.location.href = "../TEACHERS/teacherElibrary.php";
        </script> 
        <?php
        die;
                }
        else{
            ?>
                <script> window.alert("Wrong File type.");
                window.location.href = "../TEACHERS/teacherElibrary.php";
                </script> 
            <?php
            die;
        }
?>