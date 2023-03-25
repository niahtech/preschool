<?php
    include 'lecturer-header.php';
    $image = '<p style="color:red;">Maximum Size 300KB</p>';
    $department = getLecturer($_SESSION['email'], 'department');
    $department = str_replace(' ', '', strtolower($department));
    $course = $db->query("SELECT * FROM $department");
?>

<div class="page-wrapper">
<div class="content container-fluid">

<div class="page-header">
<div class="row align-items-center">
<div class="col">
<h3 class="page-title">Edit Lecturers</h3>
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="teacher-dashboard.php">Lecturers</a></li>
<li class="breadcrumb-item active">Edit Lecturers</li>
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
<h5 class="form-title"><span>Basic Details</span></h5>
</div>
<div class="col-12 col-sm-6">
<div class="form-group">
<label>Lecturer ID</label>
<input type="text" class="form-control" placeholder="PRE1359" value="<?= getLecturer($_SESSION['email'], 'teacherId')?>" name="teacherId" required>
</div>
</div>
<div class="col-12 col-sm-6">
<div class="form-group">
<label>Name</label>
<input type="text" class="form-control" value="<?= getLecturer($_SESSION['email'], 'name')?>" name="name" required>
</div>
</div>
<div class="col-12 col-sm-6">
<div class="form-group">
<label>Gender</label>
<select class="form-control" name="gender" required>
<option value="Male">Male</option>
<option value="Female">Female</option>
<option value="Others">Others</option>
</select>
</div>
</div>
<div class="col-12 col-sm-6">
<div class="form-group">
<label>Date of Birth</label>
<input type="date" class="form-control" value="<?= getLecturer($_SESSION['email'], 'dob')?>" name="dob" required>
</div>
</div>
<div class="col-12 col-sm-6">
<div class="form-group">
<label>Mobile</label>
<input type="text" class="form-control" placeholder="08123456789" value="<?= getLecturer($_SESSION['email'], 'mobile')?>" name="mobile" required>
</div>
</div>
<div class="col-12 col-sm-6">
<div class="form-group">
<label>Joining Date</label>
<input type="text" class="form-control" value="<?= getLecturer($_SESSION['email'], 'joiningDate')?>" readonly>
</div>
</div>
<div class="col-12 col-sm-6">
<div class="form-group">
<label>Qualification</label>
<input class="form-control" type="text" placeholder="Bachelor of Engineering" value="<?= getLecturer($_SESSION['email'], 'qualification')?>" name="qualification" required>
</div>
</div>
<div class="col-12 col-sm-6">
<div class="form-group">
<label>Department</label>
<input class="form-control" type="text" placeholder="Bachelor of Engineering" value="<?= getLecturer($_SESSION['email'], 'department')?>" name="department" readonly>
</div>
</div>
<div class="col-12 col-sm-6">
<div class="form-group">
<label>Select Course(s)</label>
<div><?php foreach($course as $cou): ?>
    <?= $cou['courseCode'];?><input class="mr-1" type="checkbox" value="<?= $cou['courseCode'];?>" name="course[]">
<?php endforeach; ?></div>
<div><?=$courseErr ?? NULL;?></div>
</div>
</div>
<div class="col-12 col-sm-6">
<div class="form-group">
<label>Experience</label>
<input class="form-control" type="number" placeholder="5" value="<?= getLecturer($_SESSION['email'], 'experience')?>" name="experience" required>
</div>
</div>
<div class="col-12 col-sm-6">
<div class="form-group">
<label>Lecturer Image</label>
<input class="form-control" type="file" name="image" required>
<div><?=$imageErr ?? $image;?></div>
</div>
</div>
<div class="col-12">
<h5 class="form-title"><span>Login Details</span></h5>
</div>
<div class="col-12 col-sm-6">
<div class="form-group">
<label>Username</label>
<input type="text" class="form-control" placeholder="Enter your first name" value="<?= getLecturer($_SESSION['email'], 'username')?>" name="username" required>
</div>
</div>
<div class="col-12 col-sm-6">
<div class="form-group">
<label>Email ID</label>
<input type="email" class="form-control" placeholder="vincent20@gmail.com" value="<?= getLecturer($_SESSION['email'], 'email')?>" name="email" readonly>
</div>
</div>
<div class="col-12">
<h5 class="form-title"><span>Address</span></h5>
</div>
<div class="col-12">
<div class="form-group">
<label>Address</label>
<input type="text" class="form-control" placeholder="3979 Ashwood Drive" value="<?= getLecturer($_SESSION['email'], 'address')?>" name="address" required>
</div>
</div>
<div class="col-12 col-sm-6">
<div class="form-group">
<label>City</label>
<input type="text" class="form-control" placeholder="Omaha" value="<?= getLecturer($_SESSION['email'], 'city')?>" name="city" required>
</div>
</div>
<div class="col-12 col-sm-6">
<div class="form-group">
<label>State</label>
<input type="text" class="form-control" placeholder="Omaha" value="<?= getLecturer($_SESSION['email'], 'state')?>" name="state" required>
</div>
</div>
<div class="col-12 col-sm-6">
<div class="form-group">
<label>Zip Code</label>
<input type="text" class="form-control" placeholder="3979" value="<?= getLecturer($_SESSION['email'], 'zipCode')?>" name="zipCode" required>
</div>
</div>
<div class="col-12 col-sm-6">
<div class="form-group">
<label>Country</label>
<input type="text" class="form-control" placeholder="USA" value="<?= getLecturer($_SESSION['email'], 'country')?>" name="country" required>
</div>
</div>
<div class="col-12">
<button type="submit" class="btn btn-primary" name="editLecturer">Submit</button>
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


<script src="assets/js/jquery-3.6.0.min.js"></script>

<script src="assets/js/popper.min.js"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<script src="assets/js/script.js"></script>
</body>

</html>