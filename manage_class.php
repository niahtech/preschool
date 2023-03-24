<?php include 'libs/connection.inc.php' ?>
<?php
$id = $_GET['id'];
$sql = $db->query("SELECT * FROM departments WHERE id='$id'");
$department = $sql->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Preskool - Course Management</title>
    <link rel="shortcut icon" href="assets/img/favicon.png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,600;0,700;1,400&amp;display=swap">
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <div class="main-wrapper">
        <?php include 'admin-sidebar.php' ?>
        <div class="page-wrapper">
            <div class="content container-fluid">
                <div class="page-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <h3 class="page-title">Course Management</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item active"><?= $department['name'] ?></li>
                            </ul>
                        </div>
                        <div class="col-auto text-right float-right ml-auto">

                            <a href="#" class="btn btn-outline-primary mr-2" data-toggle="modal" data-target="#createCourseModal"><i class="fas fa-plus-circle"></i> Create Course</a>
                        </div>
                    </div>
                </div>
                <?php
                $getDepartment = $department['name'];
                $trimmedDept = strtolower(str_replace(' ', '', $getDepartment));
                $fix = $db->query("SELECT * FROM $trimmedDept");
                ?>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card card-table">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-hover table-center mb-0 datatable">
                                        <thead>
                                            <tr>
                                                <th>Sn</th>

                                                <th>Course Title</th>
                                                <th>Code</th>
                                                <th>Unit</th>
                                                <th>Semester</th>
                                                <th>Level</th>
                                                <th>Comp</th>
                                                <th class="text-right"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i = 1;
                                            while ($course = mysqli_fetch_array($fix)) {
                                            ?>
                                                <tr>
                                                    <td><?= $i++; ?></td>
                                                    <td><?= $course['courseTitle'] ?></td>
                                                    <td><?= $course['courseCode'] ?></td>
                                                    <td><?= $course['unit'] ?></td>
                                                    <td><?= $course['semester'] ?></td>
                                                    <td><?= getClass($course['classId'])['name'] ?></td>
                                                    <td>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="1" name="compulsory" <?= ($course['compulsory'] == 1) ? 'checked' : '' ?>>
                                                        </div>
                                                    </td>
                                                    <td class="text-right">
                                                        <div class="actions">
                                                            <a href="edit-subject.html" class="btn btn-sm bg-success-light mr-2">
                                                                <i class="fas fa-pen"></i>
                                                            </a>
                                                            <a href="#" class="btn btn-sm bg-danger-light">
                                                                <i class="fas fa-trash"></i>
                                                            </a>
                                                        </div>
                                                    </td>
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



        <!-- Button trigger modal -->


        <div class="modal fade" id="createCourseModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Create New Course</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Please fill in all the form Information accurately</p>
                        <form method="POST">

                            <p style="color:red"></p>
                            <p style="color:green"></p>
                            <div class="row">
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Course Title</label>
                                        <input type="text" class="form-control" name="course_title" required>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-6">
                                    <div class="row">
                                        <div class="form-group col-6">
                                            <label>Unit</label>
                                            <input type="number" class="form-control" name="unit" required>
                                        </div>

                                        <div class="form-group col-6">
                                            <label>Course Code</label>
                                            <input type="text" class="form-control" name="course_code" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-4">
                                    <div class="form-group">
                                        <label>Level</label>
                                        <select name="class" class="form-control" required>
                                            <option selected disabled>Select a class ...</option>
                                            <?php
                                            $sql = $db->query("SELECT * FROM level ");
                                            while ($level = mysqli_fetch_array($sql)) {
                                            ?>
                                                <option value="<?= $level['id'] ?>"><?= $level['name'] ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-4">
                                    <div class="form-group">
                                        <label>Semester</label>
                                        <select name="semester" class="form-control bs4-select">
                                            <option value="First">1</option>
                                            <option value="Second">2</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="1" name="compulsory" id="flexCheckChecked">
                                        <label class="form-check-label" for="flexCheckChecked">
                                            Check if Compulsory
                                        </label>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary" name="createCourse">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>



        <?php include "footer.php" ?>
</body>

</html>