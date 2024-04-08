<?php
    /*<<<<<<<<<<<*mikemike3662@gmail.com*>>>>>>>>>>>>
    <<<<<<<<<<<*mikemike3662@gmail.com*>>>>>>>>>>>> */
    require("../SESSION/session.php");
include("../CONNECTIONS/teachersConnection.php");
include("../FUNCTIONS/teachersFunctions.php");
if($_SERVER ['REQUEST_METHOD']=="POST")
{
    $email = filter_var($_POST['email'], FILTER_SANITIZE_STRING);
    $password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);
    if(!empty($email) && !empty($password))
    {
        $query = $con->prepare("SELECT * from teachers where Email = ? limit 1");
        $query->bind_param("s",$email);
        $query->execute();
        $results = $query->get_result();
        if($results)
        {
                    if($results && mysqli_num_rows($results)>0)
                    {
                        $userdata = mysqli_fetch_assoc($results);
                        if($userdata['Password'] === $password)
                        {
                            $_SESSION['no'] = $userdata['no'];
                            ?>
                                <script>
                                    window.location = "../TEACHERS/teachers.php";
                                </script>
                            <?php
                            die;
                        }
                        else
                        {
                            ?>
                                <script>
                                    window.alert("Wrong User Password!!!");
                                    window.location = "../SECURITY/teachersLogIn.php";
                                </script>
                            <?php
                        }
                    }
                    else{
                        ?>
                            <script>
                                window.alert("Wrong User Email!!!");
                                window.location = "../SECURITY/teachersLogIn.php";
                            </script>
                        <?php
                    }
        }
    }
    else
    {
        echo "Try again after 20 minutes.";
    }
}
?>