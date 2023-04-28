<?php
include 'libs/connection.inc.php';
$id = $_SESSION['id'];
$sql = $db->query("SELECT * FROM bio where Email='$id'");
$result = $sql->fetch_assoc();





?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>

</head>
<style>
     *{
    /* margin:0; */
     padding:0; 
} 
    .container {
        background-color: rgb(110 110 250 / 0.2);
        width: 60%;
         height: 80%; 
        margin: auto;
        border: 4px solid black;
        border-radius: 12px;
    }

    header {
        /* border: 1px solid blue; */
        height: 10%;
        display: flex;
    }

    .image,
    .schName {
        /* border: 0.5px solid red; */
        width: 50%;
        height: 40px;
    }

    .nextAfterHeader {
        /* border: 2px solid black; */
        height: 20%;
        display: flex;
    }

    .NAH1,
    .NAH2 {
        /* border: 0.5px solid black; */
        width: 50%;
        height: 100%;
        padding-left: 10px;
    }

    .Level {
        /* border: 3px solid; */
        height: 30%;

    }

    .head {
        border: 3px solid black;
        height: 10%;
        margin-top: 2%;
        margin-left: 40px;
        margin-right: 40px;
        text-align: center;
    }

    h2 {
        text-align: center;
        font-size: x-large;
        font-style: italic;

    }



    .FirstSemester,
    .SecondSemester {
        /* border: 2.5px solid red; */
        width: 50%;




    }

    .container2 {
        display: flex;
        height: 80%;
        margin-top: 5px;
    }

    .content1,
    .content2 {
        display: flex;
        justify-content: space-evenly;
    }
    button{
        background-color:black;
        color: beige ;
        margin-bottom:10px;
        margin-left:10px;
        
    }
</style>

<body>
    <div class="container">
        <header>
            <div class="image"></div>
            <div class="schName"></div>

        </header>
        <div class="nextAfterHeader">
            <div class="NAH1">
                <h3>Date Issued:</h3>
                <h3>Full Name:</h3>
                <h3>Student Id:</h3>
                <h3>Department:</h3>
            </div>
            <div class="NAH2">
                <h3>Date of Graduation:</h3>
                <h3>Home Address:</h3>
                <h3>Degree Beg & End:</h3>
                <h3>Grad CGPA:
            </div>

        </div>
        <div class="Level">
            <div class="head">
                100 Level
            </div>
            <div class="container2">
                <div class="FirstSemester">
                    <h2>First Semester</h2>
                    <div class="content1">
                        <h3>Course </h3>
                        <h3>Grade </h3>
                        <h3>Credits</h3>

                    </div>
                </div>
                <div class="SecondSemester">
                    <h2>Second Semester</h2>
                    <div class="content2">
                        <h3>Course </h3>
                        <h3>Grade </h3>
                        <h3>Credits</h3>
                    </div>
                </div>
            </div>
            <div class="Level">
                <div class="head">
                    200 Level
                </div>
                <div class="container2">
                    <div class="FirstSemester">
                        <h2>First Semester</h2>
                        <div class="content1">
                            <h3>Course </h3>
                            <h3>Grade </h3>
                            <h3>Credits</h3>

                        </div>
                    </div>
                    <div class="SecondSemester">
                        <h2>Second Semester</h2>
                        <div class="content2">
                            <h3>Course </h3>
                            <h3>Grade </h3>
                            <h3>Credits</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="Level">
                <div class="head">
                    300 Level
                </div>
                <div class="container2">
                    <div class="FirstSemester">
                        <h2>First Semester</h2>
                        <div class="content1">
                            <h3>Course </h3>
                            <h3>Grade </h3>
                            <h3>Credits</h3>

                        </div>
                    </div>
                    <div class="SecondSemester">
                        <h2>Second Semester</h2>
                        <div class="content2">
                            <h3>Course </h3>
                            <h3>Grade </h3>
                            <h3>Credits</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="Level">
                <div class="head">
                    400 Level
                </div>
                <div class="container2">
                    <div class="FirstSemester">
                        <h2>First Semester</h2>
                        <div class="content1">
                            <h3>Course </h3>
                            <h3>Grade </h3>
                            <h3>Credits</h3>

                        </div>
                    </div>
                    <div class="SecondSemester">
                        <h2>Second Semester</h2>
                        <div class="content2">
                            <h3>Course </h3>
                            <h3>Grade </h3>
                            <h3>Credits</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="Level">
                <div class="head">
                    500 Level
                </div>
                <div class="container2">
                    <div class="FirstSemester">
                        <h2>First Semester</h2>
                        <div class="content1">
                            <h3>Course </h3>
                            <h3>Grade </h3>
                            <h3>Credits</h3>

                        </div>
                    </div>
                    <div class="SecondSemester">
                        <h2>Second Semester</h2>
                        <div class="content2">
                            <h3>Course </h3>
                            <h3>Grade </h3>
                            <h3>Credits</h3>
                        </div>
                    </div>

                </div>
                <footer>
                    <H4>Department H.O.D :</H4>
                </footer>
                <style>

                </style>
            </div>

        </div>
        <div class="col-auto text-right float-left mx-auto">
            <a href="transcript.php">
                <button type="submit" class="btn btn-outline-primary no-print  mr-2 w-100" onclick="window.print()"><i class="fas fa-plus"></i> Print
                </button>
            </a>
        </div>
    </div>




</body>

</html>