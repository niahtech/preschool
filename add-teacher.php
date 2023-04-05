<?php include 'libs/connection.inc.php' ?>
<?php
$sql = $db->query("SELECT * FROM departments");
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
        <?php include 'admin-sidebar.php' ?>
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
                                            <h5 class="form-title"><span>Add new Lecturer</span></h5>
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <input class="form-control" type="text" placeholder="Name" name="name" required>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <input class="form-control" type="text" placeholder="Email" name="email" required>
                                                <div style="color:red"><?= $registeredEmailErr ?></div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <input class="form-control" type="password" placeholder="Password" name="password" required>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <input class="form-control" type="password" placeholder="Confirm Password" name="confirm_password" required>
                                                <div style="color:red"><?= $passwordErr ?></div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <select name="department" id="" class="form-control">
                                                    <option value="">Select Department</option>
                                                    <?php while ($result = $sql->fetch_assoc()) { ?>

                                                        <option value="<?= $result['id'] ?>"><?= $result['name'] ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                        <div class="form-group mb-0">
                                            <button class="btn btn-primary btn-block" type="submit" name="register">Register</button>
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
    <?php include "footer.php" ?>
</body>
<!-- Mirrored from preschool.dreamguystech.com/html-template/add-student.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Oct 2021 11:11:50 GMT -->

</html>