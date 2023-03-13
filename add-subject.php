<?php include 'libs/connection.inc.php' ?>
<?php
global $db;
$id = $_SESSION['id'];
$data = $db->query("SELECT * FROM student_registered WHERE email='$id'");
$result = $data->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Preskool - Subject</title>

    <link rel="shortcut icon" href="assets/img/favicon.png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,600;0,700;1,400&amp;display=swap">

    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <div class="main-wrapper">
        <?php include('student-header-nav.php') ?>
        <div class="page-wrapper">
            <div class="content container-fluid">

                <div class="page-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <h3 class="page-title">My Course Forms</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="subjects.html">view/print past/Present Course Forms</a></li>
                            </ul>
                        </div>
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
                                            <th>Session</th>
                                            <th>Semester</th>
                                            <th>Level</th>
                                            <th class="text-right">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $department = getDept($result['department'])['name'];
                                        $class = getClass($result['class'])['id'];
                                        $trimmedDept = strtolower(str_replace(' ', '', $department));
                                        $fix = $db->query("SELECT * FROM $trimmedDept WHERE classId='$class'AND semester='First'");
                                        $course = mysqli_fetch_array($fix);
                                        ?>
                                        <tr>
                                            <td><?= $result['section'] ?></td>
                                            <td>
                                                <h2>
                                                    <a><?= $course['semester'] ?></a>
                                                </h2>
                                            </td>
                                            <td><?= getClass($result['class'])['name'] ?></td>
                                            <td class="text-right">
                                                <div class="accordion" id="accordionExample">
                                                    <div class="actions">
                                                        <a href="#" class="btn btn-sm bg-success-light mr-2" data-toggle="collapse" data-target="#registeredCourses"><i class="fas fa-pen"></i></a>
                                                    </div>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>

                                <div class="accordion-collapse collapse" id="registeredCourses" data-bs-parent="#accordionExample">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="card card-table">
                                                <div class="card-header">
                                                    <h3 class="card-title text-center">Courses Registered</h3>
                                                </div>
                                                <div class="card-body">
                                                    <div class="table-responsive">
                                                        <table class="table table-hover table-center mb-0 datatable">
                                                            <thead>
                                                                <tr>
                                                                    <th>Courses</th>
                                                                    <th>CourseCode</th>
                                                                    <th class="text-right"></th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <?php
                                                                    $studentName=$result['id'];
                                                                    $studentColumn='STUD'.$studentName;
                                                                    $selectCourses = $db->query("SELECT * FROM $trimmedDept WHERE classId='$class'AND semester='First' AND $studentColumn= $studentName ");
                                                                    while ($printCourses = mysqli_fetch_array($selectCourses)) {
                                                                    ?>
                                                                        <td><?= $printCourses['courseTitle'] ?></td>
                                                                        <td><?= $printCourses['courseCode'] ?></td>
                                                                </tr>
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

    <script src="assets/js/script.js"></script>
</body>

<!-- Mirrored from preschool.dreamguystech.com/html-template/add-subject.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Oct 2021 11:11:50 GMT -->

</html>