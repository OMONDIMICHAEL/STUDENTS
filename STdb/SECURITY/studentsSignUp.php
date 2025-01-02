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
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
<script src="https://kit.fontawesome.com/7ca9572120.js" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <article>
            <section></section>
        </article>
    </header>
    <main>
        <article>
            <div class="wrapper">
                <div class="logo">
                    <img src="https://img.freepik.com/free-photo/e-learing-distance-education-icons-interface_53876-124201.jpg?t=st=1735833839~exp=1735837439~hmac=0d677f2a72178162999088faecc4c3d1f365ff0ab412a4737867133ebb7377e6&w=1380" alt="">
                </div>
                <div class="text-center mt-4 name">
                    Sign Up.
                </div>
                <form class="p-3 mt-3" method="post">
                    <div class="form-field d-flex align-items-center">
                        <i class="fa-solid fa-user"></i>
                        <input type="text" name="username" id="userName" placeholder="Username">
                    </div>
                    <div class="form-field d-flex align-items-center">
                        <i class="fa-solid fa-envelope"></i>
                        <input type="email" name="email" id="userName" placeholder="Email">
                    </div>
                    <div class="form-field d-flex align-items-center">
                        <i class="fa-solid fa-pen"></i>
                        <input type="text" name="courseName" id="userName" placeholder="Course Name">
                    </div>
                    <div class="form-field d-flex align-items-center">
                        <i class="fa-solid fa-key"></i>
                        <input type="password" name="password" id="pwd" placeholder="Password">
                    </div>
                    <input type="checkbox" id = "check" onclick="myFunction()"><label for="check" id = "txt">Show Password</label>
                    <input type="submit" class="btn mt-3" value="Sign Up.">
                </form>
                <div class="text-center fs-6">
                    <span> I have an account.</span> <a href="studentsLogIn.php">Sign In.</a>
                </div>
            </div>
        </article>
    </main>
    <footer>
        <article>
            <section>
            </section>
        </article>
    </footer>
    <script>
        //the show password function
    function myFunction() {
        var x = document.getElementById("pwd");
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
