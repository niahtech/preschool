<?php
include 'body.php';
$id = $_SESSION['id'];
$sql = $db->query("SELECT * FROM bio where Email='$id'");
$result = $sql->fetch_assoc();
function calculateGPA($scores, $units)
{
    $total_units = 0;
    $total_points = 0;
    foreach ($scores as $score) {
        $point = 0;
        if ($score >= 70 && $score <= 100) {
            $point = 5.0;
        } elseif ($score >= 60 && $score <= 69) {
            $point = 4.0;
        } elseif ($score >= 50 && $score <= 59) {
            $point = 3.0;
        } elseif ($score >= 45 && $score <= 49) {
            $point = 2.0;
        } else {
            $point = 0.0;
        }
        $unit = array_shift($units);
        $total_units += $unit;
        $total_points += ($point * $unit);
    }
    $gpa = $total_points / $total_units;
    return $gpa;
    echo " YOUR GPA IS: ".round($gpa,2);
}
