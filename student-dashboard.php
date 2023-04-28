<?php
include 'body.php';
$id = $_SESSION['id'];
$sql = $db->query("SELECT * FROM bio WHERE Email='$id'");
$result = $sql->fetch_assoc();
$sd = $result['courses'];
$sq = explode(',', $sd);
if (empty($result['courses'])) {
    $ss = 0;
} else {
    $ss = count($sq);
}

?>

<div class="page-wrapper">
    <div class="content container-fluid">
      
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="page-title">Welcome <?= $result['FirstName'] . ' ' . $result['LastName'] ?>!</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="student-dashboard.php">Dashboard</a></li>
                        <li class="breadcrumb-item active">Student Dashboard</li>
                    </ul>
                </div>
            </div>
        </div>
        <style>
        .cardbg-two,.cardbg-three{
            display: flex;
        }

        </style>

        <div class="row">
            <div class="col-xl-3 col-sm-6 col-12 d-flex">
                <div class="card bg-one w-100">
                    <div class="card-body">
                        <div class="db-widgets d-flex justify-content-between align-items-center">
                            <div class="db-icon">
                                <i class="fas fa-book-open"></i>
                            </div>
                            <div class="db-info">
                                <h3><?php echo $ss ?></h3>
                                <h6>Total Courses For The Semester</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12 d-flex">
                <div class="card bg-two w-100">
                    <div class="card-body">
                        <div class="db-widgets d-flex justify-content-between align-items-center">
                            <div class="db-icon">
                                <i class="fas fa-file-alt"></i>
                            </div>
                            <div class="db-info">
                                <h3><?php echo $result['session'] ?></h3>
                                <h6>Session</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
            // $s = [];
            // $u = [];

            // // $id = $_SESSION['id'];

            // // $sql = $db->query("SELECT * FROM bio where Email='$id'");

            // // $result = $sql->fetch_assoc();
            // // $Department = $result['department'];
            // // $dept = strtolower(str_replace(' ', '', $Department));
            // // $input = $db->query("SELECT * FROM $dept where classId ='1' and semester ='First'");

            // // while ($course = mysqli_fetch_assoc($input)) :
            // //     $units = $course['unit'];
            // //     $u[] = $units;

            // //     $sql = $result['courses'];
            // //     $sq = explode(',', $sql);
            // //     for ($i = 0; $i < count($sq); $i++) : $c = $sq[$i];
            // //         $grades = $db->query("SELECT $c FROM bio WHERE Email='$id'");
            // //         $grade = mysqli_fetch_all($grades);
            // //         $scores = $grade[0][0];
            // //         $s[] = $scores;
            // //     endfor;
            // // endwhile;
            // // ?>

            <div class="col-xl-3 col-sm-6 col-12 d-flex">
                <div class="card bg-three w-100">
                    <div class="card-body">
                        <div class="db-widgets d-flex justify-content-between align-items-center">
                            <div class="db-icon">
                                <i class="fas fa-scroll"></i>
                            </div>
                            <div class="db-info">

                                <h3> </h3>
                                <h6>Current GPA</h6>
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




    <script src="assets/js/jquery-3.6.0.min.js"></script>

    <script src="assets/js/popper.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

    <script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="assets/plugins/apexchart/apexcharts.min.js">
    </script>
    <script src="assets/plugins/apexchart/chart-data.js"></script>

    <script src="assets/plugins/simple-calendar/jquery.simple-calendar.js"></script>
    <script src="assets/js/calander.js"></script>

    <script src="assets/js/circle-progress.min.js"></script>

    <script src="assets/js/script.js"></script>
    </body>


    </html>