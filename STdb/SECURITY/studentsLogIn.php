<?php require("../SESSION/session.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head> 
    <title>
        virtual school.
    </title>
    <meta charset = "UTF-8">
    <meta name="author" content="mikemike3662@gmail.com">
    <meta name="description" content="This is a virtual school">
    <!-- #################33 -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link rel="stylesheet" href="../CSS/style.css">
    <!-- ################## -->
<link rel="icon" href="../IMAGES/schoolLogo.jpg" type="image/x-icon">
<!-- <link rel="stylesheet" href="../CSS/schoolLogIn.css">  -->
<script src = "../FUNCTIONS/studentsJsFunctions.js"></script>
</head>
<body>
    <header>
        <article>
            <section></section>
        </article>
    </header>
    <main>
        <article>
            <section class="ftco-section">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-6 text-center mb-5">
                            <h2 class="heading-section">Student Login</h2>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-12 col-lg-10">
                            <div class="wrap d-md-flex">
                                <div class="img " style="background-image: url('https://img.freepik.com/free-photo/e-learing-distance-education-icons-interface_53876-124201.jpg?t=st=1735833839~exp=1735837439~hmac=0d677f2a72178162999088faecc4c3d1f365ff0ab412a4737867133ebb7377e6&w=1380');">
                                </div>
                                <div class="login-wrap p-4 p-md-5">
                                    <div class="d-flex">
                                        <div class="w-100">
                                            <h3 class="mb-4">Sign In</h3>
                                        </div>
                                        <div class="w-100">
                                            <p class="social-media d-flex justify-content-end">
                                                <a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a>
                                                <a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a>
                                            </p>
                                        </div>
                                    </div>
                                    <form action="../ACTIONS/studentLogin.php" method="post" class="signin-form">
                                        <div class="form-group mb-3">
                                            <label class="label" for="email">Email</label>
                                            <input type="email" name="email" class="form-control" placeholder="somebody@gmail.com" required>
                                        </div>
                                        <div class="form-group mb-3">
                                            <label class="label" for="password">Password</label>
                                            <input type="password" name="password" class="form-control" placeholder="Password" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="submit" class="form-control btn btn-primary rounded  submit px-3" value="Sign In." />
                                        </div>
                                        <div class="form-group d-md-flex">
                                            <div class="w-50 text-left">
                                                <label class="checkbox-wrap checkbox-primary mb-0">Remember Me
                                                  <input type="checkbox" checked>
                                                  <span class="checkmark"></span>
                                                </label>
                                            </div>
                                            <div class="w-50 text-md-right">
                                                <a href="#">Forgot Password</a>
                                            </div>
                                        </div>
                                  </form>
                                  <p class="text-center">Not a member? <a href="studentsSignUp.php">Sign Up</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </article>
    </main>
    <footer></footer>

      <script src="../JAVASCRIPT/jquery.min.js"></script>
      <script src="../JAVASCRIPT/popper.js"></script>
      <script src="../JAVASCRIPT/bootstrap.min.js"></script>
      <script src="../JAVASCRIPT/main.js"></script>
    </body>
</html>