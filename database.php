
<?php
    define('DB_HOST','localhost');
    define('DB_USER','Grace');
    define('DB_PASS','solution2146');
    define('DB_NAME','new_life_school');

    //create connection
    $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

    //check connection
    if($conn->connect_error){
        die("connection failed").$conn->connect_error;
    }
//    echo 'Connected successfully';

?>

<?php
    session_start();

?>
