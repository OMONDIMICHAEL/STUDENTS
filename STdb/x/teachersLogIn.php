<?php
session_start();

include("teachersConnection.php");
include("teachersFunctions.php");

if($_SERVER ['REQUEST_METHOD']=="POST")
{
    $username = $_POST['username'];
    $password = $_POST['password'];

    if(!empty($username) && !empty($password) && !is_numeric($username))
    {
        $query = "select * from teachers where username = '$username' limit 1";

        $results = mysqli_query($con,$query);
        if($results)
        {
            if($results && mysqli_num_rows($results)>0)
            {
                $userdata = mysqli_fetch_assoc($results);
                
                if($userdata['password'] === $password)
                {
                    $_SESSION['id'] = $userdata['id'];
                    header("Location:teachers.php");
                    die;
                }
            }
        }
    }
    else
    {
        echo "wrong user name or password";
    }
}

?>

<!DOCTYPE html>
<html>
<head> 
<title>
    School Login
</title>
<link rel="stylesheet" href="schoolLogIn.css"> 
</head>
<body id = "body">
    <form id = "frm" method = "POST">
        <table id = "tbl">
            <tr>
                <td id = "txt">
                    User Name:
                </td>
                <td>
                    <input type ="text" id = "user" name = "username" placeholder = "type your name here...">
                </td>
            </tr>
            
            <tr>
                <td id = "txt">
                    Password:
                </td>
                <td>
                    <input type ="password" id = "pass" name = "password" placeholder = "type password here...">
                </td>
            </tr>
            <tr>
                <td>
                <input type="checkbox" id = "check" onclick="myFunction()"><label for="check" id = "txt">Show Password</label>
                <script>
    function myFunction() {
        Var x = document.getElementById("pass");
            if (x.type === "password") {
               x.type = "text";
            }
            else {
                x.type = "password";
            }
        }
            </script>
                </td>
            </tr>
            <tr>
                 <td>
                    <input type=submit value ="Login"id = "submit">
                </td>
            </tr>
            <tr>
                <td id = "txtt">
                    Don't have an account? Click below to Sign Up for one.
                </td>
            </tr>
            <tr>
                <td>
                    <button type="button">
                <a href="teachersSignUp.php">Click to Sign Up</a>
                </button>
                </td>
            </tr>
        </table>
        
    </form>
    
</body>

</html>
