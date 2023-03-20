<?php
   include 'libs/connection.inc.php';
?>
<?php
   $sql= $db->query('SELECT * from lecturer_registered');
?>
<!DOCTYPE html>
<html lang="en">


<head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
      <title>Preskool - Students</title>
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
         <?php include'admin-sidebar.php';?>
         <div class="page-wrapper">
            <div class="content container-fluid">
               <div class="page-header">
                  <div class="row align-items-center">
                     <div class="col">
                        <h3 class="page-title">Students</h3>
                        <ul class="breadcrumb">
                           <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                           <li class="breadcrumb-item active">Students</li>
                        </ul>
                     </div>
                     <div class="col-auto text-right float-right ml-auto">
                        <a href="#" class="btn btn-outline-primary mr-2"><i class="fas fa-download"></i> Download</a>
                        <a href="add-student.html" class="btn btn-primary"><i class="fas fa-plus"></i></a>
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
                                       <th>S/N</th>
                                       <th>Name</th>
                                       <th>Class</th>
                                       <th>DOB</th>
                                       <th>Parent Name</th>
                                       <th>Mobile Number</th>
                                       <th>Address</th>
                                       <th class="text-right">Action</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                 <?php $i=1;?>
                                    <?php while ($feedback= mysqli_fetch_array($sql)) { ?>
                                    <tr>
                                       <td><?=$i?></td>
                                       <td>
                                          <h2 class="table-avatar">
                                             <a href="student-view.php?id=<?php echo $feedback['id']?>" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="Student_image/<?= $feedback['student_image']?>" alt="User Image"></a>
                                             <a href="student-view.php?id=<?php echo $feedback['id']?>"><?= $feedback['first_name']?></a>
                                          </h2>
                                       </td>
                                       <td><?= $feedback['class']?></td>
                                       <td><?= $feedback['dob']?></td>
                                       <td><?= $feedback['father_name']?></td>
                                       <td><?= $feedback['mobile_number']?></td>
                                       <td><?= $feedback['present_address']?></td>
                                       <td class="text-right">
                                          <div class="actions">
                                             <form action="" method="POST">
                                             <button class="btn btn-sm bg-danger-light" name="deleteStudent" value="<?=$feedback['id']?>"><i class="fas fa-trash"></i></button>
                                             </form>
                                             
                                          </div>
                                       </td>
                                    </tr>
                                    <?php $i++?>
                                    <?php } ?>
                                 </tbody>
                              </table>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <?php include 'footer.php'?>
   </body>
</html>