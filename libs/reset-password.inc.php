<?php
    if (isset($_POST['reset-password-submit'])) {
        $selector = $_POST['selector'];
        $validator = $_POST['validator'];
        $password = $_POST['password'];
        $passwordRepeat = $_POST['passwordRepeat'];

        

    }else {
        header('Location: ./login.php');
    }
?>