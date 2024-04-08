<!DOCTYPE html>
<html>
<head> 
<title>
    virtual school
</title>
<link rel="stylesheet" href="../CSS/schoolLogIn.css"> 
</head>
<body id = "body">
    <form id = "frm" method = "POST">
        <center><div formContent>
            <p id="txt">
                User Name. <br>
                <input type ="text" class="user" name = "username" placeholder = "type here..." required>
            </p>
            <p id="txt">
                Email Address. <br>
                <input type ="text" class="user" name = "email" placeholder = "type here..." required>
            </p>
            <p id="txt">
                Password. <br>
                <input type ="password" id="pass" class="user" name="password" placeholder = "type here..." required>
            </p>
            <p>
                <input type="checkbox" id = "check" onclick="myFunction()"><label for="check" id = "txt">Show Password</label>
            </p>
            <p>
                <input type="submit" value ="Sign Up." id="submit">
            </p>
            <p>
                <button type="button">
                    <a href="schoolLogIn.html">Click to Log in.</a>
                    </button>
            </p>
        </div></center>
    </form>
    <script>
    function myFunction() {
        var x = document.getElementById("pass");
            if (x.type === "password") {
               x.type = "text"
            }
            else {
                x.type = "password"
            }
        }
            </script>
<?php
/*<<<<<<<<<<<*mikemike3662@gmail.com*>>>>>>>>>>>>
<<<<<<<<<<<*mikemike3662@gmail.com*>>>>>>>>>>>>*/
session_start();
include("../CONNECTIONS/schoolConnection.php");
include("../FUNCTIONS/schoolFunctions.php");
if($_SERVER ['REQUEST_METHOD']=="POST")
{
    $username = $_POST['username'];
    $password = $_POST['password'];
    if(!empty($username) && !empty($password) && !is_numeric($username))
    {
        $query = "insert into school (username,password) values('$username','$password')";
        mysqli_query ($con,$query);
        header("Location:schoolLogIn.php");
        die;
    }
    else
    {
        echo "enter valid information";
    }
}
?>
</body>
</html>
