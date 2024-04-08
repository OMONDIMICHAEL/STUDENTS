<?php
//<<<<<<<<<<<*mikemike3662@gmail.com*>>>>>>>>>>>>
//<<<<<<<<<<<*mikemike3662@gmail.com*>>>>>>>>>>>>
        require("../SESSION/session.php");
        require ("../CONNECTIONS/studentsConnection.php");
        require ("../FUNCTIONS/studentsFunctions.php");
        if($_SERVER ['REQUEST_METHOD']=="POST")
        {
                $userdata = checklogin($con);
                $studentEmail = $userdata['Email'];
                $describe = filter_var($_POST['describE'], FILTER_SANITIZE_STRING);
                $studentFile = $_FILES['studentNetworkingFile']['name'];
                $studentFile_type = $_FILES['studentNetworkingFile']['type'];
                $studentFile_size = $_FILES['studentNetworkingFile']['size'];
                $studentFile_tem_loc = $_FILES['studentNetworkingFile']['tmp_name'];
                $studentFile_store = "../StudentFile/".$studentFile;
               
                $filename = $_FILES['studentNetworkingFile']['name'];
                $ext = pathinfo($filename, PATHINFO_EXTENSION);
                if($ext !== 'pdf' && $ext !== 'doc' && $ext !== 'docx' && $ext !== 'ppt' && $ext !== 'pptx') {
                    ?><script> window.alert("Failed!! Make sure your file has one of the following file extensions then try again; .pdf, .doc, .docx, .ppt or .pptx");
              window.location.href= "../STUDENT/studentNetworking.php";
                    </script> <?php
                    die;
                }
                 define('KB', 1024);
                define('MB', 1048576);
                define('GB', 1073741824);
                define('TB', 1099511627776);
                if ($_FILES['studentNetworkingFile']['size'] > 15*MB) {
                    ?><script> window.alert("Error! The File Is Bigger Than The Maximum.");
              window.location.href= "../STUDENT/studentNetworking.php";
              </script> <?php
                    die;
                    // code...
                }
        $networkingFile = $con->prepare("INSERT INTO studentNetworkingAssignmentUpload(studentFile,describee,studentEmail)  values (?,?,?)");
        $networkingFile->bind_param("sss",$studentFile,$describe,$studentEmail);
        move_uploaded_file($studentFile_tem_loc,$studentFile_store);
        $networkingFile->execute();
        ?>
        <script> window.alert("Assignment Added Successfully");
        window.location.href = "../STUDENT/studentNetworking.php";
        </script>
        <?php
        die;
                }
        else{
            ?><script> window.alert("Wrong File type.");
        window.location.href = "../STUDENT/studentNetworking.php";
        </script> <?php
            die;
        }
?>