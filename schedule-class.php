<?php 
   include 'lecturer-header.php'; 
   
   $courses = getLecturer($_SESSION['email'], 'course');
   $course = explode(',', $courses);
   $schedule = $db->query("SELECT * FROM schedule ORDER BY date DESC");
?>
<div class="page-wrapper">
   <div class="content container-fluid">
      <div class="page-header">
         <div class="row align-items-center">
            <div class="col">
               <h3 class="page-title">Classes</h3>
               <ul class="breadcrumb">
                  <li class="breadcrumb-item"><a href="teacher-dashboard.php">Dashboard</a></li>
                  <li class="breadcrumb-item active">Classes</li>
               </ul>
            </div>
            <div class="col-auto text-right float-right ml-auto">
               <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#schedule-class"><i class="fas fa-plus"></i></a>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-sm-12">
            <div class="card card-table">
               <div class="card-body">
                  <div class="table-responsive">
                     <table class="table table-hover table-center mb-0 datatable">
                        <thead>
                           <tr>
                              <th>Date</th>
                              <th>Start Time</th>
                              <th>End Time</th>
                              <th>Course</th>
                              <th class="text-right">Action</th>
                           </tr>
                        </thead>
                        <tbody>
                           <?php foreach($schedule as $sch):?>
                           <tr>
                              <td><?php changeDate($sch['date'])?></td>
                              <td>
                                 <h2>
                                    <a><?php $startTime = $sch['startTime']; $start = explode('.',$startTime); echo $start[0];?></a>
                                 </h2>
                              </td>
                              <td><?php $endTime = $sch['endTime']; $end = explode('.',$endTime); echo $end[0];?></td>
                              <td><?= $sch['course'];?></td>
                              <td class="text-right">
                                 <div class="actions d-flex">
                                    <a href="#" class="btn btn-sm bg-success-light mr-2" data-toggle="modal" data-target="#edit-schedule-<?= $sch['id'];?>" id="<?= $sch['id'];?>">
                                    <i class="fas fa-pen"></i>
                                    </a>
                                    <button class="btn btn-sm bg-danger-light" data-toggle="modal" data-target="#delete-schedule-<?= $sch['id'];?>">
                                    <i class="fas fa-trash"></i>
                                    </button>
                                 </div>
                              </td>
                           </tr>
                           <?php endforeach; ?>
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>

   <div class="modal fade" tabindex="-1" aria-labelledby="scheduleClass" aria-hidden="true" id="schedule-class">
      <div class="modal-dialog">
         <div class="modal-content">
            <div class="modal-header">
               <div class="modal-title text-center h3">Schedule New Class</div>
               <button class="btn btn-danger close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
               <ul class="breadcrumb">
                  <li class="breadcrumb-item"><a href="schedule-class.php">Classes</a></li>
                  <li class="breadcrumb-item active">Schedule Class</li>
               </ul>
               <div class="card">
                  <div class="card-body">
                     <div class="row">
                        <div class="col-md-12">
                           <div class="about-info">
                              <form method="POST">
                                 <div><label for="date">Date</label>
                                 <input type="date" name="date" required></div>
                                 <br>
                                 <div><label for="date">Start Time</label>
                                 <input type="time" name="startTime" required></div>
                                 <br>
                                 <div><label for="date">End Time</label>
                                 <input type="time" name="endTime" required></div>
                                 <br>
                                 <div><label for="date">Course</label>
                                 <select name="course">
                                    <?php foreach($course as $cou):?>
                                       <option value="<?= $cou;?>"><?= $cou;?></option>
                                    <?php endforeach; ?>
                                 </select></div>
                                 <br>
                                 <input type="submit" class="btn btn-primary" name="scheduleClass" value="Schedule">
                              </form>
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

   <?php foreach($schedule as $sch): ?>
      <div class="modal fade" tabindex="-1" aria-labelledby="scheduleClass" aria-hidden="true" id="edit-schedule-<?= $sch['id'];?>">
         <div class="modal-dialog">
            <div class="modal-content">
               <div class="modal-header">
                  <div class="modal-title text-center h3">Schedule New Class</div>
                  <button class="btn btn-danger close" data-dismiss="modal">&times;</button>
               </div>
               <div class="modal-body">
                  <ul class="breadcrumb">
                     <li class="breadcrumb-item"><a href="schedule-class.php">Classes</a></li>
                     <li class="breadcrumb-item active">Schedule Class</li>
                  </ul>
                  <div class="card">
                     <div class="card-body">
                        <div class="row">
                           <div class="col-md-12">
                              <div class="about-info">
                                 <form method="POST">
                                    <div><label for="date">Date</label>
                                    <input type="date" name="date" value="<?= $sch['date'];?>" required></div>
                                    <br>
                                    <div><label for="date">Start Time</label>
                                    <input type="time" name="startTime" value="<?= $sch['startTime'];?>" required></div>
                                    <br>
                                    <div><label for="date">End Time</label>
                                    <input type="time" name="endTime" value="<?= $sch['endTime'];?>" required></div>
                                    <br>
                                    <div><label for="date">Course</label>
                                    <select name="course">
                                       <?php foreach($course as $cou):?>
                                          <option value="<?= $cou;?>"><?= $cou;?></option>
                                       <?php endforeach; ?>
                                    </select></div>
                                    <br>
                                    <input type="submit" class="btn btn-primary" name="reschedule" value="Reschedule">
                                    <input type="hidden" name="id" value="<?= $sch['id'];?>">
                                 </form>
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

   <?php foreach($schedule as $sch): ?>
      <div class="modal fade" tabindex="-1" aria-labelledby="deleteSchedule" aria-hidden="true" id="delete-schedule-<?= $sch['id'];?>">
         <div class="modal-dialog">
            <div class="modal-content">
               <div class="modal-header">
                  <div class="modal-title text-center h3">Delete Class</div>
                  <button class="btn btn-danger close" data-dismiss="modal">&times;</button>
               </div>
               <div class="modal-body">
                  <ul class="breadcrumb">
                     <li class="breadcrumb-item"><a href="schedule-class.php">Classes</a></li>
                     <li class="breadcrumb-item active">Delete Class</li>
                  </ul>
                  <div class="card">
                     <div class="card-body">
                        <div class="row">
                           <div class="col-md-12">
                              <div class="about-info">
                                 <h4>Are you sure you want to delete this class?</h4>
                                 <form method="POST" class="d-flex justify-content-between">
                                    <input type="submit" class="btn btn-primary" name="deleteSchedule" value="Yes">
                                    <input type="submit" class="btn btn-danger" data-dismiss="modal" value="No">
                                    <input type="hidden" name="id" value="<?= $sch['id'];?>">
                                 </form>
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


<?php include 'lecturer-footer.php'?>