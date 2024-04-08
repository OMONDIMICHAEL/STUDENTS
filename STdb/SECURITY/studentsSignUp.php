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
            <section><h1>STUDENT SIGNUP.</h1></section>
        </article>
    </header>
    <main>
        <article>
            <section>
                <form method="post">
                    <label for="username">Username.</label><br>
                    <input type="text" name="username" placeholder="jane doe" id="username" required><br><br>
                    <label for="email">Email Address.</label><br>
                    <input type="email" name="email" placeholder="janedoe@gmail.com"  id="email" required><br><br>
                    <label for="courseName">Course Name.</label><br>
                    <input type="text" name="courseName" placeholder="CPA"  id="courseName" required><br><br>
                    <label for="pass">Password.</label><br>
                    <input type="password" name="password"  id="pass" required><br><br>
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
                    <a href="studentsLogIn.php">Click to Log in.</a>
                </button>
            </section>
        </article>
    </footer>
    <script>
        //the show password function
    function myFunction() {
        var x = document.getElementById("pass");
            if (x.type === "password") {
                //if the variable x is in the form of a password then change it to form of text
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
include("../CONNECTIONS/studentsConnection.php");
include("../FUNCTIONS/studentsFunctions.php");
if($_SERVER ['REQUEST_METHOD']=="POST")
{
    //declare variables //the user data variables
    $username = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_STRING);
    $password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);
    $courseName = filter_var($_POST['courseName'], FILTER_SANITIZE_STRING);
    //check if the email is already registered
    $checkEmail = $con->prepare("SELECT * FROM students WHERE Email = ?");
    $checkEmail->bind_param("s", $email);
    $checkEmail->execute();
    $data = $checkEmail->get_result();
    $total = mysqli_num_rows($data);
    if($total >= 1){
        //if the email is registered return false
        ?> <script> window.alert("That Email Is Already Registered.");</script> <?php
        die;
    }
    elseif (!empty($username) && !empty($email) && !empty($password) && !is_numeric($username))
    {
        //if the email is not registered then register the email
        $query = $con->prepare("INSERT into students (Username,Email,Password,courseName) values(?,?,?,?)");
        $query->bind_param("ssss",$username,$email,$password,$courseName);
        // mysqli_query ($con,$query);
        $query->execute();
        ?><script> window.location = "studentsLogIn.php";</script><?php
        die;
    }
    else
    {
        //if neither of the above is executed then try again
        ?> <script> window.alert("Try Again After 20 Minutes");</script> <?php
    }
}
?>
</body>
</html>
