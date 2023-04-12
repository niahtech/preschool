<form action="" method="post" enctype="multipart/form-data">
<input type="file" name="image" id=""> 
<input type="submit" name="studentdet" id="">
</form>
<?php
if(isset($_POST['studentdet'])){
if(isset($_FILES['image'])){
    print_r($_FILES['image']);
}
}
?>