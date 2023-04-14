<?php
class student
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
    global $db, $id, $imageErr;
    extract($_POST);

    $id = $_SESSION['id'];
    $FirstName = $this->validate(filter_input(INPUT_POST, 'FirstName', FILTER_SANITIZE_FULL_SPECIAL_CHARS), 'FirstName');


    $LastName = $this->validate(filter_input(INPUT_POST, 'LastName', FILTER_SANITIZE_FULL_SPECIAL_CHARS), 'LastName');

    $studentId = $this->validate(filter_input(INPUT_POST, 'studentId', FILTER_SANITIZE_FULL_SPECIAL_CHARS), 'studentId');
    $Email = $this->validate(filter_input(INPUT_POST, 'Email', FILTER_SANITIZE_EMAIL), 'Email');

    $DOB = $this->validate(filter_input(INPUT_POST, 'DOB', FILTER_SANITIZE_FULL_SPECIAL_CHARS), 'DOB');

    $Religion = $this->validate(filter_input(INPUT_POST, 'Religion', FILTER_SANITIZE_FULL_SPECIAL_CHARS), 'Religion');

    $PhoneNumber = $this->validate(filter_input(INPUT_POST, 'PhoneNumber', FILTER_SANITIZE_NUMBER_INT), 'PhoneNumber');

    $Gender = $this->validate(filter_input(INPUT_POST, 'Gender', FILTER_SANITIZE_FULL_SPECIAL_CHARS), 'Gender');

    $department = $this->validate(filter_input(INPUT_POST, 'department', FILTER_SANITIZE_FULL_SPECIAL_CHARS), 'department');

    $session = $this->validate(filter_input(INPUT_POST, 'session', FILTER_SANITIZE_FULL_SPECIAL_CHARS), 'session');


    $Country = $this->validate(filter_input(INPUT_POST, 'Country', FILTER_SANITIZE_FULL_SPECIAL_CHARS), 'Country');


    $fathersName = $this->validate(filter_input(INPUT_POST, 'fathersName', FILTER_SANITIZE_FULL_SPECIAL_CHARS), 'fathersName');


    $fathersOccupation = $this->validate(filter_input(INPUT_POST, 'fathersOccupation', FILTER_SANITIZE_FULL_SPECIAL_CHARS), 'fathersOccupation');


    $fathersMobile = $this->validate(filter_input(INPUT_POST, 'fathersMobile', FILTER_SANITIZE_FULL_SPECIAL_CHARS), 'fathersMobile');

    $fathersEmail = $this->validate(filter_input(INPUT_POST, 'fathersEmail', FILTER_SANITIZE_FULL_SPECIAL_CHARS), 'fathersEmail');

    $mothersName = $this->validate(filter_input(INPUT_POST, 'mothersName', FILTER_SANITIZE_FULL_SPECIAL_CHARS), 'mothersName');

    $mothersOccupation = $this->validate(filter_input(INPUT_POST, 'mothersOccupation', FILTER_SANITIZE_FULL_SPECIAL_CHARS), 'mothersOccupation');

    $mothersMobile = $this->validate(filter_input(INPUT_POST, 'mothersMobile', FILTER_SANITIZE_FULL_SPECIAL_CHARS), 'mothersMobile');



    $mothersEmail = $this->validate(filter_input(INPUT_POST, 'mothersEmail', FILTER_SANITIZE_FULL_SPECIAL_CHARS), 'mothersEmail');

    $permanentAddress = $this->validate(filter_input(INPUT_POST, 'permanentAddress', FILTER_SANITIZE_FULL_SPECIAL_CHARS), 'permanentAddress');

    $presentAddress = $this->validate(filter_input(INPUT_POST, 'presentAddress', FILTER_SANITIZE_FULL_SPECIAL_CHARS), 'presentAddress');


    $allowedExt = ['png', 'jpg', 'jpeg', 'gif'];
    if (!empty($_FILES['image']['name'])) {
      $image = $_FILES['image']['name'];
      $fileSize = $_FILES['image']['size'];
      $fileTmp = $_FILES['image']['tmp_name'];
      $targetDir = "student_img/$image";
      $fileExt = explode('.', $image);
      $fileExt = strtolower(end($fileExt));

      // check if file is an image
      if (in_array($fileExt, $allowedExt)) {
        if ($fileSize <= 3000000) {
          move_uploaded_file($fileTmp, $targetDir);
          $imageErr = '<p style="color:green;">Image Uploaded</p>';

          $db->query("UPDATE bio set studentId='$studentId', DOB ='$DOB',Religion='$Religion',PhoneNumber ='$PhoneNumber',Gender='$Gender',department ='$department',session='$session',Country='$Country',fathersName='$fathersName',fathersOccupation='$fathersOccupation',fathersMobile='$fathersMobile',fathersEmail='$fathersEmail',mothersName='$mothersName',mothersOccupation='$mothersOccupation',mothersMobile='$mothersMobile',mothersEmail='$mothersEmail', image='$image',permanentAddress='$permanentAddress',presentAddress='$presentAddress' WHERE Email='$id' ");
          header('Location:student-details.php');
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

  function registerCourse()
  {
    global $db;
    $id = $_SESSION['id'];
    $courses = $_POST['course'];
    $cou = implode(',', $courses);
    $ql  = $db->query("UPDATE bio SET courses = '$cou' WHERE Email = '$id'");
    header('Location:student-dashboard.php');
  }


//   function print(){

// }

}

$preskool = new student;

