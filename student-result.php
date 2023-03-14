<?php 
    include('lecturer-header.php');
    $bookId = $_POST['bookId'];
    $sql = $db->query("SELECT * FROM courses WHERE level IN (SELECT * FROM(
        SELECT level FROM courses GROUP BY level HAVING COUNT(level) > 1)AS a)");
    $result = $sql->fetch_assoc();
?>

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
    <?php
        // foreach($result as $sum) {
            echo($result['courseCode']);
        // }
    ?>

</div>
</div>
</div>
</div>
</div>
</div>

<?php include('lecturer-footer.php');?>