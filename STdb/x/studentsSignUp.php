<?php
session_start();

include("studentsConnection.php");
include("studentsFunctions.php");

if($_SERVER ['REQUEST_METHOD']=="POST")
{
    $username = $_POST['username'];
    $password = $_POST['password'];

    if(!empty($username) && !empty($password) && !is_numeric($username))
    {
        $query = "insert into students (username,password) values('$username','$password')";

        mysqli_query ($con,$query);

        header("Location:studentsLogIn.php");
        die;

    }
    else
    {
        echo "enter valid information";
    }
}
?>

<!DOCTYPE html>
<html>
<head> 
<title>
    School SignUp
</title>
<link rel="stylesheet" href="schoolLogIn.css"> 
</head>
<body id = "body">
    <form id = "frm" method = "POST">
        <table id ="tbl">
            <tr>
                <td id = "txt">
                    User Name.
                </td>
                <td>
                    <input type ="text" id = "user" name = "username" placeholder = "type your name here...">
                </td>
            </tr>
            <tr>
                <td id = "txt">
                    Password
                </td>
                <td>
                    <input type ="password" id = "pass" name = "password" placeholder = "type password here...">
                </td>
            </tr>
            <tr>
                <td>
                <input type="checkbox" id="check" onclick="myFunction()"><label for="check" id = "txt">show password</label>
                </td>
            </tr>
            <tr>
                 <td>
                    <input type="submit" value ="Sign Up" id="submit" >
                </td>
            </tr>
            <tr>
                <td id = "txtt">
                    Already have an account? Click below to Login.
                </td>
            </tr>
            <tr>
                <td>
                <button type="button">
                <a href="studentsLogIn.php">Click to Login</a>
                </button>
            </td>
            </tr>
        </table>
    </form>
    <script>
    function myFunction() {
        Var x = document.getElementById("pass");
            if (x.type === "password") {
               x.type = "text"
            }
            else {
                x.type = "password"
            }
        }
            </script>
</body>

</html>
