<?php include 'libs/connection.inc.php' ?>
<?php
global $message,$wrongConfirmation,$success;
$id = $_SESSION['id'];
$sql = $db->query("SELECT * FROM student_registered where email='$id'");
$result = $sql->fetch_assoc();
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

        <?php include 'student-header-nav.php' ?>

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
                                        <img src="student_image/<?= $result['student_image'] ?>" class="mr-3" alt="...">
                                        <div class="media-body">
                                            <ul>
                                                <li>
                                                    <span class="title-span">Full Name : </span>
                                                    <span class="info-span"><?= $result['first_name'] . ' ' . $result['last_name'] ?></span>
                                                </li>
                                                <li>
                                                    <span class="title-span">Department : </span>
                                                    <span class="info-span"><?=$result['department']?></span>
                                                    </li>
                                                <li>
                                                    <span class="title-span">Mobile : </span>
                                                    <span class="info-span"><?= $result['mobile_number'] ?></span>
                                                </li>
                                                <li>
                                                    <span class="title-span">Email : </span>
                                                    <span class="info-span"><?= $result['email'] ?></span>
                                                </li>
                                                <li>
                                                    <span class="title-span">Gender : </span>
                                                    <span class="info-span"><?= $result['gender'] ?></span>
                                                </li>
                                                <li>
                                                    <span class="title-span">DOB : </span>
                                                    <span class="info-span"><?= $result['dob'] ?></span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-md-12">
                                            <p>Hello I am <?= $result['first_name'] . ' ' . $result['last_name'] ?>. Lorem Ipsum is simply dummy text of the printing and typesetting industry, simply dummy text of the printing and typesetting industry.</p>
                                        </div>
                                    </div>
                                    <div class="row follow-sec">
                                        <div class="col-md-4 mb-3">
                                            <div class="blue-box">
                                                <h3>2850</h3>
                                                <p>Followers</p>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <div class="blue-box">
                                                <h3>2050</h3>
                                                <p>Following</p>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <div class="blue-box">
                                                <h3>2950</h3>
                                                <p>Friends</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-md-12">
                                            <h5>Permanent Address</h5>
                                            <p><?= $result['permanent_address'] ?></p>
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-md-12">
                                            <h5>Present Address</h5>
                                            <p><?= $result['present_address'] ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-12">
                                <div class="skill-info">
                                    <h4>Skills</h4>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry, simply dummy text of the printing and typesetting industry</p>
                                    <ul>
                                        <li>
                                            <label>Lorem Ipsum is simply</label>
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
                                            </div>
                                        </li>
                                        <li>
                                            <label>Lorem Ipsum is simply</label>
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" aria-valuenow="69" aria-valuemin="0" aria-valuemax="100" style="width: 69%"></div>
                                            </div>
                                        </li>
                                        <li>
                                            <label>Lorem Ipsum is simply</label>
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-striped progress-bar-animated bg-info" role="progressbar" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100" style="width: 86%"></div>
                                            </div>
                                        </li>
                                        <li>
                                            <label>Lorem Ipsum is simply</label>
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="width: 65%"></div>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="row mt-3">
                                        <div class="col-md-12">
                                            <h5>Education</h5>
                                            <p class="mt-3">Secondary Schooling at xyz school of secondary education, Mumbai.</p>
                                            <p>Higher Secondary Schooling at xyz school of higher secondary education, Mumbai.</p>
                                            <p>Bachelor of Science at Abc College of Art and Science, Chennai.</p>
                                            <p>Master of Science at Cdm College of Engineering and Technology, Pune.</p>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-md-12">
                                            <h5>Certificates</h5>
                                            <p class="mt-3">1st Prise in Running Competition.</p>
                                            <p>Lorem Ipsum is simply dummy text.</p>
                                            <p>Won overall star student in higher secondary education.</p>
                                            <p>Lorem Ipsum is simply dummy text.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-12">
                                <div class="skill-info">
                                    <h4>Settings</h4>
                                    <form method="POST">
                                        <?php echo $success ?? null ?>
                                        <div class="row mt-3">
                                            <div class="col-12 col-sm-6">
                                                <div class="form-group">
                                                    <label>Username</label>
                                                    <input type="text" class="form-control" value="<?= $result['last_name'] ?>">
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-6">
                                                <div class="form-group">
                                                    <label>Current Password</label>
                                                    <input type="password" class="form-control" name="current_password" required>
                                                    <?php echo $message ?? null;?>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-6">
                                                <div class="form-group">
                                                    <label>New Password</label>
                                                    <input type="password" class="form-control" name="new_password" required>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-6">
                                                <div class="form-group">
                                                    <label>Confirm Password</label>
                                                    <input type="password" class="form-control" name="confirm_password" required>
                                                    <?php echo $wrongConfirmation ?? null;?>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <button type="submit" class="btn btn-primary" name="change_pass">Submit</button>
                                            </div>
                                        </div>
                                    </form>
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


    <script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="assets/js/jquery-3.6.0.min.js"></script>

    <script src="assets/js/popper.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

    <script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <script src="assets/js/script.js"></script>
</body>

<!-- Mirrored from preschool.dreamguystech.com/html-template/student-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Oct 2021 11:11:50 GMT -->

</html>