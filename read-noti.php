<?php

include 'libs/connection.inc.php';
$currentTime = date("c");
$email = $_SESSION['email'];

$sql = $db->prepare("SELECT id FROM lecturers WHERE email = ?");
$sql->bind_param("s", $email);
$sql->execute();
$userResult = $sql->get_result();
$user = $userResult->fetch_assoc();
$userId = $user['id'];

$notificationsResult = $db->query("SELECT * FROM notifications WHERE recipient = 'lecturer' ORDER BY updatedAt DESC LIMIT 4");
$notifications = $notificationsResult->fetch_all(MYSQLI_ASSOC);

$readNotiResult = $db->query("SELECT notificationId FROM readnoti WHERE recipientId = '$userId'");
$reads = [];
while ($read = $readNotiResult->fetch_assoc()) {
    $reads[] = $read['notificationId'];
}

$unreadCount = 0;
$message = [];
foreach ($notifications as $notification) {
    $notiId = $notification['id'];
    if (!in_array($notiId, $reads)) {
        $unreadCount++;
        $message[] = '<li class="notification-message">
        <a href="#">
        <div class="media">
        <div class="media-body">
        <b><p class="noti-details"><span class="noti-title">' . $notification['message'] . '</span></p>
        <p class="noti-time"><span class="notification-time">' .  timeDifferenceNoti($currentTime, $notification['updatedAt']) . '</span></p></b>
        </div>
        </div>
        </a>
        </li>';
        $sql = $db->query("INSERT INTO readnoti (notificationId, recipientId, recipient) VALUES('$notiId', '$userId', 'lecturer')");
    }
    else{
        $message[] = '<li class="notification-message">
        <a href="#">
        <div class="media">
        <div class="media-body">
        <p class="noti-details"><span class="noti-title">' . $notification['message'] . '</span></p>
        <p class="noti-time"><span class="notification-time">' .  timeDifferenceNoti($currentTime, $notification['updatedAt']) . '</span></p>
        </div>
        </div>
        </a>
        </li>';
    }
}

$response = [
    "result1" => $unreadCount,
    "result2" => $message
];

header('Content-Type: application/json');
echo json_encode($response);
?>