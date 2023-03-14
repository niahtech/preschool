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

?>
