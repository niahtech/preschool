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
      <title>Preskool - Profile</title>
      <link rel="shortcut icon" href="assets/img/favicon.png">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,600;0,700;1,400&amp;display=swap">
      <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
      <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
      <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">
      <link rel="stylesheet" href="assets/css/style.css">
   </head>
   <body>
      <div class="main-wrapper">
         <?php include 'student-header-nav.php'?>
         <div class="page-wrapper">
            <div class="content container-fluid">
               <div class="page-header">
                  <div class="row">
                     <div class="col">
                        <h3 class="page-title">Profile</h3>
                        <ul class="breadcrumb">
                           <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                           <li class="breadcrumb-item active">Profile</li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-12">
                     <div class="profile-header">
                        <div class="row align-items-center">
                           <div class="col-auto profile-image">
                              <a href="#">
                              <img class="rounded-circle" alt="User Image" src="student_image/<?= $result['student_image'] ?>">
                              </a>
                           </div>
                           <div class="col ml-md-n2 profile-user-info">
                              <h4 class="user-name mb-0"><?php echo $result['last_name']. ' '. $result['first_name'] ?></h4>
                              <h6 class="text-muted"><?php echo $result['class']. ' '. 'Student'?></h6>
                              <div class="user-Location"><i class="fas fa-map-marker-alt"></i> <?php echo $result['present_address']?></div>
                              <div class="about-text">Lorem ipsum dolor sit amet.</div>
                           </div>
                           <div class="col-auto profile-btn">
                              <a href="add-student.php" class="btn btn-primary">
                              Edit
                              </a>
                           </div>
                        </div>
                     </div>
                     <div class="profile-menu">
                        <ul class="nav nav-tabs nav-tabs-solid">
                           <li class="nav-item">
                              <a class="nav-link active" data-toggle="tab" href="#per_details_tab">About</a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" data-toggle="tab" href="#password_tab">Password</a>
                           </li>
                        </ul>
                     </div>
                     <div class="tab-content profile-tab-cont">
                        <div class="tab-pane fade show active" id="per_details_tab">
                           <div class="row">
                              <div class="col-lg-9">
                                 <div class="card">
                                    <div class="card-body">
                                       <h5 class="card-title d-flex justify-content-between">
                                          <span>Personal Details</span>
                                          <?=$profile_success ?? null?>
                                          <?=$profile_error ?? null ?>
                                          <a class="edit-link" href="add-student.php"><i class="far fa-edit mr-1"></i> Edit</a>
                                       </h5>
                                       <div class="row">
                                          <p class="col-sm-3 text-muted text-sm-right mb-0 mb-sm-3">Name</p>
                                          <p class="col-sm-9"><?php echo $result['last_name']. ' '. $result['first_name'] ?></p>
                                       </div>
                                       <div class="row">
                                          <p class="col-sm-3 text-muted text-sm-right mb-0 mb-sm-3">Date of Birth</p>
                                          <p class="col-sm-9"><?php echo $result['dob']?></p>
                                       </div>
                                       <div class="row">
                                          <p class="col-sm-3 text-muted text-sm-right mb-0 mb-sm-3">Email ID</p>
                                          <p class="col-sm-9"><a href="https://preschool.dreamguystech.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="711b1e191f151e14311409101c011d145f121e1c">[email&#160;protected]</a></p>
                                       </div>
                                       <div class="row">
                                          <p class="col-sm-3 text-muted text-sm-right mb-0 mb-sm-3">Mobile</p>
                                          <p class="col-sm-9"><?php echo $result['mobile_number']?></p>
                                       </div>
                                       <div class="row">
                                          <p class="col-sm-3 text-muted text-sm-right mb-0">Address</p>
                                          <p class="col-sm-9 mb-0"><?php echo $result['present_address']?>
                                          </p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-lg-3">
                                 <div class="card">
                                    <div class="card-body">
                                       <h5 class="card-title d-flex justify-content-between">
                                          <span>Account Status</span>
                                          <a class="edit-link" href="#"><i class="far fa-edit mr-1"></i> Edit</a>
                                       </h5>
                                       <button class="btn btn-success" type="button"><i class="fe fe-check-verified"></i> Active</button>
                                    </div>
                                 </div>
                                 <div class="card">
                                    <div class="card-body">
                                       <h5 class="card-title d-flex justify-content-between">
                                          <span>Skills </span>
                                          <a class="edit-link" href="#"><i class="far fa-edit mr-1"></i> Edit</a>
                                       </h5>
                                       <div class="skill-tags">
                                          <span>Html5</span>
                                          <span>CSS3</span>
                                          <span>WordPress</span>
                                          <span>Javascript</span>
                                          <span>Android</span>
                                          <span>iOS</span>
                                          <span>Angular</span>
                                          <span>PHP</span>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div id="password_tab" class="tab-pane fade">
                           <div class="card">
                              <div class="card-body">
                                 <h5 class="card-title">Change Password</h5>
                                 <div class="row">
                                    <div class="col-md-10 col-lg-6">
                                       <form method="POST">
                                        <?php echo $success ?? null ?>
                                          <div class="form-group">
                                             <label>Old Password</label>
                                             <input type="password" class="form-control" name="current_password">
                                             <?php echo $message ?? null;?>
                                          </div>
                                          <div class="form-group">
                                             <label>New Password</label>
                                             <input type="password" class="form-control" name="new_password">
                                          </div>
                                          <div class="form-group">
                                             <label>Confirm Password</label>
                                             <input type="password" class="form-control" name="confirm_password">
                                             <?php echo $wrongConfirmation ?? null;?>
                                          </div>
                                          <button class="btn btn-primary" type="submit" name="save_changes">Save Changes</button>
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
         </div>
      </div>
      <?php include "footer.php"?>
   </body>
   <!-- Mirrored from preschool.dreamguystech.com/html-template/profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Oct 2021 11:11:39 GMT -->
</html>