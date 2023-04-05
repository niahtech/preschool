<?php


session_start();
include 'libs/connection.inc.php'
?>
<?php
$id=$_SESSION['id'];
$sql = $db->query("SELECT * FROM bio where Email='$id'");
$result = $sql->fetch_assoc();
echo session_id();
?>

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
                                 <?php for($i=0; $i<count($sq); $i++): $c=$sq[$i]; $grades = $db->query("SELECT $c FROM bio WHERE Email='$id'"); $grade=mysqli_fetch_all($grades)?>
                                    <tr>
                                       <td><?= $sq[$i]?></td>
                                       <td><?=$course[$i][0]?></td>
                                       <td><?= $grade[0][0];?></td>
                                    </tr>
                                 <?php endfor;?>
                              </tbody>
                              
                           </table>
                           
                           </form> 

