
<?php
function Alert()
 {
    global $report, $count;
    $bg = ($count == 0) ? 'alert-success' : 'alert-danger';
    return '<div class="alert ' . $bg . ' alert-dismissible" style="position:fixed; top:10px; right:10px; z-index:100000">
        <i class="icon fa fa-ban"></i>&nbsp;&nbsp;<b>' . $report . ' </b>&nbsp;&nbsp;&nbsp;
        </div>';
  
 }

 function getClass($id)
 {
    global $conn;
    $sql =$conn->query("SELECT * FROM levels where id ='$id' ");
    return mysqli_fetch_array($sql);

 }

 function getDept($id)
 {
    global $conn;
    $sql =$conn->query("SELECT * FROM department where id ='$id' ");
    return mysqli_fetch_array($sql);

 }


 ?>