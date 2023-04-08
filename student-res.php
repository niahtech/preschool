<?php 
session_start();
include 'body.php' ?>
<?php
$id=$_SESSION['id'];
$sql = $db->query("SELECT * FROM bio where Email='$id'");
$result = $sql->fetch_assoc();
?>



<body>
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
            <a>Name :<?=$result['FirstName'].   '  ' . $result['LastName']?> </a>
<br>
<br>
<a>Department :<?=$result['Department']?> </a>
<br>
<br>
<?php
$courses="Courses registered :" . $result['courses']; 
?>


<?php
echo $courses
?>
<br>
<br>
<br>
<?php
$sql=$result['courses'];

$sq =explode(',',$sql);

?>

<br>
<br>
<br>
            <div class="row">
               <div class="col-sm-12">
                  <div class="card card-table">
                     <div class="card-body">
                        <div class="table-responsive">
                        <form action="" method="POST">
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
                                 <?php
                                    $Department=$result['Department'];

                                    $dept = strtolower(str_replace(' ','',$Department));
                                    $input = $db->query("SELECT courseTitle FROM $dept where classId ='1' and semester ='First'");
                                    $course = mysqli_fetch_all($input);
                                    
                                 ?>
                                 <?php for($i=0; $i<count($sq); $i++): $c=$sq[$i]; $grades = $db->query("SELECT $c FROM bio WHERE Email='$id'"); $grade=mysqli_fetch_all($grades);
                                 ?>      
                                 
                                 
                                 <tr>
                                 
                                       <td><?= $sq[$i]?></td>
                                       <td><?=$course[$i][0]?></td>
                                       <td><?= $grade[0][0];?></td>
                                    
                                 </tr>
                                 <?php endfor;?>
                                 </tbody>    
                           </table>
                           
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
</body>

</html>
<?php 
session_start();
include 'libs/connection.inc.php' ?>
<?php
$id=$_SESSION['id'];
$sql = $db->query("SELECT * FROM bio where Email='$id'");
$result = $sql->fetch_assoc();
?>

