<?php
include 'constant.php';

use PHPMailer\PHPMailer\PHPMailer;
require '../PHPMailer/PHPMailer/src/Exception.php';
require '../PHPMailer/PHPMailer/src/PHPMailer.php';
require '../PHPMailer/PHPMailer/src/SMTP.php';



if (isset($_POST['reset-request-submit'])) {
        
    // creating two tokens
    $selector = bin2hex(random_bytes(8));
    $token = random_bytes(32);

    // creating a link to be sent to the email
    $url = "http://localhost/preschool/create-new-password.php?selector=$selector&validator=" . bin2hex($token);

    // creating an expiry date
    $expires = date("U") + 3600;


    $email =  filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);

    $sql = "DELETE FROM pwdreset WHERE email=?";
    $stmt = $db->prepare($sql);
    if ($stmt) {
        $stmt->bind_param('s', $email);
        $stmt->execute();
    } else {
        echo "There was an error!";
        exit();
    }

    $sql = "INSERT INTO pwdreset (email, selector, token, expires) VALUES (?, ?, ?, ?)";
    $stmt = $db->prepare($sql);
    if ($stmt) {
        $hashedToken = password_hash($token, PASSWORD_BCRYPT);
        $stmt->bind_param("ssss", $email, $selector, $hashedToken, $expires);
        $stmt->execute();
    } else {
        echo "There was an error!";
        exit();
    }
    $stmt->close();

    $phpmailer = new PHPMailer();
    $phpmailer->isSMTP();
    $phpmailer->Host = 'sandbox.smtp.mailtrap.io';
    $phpmailer->SMTPAuth = true;
    $phpmailer->Port = 2525;
    $phpmailer->Username = '07846be9d65795';
    $phpmailer->Password = '90ab287c9e0382';

    $phpmailer->setFrom('preSkool@gmail.com', 'PreSkool');
    $phpmailer->addAddress("f07fdb7e56-cf7b31+1@inbox.mailtrap.io");
    $phpmailer->addReplyTo('no-reply@info.com', 'preSkool no-reply');

    $phpmailer->addAttachment('/var/tmp/file.tar.gz');
    $phpmailer->addAttachment('/tmp/image.jpg', 'new.jpg');

    $phpmailer->isHTML(true);
    $phpmailer->Subject = 'Reset your password for preSkool';
    $phpmailer->Body    = '<p>We received a password reset request. The link to reset your password is below. If you did not make this request, please ignore this email. Thanks!</p><p>Here is your password reset link: <br><a href="' . $url . '">' . $url . '</a></p>';

    try {
        $phpmailer->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo $e->getMessage();
    }

    // $to = $email;
    // $subject = 'Reset your password for preSkool';
    // $message = '<p>We received a password reset request. The link to reset your password is below. If you did not make this request, please ignore this email. Thanks!</p>';
    // $message .= '<p>Here is your password reset link: <br>';
    // $message .= '<a href="' . $url . '">' . $url . '</a></p>';

    // $headers = "From: preSkool <preSkool@gmail.com>\r\n";
    // $headers .= "Reply-To: isekundayo700@gmail.com\r\n";
    // $headers .= "Content-type: text/html\r\n";

    // mail($to, $subject, $message, $headers);

    header("Location: ../forgot-password.php?reset=success");
}