<?php
include 'libs/connection.inc.php';
ob_clean();
ob_start();
if (!isset($_SESSION['email'])) {
    header('Location: login.php');
}

$notifications =  $db->query("SELECT * FROM notifications WHERE recipient = 'lecturer' ORDER BY createdAt DESC LIMIT 4");
$currentTime = date("c");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Preskool - Dashboard</title>

    <link rel="shortcut icon" href="assets/img/favicon.png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,600;0,700;1,400&amp;display=swap">

    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

    <link rel="stylesheet" href="assets/plugins/simple-calendar/simple-calendar.css">

    <link rel="stylesheet" href="assets/css/style.css">
    <style>
        input::-webkit-inner-spin-button,
        input::-webkit-outer-spin-button {
            -webkit-appearance: none;
        }
    </style>
</head>

<body>

    <div class="main-wrapper">

        <div class="header">

            <div class="header-left">
                <a href="teacher-dashboard.php" class="logo">
                    <img src="assets/img/logo.png" alt="Logo">
                </a>
                <a href="teacher-dashboard.php" class="logo logo-small">
                    <img src="assets/img/logo-small.png" alt="Logo" width="30" height="30">
                </a>
            </div>

            <a href="javascript:void(0);" id="toggle_btn">
                <i class="fas fa-align-left"></i>
            </a>

            <div class="top-nav-search">
                <form>
                    <input type="text" class="form-control" placeholder="Search here">
                    <button class="btn" type="submit"><i class="fas fa-search"></i></button>
                </form>
            </div>


            <a class="mobile_btn" id="mobile_btn">
                <i class="fas fa-bars"></i>
            </a>


            <ul class="nav user-menu">

                <li class="nav-item dropdown noti-dropdown">
                    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                        <i class="far fa-bell"></i><!-- <span class="badge badge-pill">3</span> -->
                    </a>
                    <div class="dropdown-menu notifications">
                        <div class="topnav-dropdown-header">
                            <span class="notification-title">Notifications</span>
                            <!-- <a href="javascript:void(0)" class="clear-noti"> Clear All </a> -->
                        </div>
                        <div class="noti-content">
                            <ul class="notification-list">
                                <?php foreach($notifications as $notification): ?>
                                <li class="notification-message">
                                    <a href="#">
                                        <div class="media">
                                            <div class="media-body">
                                                <p class="noti-details"><span class="noti-title"><?= $notification['message']?></span></p>
                                                <p class="noti-time"><span class="notification-time"><?php timeDifferenceNoti($currentTime, $notification['updatedAt']);?></span></p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        <div class="topnav-dropdown-footer">
                            <!-- <a href="#">View all Notifications</a> -->
                        </div>
                    </div>
                </li>


                <li class="nav-item dropdown has-arrow">
                    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                        <span class="user-img"><img class="rounded-circle" src="lecturer-image/<?= getLecturer($_SESSION['email'], 'image'); ?>" width="31" height="31" alt="<?= getLecturer($_SESSION['email'], 'name'); ?>"></span>
                    </a>
                    <div class="dropdown-menu">
                        <div class="user-header">
                            <div class="avatar avatar-sm">
                                <img src="lecturer-image/<?= getLecturer($_SESSION['email'], 'image'); ?>" width="31" height="31" alt="<?= getLecturer($_SESSION['email'], 'name'); ?>" class="avatar-img rounded-circle">
                            </div>
                            <div class="user-text">
                                <h6><?= getLecturer($_SESSION['email'], 'name'); ?></h6>
                                <p class="text-muted mb-0">Lecturer</p>
                            </div>
                        </div>
                        <a class="dropdown-item" href="teacher-details.php">My Profile</a>
                        <!-- <a class="dropdown-item" href="inbox.html">Inbox</a> -->
                        <a class="dropdown-item" href="logout.php">Logout</a>
                    </div>
                </li>

            </ul>

        </div>


        <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                        <li class="menu-title">
                            <span>Main Menu</span>
                        </li>
                        <li class="submenu active">
                            <a href="#"><i class="fas fa-user-graduate"></i> <span> Dashboard</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="teacher-dashboard.php" class="active">Lecturer Dashboard</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fas fa-user-graduate"></i> <span> Students</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="student-list.php">Student List</a></li>
                                <li><a href="student-result.php">Student Result</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fas fa-chalkboard-teacher"></i> <span> Lecturers</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="teacher-details.php">Lecturer View</a></li>
                                <li><a href="edit-teacher.php">Lecturer Edit</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fas fa-book-reader"></i> <span> Classes</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="schedule-class.php">Schedule Class</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>