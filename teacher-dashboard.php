<?php
include 'lecturer-header.php';
$today = explode('T', date("c"));
$tod = $today[0];
$courses = getLecturer($_SESSION['email'], 'course');
$course = explode(',', $courses);
$schedule = $db->query("SELECT * FROM schedule WHERE date='$tod' AND course IN (" . implode(', ', array_map('intval', $course)) . ") ORDER BY startTime");
$schedules = mysqli_fetch_all($schedule);
$sql = $db->query("SELECT id FROM bio");
$student = mysqli_fetch_all($sql);
?>


<div class="page-wrapper">
   <div class="content container-fluid">

      <div class="page-header">
         <div class="row">
            <div class="col-sm-12">
               <h3 class="page-title">Welcome <?= getLecturer($_SESSION['email'], 'name'); ?>!</h3>
               <ul class="breadcrumb">
                  <li class="breadcrumb-item"><a href="teacher-dashboard.php">Dashboard</a></li>
                  <li class="breadcrumb-item active">Lecturer Dashboard</li>
               </ul>
            </div>
         </div>
      </div>


      <div class="row">
         <div class="col-xl-4 col-sm-6 col-12 d-flex">
            <div class="card bg-five w-100">
               <div class="card-body">
                  <div class="db-widgets d-flex justify-content-between align-items-center">
                     <div class="db-icon">
                        <i class="fas fa-chalkboard"></i>
                     </div>
                     <div class="db-info">
                        <h3><span class="completed"></span>/<span class="totalClass"><?= count($schedules) ?></span></h3>
                        <h6>Total Classes</h6>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-xl-4 col-sm-6 col-12 d-flex">
            <div class="card bg-six w-100">
               <div class="card-body">
                  <div class="db-widgets d-flex justify-content-between align-items-center">
                     <div class="db-icon">
                        <i class="fas fa-user-graduate"></i>
                     </div>
                     <div class="db-info">
                        <h3><?= count($student) ?></h3>
                        <h6>Total Students</h6>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-xl-4 col-sm-6 col-12 d-flex">
            <div class="card bg-eight w-100">
               <div class="card-body">
                  <div class="db-widgets d-flex justify-content-between align-items-center">
                     <div class="db-icon">
                        <i class="fas fa-clock"></i>
                     </div>
                     <div class="db-info">
                        <h3> <span class="completedHour"></span>/<span class="totalHours"></span></h3>
                        <h6>Total Hours</h6>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>


      <div class="row">
         <div class="col-12 col-lg-12 col-xl-9">
            <div class="row">
               <div class="col-12 col-lg-8 col-xl-8 d-flex">
                  <div class="card flex-fill">
                     <div class="card-header">
                        <div class="row align-items-center">
                           <div class="col-6">
                              <h5 class="card-title">Today's Lesson</h5>
                           </div>
                           <div class="col-6">
                              <span class="float-right view-link"><a href="schedule-class.php">View All Scheduled Classes</a></span>
                           </div>
                        </div>
                     </div>
                     <div class="pt-3 pb-3">
                        <div class="table-responsive lesson">
                           <table class="table table-center">
                              <tbody>
                                 <?php foreach ($schedule as $sch) : ?>
                                    <tr>
                                       <td>
                                          <div class="date">
                                             <b><?= changeDate($sch['date']) ?><div class="day" style="display:inline"><?= changeDate($sch['date']) ?></div></b>
                                             <p><span class="startTime"><?= $sch['startTime'] ?></span> - <span class="endTime"><?= $sch['endTime'] ?></span> (<span class="minutes"><?= timeDifference($sch['startTime'], $sch['endTime']); ?></span> minutes)</p>
                                          </div>
                                       </td>
                                       <td>
                                          <div class="date">
                                             <b><?= $sch['course'] ?></b>
                                          </div>
                                       </td>
                                       <td><a href="#" class="status" data-status></a></td>
                                       <td><button class="btn btn-info" data-toggle="modal" data-target="#edit-schedule-<?= $sch['id']; ?>">Reschedule</button></td>
                                    </tr>
                                 <?php endforeach; ?>
                              </tbody>
                           </table>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-12 col-lg-4 col-xl-4 d-flex">
                  <div class="card flex-fill">
                     <div class="card-header">
                        <div class="row align-items-center">
                           <div class="col-12">
                              <h5 class="card-title">Daily Progress</h5>
                           </div>
                        </div>
                     </div>
                     <div class="dash-widget">
                        <div class="circle-bar circle-bar1">
                           <div class="circle-graph1 prog" data-percent="0">
                              <b><span class="perc"></span></b>
                           </div>
                        </div>
                        <div class="dash-info">
                           <h6>Lesson Progressed</h6>
                           <h4><span class="complete"></span> <span>/ <?= count($schedules) ?></span></h4>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-12 col-lg-6 col-xl-8 d-flex">
                  <div class="card flex-fill">
                     <div class="card-header">
                        <div class="row align-items-center">
                           <div class="col-6">
                              <h5 class="card-title">Teaching Activity</h5>
                           </div>
                           <div class="col-6">
                              <ul class="list-inline-group text-right mb-0 pl-0">
                                 <li class="list-inline-item">
                                    <div class="form-group mb-0 amount-spent-select">
                                       <select class="form-control form-control-sm period">
                                          <option value="daily">Daily</option>
                                          <option value="weekly">Weekly</option>
                                          <option value="monthly">Monthly</option>
                                       </select>
                                    </div>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <div class="card-body">
                        <div id="apexcharts-area"></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-12 col-lg-12 col-xl-3 d-flex">
            <div class="card flex-fill">
               <div class="card-header">
                  <div class="row align-items-center">
                     <div class="col-12">
                        <h5 class="card-title">Calendar</h5>
                     </div>
                  </div>
               </div>
               <div class="card-body">
                  <div id="calendar-doctor" class="calendar-container"></div>
                  <div class="calendar-info calendar-info1">
                     <div class="calendar-details">
                        <p>09 am</p>
                        <h6 class="calendar-blue d-flex justify-content-between align-items-center">Fermentum <span>09am - 10pm</span></h6>
                     </div>
                     <div class="calendar-details">
                        <p>10 am</p>
                        <h6 class="calendar-violet d-flex justify-content-between align-items-center">Pharetra et <span>10am - 11am</span></h6>
                     </div>
                     <div class="calendar-details">
                        <p>11 am</p>
                        <h6 class="calendar-red d-flex justify-content-between align-items-center">Break <span>11am - 11.30am</span></h6>
                     </div>
                     <div class="calendar-details">
                        <p>12 pm</p>
                        <h6 class="calendar-orange d-flex justify-content-between align-items-center">Massa <span>11.30am - 12.00pm</span></h6>
                     </div>
                     <div class="calendar-details">
                        <p>09 am</p>
                        <h6 class="calendar-blue d-flex justify-content-between align-items-center">Fermentum <span>09am - 10pm</span></h6>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>

   </div>
   <?php
   $dates = $db->query("SELECT date from schedule WHERE course IN(" . implode(', ', array_map('intval', $course)) . ") ORDER BY date ASC");
   $result = mysqli_fetch_all($dates);


   for ($i = 0; $i < count($result); $i++) {
      $date = $result[$i][0];
      $dateTime = new DateTime($date);


      // selecting the dates for each day
      $dayName[] = $dateTime->format('D');
      $dayCount = array_count_values($dayName);


      // selecting dates for each week
      $weekName[] = $dateTime->format('W');
      $weekCount = array_count_values($weekName);


      // selecting the dates for each month
      $monthName[] = $dateTime->format('M');
      $monthCount = array_count_values($monthName);
   }
   // daily chart data
   foreach ($dayCount as $index => $item) {
      $daily[] = $index;
      $day[] = $item;
   }
   // weekly chart data
   foreach ($weekCount as $index => $item) {
      $weekly[] = "week_$index";
      $week[] = $item;
   }
   // monthly chart data
   foreach ($monthCount as $index => $item) {
      $monthly[] = $index;
      $month[] = $item;
   }

   ?>


   <?php include('lecturer-footer.php'); ?>

   <?php foreach ($schedule as $sch) : ?>
      <div class="modal fade" tabindex="-1" aria-labelledby="scheduleClass" aria-hidden="true" id="edit-schedule-<?= $sch['id']; ?>">
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
                                       <input type="date" name="date" value="<?= $sch['date']; ?>" required>
                                    </div>
                                    <br>
                                    <div><label for="date">Start Time</label>
                                       <input type="time" name="startTime" value="<?= $sch['startTime']; ?>" required>
                                    </div>
                                    <br>
                                    <div><label for="date">End Time</label>
                                       <input type="time" name="endTime" value="<?= $sch['endTime']; ?>" required>
                                    </div>
                                    <br>
                                    <div><label for="date">Course</label>
                                       <select name="course">
                                          <?php foreach ($course as $cou) : ?>
                                             <option value="<?= $cou; ?>"><?= $cou; ?></option>
                                          <?php endforeach; ?>
                                       </select>
                                    </div>
                                    <br>
                                    <input type="submit" class="btn btn-primary" name="reschedule" value="Reschedule">
                                    <input type="hidden" name="id" value="<?= $sch['id']; ?>">
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


<script src="change-date.js"></script>
<script>
   $(document).ready(function() {

      // Area chart

      if ($('#apexcharts-area').length > 0) {
         var options = {
            chart: {
               height: 350,
               type: "area",
               toolbar: {
                  show: false
               },
            },
            dataLabels: {
               enabled: false
            },
            stroke: {
               curve: "smooth"
            },
            series: [{
               name: "Classes",
               color: '#FFBC53',
               data: <?php echo json_encode($day) ?>
            }],
            xaxis: {
               categories: <?php echo json_encode($daily) ?>
            }
         }
         var chart = new ApexCharts(
            document.querySelector("#apexcharts-area"),
            options
         );
         chart.render();
      }

      const period = document.querySelector(".period");

      function pre() {
         if (period.value == 'daily') {
            chart.updateOptions({
               series: [{
                  data: <?php echo json_encode($day) ?>
               }],
               xaxis: {
                  categories: <?php echo json_encode($daily) ?>
               }
            })
         } else if (period.value == 'weekly') {
            chart.updateOptions({
               series: [{
                  data: <?php echo json_encode($week) ?>
               }],
               xaxis: {
                  categories: <?php echo json_encode($weekly) ?>
               }
            })
         } else {
            chart.updateOptions({
               series: [{
                  data: <?php echo json_encode($month) ?>
               }],
               xaxis: {
                  categories: <?php echo json_encode($monthly) ?>
               }
            })
         }
      }
      setInterval(pre, 1000)

   });
</script>