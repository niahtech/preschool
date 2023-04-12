exit;
<!DOCTYPE html>
<html lang="en">


<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<title>Preskool - Dashboard</title>

<link rel="shortcut icon" href="assets/img/favicon.png">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,600;0,700;1,400&amp;display=swap">

<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">

<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

<link rel="stylesheet" href="assets/plugins/simple-calendar/simple-calendar.css">

<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<div class="main-wrapper">
<?php include 'body.php'?>;

<div class="page-wrapper">
<div class="content container-fluid">

<div class="page-header">
<div class="row">
<div class="col-sm-12">
<?php
$id= $_SESSION['id'];
$sql=$db->query("SELECT * FROM bio WHERE Email='$id'");
$result=$sql->fetch_assoc();
?>
<h3 class="page-title">Welcome <?=$result['FirstName']?></h3>
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
<li class="breadcrumb-item active">Student Dashboard</li>
</ul>
</div>
</div>
</div>


<div class="row">
<div class="col-xl-3 col-sm-6 col-12 d-flex">
<div class="card bg-nine w-100">
<div class="card-body">
<div class="db-widgets d-flex justify-content-between align-items-center">
<div class="db-icon">
<i class="fas fa-book-open"></i>
</div>
<div class="db-info">
<h3>04/06</h3>
<h6>All Courses</h6>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-3 col-sm-6 col-12 d-flex">
<div class="card bg-six w-100">
<div class="card-body">
<div class="db-widgets d-flex justify-content-between align-items-center">
<div class="db-icon">
<i class="fas fa-file-alt"></i>
</div>
<div class="db-info">
<h3>40/60</h3>
<h6>All Projects</h6>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-3 col-sm-6 col-12 d-flex">
<div class="card bg-ten w-100">
<div class="card-body">
<div class="db-widgets d-flex justify-content-between align-items-center">
<div class="db-icon">
<i class="fas fa-clipboard-list"></i>
</div>
<div class="db-info">
<h3>30/50</h3>
<h6>Test Attended</h6>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-3 col-sm-6 col-12 d-flex">
<div class="card bg-eleven w-100">
<div class="card-body">
<div class="db-widgets d-flex justify-content-between align-items-center">
<div class="db-icon">
<i class="fas fa-clipboard-check"></i>
</div>
<div class="db-info">
<h3>15/20</h3>
<h6>Test Passed</h6>
</div>
</div>
</div>
</div>
</div>
</div>


<div class="row">
<div class="col-12 col-lg-12 col-xl-9">
<div class="card flex-fill">
<div class="card-header">
<div class="row align-items-center">
<div class="col-6">
<h5 class="card-title">Today’s Lesson</h5>
</div>
<div class="col-6">
<span class="float-right view-link"><a href="#">View All Courses</a></span>
</div>
</div>
</div>
<div class="dash-circle">
<div class="row">
<div class="col-12 col-lg-6 col-xl-6 dash-widget3">
<div class="card-body dash-widget1">
<div class="circle-bar circle-bar2">
<div class="circle-graph2" data-percent="20">
<b>20%</b>
</div>
<h6>Lesson Learned</h6>
<h4>10 <span>/ 50</span></h4>
</div>
<div class="dash-details">
<h4>Facilisi etiam</h4>
<ul>
<li><i class="fas fa-clock"></i> 2.30pm - 3.30pm</li>
<li><i class="fas fa-book-open"></i> 5 Lessons</li>
<li><i class="fas fa-hourglass-end"></i> 60 Minutes</li>
<li><i class="fas fa-clipboard-check"></i> 5 Asignment</li>
</ul>
<div class="dash-btn">
<button type="submit" class="btn btn-info btn-border">Skip</button>
<button type="submit" class="btn btn-info">Continue</button>
</div>
</div>
</div>
</div>
<div class="col-12 col-lg-6 col-xl-6 dash-widget4">
<div class="card-body dash-widget1 dash-widget2">
<div class="circle-bar circle-bar3">
<div class="circle-graph3" data-percent="50">
<b>50%</b>
</div>
<h6>Lesson Learned</h6>
<h4>25 <span>/ 50</span></h4>
</div>
<div class="dash-details">
<h4>Augue mauris</h4>
<ul>
<li><i class="fas fa-clock"></i> 3.30pm - 4.30pm</li>
<li><i class="fas fa-book-open"></i> 6 Lessons</li>
<li><i class="fas fa-hourglass-end"></i> 60 Minutes</li>
<li><i class="fas fa-clipboard-check"></i> 6 Asignment</li>
</ul>
<div class="dash-btn">
<button type="submit" class="btn btn-info btn-border">Skip</button>
<button type="submit" class="btn btn-info">Continue</button>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-12 col-lg-12 col-xl-8 d-flex">
<div class="card flex-fill">
<div class="card-header">
<div class="row align-items-center">
<div class="col-6">
<h5 class="card-title">Learning Activity</h5>
</div>
<div class="col-6">
<ul class="list-inline-group text-right mb-0 pl-0">
<li class="list-inline-item">
<div class="form-group mb-0 amount-spent-select">
<select class="form-control form-control-sm">
<option>Weekly</option>
<option>Monthly</option>
<option>Yearly</option>
</select>
</div>
</li>
</ul>
</div>
</div>
</div>
<div class="card-body">
<div id="apexcharts-area"></div>
</div>
</div>
</div>
<div class="col-12 col-lg-12 col-xl-4 d-flex">
<div class="card flex-fill">
<div class="card-header">
<h5 class="card-title">Learning History</h5>
</div>
<div class="card-body">
<div class="teaching-card">
<ul class="activity-feed">
<li class="feed-item">
<div class="feed-date1">Sep 05, 9 am - 10 am (60min)</div>
<span class="feed-text1"><a>Lorem ipsum dolor</a></span>
<p><span>In Progress</span></p>
</li>
<li class="feed-item">
<div class="feed-date1">Sep 04, 2 pm - 3 pm (70min)</div>
<span class="feed-text1"><a>Et dolore magna</a></span>
<p>Completed</p>
</li>
<li class="feed-item">
<div class="feed-date1">Sep 02, 1 pm - 2 am (80min)</div>
<span class="feed-text1"><a>Exercitation ullamco</a></span>
<p><span>In Progress</span></p>
</li>
<li class="feed-item">
<div class="feed-date1">Aug 30, 10 am - 12 pm (90min)</div>
<span class="feed-text1"><a>Occaecat cupidatat</a></span>
<p>Completed</p>
</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-12 col-lg-12 col-xl-3 d-flex">
<div class="card flex-fill">
<div class="card-header">
<div class="row align-items-center">
<div class="col-12">
<h5 class="card-title">Calendar</h5>
</div>
</div>
</div>
<div class="card-body">
<div id="calendar-doctor" class="calendar-container"></div>
<div class="calendar-info calendar-info1">
<div class="calendar-details">
<p>09 am</p>
<h6 class="calendar-blue d-flex justify-content-between align-items-center">Fermentum <span>09am - 10pm</span></h6>
</div>
<div class="calendar-details">
<p>10 am</p>
<h6 class="calendar-violet d-flex justify-content-between align-items-center">Pharetra et <span>10am - 11am</span></h6>
</div>
<div class="calendar-details">
<p>11 am</p>
<h6 class="calendar-red d-flex justify-content-between align-items-center">Break <span>11am - 11.30am</span></h6>
</div>
<div class="calendar-details">
<p>12 pm</p>
<h6 class="calendar-orange d-flex justify-content-between align-items-center">Massa <span>11.30am - 12.00pm</span></h6>
</div>
<div class="calendar-details">
<p>09 am</p>
<h6 class="calendar-blue d-flex justify-content-between align-items-center">Fermentum <span>09am - 10pm</span></h6>
</div>
</div>
</div>
</div>
</div>
</div>

</div>

<footer>
<p>Copyright © 2020 Dreamguys.</p>
</footer>

</div>

</div>


<script src="assets/js/jquery-3.6.0.min.js"></script>

<script src="assets/js/popper.min.js"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<script src="assets/plugins/apexchart/apexcharts.min.js"></script>
<script src="assets/plugins/apexchart/chart-data.js"></script>

<script src="assets/plugins/simple-calendar/jquery.simple-calendar.js"></script>
<script src="assets/js/calander.js"></script>

<script src="assets/js/circle-progress.min.js"></script>

<script src="assets/js/script.js"></script>
</body>


</html>