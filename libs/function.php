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
        global $students, $db, $course;
        $students = $db->query("SELECT * FROM students");
        $scores = $_POST['score'];

        while($student = mysqli_fetch_array($students)){ 
            $studentCourses = explode(',', $student['courseRegistered']);
            if(in_array($course, $studentCourses)){
                $id = $student['studentId'];
                $sql = "UPDATE students SET $course = ? WHERE studentId = '$id'";
                $stmt = $db->prepare($sql);
                if($stmt){
                    $stmt->bind_param('i', $score);
                    foreach($scores as $index => $score){
                        $score = $scores[$index];
                        $stmt->execute();
                    }
                }
                else{
                    exit('error: failed to prepare sql query');
                }
                $stmt->close();
            }
        }
    }


?>
