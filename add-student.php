<?php include 'libs/connection.inc.php'?>
<?php
   $id=$_SESSION['id'];
   $sql=$db->query("SELECT * FROM student_registered where email='$id'");
   $result=$sql->fetch_assoc();
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
                        <h3 class="page-title">Add Students</h3>
                        <ul class="breadcrumb">
                           <li class="breadcrumb-item"><a href="students.html">Students</a></li>
                           <li class="breadcrumb-item active">Add Students</li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-sm-12">
                     <div class="card">
                        <div class="card-body">
                        <!-- form -->
                           <form method="POST" action="" enctype="multipart/form-data">
                              <div class="row">
                                 <div class="col-12">
                                    <h5 class="form-title"><span>Student Information</span></h5>
                                 </div>
                                 <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                       <label>First Name</label>
                                       <input type="text" class="form-control" name="first_name" value="<?=$result['first_name'];?>" required>
                                    </div>
                                 </div>
                                 <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                       <label>Last Name</label>
                                       <input type="text" class="form-control" name="last_name" value="<?=$result['last_name'];?>" required>
                                    </div>
                                 </div>
                                 <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                       <label>Student Id</label>
                                       <input type="text" class="form-control" name="student_id" value="<?=$result['student_id'];?>"required>
                                    </div>
                                 </div>
                                 <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                       <label>Gender</label>
                                       <select class="form-control" name="gender" required value="<?=$result['gender'];?>">
                                          <option>Select Gender</option>
                                          <option>Female</option>
                                          <option>Male</option>
                                          <option>Others</option>
                                       </select>
                                    </div>
                                 </div>
                                 <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                       <label>Date of Birth</label>
                                       <div>
                                          <input type="date" class="form-control" name="dob" value="<?=$result['dob'];?>" required>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                       <label>Department</label>
                                       <input type="text" class="form-control" name="department" required value="<?=$result['department'];?>">
                                    </div>
                                 </div>
                                 <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                       <label>Level</label>
                                       <input type="text" class="form-control" name="class" required value="<?=$result['class'];?>">
                                    </div>
                                 </div>
                                 <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                       <label>Religion</label>
                                       <input type="text" class="form-control" name="religion" required value="<?=$result['religion'];?>">
                                    </div>
                                 </div>
                                 <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                       <label>Joining Date</label>
                                       <div>
                                          <input type="datetime" 
                                          class="form-control" name="joining_date" value="<?=$result['joining_date'];?>" readonly>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                       <label>Mobile Number</label>
                                       <input type="tel" class="form-control" name="mobile_number" required value="<?=$result['mobile_number'];?>">
                                    </div>
                                 </div>
                                 <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                       <label>Admission Number</label>
                                       <input type="text" class="form-control" name="admission_number" required value="<?=$result['admission_number'];?>">
                                    </div>
                                 </div>
                                 <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                       <label>Section</label>
                                       <input type="text" class="form-control" name="section" required value="<?=$result['section'];?>">
                                    </div>
                                 </div>
                                 <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                       <label>Student Image</label>
                                       <input type="file"class="form-control" name="student_image" required>
                                       <p><?php echo $message ?? null;?></p>
                                    </div>
                                 </div>
                                 <div class="col-12">
                                    <h5 class="form-title"><span>Parent Information</span></h5>
                                 </div>
                                 <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                       <label>Father's Name</label>
                                       <input type="text" class="form-control" name="father_name" value="<?=$result['father_name'];?>" required>
                                    </div>
                                 </div>
                                 <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                       <label>Father's Occupation</label>
                                       <input type="text" class="form-control" name="father_occupation" required value="<?=$result['father_occupation'];?>">
                                    </div>
                                 </div>
                                 <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                       <label>Father's Mobile</label>
                                       <input type="tel" class="form-control" name="father_mobile" required value="<?=$result['father_mobile'];?>">
                                    </div>
                                 </div>
                                 <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                       <label>Father's Email</label>
                                       <input type="email"value="<?=$result['father_email'];?>"class="form-control" name="father_email" required>
                                    </div>
                                 </div>
                                 <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                       <label>Mother's Name</label>
                                       <input type="text" class="form-control" name="mother_name" required value="<?=$result['mother_name'];?>">
                                    </div>
                                 </div>
                                 <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                       <label>Mother's Occupation</label>
                                       <input type="text" class="form-control" name="mother_occupation" required value="<?=$result['mother_occupation'];?>">
                                    </div>
                                 </div>
                                 <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                       <label>Mother's Mobile</label>
                                       <input type="tel" class="form-control" name="mother_mobile" required value="<?=$result['mother_mobile'];?>">
                                    </div>
                                 </div>
                                 <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                       <label>Mother's Email</label>
                                       <input type="email" class="form-control" name="mother_email" required value="<?=$result['mother_email'];?>">
                                    </div>
                                 </div>
                                 <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                       <label>Present Address</label>
                                       <textarea class="form-control" name="present_address" required value="<?=$result['present_address'];?>"></textarea>
                                    </div>
                                 </div>
                                 <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                       <label>Permanent Address</label>
                                       <textarea class="form-control" name="permanent_address" required value="<?=$result['permanent_address'];?>"></textarea>
                                    </div>
                                 </div>
                                 <div class="col-12">
                                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                                 </div>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   <?php include "footer.php"?>
   </body>
   <!-- Mirrored from preschool.dreamguystech.com/html-template/add-student.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Oct 2021 11:11:50 GMT -->
</html>