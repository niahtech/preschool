<?php


function Alert()
{
    global $report, $count;
    $bg = ($count == 0) ? 'alert-success' : 'alert-danger';
    return '<div class="alert ' . $bg . ' alert-dismissible" style="position:fixed; top:10px; right:10px; z-index:100000">
        <i class="icon fa fa-ban"></i>&nbsp;&nbsp;<b>' . $report . ' </b>&nbsp;&nbsp;&nbsp;
        </div>';
}
function confirm_password()
{
    global $db, $message, $wrongConfirmation, $success, $profile_error, $profile_success;
    extract($_POST);
    $id = $_SESSION['id'];
    $sql = $db->query("SELECT * FROM student_registered where email='$id'");
    $result = $sql->fetch_assoc();
    $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);
    if (password_verify($current_password, $result['password'])) {
        if (password_verify($confirm_password, $hashed_password)) {
            $update = $db->query("UPDATE student_registered SET password ='$hashed_password' WHERE email='$id'");
            $success = '<p style="color:green">Password successfully changed</p>';
            $profile_success = '<p style="color:green">Password successfully changed</p>';
        } else {
            $wrongConfirmation = '<p style="color:red">Incorrect password confirmation</p>';
            $profile_error = '<p style="color:red">Password not saved</p>';
        }
    } else {
        $message = '<p style="color:red;">Incorrect current password</p>';
        $profile_error = '<p style="color:red">Password not changed, error occured... go back</p>';
        return;
    }
}


function getClass($id)
{
    global $db;
    $sql = $db->query("SELECT * FROM level WHERE id='$id' ");
    return mysqli_fetch_array($sql);
}


function getDept($id)
{
    global $db;
    $sql = $db->query("SELECT * FROM departments WHERE id='$id' ");
    return mysqli_fetch_array($sql);
}


function countStudents()
{
    global $db;
    $sql = $db->query("SELECT * FROM student_registered");
    $check= mysqli_fetch_array($sql);
    return $check;
}