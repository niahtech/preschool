<?php
    function getLecturer($email, $detail)
    {
        global $db;

        $sql = $db->query("SELECT * FROM lecturers WHERE email='$email'");
        $row = mysqli_fetch_array($sql);

        return $row[$detail] ?? NULL;
    }

    function getStudent($email, $detail)
    {
        global $db;

        $sql = $db->query("SELECT * FROM students WHERE email='$email' ");
        $row = mysqli_fetch_array($sql);

        return $row[$detail] ?? NULL;
    }

    function getStudentById($detail, $id) {
        global $db;

        $sql = $db->query("SELECT * FROM students WHERE id='$id' ");
        $row = mysqli_fetch_array($sql);

        return $row[$detail];
    }

    function insertScore(){
        global $db, $course;
        $name = $_GET['name'];
        $students = $db->query("SELECT * FROM students WHERE department='$name'");
        $scores = $_POST['score'];
        $i = 0;
        while($student = mysqli_fetch_array($students)){ 
            $studentCourses = explode(',', $student['courseRegistered']);
            if(in_array($course, $studentCourses)){
                $id = $student['studentId'];
                $sql = "UPDATE students SET $course = ? WHERE studentId = '$id'";
                $stmt = $db->prepare($sql);
                if($stmt){
                    $stmt->bind_param('i', $score);
                    $score = $scores[$i];
                    $stmt->execute();
                }
                else{
                    exit('error: failed to prepare sql query');
                }
                $stmt->close();
            }
            $i++;
        }
    }

    function changeDate($detail){
        $month = ['January','February','March','April','May','June','July','August','September','Octpber','November','December'];
        $dat = explode('-', $detail);
        $index = $dat[1]-1;
        $str = "$dat[2] -$dat[1], $dat[0]";
        $real = str_replace("-$dat[1]", "$month[$index]", $str);

        echo $real;
    }

    function timeDifference($start, $end){
        $difference = strtotime($start) - strtotime($end);

        echo round(abs($difference)/60,2);
    }

    function status($start, $end){
        $currentTime = strtotime(date("c"));
        if(strtotime($start) <= $currentTime && $currentTime < strtotime($end)){
            echo 'Ongoing';
        }
        elseif(strtotime($start) > $currentTime){
            echo 'Upcoming';
        }
        else{
            echo 'Completed';
        }
        echo time();
    }



?>
