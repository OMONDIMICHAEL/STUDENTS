<?php
//<<<<<<<<<<<*mikemike3662@gmail.com*>>>>>>>>>>>>
//<<<<<<<<<<<*mikemike3662@gmail.com*>>>>>>>>>>>>
require("../SESSION/session.php");
        require ("../CONNECTIONS/teachersConnection.php");
        require ("../FUNCTIONS/teachersFunctions.php");
        if($_SERVER ['REQUEST_METHOD']=="POST")
        {
                $describe = filter_var($_POST['describE'], FILTER_SANITIZE_STRING);
                $teacherFile = $_FILES['teacherCpaFile']['name'];
                $teacherFile_type = $_FILES['teacherCpaFile']['type'];
                $teacherFile_size = $_FILES['teacherCpaFile']['size'];
                $teacherFile_tem_loc = $_FILES['teacherCpaFile']['tmp_name'];
                $teacherFile_store = "../TeacherFile/".$teacherFile;
                $filename = $_FILES['teacherCpaFile']['name'];
                $ext = pathinfo($filename, PATHINFO_EXTENSION);
                if($ext !== 'pdf' && $ext !== 'doc' && $ext !== 'docx' && $ext !== 'ppt' && $ext !== 'pptx') {
                    ?><script> window.alert("Failed!! Make sure your file has one of the following file extensions then try again; .pdf, .doc, .docx, .ppt or .pptx");
              window.location.href = "../TEACHERS/teacherCpa.php";
                    </script> <?php
                    die;
                }
                 define('KB', 1024);
                define('MB', 1048576);
                define('GB', 1073741824);
                define('TB', 1099511627776);
                if ($_FILES['teacherCpaFile']['size'] > 15*MB) {
                    ?><script> window.alert("Error! The File Is Bigger Than The Maximum.");
              window.location.href = "../TEACHERS/teacherCpa.php";
              </script> <?php
                    die;
                    // code...
                }
        $CpaFile = $con->prepare("INSERT INTO teacherCpaAssignmentUpload(teacherFile,describee)  values (?,?)");
        $CpaFile->bind_param("ss",$teacherFile,$describe);
        move_uploaded_file($teacherFile_tem_loc,$teacherFile_store);
        $CpaFile->execute();
        ?>
        <script> window.alert("Assignment Added Successfully");
        window.location.href = "../TEACHERS/teacherCpa.php";
        </script> 
        <?php
        die;
                }
            
        else{
            ?>
            <script> window.alert("Wrong File type.");
            window.location.href = "../TEACHERS/teacherCpa.php";
            </script> 
            <?php
            die;
        }
?>