<?php 
 class preskool{
   public function __construct()
   {
    if(isset($_POST['Register'])){
        $this->Register();
    }
    elseif(isset($_POST['submit'])){
        $this->studentdet();
    
  }
   elseif(isset($_POST['Login'])){
    $this->Login();
  
   }
   elseif(array_key_exists('registerCourse',$_POST)){
    $this->registerCourse();
   }
    }

    function validate($text,$fieldname)
    {
        global $count,$report;
        $text=trim($text);
        if(strlen($text)<3){
            $report =$report . '<br>' .$fieldname .'is too short';
            $count++;
        }
        return $text;
    }
 



 

 

  

  function Register()
  {
    global $db,$id;
    
    


 
    $FirstName= $this->validate(filter_input(INPUT_POST,'FirstName',FILTER_SANITIZE_FULL_SPECIAL_CHARS),'UserName');
 
    $LastName= $this->validate(filter_input(INPUT_POST,'LastName',FILTER_SANITIZE_FULL_SPECIAL_CHARS),'UserName');
 
    $Email=$this->validate(filter_input(INPUT_POST,'Email',FILTER_SANITIZE_EMAIL),'Email');
    

    $Password=$this->validate($_POST['Password'],'Password');
     $hashed_password = password_hash($Password, PASSWORD_BCRYPT);

    
    $sql = "INSERT into bio (FirstName,LastName,Email,Password) values('$FirstName','$LastName','$Email','$hashed_password')";
       if(mysqli_query($db,$sql)){
       header('location:login.php');
       echo 'added';
       }  
       else{
       echo 'error:'.mysqli_error($db);
       };
       $id=$_SESSION['id'];
       $_SESSION['id'] =$Email;

     
}       
  
 function Login()  
 {
   global $db,$text,$user,$id; 
   
    $id=$_SESSION['id'];
   
   $Email=$this->validate(filter_input(INPUT_POST,'Email',FILTER_SANITIZE_EMAIL),'Email');
   

    $Password=$this->validate($_POST['Password'],
   'Password');
    
       
   
     $sql = $db->query("SELECT * FROM bio WHERE Email='$Email'");
    $user = $sql->fetch_assoc();
    
    if (password_verify($Password, $user['Password'])) {
    //     // Set session variables
    $_SESSION['id'] =$user['Email'];
    
      header('location:student-dashboard.php');
     } else {
      // Display error message
    $text = '<span style="color:red">Invalid email or password</span>';
    }
    $_SESSION['id'] =$Email;

 
     
   
  }

  function studentdet()
  {
   global $db,$id;
   extract($_POST);

    $id=$_SESSION['id'];
      $FirstName =$this->validate( filter_input(INPUT_POST, 'FirstName', FILTER_SANITIZE_FULL_SPECIAL_CHARS),'FirstName');
   
  
     $LastName =$this->validate(filter_input(INPUT_POST, 'LastName', FILTER_SANITIZE_FULL_SPECIAL_CHARS),'LastName');
  
     $Email =$this->validate( filter_input(INPUT_POST, 'Email', FILTER_SANITIZE_EMAIL),'Email');
   
    $DOB =$this->validate(filter_input(INPUT_POST, 'DOB', FILTER_SANITIZE_FULL_SPECIAL_CHARS),'DOB');
  
    $Religion =$this->validate( filter_input(INPUT_POST, 'Religion', FILTER_SANITIZE_FULL_SPECIAL_CHARS),'Religion');
  
    $PhoneNumber =$this->validate( filter_input(INPUT_POST, 'PhoneNumber', FILTER_SANITIZE_NUMBER_INT),'PhoneNumber');
  
     $Gender =$this->validate(filter_input(INPUT_POST, 'Gender', FILTER_SANITIZE_FULL_SPECIAL_CHARS),'Gender');
  
    $Department =$this->validate( filter_input(INPUT_POST, 'Department', FILTER_SANITIZE_FULL_SPECIAL_CHARS),'Department');
  
    $State =$this->validate(filter_input(INPUT_POST, 'State', FILTER_SANITIZE_FULL_SPECIAL_CHARS),'State');
 
     $Country =$this->validate(filter_input(INPUT_POST, 'Country', FILTER_SANITIZE_FULL_SPECIAL_CHARS),'Country');
 
     $Address =$this->validate( filter_input(INPUT_POST, 'Address', FILTER_SANITIZE_FULL_SPECIAL_CHARS),'Address');
 
   
    $db->query("UPDATE bio set DOB ='$DOB',Religion='$Religion',PhoneNumber ='$PhoneNumber' ,Gender= '$Gender',Department ='$Department',State='$State',Country='$Country',Address='$Address' WHERE Email='$id' ");
    
//     //     // Success
         header('Location:student-details.php');
//     //     echo 'created';
//     // } else {
//     //     // Error
//     //     echo 'Error: ' . mysqli_error($db);
//     // }
    
   $_SESSION['id'] =$Email;
}

function registerCourse(){
  global $db;
  $id = $_SESSION['id'];
  $courses = $_POST['course'];
  $cou = implode(',', $courses);
  $ql  =$db->query("UPDATE bio SET courses = '$cou' WHERE Email = '$id'");
  header('Location:student-dashboard.php');
}

}

$preskool = new preskool;

?>