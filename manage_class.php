<?php include 'libs/connection.inc.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Preskool - Class Management</title>
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
                            <h3 class="page-title">Class Management</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                                <li class="breadcrumb-item active">Class Management</li>
                            </ul>
                        </div>
                        <div class="col-auto text-right float-right ml-auto">
                            <button href="#" class="btn btn-outline-primary mr-2" data-toggle="modal" data-target="#createCourseModal"><i class="fas fa-plus-circle"></i> Create Class</a>

                        </div>
                    </div>
                </div>
                <div class="accordion" id="accordionExample">
                    <form action="" method="POST">
                        <ul class="nav nav-tabs nav-justified">
                            <button type="button" class=" nav-item nav-link btn btn-outline-primary" data-toggle="collapse" data-target="#level100">100 Level</button>
                            <button type="button" class="nav-item nav-link btn btn-outline-primary" data-toggle="collapse" data-target="#level200">200 Level</button>
                            <button type="button" class="nav-item nav-link btn btn-outline-primary" data-toggle="collapse" data-target="#level300">300 Level</button>
                            <button type="button" class="nav-item nav-link btn btn-outline-primary" data-toggle="collapse" data-target="#level400">400 Level</button>
                            <button type="button" class="nav-item nav-link btn btn-outline-primary" data-toggle="collapse" data-target="#level500">500 Level</button>
                        </ul>
                    </form>

                    <div class="accordion-collapse collapse" id="level100" data-bs-parent="#accordionExample">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card card-table">
                                    <div class="card-header">
                                        <h3 class="card-title">Class List</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-hover table-center mb-0 datatable">
                                                <thead>
                                                    <tr>
                                                        <th>Students</th>
                                                        <th>Courses</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><?= countStudentsLevel('1') ?></td>
                                                        <td>0</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="accordion-collapse collapse" id="level200" data-bs-parent="#accordionExample">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card card-table">
                                <div class="card-header">
                                    <h3 class="card-title">Class List</h3>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-hover table-center mb-0 datatable">
                                            <thead>
                                                <tr>
                                                    <th>Students</th>
                                                    <th>Courses</th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><?= countStudentsLevel('2') ?></td>
                                                    <td>0</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="accordion-collapse collapse" id="level300" data-bs-parent="#accordionExample">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card card-table">
                            <div class="card-header">
                                <h3 class="card-title">Class List</h3>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-hover table-center mb-0 datatable">
                                        <thead>
                                            <tr>
                                                <th>Students</th>
                                                <th>Courses</th>
                                                <th class="text-right"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><?= countStudentsLevel('3') ?></td>
                                                <td>0</td>
                                                
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="accordion-collapse collapse" id="level400" data-bs-parent="#accordionExample">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card card-table">
                            <div class="card-header">
                                <h3 class="card-title">Class List</h3>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-hover table-center mb-0 datatable">
                                        <thead>
                                            <tr>
                                                <th>Students</th>
                                                <th>Courses</th>
                                                <th class="text-right"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><?= countStudentsLevel('4') ?></td>
                                                <td>0</td>
                                                
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="collapse" id="level500" data-bs-parent="#accordionExample">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card card-table">
                            <div class="card-header">
                                <h3 class="card-title">Class List</h3>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-hover table-center mb-0 datatable">
                                        <thead>
                                            <tr>
                                                <th>Students</th>
                                                <th>Courses</th>
                                                <th class="text-right"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><?= countStudentsLevel('5') ?></td>
                                                <td>0</td>
                                                
                                            </tr>
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

    <!-- Button trigger modal -->


    <div class="modal fade" id="createCourseModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered " role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Create Class</h5>
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
                            <div class="col-12">
                                <div class="form-group">
                                    <label>Class Name</label>
                                    <input type="text" class="form-control" name="class_name" required>
                                </div>
                            </div>

                            <div class="col-12">
                                <button type="submit" class="btn btn-primary" name="createClass">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
      <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script> -->
    <?php include "footer.php" ?>
</body>

</html>