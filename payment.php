<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
  <title>Preskool - Payment</title>

  <link rel="shortcut icon" href="assets/img/favicon.png">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,600;0,700;1,400&amp;display=swap">

  <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">

  <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
  <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

  <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>
  <?= isset($payed) ? 'd-block' : '' ?>"
  <div class="main-wrapper">
    <?php include 'body.php' ?>
    <div class="page-wrapper">
      <div class="content container-fluid">
        <div class="page-header">
          <div class="row align-items-center">
            <div class="col">
              <h3 class="page-title">Edit Subject</h3>
              <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="subjects.html">Subject</a></li>
                <li class="breadcrumb-item active">Edit Subject</li>
              </ul>
            </div>
          </div>
        </div>
        <?php
        $id = $_SESSION['id'];
        $data = $db->query("SELECT * FROM bio WHERE email='$id'");
        $result = $data->fetch_assoc();
        ?>
        <div class="card text-center">
          <!-- <div class="card-header">
            <ul class="nav nav-tabs nav-tabs-top card-header-tabs">
             
              <li class="nav-item">
                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">View Payment Reciept</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Student Ledger</a>
              </li>
            </ul>
          </div> -->



          <div class="card-body">
            <ul class="nav nav-tabs nav-tabs-top">
              <li class="nav-item">
                <a class="nav-link active" id="invoice-tab" data-toggle="tab" href="#generateinvoice" role="tab" aria-controls="invoice">Generate Invoice Details</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="viewinvoice-tab" data-toggle="tab" href="#viewinvoice" role="tab" aria-controls="invoice">View Invoice Generated</a>
              </li>
              <li class="nav-item"><a class="nav-link" href="#top-tab3" data-toggle="tab">Messages</a></li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane show active" id="generateinvoice">
                <div class="card-body invoice">
                  <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                      <div class="card">
                        <div class="card-header bg-info">
                          <h4 class="text-white text-left"><i class="fa fa-list" aria-hidden="true"></i> Generate Invoice Details</h4>
                        </div>
                        <div class="card">
                          <div class="card-header">
                            <h1 class="card-title text-left">Generate Invoice</h1>
                          </div>
                          <div class="card-body">
                            <div class="row">
                              <div class="col-sm">
                                <form method="POST" class="needs-validation" novalidate>
                                  <div class="form-row">
                                    <div class="col-md-4 mb-3">
                                      <label for="validationCustom01">Payment Type</label>
                                      <div class="form-group">
                                        <select name="paymenttype" class="custom-select paymenttype" required>
                                          <option value="" selected disabled>Select your payment Type...</option>
                                          <?php $sql = $db->query("SELECT * FROM paymenttype");
                                          while ($payment = mysqli_fetch_array($sql)) {
                                          ?>
                                            <option value="<?= $payment['name'] ?>"><?= $payment['name'] ?></option>
                                          <?php } ?>
                                        </select>
                                        <div class="invalid-feedback">Must Make a selection</div>
                                      </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                      <?php
                                      $sql = $db->query("SELECT * FROM level");
                                      ?>
                                      <label for="validationCustom02">Level</label>
                                      <select name="level" class="custom-select level" required>
                                        <option value="">Select Level</option>

                                        <option value="<?= $result['level']; ?>"><?= $result['level']; ?></option>
                                      </select>
                                      <div class="invalid-feedback">Must Make a selection</div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                      <label for="validationCustom02">Student Status</label>
                                      <select name="status" class="custom-select status" required>
                                        <option value="">Select Status</option>
                                        <option value="Fresher">Fresher</option>
                                        <option value="2">Returning</option>

                                      </select>
                                      <div class="invalid-feedback">Must Make a selection</div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                      <label for="validationCustom02">Session</label>
                                      <select name="session" class="custom-select session" required>
                                        <option value="" selected disabled>Select your session...</option>
                                        <?php $sql = $db->query("SELECT * FROM session");
                                        while ($session = mysqli_fetch_array($sql)) {
                                        ?>
                                          <option value="<?= $session['name'] ?>"><?= $session['name'] ?></option>
                                        <?php } ?>
                                      </select>
                                      <div class="invalid-feedback">Must Make a selection</div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                      <label for="validationCustom02">Semester</label>
                                      <select name="semester" class="custom-select semester" required>
                                        <option value="">Select Semester</option>
                                        <option value="1">1st Semester</option>
                                        <option value="2">2nd Semester</option>
                                        <option value="3">1st and 2nd Semester</option>
                                      </select>
                                      <div class="invalid-feedback">Must Make a selection</div>
                                    </div>
                                  </div>
                              </div>
                            </div>
                          </div>
                          <table class="table table-bordered">
                            <thead>
                              <tr>
                                <th scope="col"></th>
                                <th scope="col" class="text-left">Total</th>
                                <th scope="col" class="text-left"><input type="number" name="total" class="total" style="border: none" readonly></th>
                              </tr>
                            </thead>
                            <tbody>

                            </tbody>
                          </table>
                          <?php
                          $studentId = $result['id'];
                          $level = $result['level'];
                          if($level==="100 level"){
                            $payDetails = $db->query("SELECT * FROM payment WHERE studentId='$studentId'");
                          }
                          elseif($level==="200 level"){
                            $payDetails = $db->query("SELECT * FROM payment200 WHERE studentId='$studentId'");
          
                          }
                          elseif($level==="300 level"){
                            $payDetails = $db->query("SELECT * FROM payment300 WHERE studentId='$studentId'");
                          }
                          elseif($level==="400 level"){
                            $payDetails = $db->query("SELECT * FROM paymen400 WHERE studentId='$studentId'");
                          }
                          elseif($level==="500 level"){
                            $payDetails = $db->query("SELECT * FROM payment500 WHERE studentId='$studentId'");
                          }
                          
                          $reviewPayDetails = $payDetails->fetch_assoc();
                          ?>
                          <input name="paymentStatus" class="paymentStatus" type="hidden" value="<?= $reviewPayDetails['schoolFees'] ?>">
                          <input name="sessionPaid" class="sessionPaid" type="hidden" value="<?= $reviewPayDetails['session'] ?>">
                          <button class="btn btn-primary makePayment" type="submit" name="makePayment">Make Payment</button>
                          </form>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="viewinvoice">
                <div class="card-header bg-info">
                  <h4 class="text-white text-left"><i class="fa fa-list" aria-hidden="true"></i> View My Generated Invoice(s)</h4>
                </div>
                <div class="card">
                  <div class="card-header">
                    <h1 class="card-title text-left">Invoice Information</h1>
                  </div>
                <div class="row">
                  <div class="col-sm-12">
                    <div class="card">
                      <div class="card-body">
                        <div class="table-responsive">
                          <table class="datatable table table-stripped">
                            <thead>
                              <tr>
                                <th>Action</th>
                                <th>S/N</th>
                                <th>Transaction Number</th>
                                <th>Payment Type</th>
                                <th>Session</th>
                                <th>Semester</th>
                                <th>Level</th>
                                <th>Amount</th>
                                <th>Payment Status</th>
                              </tr>
                            </thead>
                            <tbody>
                              <?php
                              $studentId = $result['id'];
                              $payDetails = $db->query("SELECT * FROM payment WHERE studentId='$studentId'");
                              ?>
                              <?php 
                              $x=0;
                              while($reviewPayDetails = $payDetails->fetch_assoc()):?>
                              <tr>
                                <td class="bg-info"><i class="fa fa-print" aria-hidden="true"></i></td>
                                <td><?php echo $x=$x+1; ?></td>
                                <td><?=$reviewPayDetails["paymentId"]?></td>
                                <td><?=$reviewPayDetails["currentPaymentType"]?></td>
                                <td><?=$reviewPayDetails["session"]?></td>
                                <td><?=$reviewPayDetails["semester"]?></td>
                                <td><?=$reviewPayDetails["level"]?></td>
                                <td><?=$reviewPayDetails["amount"]?></td>
                                <td>Paid</td>
                              </tr>
                              <?php endwhile ?>
                              <?php
                              $studentId = $result['id'];
                              $payDetails = $db->query("SELECT * FROM payment200 WHERE studentId='$studentId'");
                              ?>
                              <?php 
                              $x=0;
                              while($reviewPayDetails = $payDetails->fetch_assoc()):?>
                              <tr>
                                <td class="bg-info"><i class="fa fa-print" aria-hidden="true"></i></td>
                                <td><?php echo $x=$x+1; ?></td>
                                <td><?=$reviewPayDetails["paymentId"]?></td>
                                <td><?=$reviewPayDetails["currentPaymentType"]?></td>
                                <td><?=$reviewPayDetails["session"]?></td>
                                <td><?=$reviewPayDetails["semester"]?></td>
                                <td><?=$reviewPayDetails["level"]?></td>
                                <td><?=$reviewPayDetails["amount"]?></td>
                                <td>Paid</td>
                              </tr>
                              <?php endwhile ?>
                              <?php
                              $studentId = $result['id'];
                              $payDetails = $db->query("SELECT * FROM payment300 WHERE studentId='$studentId'");
                              ?>
                              <?php 
                              $x=0;
                              while($reviewPayDetails = $payDetails->fetch_assoc()):?>
                              <tr>
                                <td class="bg-info"><i class="fa fa-print" aria-hidden="true"></i></td>
                                <td><?php echo $x=$x+1; ?></td>
                                <td><?=$reviewPayDetails["paymentId"]?></td>
                                <td><?=$reviewPayDetails["currentPaymentType"]?></td>
                                <td><?=$reviewPayDetails["session"]?></td>
                                <td><?=$reviewPayDetails["semester"]?></td>
                                <td><?=$reviewPayDetails["level"]?></td>
                                <td><?=$reviewPayDetails["amount"]?></td>
                                <td>Paid</td>
                              </tr>
                              <?php endwhile ?>
                              <?php
                              $studentId = $result['id'];
                              $payDetails = $db->query("SELECT * FROM payment400 WHERE studentId='$studentId'");
                              ?>
                              <?php 
                              $x=0;
                              while($reviewPayDetails = $payDetails->fetch_assoc()):?>
                              <tr>
                                <td class="bg-info"><i class="fa fa-print" aria-hidden="true"></i></td>
                                <td><?php echo $x=$x+1; ?></td>
                                <td><?=$reviewPayDetails["paymentId"]?></td>
                                <td><?=$reviewPayDetails["currentPaymentType"]?></td>
                                <td><?=$reviewPayDetails["session"]?></td>
                                <td><?=$reviewPayDetails["semester"]?></td>
                                <td><?=$reviewPayDetails["level"]?></td>
                                <td><?=$reviewPayDetails["amount"]?></td>
                                <td>Paid</td>
                              </tr>
                              <?php endwhile ?>
                              <?php
                              $studentId = $result['id'];
                              $payDetails = $db->query("SELECT * FROM payment500 WHERE studentId='$studentId'");
                              ?>
                              <?php 
                              $x=0;
                              while($reviewPayDetails = $payDetails->fetch_assoc()):?>
                              <tr>
                                <td class="bg-info"><i class="fa fa-print" aria-hidden="true"></i></td>
                                <td><?php echo $x=$x+1; ?></td>
                                <td><?=$reviewPayDetails["paymentId"]?></td>
                                <td><?=$reviewPayDetails["currentPaymentType"]?></td>
                                <td><?=$reviewPayDetails["session"]?></td>
                                <td><?=$reviewPayDetails["semester"]?></td>
                                <td><?=$reviewPayDetails["level"]?></td>
                                <td><?=$reviewPayDetails["amount"]?></td>
                                <td>Paid</td>
                              </tr>
                              <?php endwhile ?>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>
            <div class="tab-pane" id="top-tab3">
              Tab content 3
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>

  <!-- Button trigger modal -->


  <div class="modal fade" id="paid" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered " role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Payment</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p style="color:red">You do not have an outstanding for this Payment Type. </p>

        </div>
      </div>
    </div>
  </div>


  <script src="payment.js"></script>
  <script src="assets/js/jquery-3.6.0.min.js"></script>

  <script src="assets/js/popper.min.js"></script>
  <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

  <script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
  <script src="assets/js/form-validation.js"></script>
  <script src="assets/js/script.js"></script>
</body>

</html>