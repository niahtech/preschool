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
                            <?php

                            $selector = $_GET['selector'];
                            $validator = $_GET['validator'];

                            if (!isset($_GET['selector']) || !isset($_GET['validator'])) {
                                echo '<p style="color:red">Could not validate your request!</p>';
                            } else {
                                if (ctype_xdigit($selector) && ctype_xdigit($validator)) { ?>

                                    <h1>Password Reset</h1>
                                    <p class="account-subtitle">Enter the new password to your account here!</p>
                                    <form action="libs/reset-password.inc.php" method="POST">
                                        <div class="form-group">
                                            <input class="form-control" type="hidden" name="selector" value="<?= $selector; ?>">
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" type="hidden" name="validator" value="<?= $validator; ?>">
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" type="password" name="password" placeholder="New password" required>
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" type="password" name="repeatPassword" placeholder="Repeat new password" required>
                                        </div>
                                        <?php
                                        if (isset($_GET['pwderr'])) {
                                            echo '<p style="color:red;">Passwords does not match</p>';
                                        }
                                        ?>
                                        <div class="form-group mb-0">
                                            <button class="btn btn-primary btn-block" type="submit" name="reset-password-submit">Reset Password</button>
                                        </div>
                                    </form>

                            <?php
                                }
                            }
                            ?>
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