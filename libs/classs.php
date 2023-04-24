<?php
$registeredEmailErr = $passwordErr = '';
class New_Life
{

    function __construct()
    {

        if (isset($_POST['deleteStudent'])) {
            $this->deleteStudent();
        } else if (isset($_POST['deleteLecturer'])) {
            $this->deleteLecturer();
        } else if (array_key_exists('createClass', $_POST)) {
            $this->createClass();
        } else if (array_key_exists('createDepartment', $_POST)) {
            $this->createDepartment();
        } else if (array_key_exists('createCourse', $_POST)) {
            $this->createCourse();
        } else if (array_key_exists('registerCourse', $_POST)) {
            $this->registerCourse();
        } else if (array_key_exists('notifications', $_POST)) {
            $this->notifications();
        } else if (array_key_exists('makePayment', $_POST)) {
            $this->makePayment();
        }
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
        $id = $_GET['id'];
        $sql = $db->query("SELECT * FROM departments WHERE id='$id'");
        $department = $sql->fetch_assoc();
        $getDepartment = $department['name'];
        $trimmedDept = strtolower(str_replace(' ', '', $getDepartment));
        echo $trimmedDept;
        $course_title = $this->validation($_POST['course_title'], 'Course Title');
        $unit = $_POST['unit'];
        $code = $this->validation($_POST['course_code'], 'Course Code');
        $semester = $_POST['semester'];
        $class = $_POST['class'];
        $comp = $_POST['compulsory'] ?? 0;
        $ch = $db->query("SELECT courseCode FROM $trimmedDept WHERE courseCode='$code'");
        if (mysqli_num_rows($ch) > 0) {
            $report = 'This course already exists try another';
            $count = 1;
            return;
        }
        $db->query("INSERT INTO $trimmedDept (courseTitle,courseCode,unit,semester,classId,compulsory,createdAt) VALUES('$course_title', '$code', '$unit', '$semester', '$class', '$comp', now() ) ");
        $report = 'Course has Been added sucessfuly';
        $count = 0;
        return;
    }




    //createDepartment

    function createDepartment()
    {
        global $db, $report, $count;
        $department = $this->validation($_POST['name'], 'Department Name');
        $hod = $this->validation($_POST['hod'], 'Head Of Department');
        $ch = $db->query("SELECT * FROM departments WHERE name='$department' ");
        if (mysqli_num_rows($ch) > 0) {
            $report = 'This Department already exists try another';
            $count = 1;
            return;
        }
        $db->query("INSERT INTO departments(name,head_of_department) VALUES('$department', '$hod') ");
        $report = 'Department has Been added sucessfuly';
        $count = 0;
        $trimmedDept = strtolower(str_replace(' ', '', $department));
        $db->query("CREATE TABLE $trimmedDept(id INT(11) AUTO_INCREMENT PRIMARY KEY, courseCode VARCHAR(255) NOT NULL, courseTitle VARCHAR(255) NOT NULL,unit int(1) NOT NULL,semester VARCHAR(6) NOT NULL , classId int(11) NOT NULL,compulsory int(11) NOT NULL default 1,createdAt TIMESTAMP NULL,updatedAt TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP)");
    }



    function createClass()
    {
        global $db, $report, $count;

        $class_name = $this->validation($_POST['class_name'], 'Class Name');
        $ch = $db->query("SELECT * FROM level WHERE name='$class_name' ");
        if (mysqli_num_rows($ch) > 0) {
            $report = 'This class already exists try another';
            $count = 1;
            return;
        }
        $db->query("INSERT INTO level(name) VALUES('$class_name') ");
        $report = 'Class has Been created sucessfuly';
        $count = 0;
        return;
    }


    function deleteStudent()
    {
        global $db;
        $id = $_POST['deleteStudent'];
        $sql = $db->query("DELETE FROM student_registered WHERE id='$id'");
    }
    function deleteLecturer()
    {
        global $db;
        $id = $_POST['deleteLecturer'];
        $sql = $db->query("DELETE FROM lecturers WHERE id='$id'");
    }
    function registerCourse()
    {
        global $db;
        $id = $_SESSION['id'];
        $sql = $db->query("SELECT * FROM student_registered where email='$id'");
        $result = $sql->fetch_assoc();
        $studentId = $result['id'];
        $studentColumn = 'STUD' . $studentId;
        $departmentName = $result['department'];
        $department = getDept($departmentName)['name'];
        $trimmedDept = strtolower(str_replace(' ', '', $department));
        error_reporting(0);
        $db->query("ALTER TABLE $trimmedDept ADD $studentColumn int(11)");
        $deptCourses = $db->query("SELECT * FROM $trimmedDept WHERE semester='First'");
        while ($regCourses = $deptCourses->fetch_assoc()) {
            $db->query("UPDATE $trimmedDept SET $studentColumn='$studentId' WHERE semester='First'");
        }
        header("location:add-subject.php");
    }
    function notifications()
    {
        global $db, $report, $status;
        extract($_POST);
        $sql = $db->query("SELECT * FROM notifications WHERE message='$message'");
        if (mysqli_num_rows($sql) > 0) {
            return;
        } else {
            $db->query("INSERT INTO notifications(message,recipient) VALUES ('$message','$recipient') ");
            return;
        }
    }

    function makePayment()
    {
        global $db, $report, $count;
        $id = $_SESSION['id'];
        $sql = $db->query("SELECT * FROM bio WHERE Email='$id'");
        $result = $sql->fetch_assoc();
        extract($_POST);
        $paymenttype = (str_replace(' ', '', $paymenttype));
        $studentId=$result['id'];
        $payDetails = $db->query("SELECT * FROM payment WHERE studentId='$studentId' AND $paymenttype='0'");
        if($paymentStatus=='1'){
            return;
        }
        elseif(mysqli_num_rows($payDetails) >= 0){
            $name = $result['FirstName'];
            $fees = $_POST['total'];
            $email = $_SESSION['id'];
            $sql = $db->query("INSERT INTO payment (studentId, schoolFees,currentPaymentType,level,session,amount,semester) VALUES('$studentId', '0','$paymenttype','$level','$session','$fees','$semester')");
            
            $curl = curl_init();
            $message=$paymenttype;
            $email = $email;
            $amount = $fees . '00';  //the amount in kobo. This value is actually NGN 300

            // url to go to after payment
            $callback_url = 'http://localhost/preschool/process.php';

            curl_setopt_array($curl, array(
                CURLOPT_URL => 'https://api.paystack.co/transaction/initialize',
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_CUSTOMREQUEST => "POST",
                CURLOPT_POSTFIELDS => json_encode([
                    'message'=>$message,
                    'amount' => $amount,
                    'email' => $email,
                    'callback_url' => $callback_url
                ]),
                CURLOPT_HTTPHEADER => [
                    'authorization: Bearer sk_test_ed2f8a4d5bac302506e5cad60bd399a5076495a5', //replace this with your own test key
                    "content-type: application/json",
                    "cache-control: no-cache",
                    "Access-Control-Allow-Origin:*"
                ],
            ));

            $response = curl_exec($curl);
            $err = curl_error($curl);

            if ($err) {
                // there was an error contacting the Paystack API
                die('Curl returned error: ' . $err);
            }

            $tranx = json_decode($response, true);

            if (!$tranx['status']) {
                // there was an error from the API
                print_r('API returned error: ' . $tranx['message']);
            }

            // comment out this line if you want to redirect the user to the payment page
            print_r($tranx);
            // redirect to page so User can pay
            // uncomment this line to allow the user redirect to the payment page
            header('Location: ' . $tranx['data']['authorization_url']);
        
        }
    }
}
$New_Life = new New_Life;
