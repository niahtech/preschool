<?php

include 'libs/connection.inc.php';
$email = $_SESSION['email'];

$sql = $db->prepare("SELECT id FROM lecturers WHERE email = ?");
$sql->bind_param("s", $email);
$sql->execute();
$userResult = $sql->get_result();
$user = $userResult->fetch_assoc();
$userId = $user['id'];

$notificationsResult = $db->query("SELECT id FROM notifications WHERE recipient = 'lecturer'");
$notifications = $notificationsResult->fetch_all(MYSQLI_ASSOC);

$readNotiResult = $db->query("SELECT notificationId FROM readnoti WHERE recipientId = '$userId'");
$reads = [];
while ($read = $readNotiResult->fetch_assoc()) {
    $reads[] = $read['notificationId'];
}

$unreadCount = 0;
foreach ($notifications as $notification) {
    $notiId = $notification['id'];
    if (!in_array($notiId, $reads)) {
        $unreadCount++;
        $sql = $db->query("INSERT INTO readnoti (notificationId, recipientId, recipient) VALUES('$notiId', '$userId', 'lecturer')");
    }
}


echo $unreadCount;
?>