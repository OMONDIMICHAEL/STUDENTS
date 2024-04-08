

<!DOCTYPE html>
<html>
<head> 
<title>
    School Login
</title>
<link rel="stylesheet" href="CSS/schoolLogIn.css"> 
</head>
<body id = "body">
    <form id = "frm" method = "POST">
        <center><div formContent>
            <p id="txt">
                Email. <br>
                <input type ="text" class="user" name = "username" placeholder = "type here..." required>
            </p>
            <p id="txt">
                Password. <br>
                <input type ="password" id="pass" class="user" name="password" placeholder = "type here..." required>
            </p>
            <p>
                <input type="checkbox" id = "check" onclick="myFunction()"><label for="check" id = "txt">Show Password</label>
            </p>
            <p>
                <input type="submit" value ="Login" id="submit">
            </p>
            <p>
                <button type="button">
                    <a href="schoolSignUp.html">Click to Sign Up</a>
                    </button>
            </p>
        </div></center>
                <script>
    function myFunction() {
        var x = document.getElementById("pass");
            if (x.type === "password") {
               x.type = "text";
            }
            else {
                x.type = "password";
            }
        }
            </script>
    </form>
    <?php
session_start();

include("schoolConnection.php");
include("schoolFunctions.php");

if($_SERVER ['REQUEST_METHOD']=="POST")
{
    $username = $_POST['username'];
    $password = $_POST['password'];

    if(!empty($username) && !empty($password) && !is_numeric($username))
    {
        $query = "select * from school where username = '$username' limit 1";

        $results = mysqli_query($con,$query);
        if($results)
        {
            if($results && mysqli_num_rows($results)>0)
            {
                $userdata = mysqli_fetch_assoc($results);
                
                if($userdata['password'] === $password)
                {
                    $_SESSION['id'] = $userdata['id'];
                    header("Location:home.php");
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
</body>

</html>
