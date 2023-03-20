<?php 
    include('lecturer-header.php');
    $course = getLecturer($_SESSION['email'], 'course');
    $students = $db->query("SELECT * FROM students");
?>

<style>
    input::-webkit-inner-spin-button, input::-webkit-outer-spin-button{
        -webkit-appearance: none;
    }
</style>

<div class="page-wrapper">
<div class="content container-fluid">
<div class="page-header">
<div class="row">
<div class="col-sm-12">
<h3 class="page-title">Student Results</h3>
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="student-list.php">Student</a></li>
<li class="breadcrumb-item active">Student Results</li>
</ul>
</div>
</div>
</div>
<div class="card">
<div class="card-body">
<div class="row">
<div class="col-md-12">
<div class="about-info">
    <div class="text-center bg-dark text-white"><?= $course;?></div>
    <br>
    <div class="container">
        <div>
            <?php
               if(empty($course)){
                  echo '<h2 style="color:red">Update your profile</h2>';
               }
            ?>
            <form method="POST">
                <table style="width:100%">
                    <thead>
                        <tr>
                            <th>Student Name</td>
                            <th>Student Id</td>
                            <th>Score</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if(!empty($course)): $i = 1;?>
                            <?php while($student = mysqli_fetch_array($students)): $studentCourses = explode(',', $student['courseRegistered'])?>
                                <?php if(in_array($course, $studentCourses)): ?>
                                    <tr>
                                        <td><?= $student['lastName'].' '.$student['firstName'] ?></td>
                                        <td><?= $student['studentId']; ?></td>
                                        <td><input type="number" class="score" name="score[]" style="width:40px" required></td>
                                        <td><input type="text" class="grade" style="width:30px" disabled></td>
                                        <td><input type="hidden" class="unit" style="width:30px" value="<?= $result['unit'];?>"></td>
                                    </tr>
                                <?php endif; $i++;?>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </tbody>
                </table>
                <input type="submit" name="resultUpdate" value="Submit" class="btn btn-warning GPA">
            </form>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>
</div>

<script src="student-result.js"></script>

<?php include('lecturer-footer.php');?>