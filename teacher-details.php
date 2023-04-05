<?php
    include 'lecturer-header.php';
?>

<div class="page-wrapper">
<div class="content container-fluid">
<div class="page-header">
<div class="row">
<div class="col-sm-12">
<h3 class="page-title">Lecturers Details</h3>
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="teacher-dashboard.php">Lecturers</a></li>
<li class="breadcrumb-item active">Lecturers Details</li>
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
<img src="lecturer-image/<?= getLecturer($_SESSION['email'], 'image');?>" height="300" alt="<?= getLecturer($_SESSION['email'], 'name');?>" class="mr-3">
<div class="media-body">
<ul>
<li>
<span class="title-span">Full Name : </span>
<span class="info-span"><?= getLecturer($_SESSION['email'], 'name');?></span>
</li>
<li>
<span class="title-span">Lecturer ID : </span>
<span class="info-span"><?= getLecturer($_SESSION['email'], 'teacherId');?></span>
</li>
<li>
<span class="title-span">Mobile : </span>
<span class="info-span"><?= getLecturer($_SESSION['email'], 'mobile');?></span>
</li>
<li>
<span class="title-span">Email : </span>
<span class="info-span"><a href="https://preschool.dreamguystech.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="a3c7c2cad0dae3c4cec2cacf8dc0ccce">[email&#160;protected]</a></span>
</li>
<li>
<span class="title-span">Gender : </span>
<span class="info-span"><?= getLecturer($_SESSION['email'], 'gender');?></span>
</li>
<li>
<span class="title-span">DOB : </span>
<span class="info-span"><?= getLecturer($_SESSION['email'], 'dob');?></span>
</li>
</ul>
</div>
</div>
<div class="row mt-3">
<div class="col-md-12">
<p>Hello I am <?= getLecturer($_SESSION['email'], 'name');?>. Lorem Ipsum is simply dummy text of the printing and typesetting industry, simply dummy text of the printing and typesetting industry.</p>
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
<h5>Address</h5>
<p><?= getLecturer($_SESSION['email'], 'address');?></p>
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
<div class="row mt-3">
<div class="col-12 col-sm-6">
<div class="form-group">
<label>Username</label>
<input type="text" class="form-control" value="<?= getLecturer($_SESSION['email'], 'username')?>" readonly>
</div>
</div>
<div class="col-12 col-sm-6">
<div class="form-group">
<label>Current Password</label>
<input type="password" class="form-control" name="currentPassword" required>
</div>
</div>
<div class="col-12 col-sm-6">
<div class="form-group">
<label>New Password</label>
<input type="password" class="form-control" name="newPassword" required>
</div>
</div>
<input type="hidden" class="form-control" value="<?= getLecturer($_SESSION['email'], 'email')?>" name="email">


<div class="col-12 col-sm-6 form-group"><?= $passwordErr ?? NULL; ?></div>
<div class="col-12">
<button type="submit" class="btn btn-primary" name="changePassword">Submit</button>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>

<?php include ('lecturer-footer.php'); ?>