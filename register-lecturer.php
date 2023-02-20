<?php include 'database.php' ?>
<?php
    $password=$confirm_password='';
    if(isset($_POST["register"])){
        $name=filter_input(INPUT_POST,'name',FILTER_SANITIZE_SPECIAL_CHARS);
        $email=filter_input(INPUT_POST,'email',FILTER_SANITIZE_EMAIL);
        $password=$_POST["password"];
        $confirm_password=$_POST["confirm_password"];
        if(($_POST["individual"]=='Lecturer')&& $_POST['password']===$_POST['confirm_password']){
            $sql= "INSERT INTO lecturer_registered (name,email,password,confirm_password) VALUES ('$name','$email','$password','$confirm_password')";
            if(mysqli_query($conn,$sql)){
                //success
                header('Location:teacher-dashboard.php');
            }
        }
            
    }
   
?>


<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from preschool.dreamguystech.com/html-template/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Oct 2021 11:11:58 GMT -->
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<title>Preskool - Register</title>

<link rel="shortcut icon" href="assets/img/favicon.png">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,600;0,700;1,400&amp;display=swap">

<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">

<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<div class="main-wrapper login-body">
<div class="login-wrapper">
<div class="container">
<div class="loginbox">
<div class="login-left">
<img class="img-fluid" src="assets/img/logo-white.png" alt="Logo">
</div>
<div class="login-right">
<div class="login-right-wrap">
<h1>Register</h1>
<p class="account-subtitle">Access to Lecturer dashboard</p>

<!-- <form action="https://preschool.dreamguystech.com/html-template/login.html" method="POST"> -->
<form  method="POST">
<div class="form-group">
<div class="form-group">
    Are you a student? Click here to register
    <a href="register.php"><br> Register as a Student</a>
</div>
</div>

<div class="form-group">
<input class="form-control" type="text" placeholder="Name" name="name" required>
</div>
<div class="form-group">
<input class="form-control" type="text" placeholder="Email" name="email" required>
</div>
<div class="form-group">
<input class="form-control" type="password" placeholder="Password" name="password" required>
</div>
<div class="form-group">
<input class="form-control" type="password" placeholder="Confirm Password" name="confirm_password" required>
</div>
<div class="form-group mb-0">
<button class="btn btn-primary btn-block" type="submit" name="register">Register</button>
</div>
</form>

<div class="login-or">
<span class="or-line"></span>
<span class="span-or">or</span>
</div>

<div class="social-login">
<span>Register with</span>
<a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a><a href="#" class="google"><i class="fab fa-google"></i></a>
</div>

<div class="text-center dont-have">Already have an account? <a href="login.php">Login</a></div>
</div>
</div>
</div>
</div>
</div>
</div>


<script src="assets/js/jquery-3.6.0.min.js"></script>

<script src="assets/js/popper.min.js"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

<script src="assets/js/script.js"></script>
</body>

<!-- Mirrored from preschool.dreamguystech.com/html-template/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Oct 2021 11:11:58 GMT -->
</html>