<?php include "libs/connection.inc.php"?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<title>Preskool - Department</title>

<link rel="shortcut icon" href="assets/img/favicon.png">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,600;0,700;1,400&amp;display=swap">

<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">

<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<div class="main-wrapper">

<?php include 'admin-sidebar.php'?>
<div class="page-wrapper">
<div class="content container-fluid">

<div class="page-header">
<div class="row align-items-center">
<div class="col">
<h3 class="page-title">Create Department</h3>
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="departments.html">Department</a></li>
<li class="breadcrumb-item active">Create Department</li>
</ul>
</div>
</div>
</div>

<div class="row">
<div class="col-sm-12">
<div class="card">
<div class="card-body">
<form method="POST">
<div class="row">
<div class="col-12">
<h5 class="form-title"><span>Department Details</span></h5>
</div>
<div class="col-12 col-sm-6">
<div class="form-group">
<label>Department ID</label>
<input type="text" class="form-control" name="department_id">
</div>
</div>
<div class="col-12 col-sm-6">
<div class="form-group">
<label>Department Name</label>
<input type="text" class="form-control" name="department_name">
</div>
</div>
<div class="col-12 col-sm-6">
<div class="form-group">
<label>Head of Department</label>
<input type="text" class="form-control" name="department_head">
</div>
</div>
<div class="col-12 col-sm-6">
<div class="form-group">
<label>No of Students</label>
<input type="text" class="form-control" name="no_students">
</div>
</div>
<div class="col-12">
<button type="submit" class="btn btn-primary" name="create_department">Submit</button>
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


<?php include "footer.php"?>
</body>
</html>


<div class="modal fade" id="askToDelete" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Delete Student</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body">
            <p>Are you sure you want to delete this student?</p>
            <form method="POST">
                  <div class="col-12">
                     <?php echo $i?>
                     <?=$feedback['id']?>
                     <button type="submit
                        " class="btn btn-primary" name="confirm_delete" value="<?=$id;?>">Yes</button>
                  </div>
               </div>