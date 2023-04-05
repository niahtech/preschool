<?php 
session_start();
include 'libs/connection.inc.php' ?>

<?php
 $id = isset($_SESSION['id']) ? $_SESSION['id']: "it is not set";
 echo $id;
 $students = $db->query("SELECT * FROM bio WHERE Email='$id'") or die($db->error);
 $student = mysqli_fetch_assoc($students);

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
                           <form method="POST">  
                              <div class="row">
                                 <div class="col-12">
                                    <h5 class="form-title"><span>Student Information</span></h5>
                                 </div>
                                 <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                       <label>First Name</label>
                                       <input type="text" class="form-control" name="FirstName" value="<?=$student['FirstName'];?>" required  >
                                       
                                    </div>
                                 </div>
                                 <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                       <label>Last Name</label>
                                       <input type="text" class="form-control" name="LastName" required value="<?=$student['LastName'];?>">
                                       
                                    </div>
                                 </div>
                                 

                                 <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                       <label>Email Address</label>
                                       <input type="text" class="form-control"  name="Email" required value="<?= $student['Email'];?>" >
                                       
                                    </div>
                                 </div>
                                 <div class="col-12 col-sm-6" name="gender">
                                    <div class="form-group">
                                       <label>Date of Birth</label>
                                      
<input type="text" class="form-control" name="DOB" value="<?= $student['DOB'];?>"    required>                               
                                       
                                    </div>
                                    
                                 </div>
                                 <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                       <label>Religion</label>
                                       
                                          <input type="text" class="form-control" name="Religion" value="<?= $student['Religion'];?>" required>
                                          
                                       </div>
                                    
                                 </div>
                                  <div class="col-12 col-sm-6">
                                    
                                       <label>Phone Number</label>
                                       <input type="number" class="form-control" name="PhoneNumber" required value="<?= $student['PhoneNumber'];?>" >
                                       
                                    </div>
                                    
                                 </div>
                                 <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                       <label>Gender</label>
                                       <input type="text" class="form-control" name="Gender"required  value="<?= $student['Gender'];?>" >
                                       
                                    </div>
                                 </div>
                                 <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                       <label>Department</label>
                                       
                                       <input type="text" class="form-control" name="Department" required value="<?= $student['Department'];?>" >  
                                          
                                       
                                       
                                    </div>
                                 </div>
                                 <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                       <label>State</label>
                                       <input type="text" class="form-control"  name="State" value="<?= $student['State'];?>" >                                                  </div>
                                 </div>
                                 <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                       <label>Country</label>
                                       <input type="text" class="form-control" name="Country" required value="<?= $student['Country'];?>" >
                                    </div>
                                 </div>
                                 <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                       <label>Home Address</label>
                                       <input type="text" class="form-control" name="Address" required value="<?= $student['Address'];?>" >
                                       
                                    </div>
                                    
                                 
                                 
                                 
                                 
                                 <div class="col-12">
                                    <button type="submit" class="btn btn-primary" name="submit"  value="submit">Submit</button>
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
<?php 
session_start();
include 'libs/connection.inc.php' ?>

<?php
 $id = isset($_SESSION['id']) ? $_SESSION['id']: "it is not set";
 echo $id;
 $students = $db->query("SELECT * FROM bio WHERE Email='$id'") or die($db->error);
 $student = mysqli_fetch_assoc($students);

?>




<!--  -->