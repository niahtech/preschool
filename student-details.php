<?php
include 'body.php';

$id = $_SESSION['id'];
$sql = $db->query("SELECT * FROM bio where Email='$id' ");
$item = $sql->fetch_assoc()
?>
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

                                <img src="student_img/<?= $item['image']; ?>" class="mr-3" alt="...">
                                <div class="media-body">
                                    <ul>
                                        <li>
                                            <span class="title-span">FirstName : </span>
                                            <span class="info-span"><?php echo $item['FirstName']; ?></span>
                                        </li>

                                        <li>
                                            <span class="title-span">LastName : </span>
                                            <span class="info-span"><?php echo $item['LastName']; ?> </span>
                                        </li>
                                        <li>
                                            <span class="title-span">Email : </span>
                                            <span class="info-span"><?php echo $item['Email']; ?> </span>
                                        </li>
                                        <li>
                                            <span class="title-span">DOB : </span>
                                            <span class="info-span"><?php echo $item['DOB']; ?></span>
                                        </li>
                                        <li>
                                            <span class="title-span">Religion : </span>
                                            <span class="info-span"><?php echo $item['Religion']; ?></span>
                                        </li>
                                        <li>
                                            <span class="title-span">PhoneNumber : </span>
                                            <span class="info-span"><?php echo $item['PhoneNumber']; ?></span>
                                        </li>
                                        <li>
                                            <span class="title-span">Gender : </span>
                                            <span class="info-span"><?php echo $item['Gender']; ?></span>
                                        </li>
                                        <li>
                                            <span class="title-span">Department : </span>
                                            <span class="info-span"><?php echo   $item['department']; ?></span>
                                        </li>
                                        <li>
                                            <span class="title-span">Country : </span>
                                            <span class="info-span"><?php echo $item['Country']; ?></span>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                    <style>
                        .blue-box {
                            border-radius: 60px;
                            background-color: lightcoral;
                            margin: 40px;

                        }
                    </style>

                    <div class="row follow-sec  align-content-sm-around ">
                        <div class="col-md-4 mb-3">
                            <div class="blue-box" >
                                <!-- <h3>2850</h3>
                                <p>Followers</p> -->
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="blue-box  ">
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
                </div>

            </div>
        </div>
        <div class="row mt-2">
            <div class="col-md-12">
                <div class="skill-info">
                    <!-- <h4>Skills</h4>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry, simply dummy text of the printing and typesetting industry</p> -->
                    <!-- <ul>
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
                    </ul> -->
                    <div class="row mt-3">
                        <div class="col-md-12">
                            <h5>Education</h5>
                            <p class="mt-3">Secondary Schooling at xyz school of secondary education, Mumbai.</p>
                            <p>Higher Secondary Schooling at xyz school of higher secondary education, Mumbai.</p>
                            <p>Bachelor of Science at Abc College of Art and Science, Chennai.</p>
                            <p>Master of Science at Cdm College of Engineering and Technology, Pune.</p>
                        </div>
                    </div>
                    <!-- <div class="row mt-3">
                        <div class="col-md-12">
                            <h5>Certificates</h5>
                            <p class="mt-3">1st Prise in Running Competition.</p>
                            <p>Lorem Ipsum is simply dummy text.</p>
                            <p>Won overall star student in higher secondary education.</p>
                            <p>Lorem Ipsum is simply dummy text.</p>
                        </div>
                    </div> -->
                </div>
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

</div>

</div>


<script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script src="assets/js/jquery-3.6.0.min.js"></script>

<script src="assets/js/popper.min.js"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<script src="assets/js/script.js"></script>
</body>


</html>