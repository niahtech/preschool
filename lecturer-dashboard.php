<?php include 'libs/connection.inc.php'; ?>
<?php
$id = $_SESSION['id'];
$sql = $db->query("SELECT * FROM lecturer_registered WHERE email='$id'");
$result = mysqli_fetch_array($sql);
?>


<!DOCTYPE html>
<html lang="en">
<head>
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

       <?php include 'lecturer-header.php'?>
        <div class="page-wrapper">
            <div class="content container-fluid">

                <div class="page-header">
                    <div class="row">
                        <div class="col-sm-12">
                            <h3 class="page-title">Welcome <?= $result['first_name']; ?></h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                                <li class="breadcrumb-item active">Teacher Dashboard</li>
                            </ul>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-xl-3 col-sm-6 col-12 d-flex">
                        <div class="card bg-five w-100">
                            <div class="card-body">
                                <div class="db-widgets d-flex justify-content-between align-items-center">
                                    <div class="db-icon">
                                        <i class="fas fa-chalkboard"></i>
                                    </div>
                                    <div class="db-info">
                                        <h3>04/06</h3>
                                        <h6>Total Classes</h6>
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
                                        <i class="fas fa-user-graduate"></i>
                                    </div>
                                    <div class="db-info">
                                        <h3>40/60</h3>
                                        <h6>Total Students</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12 d-flex">
                        <div class="card bg-seven w-100">
                            <div class="card-body">
                                <div class="db-widgets d-flex justify-content-between align-items-center">
                                    <div class="db-icon">
                                        <i class="fas fa-book-open"></i>
                                    </div>
                                    <div class="db-info">
                                        <h3>30/50</h3>
                                        <h6>Total Lessons</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12 d-flex">
                        <div class="card bg-eight w-100">
                            <div class="card-body">
                                <div class="db-widgets d-flex justify-content-between align-items-center">
                                    <div class="db-icon">
                                        <i class="fas fa-clock"></i>
                                    </div>
                                    <div class="db-info">
                                        <h3>15/20</h3>
                                        <h6>Total Hours</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-12 col-lg-12 col-xl-9">
                        <div class="row">
                            <div class="col-12 col-lg-8 col-xl-8 d-flex">
                                <div class="card flex-fill">
                                    <div class="card-header">
                                        <div class="row align-items-center">
                                            <div class="col-6">
                                                <h5 class="card-title">Upcoming Lesson</h5>
                                            </div>
                                            <div class="col-6">
                                                <span class="float-right view-link"><a href="#">View All Courses</a></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pt-3 pb-3">
                                        <div class="table-responsive lesson">
                                            <table class="table table-center">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="date">
                                                                <b>Aug 4, Tuesday</b>
                                                                <p>2.30pm - 3.30pm (60min)</p>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="date">
                                                                <b>Lessons 30</b>
                                                                <p>3.1 Ipsuum dolor</p>
                                                            </div>
                                                        </td>
                                                        <td><a href="#">Confirmed</a></td>
                                                        <td><button type="submit" class="btn btn-info">Reschedule</button></td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="date">
                                                                <b>Aug 5, Wednesday</b>
                                                                <p>3.00pm - 4.30pm (90min)</p>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="date">
                                                                <b>Lessons 31</b>
                                                                <p>3.2 Ipsuum dolor</p>
                                                            </div>
                                                        </td>
                                                        <td><a href="#">Confirmed</a></td>
                                                        <td><button type="submit" class="btn btn-info">Reschedule</button></td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="date">
                                                                <b>Aug 6, Thursday</b>
                                                                <p>11.00am - 12.00pm (20min)</p>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="date">
                                                                <b>Lessons 32</b>
                                                                <p>3.3 Ipsuum dolor</p>
                                                            </div>
                                                        </td>
                                                        <td><a href="#">Confirmed</a></td>
                                                        <td><button type="submit" class="btn btn-info">Reschedule</button></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-4 col-xl-4 d-flex">
                                <div class="card flex-fill">
                                    <div class="card-header">
                                        <div class="row align-items-center">
                                            <div class="col-12">
                                                <h5 class="card-title">Semester Progress</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="dash-widget">
                                        <div class="circle-bar circle-bar1">
                                            <div class="circle-graph1" data-percent="50">
                                                <b>50%</b>
                                            </div>
                                        </div>
                                        <div class="dash-info">
                                            <h6>Lesson Progressed</h6>
                                            <h4>30 <span>/ 60</span></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-lg-6 col-xl-8 d-flex">
                                <div class="card flex-fill">
                                    <div class="card-header">
                                        <div class="row align-items-center">
                                            <div class="col-6">
                                                <h5 class="card-title">Teaching Activity</h5>
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
                            <div class="col-12 col-lg-6 col-xl-4 d-flex">
                                <div class="card flex-fill">
                                    <div class="card-header">
                                        <h5 class="card-title">Teaching History</h5>
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
                                                    <p>Completed</p>
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

<!-- Mirrored from preschool.dreamguystech.com/html-template/teacher-dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Oct 2021 11:11:43 GMT -->

</html>