<?php
include 'body.php';

$id = $_SESSION['id'];
$sql = $db->query("SELECT * FROM bio where Email='$id'  ");
$result = $sql->fetch_assoc();
?>

<div class="main-wrapper">

    <div class="page-wrapper">
        <div class="content container-fluid">
            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="page-title">Courses Registration</h3>
                        <ul class="breadcrumb">

                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="card card-table">
                        <div class="card-body">
                            <div class="table-responsive">
                                <?php if(empty($result['courses'])) : ?>
                                    <form action="" method="POST">
                                        <table class="table table-hover table-center mb-0">

                                            <thead>
                                                <tr>
                                                    <th>Course Code</th>
                                                    <th>Course Title</th>
                                                    <th>Unit</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php if (!empty($result['department'])) : ?>
                                                    <?php
                                                    $Department = $result['department'];



                                                    $dept = strtolower(str_replace(' ', '', $Department));
                                                    $input = $db->query("SELECT * FROM $dept where classId ='1' and semester ='First'");

                                                    ?>

                                                    <?php while ($course = mysqli_fetch_array($input)) : ?>
                                                        <tr>
                                                            <td><input value="<?= $course['courseCode'] ?>" name="course[]" style="border:none" readonly></td>
                                                            <td><?= $course['courseTitle'] ?></td>
                                                            <td><?= $course['unit'] ?></td>
                                                        </tr>
                                                    <?php endwhile; ?>
                                                <?php endif; ?>
                                            </tbody>

                                        </table>
                                        <div class="col-auto text-right float-left mx-auto">
                                            <button type="submit" name="registerCourse" class="btn btn-outline-primary mr-2 w-100"><i class="fas fa-plus"></i> Register</button>
                                        </div>
                                    </form>

                                <?php endif; ?>
                                <?php if (!empty($result['courses'])) : ?>
                                    <div style="color:green"><?= 'You have successfully registered for this semester' ?></div>
                                <?php endif; ?>
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
<script src="assets/plugins/datatables/datatables.min.js"></script>
<script src="assets/js/script.js"></script>
</body>