<?php
    global $passwordErr;
    if (isset($_POST['reset-password-submit'])) {
        $selector = $_POST['selector'];
        $validator = $_POST['validator'];
        $password = $_POST['password'];
        $repeatPassword = $_POST['repeatPassword'];

        if (empty($password) || empty($repeatPassword)) {
            $passwordErr = 'Please Enter your password';
        } elseif($password !== $repeatPassword){
            $passwordErr = 'Passwords does not match';
        }

        $currentDate = date("U");
        include 'constant.php';

        $sql = $db->query("SELECT * FROM pwdreset WHERE selector=? & expires >= '$currentDate'");
        $stmt = $db->prepare($sql);
        if($stmt){
            $stmt->bind_param('s', $selector);
            $stmt->execute();

            $result = $stmt->get_result();
            if($row = mysqli_fetch_assoc($result)){
                $tokenBin = hex2bin($validator);
                $tokenCheck = password_verify($tokenBin, $row['token']);
                if($tokenCheck){
                    $tokenEmail = $row['email'];
                    $sql = $db->query("SELECT * FROM lecturers WHERE email=?");
                    $stmt = $db->prepare($sql);
                    if($stmt){
                        $stmt->bind_param('s', $tokenEmail);
                        $stmt->execute();
                        $result = $stmt->get_result();
                        if($row = mysqli_fetch_assoc($result)){
                            $sql = $db->query("UPDATE lecturers SET password=? WHERE email=?");
                            $stmt = $db->prepare($sql);
                            if($stmt){
                                $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
                                $stmt->bind_param('ss', $hashedPassword, $tokenEmail);
                                $stmt->execute();
                                $sql = "DELETE FROM pwdreset WHERE email=?";
                                $stmt = $db->prepare($sql);
                                if($stmt){
                                    $stmt->bind_param('s', $tokenEmail);
                                    $stmt->execute();
                                    header('Location: ./login.php?newpwd=passwordupdated');
                                }else{
                                    echo "There was an error!";
                                    exit();
                                }
                            }else{
                                echo "There was an error!";
                                exit();
                            }
                        }else{
                            echo "There was an error!";
                            exit();
                        }
                    }else{
                        echo "There was an error!";
                        exit();
                    }
                }else {
                    echo 'You need to re-submit your reset request';
                    exit();
                }
            }else {
                echo "You need to re-submit your reset request.";
                exit();
            }
        }else{
            echo "There was an error!";
            exit();
        }
        $stmt->close();

    }else {
        header('Location: ./login.php');
    }
?>