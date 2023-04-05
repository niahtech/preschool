<?php include 'libs/connection.inc.php' ?>
<?php
$id = $_SESSION['id'];
$sql = $db->query("SELECT * FROM student_registered where email='$id'");
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
      <?php include 'student-header-nav.php' ?>
      <div class="page-wrapper">
         <div class="content container-fluid">
            <div class="page-header">
               <div class="row align-items-center">
                  <div class="col">
                     <h3 class="page-title">Courses</h3>
                     <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><?= getDept($result['department'])['name'] ?></a></li>
                        <li class="breadcrumb-item active"><?= getClass($result['class'])['name'] ?></li>
                     </ul>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-sm-12">
                  <div class="card card-table">
                     <div class="card-body">
                        <div class="table-responsive">
                           <table class="table table-hover table-center mb-0 datatable">
                              <thead>
                                 <tr>
                                    <th>Course Code</th>
                                    <th>Course Title</th>
                                    <th>Level</th>
                                    <th> Semester</th>
                                 </tr>
                              </thead>
                              <tbody>
                                 <?php
                                 $department = getDept($result['department'])['name'];
                                 $class = getClass($result['class'])['id'];
                                 $trimmedDept = strtolower(str_replace(' ', '', $department));
                                 $fix = $db->query("SELECT * FROM $trimmedDept WHERE classId='$class' AND semester='First'");
                                 while ($course = mysqli_fetch_array($fix)) {
                                 ?>
                                    <tr>
                                       <td><?= $course['courseCode'] ?></td>
                                       <td>
                                          <h2>
                                             <a><?= $course['courseTitle'] ?></a>
                                          </h2>
                                       </td>
                                       <td><?= getClass($result['class'])['name'] ?></td>
                                       <td><?= $course['semester'] ?></td>   
                                    </tr>
                                 <?php } ?>
                              </tbody>
                           </table>
                        </div>
                     </div>
                     <form action="" method="POST">
                        <div class="col-auto text-right float-left mx-auto">
                           <button type="submit" name="registerCourse" class="btn btn-outline-primary mr-2 w-100"><i class="fas fa-plus"></i> Register</button>
                     </form>
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