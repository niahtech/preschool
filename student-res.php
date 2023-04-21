<?php
include 'body.php';

$id = $_SESSION['id'];
$sql = $db->query("SELECT * FROM bio where Email='$id'");
$result = $sql->fetch_assoc();
?>
<div class="main-wrapper">

   <div class="page-wrapper">
      <div class="content container-fluid">
         <div class="page-header">
            <div class="row align-items-center">
               <div class="col">
                  <h3 class="page-title">Result Checking</h3>
                  <ul class="breadcrumb">

                  </ul>
               </div>
            </div>
         </div>
         <a>Name :<?= $result['FirstName'] .   '  ' . $result['LastName'] ?> </a>
         <br>
         <br>
         <a>Department :<?= $result['department'] ?> </a>
         <br>
         <br>
         <?php
         $courses = "Courses registered : " . '' . $result['courses'];
         echo $courses;
         ?>
         <BR>
         <br>
         <?
         echo "YOUR GPA IS: " . round($gpa, 2);
         ?>
         <a>GPA for the semester:</a>


         <br>
         <br>
         <br>
         <?php
         $sql = $result['courses'];

         $sq = explode(',', $sql);

         ?>

         <br>
         <br>
         <br>
         <div class="row">
            <div class="col-sm-12">
               <div class="card card-table">
                  <div class="card-body">
                     <div class="table-responsive">
                        <form action="print-res.php" method="POST">
                           <table class="table table-hover table-center mb-0">
                              <thead>
                                 <tr>
                                    <th>Course Code</th>
                                    <th>Course Title</th>
                                    <th>Grade</th>
                                    <th>Remark</th>
                                 </tr>
                              </thead>
                              <tbody>
                                 <?php if (!empty($result['department'])) : ?>
                                    <?php
                                    $Department = $result['department'];

                                    $dept = strtolower(str_replace(' ', '', $Department));
                                    $input = $db->query("SELECT courseTitle FROM $dept where classId ='1' and semester ='First'");
                                    $course = mysqli_fetch_all($input);

                                    ?>
                                    <?php if (!empty($result['courses'])) : ?>
                                       <?php for ($i = 0; $i < count($sq); $i++) : $c = $sq[$i];
                                          $grades = $db->query("SELECT $c FROM bio WHERE Email='$id'");

                                          $grade = mysqli_fetch_all($grades);

                                       ?>


                                          <?php if(!($grade == 0)) : ?>
                                             <tr>

                                                <td><?= $sq[$i] ?></td>
                                                <td><?= $course[$i][0] ?></td>
                                                <!-- <td><?= $grade[0][0]; ?></td> -->
                                                <td><input type="number" class="score" name="$grade[]" value=<?= $grade[0][0]; ?> style="width:40px" disabled></td>
                                                <td><input type="text" class="Remark" style="width:30px" disabled></td>

                                             </tr>
                                          <?php endif; ?>

                                       <?php endfor; ?>
                                    <?php endif; ?>
                                 <?php endif; ?>
                              </tbody>
                           </table>
                           <br>
                           <style>
                              @media print {
                                 .no-print {
                                    display: none;
                                 }
                              }
                           </style>
                           <div class="col-auto text-right float-left mx-auto">
                              <a href="print-res.php">
                                 <button type="submit" class="btn btn-outline-primary no-print  mr-2 w-100" onclick="window.print()"><i class="fas fa-plus"></i> Print
                                 </button>
                              </a>
                           </div>
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
<script src="assets/js/jquery-3.6.0.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
<script src="assets/plugins/datatables/datatables.min.js"></script>
<script src="assets/js/script.js"></script>
<script src="myfunction.js"></script>

</body>