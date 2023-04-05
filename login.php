<?php include 'libs/connection.inc.php'?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
      <title><?= APP_NAME ?></title>
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
         <?php if(isset($report)) { echo Alert(); }  ?>
            <div class="container">
               <div class="loginbox">
                  <div class="login-left">
                     <img class="img-fluid" src="assets/img/logo-white.png" alt="Logo">
                  </div>
                  <div class="login-right">
                     <div class="login-right-wrap">
                        <h1>Login</h1>
                        <p class="account-subtitle">Access to our dashboard</p>
                        <form method="POST">
                           <div class="form-group">
                              <select name="person" id="" class="form-control" required>
                                       <option value="">Login as</option>
                                       <option value="Lecturer">Lecturer</option>
                                       <option value="Student">Student</option>
                              </select>
                           </div>
                           <div class="form-group">
                              <input class="form-control" type="email" placeholder="Email" name="email">
                           </div>
                           <div class="form-group">
                              <input class="form-control" type="password" placeholder="Password" name="password">
                           </div>
                           <div class="form-group">
                              <button class="btn btn-primary btn-block" type="submit" name="login" value="5">Login</button>
                           </div>
                        </form>
                        <div class="text-center forgotpass"><a href="forgot-password.html">Forgot Password?</a></div>
                        <div class="login-or">
                           <span class="or-line"></span>
                           <span class="span-or">or</span>
                        </div>
                        <div class="social-login">
                           <span>Login with</span>
                           <a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a><a href="#" class="google"><i class="fab fa-google"></i></a>
                        </div>
                        <div class="text-center dont-have">Don’t have an account? <a href="register.php">Register</a></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <?php include 'footer.php' ?>
   </body>
</html>