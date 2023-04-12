<?php
session_start();
include 'libs/connection.inc.php';

?>
<?php 
if (!isset($_SESSION['id'])){
    header('location:login.php');
}
?> 
<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Preskool - Student Details</title>

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

        <div class="header">

            <div class="header-left">
                <a href="index.html" class="logo">
                    <img src="assets/img/logo.png" alt="Logo">
                </a>
                <a href="index.html" class="logo logo-small">
                    <img src="assets/img/logo-small.png" alt="Logo" width="30" height="30">
                </a>
            </div>

            <a href="javascript:void(0);" id="toggle_btn">
                <i class="fas fa-align-left"></i>
            </a>

            <div class="top-nav-search">
                <form>
                    <input type="text" class="form-control" placeholder="Search here">
                    <button class="btn" type="submit"><i class="fas fa-search"></i></button>
                </form>
            </div>


            <a class="mobile_btn" id="mobile_btn">
                <i class="fas fa-bars"></i>
            </a>


            <ul class="nav user-menu">

                <li class="nav-item dropdown noti-dropdown">
                    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                        <i class="far fa-bell"></i> <span class="badge badge-pill">3</span>
                    </a>
                    <div class="dropdown-menu notifications">
                        <div class="topnav-dropdown-header">
                            <span class="notification-title">Notifications</span>
                            <a href="javascript:void(0)" class="clear-noti"> Clear All </a>
                        </div>
                        <div class="noti-content">
                            <ul class="notification-list">
                                <li class="notification-message">
                                    <a href="#">
                                        <div class="media">
                                            <span class="avatar avatar-sm">
                                                <img class="avatar-img rounded-circle" alt="User Image" src="assets/img/profiles/avatar-02.jpg">
                                            </span>
                                            <div class="media-body">
                                                <p class="noti-details"><span class="noti-title">Carlson Tech</span> has approved <span class="noti-title">your estimate</span></p>
                                                <p class="noti-time"><span class="notification-time">4 mins ago</span></p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="#">
                                        <div class="media">
                                            <span class="avatar avatar-sm">
                                                <img class="avatar-img rounded-circle" alt="User Image" src="assets/img/profiles/avatar-11.jpg">
                                            </span>
                                            <div class="media-body">
                                                <p class="noti-details"><span class="noti-title">International Software Inc</span> has sent you a invoice in the amount of <span class="noti-title">$218</span></p>
                                                <p class="noti-time"><span class="notification-time">6 mins ago</span></p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="#">
                                        <div class="media">
                                            <span class="avatar avatar-sm">
                                                <img class="avatar-img rounded-circle" alt="User Image" src="assets/img/profiles/avatar-17.jpg">
                                            </span>
                                            <div class="media-body">
                                                <p class="noti-details"><span class="noti-title">John Hendry</span> sent a cancellation request <span class="noti-title">Apple iPhone XR</span></p>
                                                <p class="noti-time"><span class="notification-time">8 mins ago</span></p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="#">
                                        <div class="media">
                                            <span class="avatar avatar-sm">
                                                <img class="avatar-img rounded-circle" alt="User Image" src="assets/img/profiles/avatar-13.jpg">
                                            </span>
                                            <div class="media-body">
                                                <p class="noti-details"><span class="noti-title">Mercury Software Inc</span> added a new product <span class="noti-title">Apple MacBook Pro</span></p>
                                                <p class="noti-time"><span class="notification-time">12 mins ago</span></p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="topnav-dropdown-footer">
                            <a href="#">View all Notifications</a>
                        </div>
                    </div>
                </li>


                <li class="nav-item dropdown has-arrow">
                    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                        <span class="user-img"><img class="rounded-circle" src="assets/img/profiles/avatar-01.jpg" width="31" alt="Ryan Taylor"></span>
                    </a>
                    <div class="dropdown-menu">
                        <div class="user-header">
                            <div class="avatar avatar-sm">
                                <img src="assets/img/profiles/avatar-01.jpg" alt="User Image" class="avatar-img rounded-circle">
                            </div>
                            <div class="user-text">
                                <h6>Ryan Taylor</h6>
                                <p class="text-muted mb-0">Administrator</p>
                            </div>
                        </div>
                        <a class="dropdown-item" href="profile.html">My Profile</a>
                        <a class="dropdown-item" href="inbox.php">Inbox</a>
                        <a class="dropdown-item" href="logout.php">Logout</a>
                    </div>
                </li>

            </ul>

        </div>


        <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                        <li class="menu-title">
                            <span>Main Menu</span>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fas fa-user-graduate"></i> <span> Dashboard</span> <span class="menu-arrow"></span></a>
                            <ul>

                                <li><a href="student-dashboard.php">Student Dashboard</a></li>
                                <li><a href="add-student-details.php">Student Biodata</a></li>
                                <li><a href="student-details.php">Profile</a></li>
                                <li><a href="student-reg.php">Course Registration</a></li>
                                <li><a href="student-res.php">Result Checking</a></li>
                            </ul>

                        <li class="submenu">
                            <a href="#"><i class="fas fa-shield-alt"></i> <span> Authentication </span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="login.php">Login</a></li>
                                <li><a href="register.php">Register</a></li>
                                <li><a href="forgot-password.php">Forgot Password</a></li>
                                <li><a href="error-404.php">Error Page</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="blank-page.php"><i class="fas fa-file"></i> <span>Blank Page</span></a>
                        </li>
                        <li class="menu-title">
                            <span>Others</span>
                        </li>
                        <li>

                        <li class="menu-title">
                            <span>UI Interface</span>
                        </li>
                        <li>
                            <a href="components.html"><i class="fas fa-vector-square"></i> <span>Components</span></a>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fas fa-columns"></i> <span> Forms </span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="form-basic-inputs.html">Basic Inputs </a></li>
                                <li><a href="form-input-groups.html">Input Groups </a></li>
                                <li><a href="form-horizontal.html">Horizontal Form </a></li>
                                <li><a href="form-vertical.html"> Vertical Form </a></li>
                                <li><a href="form-mask.html"> Form Mask </a></li>
                                <li><a href="form-validation.html"> Form Validation </a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fas fa-table"></i> <span> Tables </span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="tables-basic.html">Basic Tables </a></li>
                                <li><a href="data-tables.html">Data Table </a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"><i class="fas fa-code"></i> <span>Multi Level</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li class="submenu">
                                    <a href="javascript:void(0);"> <span>Level 1</span> <span class="menu-arrow"></span></a>
                                    <ul>
                                        <li><a href="javascript:void(0);"><span>Level 2</span></a></li>
                                        <li class="submenu">
                                            <a href="javascript:void(0);"> <span> Level 2</span> <span class="menu-arrow"></span></a>
                                            <ul>
                                                <li><a href="javascript:void(0);">Level 3</a></li>
                                                <li><a href="javascript:void(0);">Level 3</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="javascript:void(0);"> <span>Level 2</span></a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript:void(0);"> <span>Level 1</span></a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
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
                  <form method="POST" enctype="multipart/form-data">
                     <div class="row">
                        <div class="col-12">
                           <h5 class="form-title"><span>Student Information</span></h5>
                        </div>
                        <?php
                        $id = $_SESSION['id'];
                        $sql = $db->query("SELECT * FROM bio WHERE Email='$id'");
                        $result = $sql->fetch_assoc();
                        ?>
                        <div class="col-12 col-sm-6">
                           <div class="form-group">
                              <label>First Name</label>
                              <input type="text" class="form-control" name="FirstName" value="<?= $result['FirstName']?>" readonly>

                           </div>
                        </div>
                        <div class="col-12 col-sm-6">
                           <div class="form-group">
                              <label>Last Name</label>
                              <input type="text" class="form-control" name="LastName" value="<?= $result['LastName']?>" readonly>

                           </div>
                        </div>


                        <div class="col-12 col-sm-6">
                           <div class="form-group">
                              <label>Student Id</label>
                              <input type="text" class="form-control" name="studentId" value="<?= $result['studentId']?>">
                           </div>
                        </div>
                        <div class="col-12 col-sm-6">
                           <div class="form-group">
                              <label>Gender</label>
                              <select class="form-control" name="Gender" required>
                                 <option value="">Select Gender</option>
                                 <option value="Female">Female</option>
                                 <option value="Male">Male</option>
                              </select>
                           </div>
                        </div>
                        <div class="col-12 col-sm-6">
                           <div class="form-group">
                              <label>Date of Birth</label>
                              <div>
                                 <input type="date" class="form-control" name="DOB" value="<?=$result['DOB']?>">
                              </div>
                           </div>
                        </div>
                        <div class="col-12 col-sm-6">
                           <div class="form-group">
                              <label>Religion</label>
                              <input type="text" class="form-control" name="Religion" value="<?=$result['Religion']?>">
                           </div>
                        </div>
                        <div class="col-12 col-sm-6">
                           <div class="form-group">
                              <label>Country</label>
                              <input type="text" class="form-control" name="Country" value="<?= $result['Country'] ?>">
                           </div>
                        </div>
                        <div class="col-12 col-sm-6">
                           <div class="form-group">
                              <label>Joining Date</label>
                              <div>
                                 <input type="date" class="form-control" name="JoiningDate" value="<?= $result['joiningDate'] ?>" readonly>
                              </div>

                           </div>
                        </div>
                        <div class="col-12 col-sm-6">
                           <div class="form-group" >
                              <label>Department</label>
                              <div>
                                <select name="department" class="form-control" required readonly>
                                    <option selected disabled>Select a Department...</option>
                                    <?php $sss=$db->query("SELECT * FROM departments");
                                    while($dept = mysqli_fetch_array($sss)){
                                       ?>
                                       <option value="<?=$dept['name']?>"><?=$dept['name']?> </option>
                                    <?php }?>
                                </select >
                              </div>
                           </div>
                        </div>
                        <div class="col-12 col-sm-6">
                           <div class="form-group">
                              <label>session</label>
                              <div>
                                 <input type="text" class="form-control" name="session" value="<?=$result['session']?>">
                              </div>
                           </div>
                        </div>
                        <div class="col-12 col-sm-6">
                           <div class="form-group">
                              <label>Mobile Number</label>
                              <input type="tel" class="form-control" name="PhoneNumber" value="<?=$result['PhoneNumber']?>">
                           </div>
                        </div>

                         <!-- <div class="col-12 col-sm-6">
                           <div class="form-group"  >
                              <label>Image</label>
                              <input type="file" class="form-control" name="image" >
                             
                           </div>
                        </div> -->

                        <div class="col-12">
                           <h5 class="form-title"><span>Parent Information</span></h5>
                        </div>
                        <div class="col-12 col-sm-6">
                           <div class="form-group">
                              <label>Fathers Name</label>
                              <input type="text" class="form-control" name="fathersName"value="<?=$result['fathersName']?>">
                           </div>
                        </div>
                        <div class="col-12 col-sm-6">
                           <div class="form-group">
                              <label>Fathers Occupation</label>
                              <input type="text" class="form-control" name="fathersOccupation"value="<?=$result['fathersOccupation']?>">

                           </div>
                        </div>
                        <div class="col-12 col-sm-6">
                           <div class="form-group">
                              <label>Fathers Mobile</label>
                              <input type="tel" class="form-control" name="fathersMobile"value="<?=$result['fathersMobile']?>" required>
                              
                           </div>
                        </div>
                        <div class="col-12 col-sm-6">
                           <div class="form-group">
                              <label>Fathers Email</label>
                              <input type="email" class="form-control" name="fathersEmail"value="<?=$result['fathersEmail']?>">
                             
                           </div>
                        </div>
                        <div class="col-12 col-sm-6">
                           <div class="form-group">
                              <label>Mothers Name</label>
                              <input type="text" class="form-control" name="mothersName"value="<?=$result['mothersName']?>">
                              
                           </div>
                        </div>
                        <div class="col-12 col-sm-6">
                           <div class="form-group">
                              <label>Mothers Occupation</label>
                              <input type="text" class="form-control" name="mothersOccupation"value="<?=$result['mothersOccupation']?>">
                           </div>
                        </div>
                        <div class="col-12 col-sm-6">
                           <div class="form-group">
                              <label>Mothers Mobile</label>
                              <input type="tel" class="form-control" name="mothersMobile" value="<?=$result['mothersMobile']?>" required>
                             
                           </div>
                        </div>
                        <div class="col-12 col-sm-6">
                           <div class="form-group">
                              <label>Mothers Email</label>
                              <input type="email" class="form-control" name="mothersEmail"value="<?=$result['mothersEmail']?>">
                           </div>
                        </div>
                        <div class="col-12 col-sm-6">
                           <div class="form-group">
                              <label>Permanent Address</label>
                              <input type="text" class="form-control" name="permanentAddress"value="<?=$result['permanentAddress']?>">
                              
                           </div>
                        </div>
                        <div class="col-12 col-sm-6">
                           <div class="form-group">
                              <label>Present Address</label>
                              <input type="text" class="form-control" name="presentAddress"value="<?=$result['presentAddress'] ?>">
                              
                           </div>
                        </div>
                        <div class="col-12">
                           <button type="submit" class="btn btn-primary" name="studentdet" value="studentdet">Submit</button>
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
<script src="assets/js/jquery-3.6.0.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
<script src="assets/js/script.js"></script>
</body>

</html>