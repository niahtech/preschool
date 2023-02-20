<form action="" method="post" enctype="multipart/form-data">
<input type="file" name="image" id=""> 
<input type="submit" name="submit" id="">
</form>
<?php
if(isset($_POST['submit'])){
if(isset($_FILES['image'])){
    print_r($_FILES['image']);
}
}
?>