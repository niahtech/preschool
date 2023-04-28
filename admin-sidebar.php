<?php if (isset($report)) {
   echo Alert();
} ?>

<div class="header">
   <div class="header-left">
      <a href="index.html" class="logo">
         <img src="assets/img/logo.png" alt="Logo">
      </a>
      <a href="index.html" class="logo logo-small">
         <img src="assets/img/logo-small.png" alt="Logo" width="30" height="30">
      </a>
   </div>
   <a href="javascript:void(0);" id="toggle_btn">
      <i class="fas fa-align-left"></i>
   </a>
   <!-- <div class="top-nav-search">
      <form>
         <input type="text" class="form-control" placeholder="Search here">
         <button class="btn" type="submit"><i class="fas fa-search"></i></button>
      </form>
   </div> -->
   <a class="mobile_btn" id="mobile_btn">
      <i class="fas fa-bars"></i>
   </a>


   <ul class="nav user-menu">
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#notification">
         Create Notifications
      </button>
      <!-- <li class="nav-item dropdown noti-dropdown">
         <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
            <i class="far fa-bell"></i> <span class="badge badge-pill">3</span>
         </a>
         <div class="dropdown-menu notifications">
            <div class="topnav-dropdown-header">
               <span class="notification-title">Notifications</span>
               <a href="javascript:void(0)" class="clear-noti"> Clear All </a>
            </div>
            <div class="noti-content">
               <ul class="notification-list">
                  <li class="notification-message">
                     <a href="#">
                        <div class="media">
                           <span class="avatar avatar-sm">
                              <img class="avatar-img rounded-circle" alt="User Image" src="assets/img/profiles/avatar-02.jpg">
                           </span>
                           <div class="media-body">
                              <p class="noti-details"><span class="noti-title">Carlson Tech</span> has approved <span class="noti-title">your estimate</span></p>
                              <p class="noti-time"><span class="notification-time">4 mins ago</span></p>
                           </div>
                        </div>
                     </a>
                  </li>
                  <li class="notification-message">
                     <a href="#">
                        <div class="media">
                           <span class="avatar avatar-sm">
                              <img class="avatar-img rounded-circle" alt="User Image" src="assets/img/profiles/avatar-11.jpg">
                           </span>
                           <div class="media-body">
                              <p class="noti-details"><span class="noti-title">International Software Inc</span> has sent you a invoice in the amount of <span class="noti-title">$218</span></p>
                              <p class="noti-time"><span class="notification-time">6 mins ago</span></p>
                           </div>
                        </div>
                     </a>
                  </li>
                  <li class="notification-message">
                     <a href="#">
                        <div class="media">
                           <span class="avatar avatar-sm">
                              <img class="avatar-img rounded-circle" alt="User Image" src="assets/img/profiles/avatar-17.jpg">
                           </span>
                           <div class="media-body">
                              <p class="noti-details"><span class="noti-title">John Hendry</span> sent a cancellation request <span class="noti-title">Apple iPhone XR</span></p>
                              <p class="noti-time"><span class="notification-time">8 mins ago</span></p>
                           </div>
                        </div>
                     </a>
                  </li>
                  <li class="notification-message">
                     <a href="#">
                        <div class="media">
                           <span class="avatar avatar-sm">
                              <img class="avatar-img rounded-circle" alt="User Image" src="assets/img/profiles/avatar-13.jpg">
                           </span>
                           <div class="media-body">
                              <p class="noti-details"><span class="noti-title">Mercury Software Inc</span> added a new product <span class="noti-title">Apple MacBook Pro</span></p>
                              <p class="noti-time"><span class="notification-time">12 mins ago</span></p>
                           </div>
                        </div>
                     </a>
                  </li>
               </ul>
            </div>
            <div class="topnav-dropdown-footer">
               <a href="#">View all Notifications</a>
            </div>
         </div>
      </li>
      <li class="nav-item dropdown has-arrow">
         <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
            <span class="user-img"><img class="rounded-circle" src="assets/img/profiles/avatar-01.jpg" width="31" alt="Ryan Taylor"></span>
         </a>
         <div class="dropdown-menu">
            <div class="user-header">
               <div class="avatar avatar-sm">
                  <img src="assets/img/profiles/avatar-01.jpg" alt="User Image" class="avatar-img rounded-circle">
               </div>
               <div class="user-text">
                  <h6>Ryan Taylor</h6>
                  <p class="text-muted mb-0">Administrator</p>
               </div>
            </div>
            <a class="dropdown-item" href="profile.html">My Profile</a>
            <a class="dropdown-item" href="inbox.html">Inbox</a>
            <a class="dropdown-item" href="login.html">Logout</a>
         </div> -->
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
            <li class="submenu">
               <a href="#"><i class="fas fa-user-graduate"></i> <span> Dashboard</span> <span class="menu-arrow"></span></a>
               <ul>
                  <li><a href="index.php">Admin Dashboard</a></li>
               </ul>
            </li>
            <li class="submenu">
               <a href="#"><i class="fas fa-user-graduate"></i> <span> Students</span> <span class="menu-arrow"></span></a>
               <ul>
                  <li><a href="students.php">Student List</a></li>
               </ul>
            </li>
            <li class="submenu">
               <a href="#"><i class="fas fa-chalkboard-teacher"></i> <span> Teachers</span> <span class="menu-arrow"></span></a>
               <ul>
                  <li><a href="add-teacher.php">Add Teacher</a></li>
                  <li><a href="lecturers.php">Teacher List</a></li>
               </ul>
            </li>
            <li class="submenu">
               <a href="#"><i class="fas fa-building"></i> <span> Departments</span> <span class="menu-arrow"></span></a>
               <ul>
                  <li><a href="department.php">Department List</a></li>
               </ul>
            </li>
            <!-- <li class="menu-title">
               <span>Management</span>
            </li>
            <li class="submenu">
               <a href="#"><i class="fas fa-file-invoice-dollar"></i> <span> Accounts</span> <span class="menu-arrow"></span></a>
               <ul>
                  <li><a href="fees-collections.html">Fees Collection</a></li>
                  <li><a href="expenses.html">Expenses</a></li>
                  <li><a href="salary.html">Salary</a></li>
                  <li><a href="add-fees-collection.html">Add Fees</a></li>
                  <li><a href="add-expenses.html">Add Expenses</a></li>
                  <li><a href="add-salary.html">Add Salary</a></li>
               </ul>
            </li>
            <li>
               <a href="holiday.html"><i class="fas fa-holly-berry"></i> <span>Holiday</span></a>
            </li>
            <li>
               <a href="fees.html"><i class="fas fa-comment-dollar"></i> <span>Fees</span></a>
            </li>
            <li>
               <a href="event.php"><i class="fas fa-calendar-day"></i> <span>Events</span></a>
            </li>
            <li class="menu-title">
               <span>Pages</span>
            </li>
            <li class="submenu">
               <a href="#"><i class="fas fa-shield-alt"></i> <span> Authentication </span> <span class="menu-arrow"></span></a>
               <ul>
                  <li><a href="login.html">Login</a></li>
                  <li><a href="register.html">Register</a></li>
                  <li><a href="forgot-password.html">Forgot Password</a></li>
                  <li><a href="error-404.html">Error Page</a></li>
               </ul>
            </li>
            <li>
               <a href="blank-page.html"><i class="fas fa-file"></i> <span>Blank Page</span></a>
            </li>
            <li class="menu-title">
               <span>Others</span>
            </li>
            <li>
               <a href="sports.html"><i class="fas fa-baseball-ball"></i> <span>Sports</span></a>
            </li>
            <li>
               <a href="hostel.html"><i class="fas fa-hotel"></i> <span>Hostel</span></a>
            </li>
            <li>
               <a href="transport.html"><i class="fas fa-bus"></i> <span>Transport</span></a>
            </li>
            <li class="menu-title">
               <span>UI Interface</span>
            </li>
            <li>
               <a href="components.html"><i class="fas fa-vector-square"></i> <span>Components</span></a>
            </li>
            <li class="submenu">
               <a href="#"><i class="fas fa-columns"></i> <span> Forms </span> <span class="menu-arrow"></span></a>
               <ul>
                  <li><a href="form-basic-inputs.html">Basic Inputs </a></li>
                  <li><a href="form-input-groups.html">Input Groups </a></li>
                  <li><a href="form-horizontal.html">Horizontal Form </a></li>
                  <li><a href="form-vertical.html"> Vertical Form </a></li>
                  <li><a href="form-mask.html"> Form Mask </a></li>
                  <li><a href="form-validation.html"> Form Validation </a></li>
               </ul>
            </li>
            <li class="submenu">
               <a href="#"><i class="fas fa-table"></i> <span> Tables </span> <span class="menu-arrow"></span></a>
               <ul>
                  <li><a href="tables-basic.html">Basic Tables </a></li>
                  <li><a href="data-tables.html">Data Table </a></li>
               </ul>
            </li>
            <li class="submenu">
               <a href="javascript:void(0);"><i class="fas fa-code"></i> <span>Multi Level</span> <span class="menu-arrow"></span></a>
               <ul>
                  <li class="submenu">
                     <a href="javascript:void(0);"> <span>Level 1</span> <span class="menu-arrow"></span></a>
                     <ul>
                        <li><a href="javascript:void(0);"><span>Level 2</span></a></li>
                        <li class="submenu">
                           <a href="javascript:void(0);"> <span> Level 2</span> <span class="menu-arrow"></span></a>
                           <ul>
                              <li><a href="javascript:void(0);">Level 3</a></li>
                              <li><a href="javascript:void(0);">Level 3</a></li>
                           </ul>
                        </li>
                        <li><a href="javascript:void(0);"> <span>Level 2</span></a></li>
                     </ul>
                  </li>
                  <li>
                     <a href="javascript:void(0);"> <span>Level 1</span></a>
                  </li>
               </ul>
            </li>
         </ul> -->
      </div>
   </div>
</div>

<!-- Modal -->
<div class="modal fade" id="notification" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
   <?php
   $sql = $db->query("SELECT * FROM notifications");
   ?>

   <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalCenterTitle">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body">
            <div class="noti-content">
               <!-- <ul class="notification-list">
                  <?php while ($result = $sql->fetch_assoc()) { ?>
                     <li class="notification-message">
                        <a href="#">
                           <div class="media flex-right">
                              <span class="avatar avatar-sm">
                                 <img class="avatar-img rounded-circle" alt="User Image" src="assets/img/profiles/avatar-02.jpg">
                              </span>
                              <div class="media-body">
                                 <p class="noti-details"><span class="noti-title"><?= $result['message'] ?></span></p>

                                 <p class="noti-time"><span class="notification-time">4 mins ago</span></p>
                                 <div class="actions text-right">
                                    <a href="#" class="btn btn-sm bg-success-light mr-2">
                                       <i class="fas fa-pen"></i>
                                    </a>
                                 </div>
                              </div>
                           </div>
                        </a>
                     </li>
                  <?php }  ?> -->

            </div>
         </div>


         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Create Notifications</h5>
         </div>
         <div class="modal-body">
            <form method="POST">
               <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Recipient:</label>
                  <div class="form-check form-check-inline">
                     <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="student" name="recipient">
                     <label class="form-check-label" for="inlineCheckbox1">Student</label>
                  </div>
                  <div class="form-check form-check-inline">
                     <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="lecturer" name="recipient">
                     <label class="form-check-label" for="inlineCheckbox2">Lecturer</label>
                  </div>
               </div>
               <div class="form-group">
                  <label for="message-text" class="col-form-label">Message:</label>
                  <textarea class="form-control" id="message-text" name="message"></textarea>
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" name="notifications" class="btn btn-primary">Send message</button>
               </div>
            </form>
         </div>
      </div>
   </div>
</div>