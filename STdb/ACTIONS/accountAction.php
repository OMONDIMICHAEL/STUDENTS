<?php
//<<<<<<<<<<<*mikemike3662@gmail.com*>>>>>>>>>>>>
//<<<<<<<<<<<*mikemike3662@gmail.com*>>>>>>>>>>>>
session_start();
require("../CONNECTIONS/teachersConnection.php");
require("../FUNCTIONS/teachersFunctions.php");
if($_SERVER ['REQUEST_METHOD']=="POST")
{
    $userdata = checklogin($con);
    if(!isset($_SESSION['no'])){
        //$i_d = $_SESSION['id'];
        ?>
            <script>
                window.alert("Failed!! You Must Login To Make Payment.");
                location.href = "../SECURITY/teachersLogIn.php";
            </script>
        <?php
    die;
    }
    $studentMail = filter_var($_POST['studentEmail'], FILTER_SANITIZE_STRING);
    $paidAmount = filter_var($_POST['paidAmount'], FILTER_SANITIZE_STRING);
    $slipNumber = filter_var($_POST['slipNumber'], FILTER_SANITIZE_STRING);
    if(!empty($studentMail))
    { 
        $queryMail = $con->prepare("SELECT * FROM students WHERE Email = ? limit 1");
        $queryMail->bind_param("s",$studentMail);
        $queryMail->execute();
        $mailResults = $queryMail->get_result();
        if($mailResults)
        {
            if($mailResults && mysqli_num_rows($mailResults)<1)
            {
                ?>
                    <script>
                        window.alert("Failed!! Check The Details And Try Again.");
                        location.href = "../TEACHERS/schoolAccountant.php";
                    </script>
                <?php
                die;
            }
        }

        $queryAccount = $con->prepare("INSERT INTO ditFeeAccount(studentEmail,Paid,slipNumber) values (?,?,?)");
        $queryAccount->bind_param("sss", $studentMail,$paidAmount,$slipNumber);   
        $queryAccount->execute(); 
        // mysqli_query($con,$queryAccount);
        ?><script> window.alert("Payment Added Successfully");
        window.location = "../ACCOUNTANT/schoolAccountant.php";
        </script> <?php
        die;
            }
        else{
            ?>
                <script>
                    window.alert("Failed to make payment.");
                    location.href = "../TEACHERS/schoolAccountant.php";
                </script>
            <?php
            die;
        }
    }
?>