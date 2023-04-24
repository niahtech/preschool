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
    $sql = $db->query("SELECT * FROM bio where email='$id'");
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
    $sql = $db->query("SELECT * FROM departments WHERE name='$id' ");
    return mysqli_fetch_array($sql);
}


function countStudents()
{
    global $db;
    $sql = $db->query("SELECT * FROM bio");
    $check= mysqli_fetch_array($sql);
    return $check;
}

function countAllStudents()
{
    global $db;
    $sql = $db->query("SELECT * FROM bio");
    $check= mysqli_num_rows($sql);
    return $check;
}
function countAllDepartments()
{
    global $db;
    $sql = $db->query("SELECT * FROM departments");
    $check= mysqli_num_rows($sql);
    return $check;
}
function countStudentsDept($id)
{
    global $db;
    $sql = $db->query("SELECT * FROM bio WHERE department='$id'");
    $check= mysqli_num_rows($sql);
    return $check;
}

function countStudentsLevel($id)
{
    global $db;
    $sql = $db->query("SELECT * FROM bio WHERE class='$id'");
    $check=mysqli_num_rows($sql);
    return $check;
}
function countCoursesLevel($id)
{
    global $db;
    $sql = $db->query("SELECT * FROM bio WHERE class='$id'");
    $check=mysqli_num_rows($sql);
    return $check;
}
function countLevel()
{
    global $db;
    $sql = $db->query("SELECT * FROM level");
    $check= mysqli_num_rows($sql);
    return $check;
}
function countGender($gender,$section){
    global $db;
    $sql= $db->query("SELECT * FROM bio WHERE gender='$gender' AND session ='$section'");
    $check= mysqli_num_rows($sql);
    return $check;

}
function getPaymentType($paymenttype,$level){
    global $db;
    if($paymenttype=='1'){
        $sql=$db->query("SELECT * FROM level WHERE id='$level'");
        $fees= mysqli_fetch_array($sql);
        return $fees['SchoolFees'];
    }

}

 function getLecturer($email, $detail)
    {
        global $db;

        $sql = $db->query("SELECT * FROM lecturers WHERE email='$email'");
        $row = mysqli_fetch_array($sql);

        return $row[$detail] ?? NULL;
    }

    function getStudent($email, $detail)
    {
        global $db;

        $sql = $db->query("SELECT * FROM bio WHERE Email='$email' ");
        $row = mysqli_fetch_array($sql);

        return $row[$detail] ?? NULL;
    }

    function getStudentById($detail, $id) {
        global $db;

        $sql = $db->query("SELECT * FROM bio WHERE id='$id' ");
        $row = mysqli_fetch_array($sql);

        return $row[$detail];
    }

    function insertScore(){
        global $db, $course;
        $name = $_GET['name'];
        $students = $db->query("SELECT * FROM bio WHERE Department='$name'");
        $scores = $_POST['score'];
        while($student = mysqli_fetch_array($students)){
            $studentCourses = explode(',', $student['courses']);
            if(in_array($course, $studentCourses)){
                $stu[] = $student['studentId'];
            }
        }
        for($i=0; $i<count($stu); $i++){
            $id = $stu[$i];
            $sql = "UPDATE bio SET $course = ? WHERE studentId = '$id'";
            $stmt = $db->prepare($sql);
            if($stmt){
                $stmt->bind_param('i', $score);
                $score = $scores[$i];
                $stmt->execute();
            }
            else{
                exit('error: failed to prepare sql query');
            }
            $stmt->close(); 
        }
    }

    function changeDate($detail){
        $month = ['January','February','March','April','May','June','July','August','September','Octpber','November','December'];
        $dat = explode('-', $detail);
        $index = $dat[1]-1;
        $str = "$dat[2] -$dat[1], $dat[0]";
        $real = str_replace("-$dat[1]", "$month[$index]", $str);

        echo $real;
    }

    function timeDifference($start, $end){
        $difference = strtotime($start) - strtotime($end);

        echo round(abs($difference)/60,2);
    }

    function status($start, $end){
        $currentTime = strtotime(date("c"));
        if(strtotime($start) <= $currentTime && $currentTime < strtotime($end)){
            echo 'Ongoing';
        }
        elseif(strtotime($start) > $currentTime){
            echo 'Upcoming';
        }
        else{
            echo 'Completed';
        }
        echo time();
    }



 ?>
