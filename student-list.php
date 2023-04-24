<?php
include 'lecturer-header.php';
$course = getLecturer($_SESSION['email'], 'course');
$students = $db->query("SELECT * FROM bio ORDER BY Department");
?>

<div class="page-wrapper">
   <div class="content container-fluid">
      <div class="page-header">
         <div class="row align-items-center">
            <div class="col">
               <h3 class="page-title">Students</h3>
               <ul class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                  <li class="breadcrumb-item active">Students</li>
               </ul>
            </div>
            <div class="col-auto text-right float-right ml-auto">
               <a href="#" class="btn btn-outline-primary mr-2"><i class="fas fa-download"></i> Download</a>
               <a href="add-student.html" class="btn btn-primary"><i class="fas fa-plus"></i></a>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-sm-12">
            <div class="card card-table">
               <div class="card-body">
                  <div class="table-responsive">
                     <?php $courses = explode(',', $course) ?>
                     <?php for ($i = 0; $i < count($courses); $i++) : echo "<h2 class=text-center>$courses[$i] students</h2>" ?>
                        <table class="table table-hover table-center mb-0 datatable">
                           <thead>
                              <tr>
                                 <th>ID</th>
                                 <th>Name</th>
                                 <th>Class</th>
                                 <th>DOB</th>
                                 <th>Parent Name</th>
                                 <th>Mobile Number</th>
                                 <th>Address</th>
                              </tr>
                           </thead>
                           <tbody>
                              <?php
                              if (empty($course)) {
                                 echo '<h2 style="color:red">Update your profile</h2>';
                              }
                              ?>
                              <?php if (!empty($course)) : ?>
                                 <?php foreach ($students as $student) : $studentCourses = explode(',', $student['courses']); ?>
                                    <?php if (in_array($courses[$i], $studentCourses)) : ?>
                                       <tr>
                                          <td><?= $student['studentId']; ?></td>
                                          <td>
                                             <h2 class="table-avatar">
                                                <a href="#" data-id="<?= $student['id']; ?>" data-toggle="modal" data-target="#student-<?= $student['id']; ?>" class="avatar avatar-sm mr-2 list"><img class="avatar-img rounded-circle" src="assets/img/profiles/<?= $student['image']; ?>" alt="User Image"></a>
                                                <a href="#" data-id="<?= $student['id']; ?>" class="list" data-toggle="modal" data-target="#student-<?= $student['id']; ?>"><?= $student['FirstName']; ?></a>
                                             </h2>
                                          </td>
                                          <td><?= $student['department']; ?></td>
                                          <td><?= $student['DOB']; ?></td>
                                          <td><?= $student['fathersName']; ?></td>
                                          <td><?= $student['PhoneNumber']; ?></td>
                                          <td><?= $student['presentAddress']; ?></td>
                                       </tr>
                                    <?php endif; ?>
                                 <?php endforeach; ?>
                              <?php endif; ?>
                           </tbody>
                        </table>
                        <br>
                        <br>
                     <?php endfor; ?>
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

<?php foreach ($students as $student) : ?>
   <div class="modal fade" tabindex="-1" aria-labelledby="studentDetailsLabel" aria-hidden="true" id="student-<?= $student['id']; ?>">
      <div class="modal-dialog">
         <div class="modal-content">
            <div class="modal-header">
               <div class="modal-title text-center h3">Student Details</div>
               <button class="btn btn-danger close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
               <ul class="breadcrumb">
                  <li class="breadcrumb-item"><a href="student-list.php">Student</a></li>
                  <li class="breadcrumb-item active">Student Details</li>
               </ul>
               <div class="card">
                  <div class="card-body">
                     <div class="row">
                        <div class="col-md-12">
                           <div class="about-info">
                              <h4>About Me</h4>
                              <div class="media mt-3">
                                 <img src="assets/img/user.jpg" class="mr-3 img-fluid w-50" alt="...">
                                 <div class="media-body w-50">
                                    <ul>
                                       <li>
                                          <span class="title-span">Full Name: </span>
                                          <span class="info-span"><?= $student['LastName'] . ' ' . $student['FirstName']; ?></span>
                                       </li>
                                       <li>
                                          <span class="title-span">Department: </span>
                                          <span class="info-span"><?= $student['Department']; ?></span>
                                       </li>
                                       <li>
                                          <span class="title-span">Mobile: </span>
                                          <span class="info-span"><?= $student['PhoneNumber']; ?></span>
                                       </li>
                                       <li>
                                          <span class="title-span">Email: </span>
                                          <span class="info-span"><?= $student['Email']; ?></span>
                                       </li>
                                       <li>
                                          <span class="title-span">Gender: </span>
                                          <span class="info-span"><?= $student['Gender']; ?></span>
                                       </li>
                                       <li>
                                          <span class="title-span">DOB: </span>
                                          <span class="info-span"><?= $student['DOB']; ?></span>
                                       </li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   </div>
<?php endforeach; ?>


<script src="assets/js/jquery-3.6.0.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
<script src="assets/plugins/datatables/datatables.min.js"></script>
<script src="assets/js/script.js"></script>
<script>
   $('.list').click(function(e) {
      var bookId = $(this).data('id');
      $(".modal-body #bookId").val(bookId);
   });
</script>
</body>

</html>