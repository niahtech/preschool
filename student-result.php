<?php 
    include('lecturer-header.php');
    $course = getLecturer($_SESSION['email'], 'course');
    $courses = explode(',', $course);
    $students = $db->query("SELECT * FROM bio");
    $departments = $db->query("SELECT * FROM departments ORDER BY name");
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
    <div class="text-center bg-dark text-white"></div>
    <br>
    <div class="container">
        <div>
            <?php
               if(empty($course)){
                  echo '<h2 style="color:red">Update your profile</h2>';
               }
            ?>
            <div class="accordion accordion-flush" id="accordionFlushExample">
                <?php for($i=0; $i<count($courses); $i++): ?>
                <div class="accordion-item" style="width: 100%;">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed bg-dark text-white" type="button" style="width: 100%;" data-toggle="collapse" data-target="#<?= $courses[$i];?>" aria-expanded="false" aria-controls="flush-collapseOne">
                            <?= $courses[$i];?>
                        </button>
                    </h2>
                    <div id="<?= $courses[$i];?>" class="accordion-collapse collapse" data-parent="#accordionFlushExample">
                        <div class="accordion-body" style="width:100%">
                            <?php foreach($departments as $dept):
                                $deptName = strtolower(str_replace(' ','',$dept['name']));
                                $sql = $db->query("SELECT courseCode from $deptName"); ?>
                                <?php while($result = $sql->fetch_assoc()): ?>
                                    <?php if(in_array($courses[$i], $result)): ?>
                                        <a href="result.php?name=<?= $dept['name']?>&course=<?= $courses[$i]?>"><?= $dept['name']?></a>
                                        <br>
                                    <?php endif; ?>
                                <?php endwhile; ?>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
                <?php endfor; ?>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>
</div>

<?php include('lecturer-footer.php');?>