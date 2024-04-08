<?php include("../SESSION/session.php"); ?>
<!DOCTYPE html>
<html>
<head> 
    <meta charset = "UTF-8">
    <meta name="author" content="mikemike3662@gmail.com">
    <meta name="description" content="This is a virtual school">
<title>
    virtual school.
</title>
<link rel="icon" href="../IMAGES/schoolLogo.jpg" type="image/x-icon">
<link rel="stylesheet" href="../CSS/schoolLogIn.css"> 
</head>
<body id = "body">
    <header>
        <article>
            <section><h1>TEACHER SIGNUP.</h1></section>
        </article>
    </header>
    <main>
        <article>
            <section>
                <form method="post">
                    <label for="username">Username</label><br>
                    <input type="text" name="username" required id="username" placeholder="edward stuck"><br><br>
                    <label for="email">Email Address.</label><br>
                    <input type="email" name="email" required id="email" placeholder="edwardstuck@gmail.com"><br><br>
                    <label for="pass">Password.</label><br>
                    <input type="password" name="password" required id="pass"><br><br>
                    <input type="checkbox" id = "check" onclick="myFunction()"><label for="check" id = "txt">Show Password</label><br><br>
                    <input type="submit" value ="Sign Up." id="submit">
                </form>
            </section>
        </article>
    </main>
    <footer>
        <article>
            <section>
                <button type="button">
                    <a href="teachersLogIn.php">Click to Log in.</a>
                </button>
            </section>
        </article>
    </footer>
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
    <<<<<<<<<<<*mikemike3662@gmail.com*>>>>>>>>>>>> */
include("../CONNECTIONS/teachersConnection.php");
include("../FUNCTIONS/teachersFunctions.php");
if($_SERVER ['REQUEST_METHOD']=="POST")
{
    $username = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_STRING);
    $password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);
    $checkEmail = $con->prepare("SELECT * FROM teachers WHERE Email = ?");
    $checkEmail->bind_param("s",$email);
    $checkEmail->execute();
        $data = $checkEmail->get_result();
        $total = mysqli_num_rows($data);
        if($total >= 1){
            ?> <script> window.alert("Email already Registered");</script> <?php
            die;
        }
    elseif (!empty($username) && !empty($email) && !empty($password) && !is_numeric($username))
    {
        $queryRegister = $con->prepare("insert into teachers (Username,Email,Password) values(?,?,?)");
        $queryRegister->bind_param("sss",$username,$email,$password);
        $queryRegister->execute();
        // mysqli_query ($con,$queryRegister);
        //header("Location:teachersLogIn.php");
        ?>
        <script>
            window.location="teachersLogIn.php"
        </script>
        <?php
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
