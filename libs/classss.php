<?php
class preskool
{
  public function __construct()
  {
    if (isset($_POST['studentdet'])) {
      $this->studentdet();
    } elseif (array_key_exists('registerCourse', $_POST)) {
      $this->registerCourse();
    }
  }

  function validate($text, $fieldname)
  {
    global $count, $report;
    $text = trim($text);
    if (strlen($text) < 3) {
      $report = $report . '<br>' . $fieldname . 'is too short';
      $count++;
    }
    return $text;
  }


  function studentdet()
  {
    global $db, $id;
    extract($_POST);

    $id = $_SESSION['id'];
    $FirstName = $this->validate(filter_input(INPUT_POST, 'FirstName', FILTER_SANITIZE_FULL_SPECIAL_CHARS), 'FirstName');


    $LastName = $this->validate(filter_input(INPUT_POST, 'LastName', FILTER_SANITIZE_FULL_SPECIAL_CHARS), 'LastName');

    $Email = $this->validate(filter_input(INPUT_POST, 'Email', FILTER_SANITIZE_EMAIL), 'Email');

    $DOB = $this->validate(filter_input(INPUT_POST, 'DOB', FILTER_SANITIZE_FULL_SPECIAL_CHARS), 'DOB');

    $Religion = $this->validate(filter_input(INPUT_POST, 'Religion', FILTER_SANITIZE_FULL_SPECIAL_CHARS), 'Religion');

    $PhoneNumber = $this->validate(filter_input(INPUT_POST, 'PhoneNumber', FILTER_SANITIZE_NUMBER_INT), 'PhoneNumber');

    $Gender = $this->validate(filter_input(INPUT_POST, 'Gender', FILTER_SANITIZE_FULL_SPECIAL_CHARS), 'Gender');

    $Department = $this->validate(filter_input(INPUT_POST, 'Department', FILTER_SANITIZE_FULL_SPECIAL_CHARS), 'Department');
    $Country = $this->validate(filter_input(INPUT_POST, 'Country', FILTER_SANITIZE_FULL_SPECIAL_CHARS), 'Country');
    $permanentAddress = $this->validate(filter_input(INPUT_POST, 'permanentAddress', FILTER_SANITIZE_FULL_SPECIAL_CHARS), 'permanentAddress');

    $presentAddress = $this->validate(filter_input(INPUT_POST, 'presentAddress', FILTER_SANITIZE_FULL_SPECIAL_CHARS), 'presentAddress');
    $fathersName = $this->validate(filter_input(INPUT_POST, 'fatherName', FILTER_SANITIZE_FULL_SPECIAL_CHARS), 'fathersName');
    $mothersName = $this->validate(filter_input(INPUT_POST, 'mothersName', FILTER_SANITIZE_FULL_SPECIAL_CHARS), 'mothersName');
    $fathersOccupation = $this->validate(filter_input(INPUT_POST, 'fathersOccupation', FILTER_SANITIZE_FULL_SPECIAL_CHARS), 'fathersOccupation');
    $mothersOccupation = $this->validate(filter_input(INPUT_POST, 'mothersOccupation', FILTER_SANITIZE_FULL_SPECIAL_CHARS), 'fathersOccupation');
    $fathersMobile = $this->validate(filter_input(INPUT_POST, 'fathersMobile', FILTER_SANITIZE_FULL_SPECIAL_CHARS), 'fathersMobile');
    $mothersMobile = $this->validate(filter_input(INPUT_POST, 'mothersMobile', FILTER_SANITIZE_FULL_SPECIAL_CHARS), 'mothersMobile');
    $fathersEmail = $this->validate(filter_input(INPUT_POST, 'fathersEmail', FILTER_SANITIZE_FULL_SPECIAL_CHARS), 'fathersEmail');
    $mothersEmail = $this->validate(filter_input(INPUT_POST, 'mothersEmail', FILTER_SANITIZE_FULL_SPECIAL_CHARS), 'mothersEmail');
    $session = $this->validate(filter_input(INPUT_POST, 'session', FILTER_SANITIZE_FULL_SPECIAL_CHARS), 'session');
    $studentId = $this->validate(filter_input(INPUT_POST, 'studentId', FILTER_SANITIZE_FULL_SPECIAL_CHARS), 'studentId');


    $db->query("UPDATE bio set DOB ='$DOB',Religion='$Religion',PhoneNumber ='$PhoneNumber' ,Gender= '$Gender',Department ='$Department',Country='$Country',permanentAddress='$permanentAddress',presentAddress='$presentAddress',studentId='$studentId',session='$session',mothersEmail='$mothersEmail',fathersEmail='$fathersEmail',mothersMobile='$mothersMobile',fathersMobile='$fathersMobile',mothersOccupation='$mothersOccupation',mothersName='$mothersName',fathersName='$fathersName'WHERE Email='$id' ");

    //     //     // Success
    header('Location:student-details.php');
    //     //     echo 'created';
    //     // } else {
    //     //     // Error
    //     //     echo 'Error: ' . mysqli_error($db);
    //     // }

    $_SESSION['id'] = $Email;
  }

  function registerCourse()
  {
    global $db;
    $id = $_SESSION['id'];
    $courses = $_POST['course'];
    $cou = implode(',', $courses);
    $ql  = $db->query("UPDATE bio SET courses = '$cou' WHERE Email = '$id'");
    header('Location:student-dashboard.php');
  }
}

$preskool = new preskool;
