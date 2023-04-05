<?php 
session_start();
include 'libs/connection.inc.php' ?>
<?php
$id=$_SESSION['id'];
$sql = $db->query("SELECT * FROM bio where Email='$id'");
$result = $sql->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
   <title>Preskool - Subjects</title>
   <link rel="shortcut icon" href="assets/img/favicon.png">
   <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,600;0,700;1,400&amp;display=swap">
   <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
   <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
   <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">
   <link rel="stylesheet" href="assets/plugins/datatables/datatables.min.css">
   <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
   <div class="main-wrapper">
      
      <div class="page-wrapper">
         <div class="content container-fluid">
            <div class="page-header">
               <div class="row align-items-center">
                  <div class="col">
                     <h3 class="page-title">Courses Registration</h3>
                     <ul class="breadcrumb">
                        
                     </ul>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-sm-12">
                  <div class="card card-table">
                     <div class="card-body">
                        <div class="table-responsive">
                        <form action="" method="POST">
                           <table class="table table-hover table-center mb-0">
                              <thead>
                                 <tr>
                                    <th>Course Code</th>
                                    <th>Course Title</th>
                                    <th>Unit</th>
                                 </tr>
                              </thead>
                              <tbody>         
                                 <?php
                                    $Department=$result['Department'];

                                    $dept = strtolower(str_replace(' ','',$Department));
                                    $input = $db->query("SELECT * FROM $dept where classId ='1' and semester ='First'");
                                    
                                 ?>
                                 <?php while($course = mysqli_fetch_array($input)):?>
                                 <tr>
                                    <td><input value="<?=$course['courseCode']?>" name="course[]" style="border:none" readonly></td>
                                    <td><?=$course['courseTitle']?></td>
                                    <td><?=$course['unit']?></td>
                                 </tr>
                                 <?php endwhile;?>
                                 </tbody>    
                           </table>
                           <div class="col-auto text-right float-left mx-auto">
                               <button type="submit" name="registerCourse" class="btn btn-outline-primary mr-2 w-100"><i class="fas fa-plus"></i> Register</button>
                           </div>
                           </form> 
                        </div>
                     </div>
                        
                     
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   </div>
   <script src="assets/js/jquery-3.6.0.min.js"></script>
   <script src="assets/js/popper.min.js"></script>
   <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
   <script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
   <script src="assets/plugins/datatables/datatables.min.js"></script>
   <script src="assets/js/script.js"></script>
</body>

</html>
<?php 
session_start();
include 'libs/connection.inc.php' ?>
<?php
$id=$_SESSION['id'];
$sql = $db->query("SELECT * FROM bio where Email='$id'");
$result = $sql->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
   <title>Preskool - Subjects</title>
   <link rel="shortcut icon" href="assets/img/favicon.png">
   <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,600;0,700;1,400&amp;display=swap">
   <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
   <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
   <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">
   <link rel="stylesheet" href="assets/plugins/datatables/datatables.min.css">
   <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
   <div class="main-wrapper">
      
      <div class="page-wrapper">
         <div class="content container-fluid">
            <div class="page-header">
               <div class="row align-items-center">
                  <div class="col">
                     <h3 class="page-title">Courses Registration</h3>
                     <ul class="breadcrumb">
                        
                     </ul>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-sm-12">
                  <div class="card card-table">
                     <div class="card-body">
                        <div class="table-responsive">
                        <form action="" method="POST">
                           <table class="table table-hover table-center mb-0">
                              <thead>
                                 <tr>
                                    <th>Course Code</th>
                                    <th>Course Title</th>
                                    <th>Unit</th>
                                 </tr>
                              </thead>
                              <tbody>         
                                 <?php
                                    $Department=$result['Department'];

                                    $dept = strtolower(str_replace(' ','',$Department));
                                    $input = $db->query("SELECT * FROM $dept where classId ='1' and semester ='First'");
                                    
                                 ?>
                                 <?php while($course = mysqli_fetch_array($input)):?>
                                 <tr>
                                    <td><input value="<?=$course['courseCode']?>" name="course[]" style="border:none" readonly></td>
                                    <td><?=$course['courseTitle']?></td>
                                    <td><?=$course['unit']?></td>
                                 </tr>
                                 <?php endwhile;?>
                                 </tbody>    
                           </table>
                           <div class="col-auto text-right float-left mx-auto">
                               <button type="submit" name="registerCourse" class="btn btn-outline-primary mr-2 w-100"><i class="fas fa-plus"></i> Register</button>
                           </div>
                           </form> 
                        </div>
                     </div>
                        
                     
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   </div>
   <script src="assets/js/jquery-3.6.0.min.js"></script>
   <script src="assets/js/popper.min.js"></script>
   <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
   <script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
   <script src="assets/plugins/datatables/datatables.min.js"></script>
   <script src="assets/js/script.js"></script>
</body>

</html>