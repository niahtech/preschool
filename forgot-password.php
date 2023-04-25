<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Preskool - Forgot Password</title>

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
                            <h1>Forgot Password?</h1>
                            <p class="account-subtitle">Enter your email to get a password reset link</p>

                            <form action="libs/reset-request.inc.php" method="POST">

                                <div class="form-group">
                                    <select class="form-control" name="user">
                                        <option>Select as...</option>
                                        <option value="lecturers">Lecturer</option>
                                        <option value="bio">Student</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" type="email" name="email" placeholder="Email">
                                </div>
                                <div class="form-group mb-0">
                                    <button class="btn btn-primary btn-block" type="submit" name="reset-request-submit">Reset Password</button>
                                </div>
                            </form>

                            <?php
                            if (isset($_GET['reset'])) {
                                echo '<p style="color:green;">A reset link has been successfully sent to your e-mail</p>';
                            }
                            if (isset($_GET['expire'])) {
                                echo '<p style="color:red;">Your reset link has expired</p>';
                            }
                            if (isset($_GET['invalid'])) {
                                echo '<p style="color:red;">You need to re-submit your reset request.</p>';
                            }
                            if (isset($_GET['email'])) {
                                echo '<p style="color:red;">This E-mail is not registered.</p>';
                            }
                            ?>

                            <div class="text-center dont-have">Remember your password? <a href="login.php">Login</a></div>
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

</html>