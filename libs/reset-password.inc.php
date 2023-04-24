<?php
include 'constant.php';
        
if (isset($_POST['reset-password-submit'])) {

    $selector = $_POST['selector'];
    $validator = $_POST['validator'];
    $password = $_POST['password'];
    $repeatPassword = $_POST['repeatPassword'];

    if ($password !== $repeatPassword) {
        header('Location: ../create-new-password.php?selector='.$selector.'&validator='.$validator.'&pwderr=passwordmismatch');
    }

    $currentDate = date("U");

    $sql = "SELECT * FROM pwdreset WHERE selector=? AND expires >= '$currentDate'";
    $stmt = $db->prepare($sql);
    if ($stmt) {
        $stmt->bind_param('s', $selector);
        $stmt->execute();

        $result = $stmt->get_result();
        if ($row = mysqli_fetch_assoc($result)) {
            $tokenBin = hex2bin($validator);
            if (password_verify($tokenBin, $row['token'])) {
                $tokenEmail = $row['email'];
                $sql = "SELECT * FROM lecturers WHERE email=?";
                $stmt = $db->prepare($sql);
                if ($stmt) {
                    $stmt->bind_param('s', $tokenEmail);
                    $stmt->execute();
                    $result = $stmt->get_result();
                    if ($row = mysqli_fetch_assoc($result)) {
                        $sql = "UPDATE lecturers SET password=? WHERE email=?";
                        $stmt = $db->prepare($sql);
                        if ($stmt) {
                            $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
                            $stmt->bind_param('ss', $hashedPassword, $tokenEmail);
                            $stmt->execute();

                            $sql = "DELETE FROM pwdreset WHERE email=?";
                            $stmt = $db->prepare($sql);
                            if ($stmt) {
                                $stmt->bind_param('s', $tokenEmail);
                                $stmt->execute();
                                header('Location: ../login.php?newpwd=passwordupdated');
                            } else {
                                echo '<p style="color:red">There was an error!</p>';
                                exit();
                            }
                        } else {
                            echo '<p style="color:red">There was an error!</p>';
                            exit();
                        }
                    } else {
                        header('Location: ../forgot-password.php?email=unregistered');
                    }
                } else {
                    echo '<p style="color:red">There was an error!</p>';
                    exit();
                }
            } else {
                header('Location: ../forgot-password.php?invalid=validator');
            }
        } else {
            header('Location: ../forgot-password.php?expire=linkexpired');
        }
    } else {
        echo '<p style="color:red">There was an error!</p>';
        exit();
    }
    $stmt->close();
}
    
?>