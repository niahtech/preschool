<?php 
    include('lecturer-header.php');
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
<li class="breadcrumb-item"><a href="#">Student</a></li>
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
    <div class="text-center bg-dark text-white">100Level</div>
    <br>
    <div class="d-flex justify-content-between container">
        <div>
            <div class="text-center bg-dark text-white">First Semester</div>
            <br>
            <?php
                $sql = $db->query("SELECT * FROM $department WHERE classId = '1' AND semester = 'First'");
            ?>
            <form method="POST">
                <?php while($result = $sql->fetch_assoc()): ?>
                    <label for="course"><?= $result['courseCode'];?></label>
                    <input type="number" class="score" name="me" style="width:40px" required>
                    <input type="text" class="grade" style="width:30px" disabled>
                    <input type="hidden" class="unit" style="width:30px" value="<?= $result['unit'];?>">
                    <br>
                <?php endwhile; ?>
                <input type="button" name="GPA1" value="Submit" class="btn btn-warning GPA">
            </form>
            <p style="display:flex; align-items:center">Current GPA: <input type="number" style="width:50px; border:none" class="currentGPA"></p>
            <p style="display:flex; align-items:center">Cummulative GPA: <input type="number" style="width:50px; border:none" class="cummulativeGPA"></p>
        </div>
        <div>
            <div class="text-center bg-dark text-white">Second Semester</div>
            <br>
            <?php
                $sql = $db->query("SELECT * FROM $department WHERE classId = '1' AND semester = 'Second'");
            ?>
            <form method="POST">
                <?php while($result = $sql->fetch_assoc()): ?>
                    <label for="course"><?= $result['courseCode'];?></label>
                    <input type="number" class="score" style="width:40px" required>
                    <input type="text" class="grade" style="width:30px" disabled>
                    <br>
                <?php endwhile; ?>
                <input type="button" name="GPA2"  value="Submit" class="btn btn-warning">
            </form>
            <p>Current GPA: </p>
            <P>Cummulative GPA: </P>
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