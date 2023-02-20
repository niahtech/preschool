<?php include 'libs/connection.inc.php' ?>

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
<?php if(isset($report)) { echo Alert(); }  ?>
<div class="login-wrapper">
<div class="container">
<div class="loginbox">
<div class="login-left">
<img class="img-fluid" src="assets/img/logo-white.png" alt="Logo">
</div>
<div class="login-right">
<div class="login-right-wrap">
<h1>Register</h1>
<p class="account-subtitle">Access to our dashboard</p>

<!-- <form action="https://preschool.dreamguystech.com/html-template/login.html" method="POST"> -->
<form  method="POST">
<div class="form-group">
    <h4>Register as:</h4>
    <input type="radio" name="individual" id="" value="Lecturer" required>
    <label for="">Lecturer</label>
    <input type="radio" name="individual" id="" value="Student" required>
    <label for="">Student</label> 
</div>

<div class="form-group">
<input class="form-control" type="text" placeholder="First Name" name="first_name" required>
</div>
<div class="form-group">
<input class="form-control" type="text" placeholder="Last Name" name="last_name" required>
</div>

<div class="form-group">
<input class="form-control" type="text" placeholder="Email" name="email" required>
<div style="color:red"><?= $registeredEmailErr ?></div>
</div>
<div class="form-group">
<input class="form-control" type="password" placeholder="Password" name="password" required>
</div>
<div class="form-group">
<input class="form-control" type="password" placeholder="Confirm Password" name="confirm_password" required>
<div style="color:red"><?= $passwordErr ?></div>
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