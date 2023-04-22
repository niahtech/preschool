<?php include 'libs/connection.inc.php'; global $passwordErr; ?>
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
                            global $passwordErr;
                            $selector = bin2hex($_GET['selector']);
                            $validator = bin2hex($_GET['validator']);

                            if (empty($selector) || empty($validator)) {
                                echo '<p style="color:red">Could not validate yur request!</p>';
                            } else {
                                if (ctype_xdigit($selector) && ctype_xdigit($validator)) { ?>

                                    <form method="POST">
                                        <div class="form-group">
                                            <input class="form-control" type="text" name="selector" value="<?= $selector; ?>">
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" type="text" name="validator" value="<?= $validator; ?>">
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" type="password" name="password" placeholder="Enter a new password">
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" type="password" name="repeatPassword" placeholder="Repeat new password">
                                        </div>
                                        <div style="color:red"><?= $passwordErr ?? null?></div>
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