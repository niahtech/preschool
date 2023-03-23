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
        global $students, $db, $course, $scores, $student, $id;
        $students = $db->query("SELECT * FROM students");
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


?>
