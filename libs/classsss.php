<?php
class lecturer
{
    function __construct()
    {
        if (isset($_POST['register'])) {
            $this->register();
        }
        if (isset($_POST['login'])) {
            $this->login();
        }
        if (isset($_POST['editLecturer'])) {
            $this->editLecturer();
        }
        if (isset($_POST['changePassword'])) {
            $this->changePassword();
        }
        if (isset($_POST['resultUpdate'])) {
            $this->resultUpdate();
        }
        if (isset($_POST['scheduleClass'])) {
            $this->scheduleClass();
        }
        if (isset($_POST['reschedule'])) {
            $this->reschedule();
        }
        if (isset($_POST['deleteSchedule'])) {
            $this->deleteSchedule();
        }
    }

    function register()
    {
        global $db, $registeredEmailErr, $passwordErr;
        // sanitizing inputs
        $lastName = filter_input(INPUT_POST, 'lastName', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $firstName = filter_input(INPUT_POST, 'firstName', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        $password = $_POST['password'];
        $repeatPassword = $_POST['repeatPassword'];

        $sql = $db->query("SELECT email FROM bio WHERE Email = '$email' LIMIT 1");
        if (mysqli_num_rows($sql) > 0) {
            $registeredEmailErr = 'This Email has already been used';
        } else {
            if ($password !== $repeatPassword) {
                $passwordErr = 'Passwords does not match';
            } else {
                $password = password_hash($password, PASSWORD_BCRYPT);
                $sql = $db->query("INSERT INTO bio (FirstName, LastName, Email, Password) VALUES('$firstName', '$lastName', '$email', '$password')");

                header('Location: login.php');
            }
        }
        
    }

    function login()
    {
        global $db, $loginErr;
        // sanitizing inputs
        $user = filter_input(INPUT_POST, 'user', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        $password = $_POST['password'];

        if ($user == 'Lecturer') {
            $sql = $db->query("SELECT email,password FROM lecturers WHERE email = '$email' LIMIT 1");
            $result = $sql->fetch_assoc();
            if (mysqli_num_rows($sql) > 0) {
                if (!password_verify($password, $result['password'])) {
                    $loginErr = 'Check your Email or Password';
                } else {
                    $_SESSION['email'] = $email;
                    header('Location: teacher-dashboard.php');
                }
            } else {
                $loginErr = 'You are not a registered user';
            }
        } else {
            $sql = $db->query("SELECT Email,Password FROM bio WHERE Email = '$email' LIMIT 1");
            $result = $sql->fetch_assoc();
            if (mysqli_num_rows($sql) > 0) {
                if (!password_verify($password, $result['Password'])) {
                    $loginErr = 'Check your Email or Password';
                } else {
                    $_SESSION['email'] = $email;
                    $_SESSION['id'] = $email;
                    header('Location: student-dashboard.php');
                }
            } else {
                $loginErr = 'You are not a registered user';
            }
        }
    }

    function editLecturer()
    {
        global $db, $imageErr, $updated, $courseErr;
        $teacherId = filter_input(INPUT_POST, 'teacherId', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $gender = filter_input(INPUT_POST, 'gender', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $dob = filter_input(INPUT_POST, 'dob', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $mobile = filter_input(INPUT_POST, 'mobile', FILTER_SANITIZE_NUMBER_INT);
        $qualification = filter_input(INPUT_POST, 'qualification', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $course = implode(',', $_POST['course']);
        $experience = filter_input(INPUT_POST, 'experience', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        $address = filter_input(INPUT_POST, 'address', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $city = filter_input(INPUT_POST, 'city', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $state = filter_input(INPUT_POST, 'state', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $zipCode = filter_input(INPUT_POST, 'zipCode', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $country = filter_input(INPUT_POST, 'country', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

        if (empty($course)) {
            $courseErr = 'Please select a course';
        }

        // Image handling
        $allowedExt = ['png', 'jpg', 'jpeg', 'gif'];
        if (!empty($_FILES['image']['name'])) {
            $fileName = $_FILES['image']['name'];
            $fileSize = $_FILES['image']['size'];
            $fileTmp = $_FILES['image']['tmp_name'];
            $targetDir = "lecturer-image/$fileName";
            $fileExt = explode('.', $fileName);
            $fileExt = strtolower(end($fileExt));

            // check if file is an image
            if (in_array($fileExt, $allowedExt)) {
                if ($fileSize <= 300000) {
                    move_uploaded_file($fileTmp, $targetDir);
                    $imageErr = '<p style="color:green;">Image Uploaded</p>';
                    $updated = '<p style="color:green;">SUCESSFULLY UPDATED</p>';

                    // Update database
                    $sql = $db->query("UPDATE lecturers SET teacherId='$teacherId', name='$name', gender='$gender', dob='$dob', mobile='$mobile', qualification='$qualification', course='$course', experience='$experience', image='$fileName', username='$username', address='$address', city='$city', state='$state', zipCode='$zipCode', country='$country' WHERE email='$email'");

                    header('Location: teacher-details.php');
                } else {
                    $imageErr = '<p style="color:red;">File is too large</p>';
                }
            } else {
                $imageErr = '<p style="color:red;">Invalid file type</p>';
            }
        } else {
            $imageErr = '<p style="color:red;">Please choose a file</p>';
        }
    }

    function changePassword()
    {
        global $db, $passwordErr;
        $email = $_POST['email'];
        $currentPassword = $_POST['currentPassword'];
        $newPassword = $_POST['newPassword'];
        $sql = $db->query("SELECT * FROM lecturers WHERE email='$email'");
        $password = $sql->fetch_assoc();

        if (password_verify($currentPassword, $password['password'])) {
            $newPassword = password_hash($newPassword, PASSWORD_BCRYPT);
            // Update the new password
            $sql = $db->query("UPDATE lecturers SET password='$newPassword'");
            header('Location: teacher-details.php?pwdErr=successful');
            $passwordErr = '<span style="color: green;">Password Successfully Updated</span>';
        } else {
            header('Location: teacher-details.php?pwdErr=incorrect');
            $passwordErr = '<span style="color: red;">Incorrect Password</span>';
        }
    }

    function resultUpdate()
    {
        global $db, $course;

        $course = $_GET['course'];
        // Check if the column exists in the table
        $sql = $db->query("SELECT group_concat(COLUMN_NAME) FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA = 'preskool' AND TABLE_NAME = 'bio';");
        $result = $sql->fetch_assoc();
        $result = $result["group_concat(COLUMN_NAME)"];
        $result = explode(',', $result);
        if (in_array($course, $result)) {
            insertScore();
        } else {
            $sql = $db->query("ALTER TABLE bio ADD $course varchar(4) 0");
            insertScore();
        }
        header('Location: student-result.php');
    }

    function scheduleClass()
    {
        global $db;

        $date = filter_input(INPUT_POST, 'date', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $startTime = filter_input(INPUT_POST, 'startTime', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $endTime = filter_input(INPUT_POST, 'endTime', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $course = filter_input(INPUT_POST, 'course', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

        $sql = $db->query("INSERT INTO schedule (date, startTime, endTime, course) VALUES ('$date', '$startTime', '$endTime', '$course')");

        header('Location: schedule-class.php');
    }

    function reschedule()
    {
        global $db;
        $id = $_POST['id'];

        $date = filter_input(INPUT_POST, 'date', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $startTime = filter_input(INPUT_POST, 'startTime', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $endTime = filter_input(INPUT_POST, 'endTime', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $course = filter_input(INPUT_POST, 'course', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

        $sql = $db->query("UPDATE schedule SET date='$date', startTime='$startTime', endTime='$endTime', course='$course' WHERE id='$id'");

        header('Location: schedule-class.php');
    }

    function deleteSchedule()
    {
        global $db;

        $id = $_POST['id'];
        $sql = $db->query("DELETE FROM schedule WHERE id='$id'");

        header('Location: schedule-class.php');
    }
    
}
$New_Life = new lecturer;
