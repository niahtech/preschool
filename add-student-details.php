<?php
include 'body.php';
?>

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
                        <form method="POST" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-12">
                                    <h5 class="form-title"><span>Student Information</span></h5>
                                </div>
                                <?php
                                $id = $_SESSION['id'];
                                $sql = $db->query("SELECT * FROM bio WHERE Email='$id'");
                                $result = $sql->fetch_assoc();
                                ?>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>First Name</label>
                                        <input type="text" class="form-control" name="FirstName" value="<?= $result['FirstName'] ?>" readonly>

                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Last Name</label>
                                        <input type="text" class="form-control" name="LastName" value="<?= $result['LastName'] ?>" readonly>

                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Student Id</label>
                                        <input type="text" class="form-control" name="studentId" value="<?= $result['studentId'] ?>" required>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6" name="gender">
                                    <div class="form-group">
                                        <label>Gender</label>
                                        <select class="form-control" name="Gender" required>
                                            <option value="">Select Gender</option>
                                            <option value="female">Female</option>
                                            <option value="male">Male</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Date of Birth</label>
                                        <div>
                                            <input type="date" class="form-control" name="DOB" value="<?= $result['DOB'] ?>" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Religion</label>
                                        <input type="text" class="form-control" name="Religion" value="<?= $result['Religion'] ?>" required>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Country</label>
                                        <input type="text" class="form-control" name="Country" value="<?= $result['Country'] ?>" required>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Joining Date</label>
                                        <div>
                                            <input type="text" class="form-control" name="JoiningDate" value="<?= $result['joiningDate'] ?>" readonly>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Department</label>
                                        <div>
                                            <select name="department" class="form-control" required>
                                                <option selected>Select a Department...</option>
                                                <?php $sql = $db->query("SELECT * FROM departments");
                                                while ($dept = mysqli_fetch_array($sql)) {
                                                ?>
                                                    <option value="<?= $dept['name'] ?>"><?= $dept['name'] ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>session</label>
                                        <div>
                                            <select name="session" class="form-control" required>
                                                <option selected>Select your session...</option>
                                                <?php $sql = $db->query("SELECT * FROM session");
                                                while ($session = mysqli_fetch_array($sql)) {
                                                ?>
                                                    <option value="<?= $session['name'] ?>"><?= $session['name'] ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Mobile Number</label>
                                        <input type="tel" class="form-control" name="PhoneNumber" value="<?= $result['PhoneNumber'] ?>" required>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Image</label>
                                        <input type="file" class="form-control" name="image">
                                        <div><?= $imageErr ?? null; ?></div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <h5 class="form-title"><span>Parent Information</span></h5>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Fathers Name</label>
                                        <input type="text" class="form-control" name="fathersName" value="<?= $result['fathersName'] ?>" required>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Fathers Occupation</label>
                                        <input type="text" class="form-control" name="fathersOccupation" value="<?= $result['fathersOccupation'] ?>" required>

                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Fathers Mobile</label>
                                        <input type="tel" class="form-control" name="fathersMobile" value="<?= $result['fathersMobile'] ?>" required>

                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Fathers Email</label>
                                        <input type="email" class="form-control" name="fathersEmail" value="<?= $result['fathersEmail'] ?>" required>

                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Mothers Name</label>
                                        <input type="text" class="form-control" name="mothersName" value="<?= $result['mothersName'] ?>" required>

                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Mothers Occupation</label>
                                        <input type="text" class="form-control" name="mothersOccupation" value="<?= $result['mothersOccupation'] ?>" required>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Mothers Mobile</label>
                                        <input type="tel" class="form-control" name="mothersMobile" value="<?= $result['mothersMobile'] ?>" required>

                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Mothers Email</label>
                                        <input type="email" class="form-control" name="mothersEmail" value="<?= $result['mothersEmail'] ?>" required>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Permanent Address</label>
                                        <textarea class="form-control" name="permanentAddress" value="<?= $result['permanentAddress'] ?>"></textarea>

                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Present Address</label>
                                        <textarea class="form-control" name="presentAddress" value="<?= $result['presentAddress'] ?>"></textarea>

                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary" name="studentdet" value="studentdet">Submit</button>
                                </div>
                            </div>
                        </form>
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

</html>