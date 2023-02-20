<?php
$registeredEmailErr = $passwordErr = '';
class New_Life
{

    function __construct()
    {

        if (isset($_POST["register"])) {
            $this->register();
        }
        else if (isset($_POST['login'])) {
            $this->Login();
        }
        else if (isset($_POST['submit'])) {
            $this->Add_student();
        }
        else if(isset($_POST['change_pass'])){ $this->student_details();}
        else if(isset($_POST['save_changes'])){ $this->student_details();}
        else if(isset($_POST['deleteStudent'])){ $this->deleteStudent();}
        else if(isset($_POST['deleteLecturer'])){ $this->deleteLecturer();}
        else if (array_key_exists('createClass', $_POST)) { $this->createClass(); }
        else if (array_key_exists('createDepartment', $_POST)) { $this->createDepartment(); }
        else if (array_key_exists('createCourse', $_POST)) { $this->createCourse(); }
    }
    function validation($text, $fieldname)
    {
        global $report, $count;
        $text = trim($text);
        if (strlen($text) < 3) {
            $report = $report . '<br>' . $fieldname . '   is too short';
            $count++;
        }
        return $text;
    }


    // createCourse

    function createCourse()
    {
        global $db, $report, $count;
        $course_title = $this->validation($_POST['course_title'], 'Course Title');
        $unit = $_POST['unit'];
        $code = $this->validation($_POST['course_code'], 'Course Code');
        $department = $_POST['department'];
        $semester = $_POST['semester'];
        $class = $_POST['class'];
        $comp = $_POST['compulsory'] ?? 0 ;

        $ch = $db->query("SELECT course_code FROM courses");
        if(mysqli_num_rows($ch) > 0) {
            $report = 'This course already exists try another'; $count = 1;
            return;
        }
        $db->query("INSERT INTO courses (course_title,course_code,unit,semester,class_id,department_id,compulsory,created_at) VALUES('$course_title', '$code', '$unit', '$semester', '$class', '$department', '$comp', now() ) ");
        $report = 'Course has Been added sucessfuly'; $count = 0;
        return;
    }




    //createDepartment

    function createDepartment()
    {
        global $db, $report, $count;
        $name = $this->validation($_POST['name'], 'Department Name');
        $hod = $this->validation($_POST['hod'], 'Head Of Department');
        $ch = $db->query("SELECT * FROM departments WHERE name='$name' ");
        if(mysqli_num_rows($ch) > 0) {
            $report = 'This Department already exists try another'; $count = 1;
            return;
        }
        $db->query("INSERT INTO departments(name,head_of_department) VALUES('$name', '$hod') ");
        $report = 'Department has Been added sucessfuly'; $count = 0;
        return;
    }



    function createClass()
    {
        global $db, $report, $count;

        $class_name = $this->validation($_POST['class_name'], 'Class Name');
        $ch = $db->query("SELECT * FROM level WHERE name='$class_name' ");
        if(mysqli_num_rows($ch) > 0) {
            $report = 'This class already exists try another'; $count = 1;
            return;
        }
        $db->query("INSERT INTO level(name) VALUES('$class_name') ");
        $report = 'Class has Been created sucessfuly'; $count = 0;
        return;
    }

    function register()
    {
        global $registeredEmailErr, $passwordErr;
        global $db, $count, $report;
        $password = $confirm_password = '';
        $first_name = $this->validation(filter_input(INPUT_POST, 'first_name', FILTER_SANITIZE_SPECIAL_CHARS), 'First Name');
        $last_name = $this->validation(filter_input(INPUT_POST, 'last_name', FILTER_SANITIZE_SPECIAL_CHARS), 'Last Name');
        $email = $this->validation(filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL), 'Email');
        $password = $this->validation($_POST["password"], 'Password');
        $hashed_password=password_hash($password,PASSWORD_DEFAULT);
        $confirm_password = $_POST["confirm_password"];
        if ($count > 0) {
            return;
        }
        if ($_POST["individual"] == 'Lecturer') {
            //checking for multiples emails
            $data = $db->query("SELECT * FROM lecturer_registered WHERE email='$email'");
            $registeredEmails = $data->fetch_assoc();
            if (!empty($registeredEmails)) {
                $registeredEmailErr = 'This Email has already been used';
            } else {
                //password confirmation
                if (password_verify($confirm_password,$hashed_password)) {
                    $db->query("INSERT INTO lecturer_registered (first_name,last_name,email,password) VALUES ('$first_name','$last_name','$email','$hashed_password')");
                    //success
                    header('Location:login.php');
                    $_SESSION['id'] = $_POST['email'];
                    
                } else {
                    $passwordErr = "Passwords does not match";
                }
            }
        }
        if ($_POST['individual'] == 'Student') {
            //checking for multiples emails
            $data = $db->query("SELECT email FROM student_registered WHERE email='$email'");
            $registeredEmails = $data->fetch_assoc();

            if (!empty($registeredEmails)) {
                $registeredEmailErr = 'This Email has already been used';
            } else {
                //password confirmation
                if (password_verify($confirm_password,$hashed_password)) {
                    $db->query("INSERT INTO student_registered (first_name,last_name,email,password) VALUES ('$first_name','$last_name','$email','$hashed_password')");
                    // success
                    header('Location:login.php');
                    $_SESSION['id'] = $_POST['email'];
                } else {
                    $passwordErr = "Passwords does not match";
                    return;
                }
            }
        }
        $_SESSION['person'] = $_POST['individual'];
    }

    function Login()
    {
        global $db, $report, $count, $user;
        $user = $_POST['person'];
        if ($user == "Lecturer") {
            $password = $_POST['password'];
            $email = $_POST['email'];
            $data = $db->query("SELECT * FROM lecturer_registered WHERE email='$email' limit=1");
            $num = mysqli_num_rows($data);
            $result=$data->fetch_assoc();
            if (password_verify($password,$result['password'])&& $num > 0) {
                $row = mysqli_fetch_array($data);
                $_SESSION['id'] = $_POST['email'];
                header("Location: lecturer-dashboard.php");
            } else {
                $count++;
                $report = "$report Invalid Input, Check your email or password <br> Or You are not a registered user";
            }
        }

        if ($user == "Student") {
            $password = $_POST['password'];
            $email = $_POST['email'];
            $data = $db->query("SELECT * FROM student_registered WHERE email='$email'");
            $result=$data->fetch_assoc();
            $num = mysqli_num_rows($data);
            if (password_verify($password,$result['password'])&& $num > 0) {
                $row = mysqli_fetch_array($data);
                $_SESSION['id'] = $_POST['email'];
                header("Location: student-dashboard.php");
            } else {
                $count++;
                $report = "<br>Invalid Input!!! Check your email or password <br> Or you are not a registered user";
            }
        }
    }
    function Add_student()
    {
        global $db, $id, $message;
        extract($_POST);
        $id = $_SESSION['id'];
        $student_image = $_FILES['student_image']['name'];

        $allowed_ext = array('png', 'jpg', 'jpeg', 'gif');
        if (!empty($_FILES['student_image']['name'])) {
            $image_name = $_FILES['student_image']['name'];
            $image_size = $_FILES['student_image']['size'];
            $image_tmp = $_FILES['student_image']['tmp_name'];
            // upload to where
            $target_dir = "student_image/${image_name}";
            //get file extension... th echo $image_ext;at is the end letters after . in the file name
            //explode() creates an array from a string
            $image_ext = explode('.', $image_name);
            $image_ext = strtolower(end($image_ext));
            //validate image extension
            if (in_array($image_ext, $allowed_ext)) {
                if ($image_size <= 1000000) {
                    move_uploaded_file($image_tmp, $target_dir);
                } else {
                    $message = '<p style="color:red;">The file is too large</p>';
                    return;
                }
            } else {
                $message = '<p style="color:red;">Invalid File Input</p>';
                return;
            }
        }
        // updating student details
        $db->query("UPDATE student_registered SET first_name='$first_name',last_name= '$last_name',student_id='$student_id',gender='$gender',dob='$dob',class='$class',religion='$religion',joining_date='$joining_date',mobile_number='$mobile_number',admission_number='$admission_number',section='$section',father_name='$father_name',father_occupation='$father_occupation',father_mobile='$father_mobile',father_email='$father_email',mother_name='$mother_name',mother_occupation='$mother_occupation',mother_mobile='$mother_mobile',mother_email='$mother_email',present_address='$present_address',permanent_address='$permanent_address',student_image='$student_image',department='$department' WHERE email='$id'");
        header('Location:student-details.php');
    }
    function student_details(){
        confirm_password();
    }

    function deleteStudent(){
        global $db;
        $id=$_POST['deleteStudent'];
        $sql=$db->query("DELETE FROM student_registered WHERE id='$id'");
    }
    function deleteLecturer(){
        global $db;
        $id=$_POST['deleteLecturer'];
        $sql=$db->query("DELETE FROM lecturer_registered WHERE id='$id'");
    }
}
$New_Life = new New_Life;
?>