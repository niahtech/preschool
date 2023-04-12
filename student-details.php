<?php 
session_start();
include 'libs/connection.inc.php';
$id=$_SESSION['id'];

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
<div class="row">
<div class="col-sm-12">
<h3 class="page-title">Student Details</h3>
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="students.html">Student</a></li>
<li class="breadcrumb-item active">Student Details</li>
</ul>
</div>
</div>
</div>



<div class="card">
<div class="card-body">
<div class="row">
<div class="col-md-12">
<div class="about-info">
<h4>About Me</h4>
<div class="media mt-3">
<?php
$id=$_SESSION['id'];
$sql =$db->query("SELECT * FROM bio WHERE Email='$id' ") ;
$item =$sql->fetch_assoc();
?>
<div class="media-body">
<ul>
<li>
<span class="title-span">FirstName  : </span>
<span class="info-span"><?=$item['FirstName']?></span>
</li>

<li>
<span class="title-span">LastName : </span>
<span class="info-span"><?php echo $item['LastName'];?></span>
</li>
<li>
<span class="title-span">Email : </span>
<span class="info-span"><?php echo $item['Email'];?> </span>
</li>
<li>
<span class="title-span">DOB : </span>
<span class="info-span"><?php echo $item['DOB'];?></span>
</li>
<li>
<span class="title-span">Religion : </span>
<span class="info-span"><?php echo $item['Religion'];?></span>
</li>
<li>
<span class="title-span">PhoneNumber : </span>
<span class="info-span"><?php echo $item['PhoneNumber'];?></span>
</li>
<li>
<span class="title-span">Gender : </span>
<span class="info-span"><?php echo $item['Gender'];?></span>
</li>
<li>
<span class="title-span">Department : </span>     
<span class="info-span"><?php echo $item['department'];?></span>
</li>
<li>
<span class="title-span">Country : </span>
<span class="info-span"><?php echo $item['Country'];?></span>
</li>
<li>
<span class="title-span">Address : </span>
<span class="info-span"><?php echo $item['presentAddress'];?></span>
</li>


</div>
</div> 
<div class="row follow-sec">
<div class="col-md-4 mb-3">
<div class="blue-box">
<!-- <h3>2850</h3>
<p>Followers</p> -->
</div>
</div>
<div class="col-md-4 mb-3">
<div class="blue-box">
<!-- <h3>2050</h3>
<p>Following</p> -->
</div>
</div>
<div class="col-md-4 mb-3">
<div class="blue-box">
<!-- <h3>2950</h3>
<p>Friends</p> -->
</div>
</div>
</div>
<div class="row mt-2">
<div class="col-md-12">
<!-- <h5>Permanent Address</h5>
<p>480, Estern Avenue, Courtage area, New York</p> -->
</div>
</div>
<div class="row mt-2">
<div class="col-md-12">

</div>
</div>
</div>
</div>
</div>
<div class="row mt-2">
<div class="col-md-12">
<div class="skill-info">

<ul>
<li>
<!-- <label>Lorem Ipsum is simply</label>
<div class="progress">
<div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div> -->
</div>
</li>
<li>
<!-- <label>Lorem Ipsum is simply</label>
<div class="progress">
<div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" aria-valuenow="69" aria-valuemin="0" aria-valuemax="100" style="width: 69%"></div> -->
</div>
</li>
<li>
<!-- <label>Lorem Ipsum is simply</label>
<div class="progress">
<div class="progress-bar progress-bar-striped progress-bar-animated bg-info" role="progressbar" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100" style="width: 86%"></div> -->
</div>
</li>
<li>
 <!-- <label>Lorem Ipsum is simply</label>
<div class="progress">
<div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="width: 65%"></div> -->
<!-- </div>
</li>
</ul> -->
<div class="row mt-3">
<div class="col-md-12">
<h5>Education</h5>
<p class="mt-3">Primary Schooling at Calvary International Schools,Akure.</p>
<p class="mt-3">Secondary Schooling at Federal Government College,Ijanikin.</p>


</div>
</div>
<div class="row mt-3">
<div class="col-md-12">
<h5>Certificates</h5>
<p class="mt-3">1st Prize in Running Competition(National Sports Festival,100m race).</p>
<p>2nd overall best student in WASSCE(2015/2016).  </p>

<!-- </div>
</div>
</div> -->
</div>
</div>
<!-- <div class="row mt-2">
<div class="col-md-12">
<div class="skill-info">
<h4>Settings</h4>
<form>
<div class="row mt-3">
<div class="col-12 col-sm-6">
<div class="form-group">
<label>Username</label>
<input type="text" class="form-control">
</div>
</div>
<div class="col-12 col-sm-6">
<div class="form-group">
<label>Current Password</label>
<input type="password" class="form-control">
</div>
</div>
<div class="col-12 col-sm-6">
<div class="form-group">
<label>New Password</label>
<input type="password" class="form-control">
</div>
</div>
<div class="col-12">
<button type="submit" class="btn btn-primary">Submit</button>
</div>
</div>
</form>
</div>
</div>
</div> -->
</div>
</div>
</div>

<footer>
<p>Copyright © 2020 Dreamguys.</p>
</footer>

</div>

</div>


<script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery-3.6.0.min.js"></script>

<script src="assets/js/popper.min.js"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<script src="assets/js/script.js"></script>
</body>


</html>