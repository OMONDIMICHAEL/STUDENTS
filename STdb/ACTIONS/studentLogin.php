<?php
    // mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    /*<<<<<<<<<<<*mikemike3662@gmail.com*>>>>>>>>>>>>
    <<<<<<<<<<<*mikemike3662@gmail.com*>>>>>>>>>>>> */
require("../SESSION/session.php");
require("../CONNECTIONS/studentsConnection.php");
require("../FUNCTIONS/studentsFunctions.php");
if($_SERVER ['REQUEST_METHOD']=="POST")
{
    //declare the variables
    $email = filter_var($_POST['email'], FILTER_SANITIZE_STRING);
    $password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);
    //check if the fields are empty
    if(!empty($email) && !empty($password))
    {
        //if they are not empty the check if the values are in the db
        $query = $con->prepare("SELECT * FROM students WHERE Email = ? limit 1");
        $query->bind_param("s",$email);
        $query->execute();
         $results = $query->get_result();
        if($results)
        {
            if($results && mysqli_num_rows($results)>0)
            {
                //if the num of rows are greater than zero then the values are in the db
                $userdata = mysqli_fetch_assoc($results);
                if($userdata['Password'] === $password)
                {
                    //if the password enter is similar to the password in the db then allow the user in the site
                    $_SESSION['no'] = $userdata['no'];
                    ?><script>window.location = "../STUDENT/students.php";</script><?php
                    die;
                }
                else{
                    //if the password don't match with one in the database the return false
                    ?>
                    <script>
                        window.alert("Wrong User Password!!!");
                        window.location.href = ("../SECURITY/studentsLogIn.php");
                    </script> 
                    <?php
                    die;
                 }
            }
            else {
                //if the number of rows is less than zero then return false
                ?>
                    <script>
                        window.alert("Wrong User Email!!!");
                        location.href = ("../SECURITY/studentsLogIn.php");
                    </script> 
                <?php
                die;
            }
        }
    }
    else
    {
        //if neither of the above is executed then try again
        echo "Try Again after 20 Minutes";
        die;
    }
}
?>