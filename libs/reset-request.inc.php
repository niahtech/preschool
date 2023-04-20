<?php

if(isset($_POST['reset-request-submit'])){
    // creating two tokens
    $selector = bin2hex(random_bytes(8));
    $token = random_bytes(32);

    // creating a link to be sent to the email
    $url = "www.preSkool.com/create-new-password.php?selector=$selector&validator=" . bin2hex($token);

    // creating an expiry date
    $expires = date("U") + 3600;

    include 'constant.php';

    $email =  $_POST['email'];

    $sql = "DELETE FROM pwdreset WHERE email=?";
    $stmt = $db->prepare($sql);
    if($stmt){
        $stmt->bind_param('s', $email);
        $stmt->execute();
    }else{
        echo "There was an error!";
        exit();
    }

    $sql = $db->query("INSERT INTO pwdreset (email, selector, token, expires) VALUES (?, ?, ?, ?)");
    $stmt = $db->prepare($sql);
    if($stmt){
        $hashedToken = password_hash($token, PASSWORD_BCRYPT);
        $stmt->bind_param('ssss', $email, $selector, $hashedToken, $expires);
        $stmt->execute();
    }else{
        echo "There was an error!";
        exit();
    }
    $stmt->close();

    $to = $email;
    $subject = 'Reset your password for preSkool';
    $message = '<p>We received a password reset request. The link to reset your password is below. If you did not make this request, please ignore this email. Thanks!</p>';
    $message .= '<p>Here is your password reset link: <br>';
    $message .= '<a href="' . $url . '">' . $url . '</a></p>';

    $headers = "From: preSkool <preskool@gmail.com>\r\n";
    $headers .= "Reply-To: isekundayo700@gmail.com\r\n";
    $headers .= "Content-type: text/html\r\n";

    mail($to, $subject, $message, $headers);

    header("Location: ./forgot-password.php?reset=success");

}else{
    header('Location: ./login.php');
}