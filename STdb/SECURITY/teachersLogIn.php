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
<script src = "../FUNCTIONS/teachersJsFunctions.js"></script>
</head>
<body id = "body">
    <header>
        <article>
            <section><h1>TEACHER LOGIN.</h1></section>
        </article>
    </header>
    <main>
        <article>
            <section>
                <form action="../ACTIONS/teacherLogin.php" method="post">
                    <label for="email">Email.</label><br>
                    <input type="email" name="email" id="email" placeholder="teacher@gmail.com" required><br><br>
                    <label for="pass">Password.</label><br>
                    <input type="password" name="password" id="pass" required><br><br>
                    <input type="checkbox" id = "check" onclick="myFunction();"><label for="check" id = "txt">Show Password</label><br><br>
                    <input type="submit" value ="Login" id="submit">
                </form>
            </section>
        </article>
    </main>
    <footer>
        <article>
            <section>
                <button type="button">
                    <a href="teachersSignUp.php">Click to Sign Up</a>
                </button>
            </section>
        </article>
    </footer>
    
</body>
</html>
