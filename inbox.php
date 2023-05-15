<?php
include 'lecturer-header.php';
$notificationsResult = $db->query("SELECT * FROM notifications WHERE recipient = 'lecturer' ORDER BY updatedAt DESC");
$notifications = $notificationsResult->fetch_assoc();
?>


<div class="page-wrapper">
    <div class="content container-fluid">

        <div class="page-header">
            <div class="row">
                <div class="col">
                    <h3 class="page-title">Inbox</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="teacher-dashboard.php">Dashboard</a></li>
                        <li class="breadcrumb-item active">Inbox</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-3 col-md-4">
                <div class="compose-btn">
                    <a href="#" class="btn btn-primary btn-block">
                        All Notifications
                    </a>
                </div>
            </div>
            <div class="col-lg-9 col-md-8">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-inbox table-hover">
                            <thead>
                                <tr>
                                    <th>
                                        S/N
                                    </th>
                                    <th>
                                        Message
                                    </th>
                                    <th>
                                        Date
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i=1; foreach ($notificationsResult as $noti) : ?>
                                    <tr>
                                        <td><?php echo $i; $i++ ?></td>
                                        <td><?= $noti['message']?></td>
                                        <td><?= $noti['updatedAt']?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>


<script src="assets/js/jquery-3.6.0.min.js"></script>

<script src="assets/js/popper.min.js"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<script src="assets/js/script.js"></script>
</body>

<!-- Mirrored from preschool.dreamguystech.com/html-template/inbox.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Oct 2021 11:11:39 GMT -->

</html>