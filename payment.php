<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
  <title>Preskool - Subject</title>

  <link rel="shortcut icon" href="assets/img/favicon.png">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,600;0,700;1,400&amp;display=swap">

  <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">

  <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
  <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

  <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

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
          <div class="card-header">
            <ul class="nav nav-tabs nav-tabs-top card-header-tabs">
              <li class="nav-item">
                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Generate Invoice Details</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Confirm Payment</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">View Invoice Generated</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">View Payment Reciept</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Student Ledger</a>
              </li>
            </ul>
          </div>
          <div class="card-body">
            <div class="tab-content" id="myTabContent">
              <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <div class="card">
                  <div class="card-header bg-info">
                    <h4 class="text-white text-left">Generate Invoice Details</h4>
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
                                  <select name="paymenttype" class="custom-select" required>
                                    <option value="" selected disabled>Select your payment Type...</option>
                                    <?php $sql = $db->query("SELECT * FROM paymenttype");
                                    while ($payment = mysqli_fetch_array($sql)) {
                                    ?>
                                      <option value="<?= $payment['id'] ?>"><?= $payment['name'] ?></option>
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
                                <select name="level" class="custom-select" required>
                                  <option value="">Select Level</option>
                                  <?php while ($level = $sql->fetch_assoc()) { ?>
                                    <option value="<?= $level['id']; ?>"><?= $level['name']; ?></option>
                                  <?php } ?>
                                </select>
                                <div class="invalid-feedback">Must Make a selection</div>
                              </div>
                              <div class="col-md-4 mb-3">
                                <label for="validationCustom02">Student Status</label>
                                <select name="status" class="custom-select" required>
                                  <option value="">Select Status</option>
                                  <option value="Fresher">Fresher</option>
                                  <option value="2">Returning</option>

                                </select>
                                <div class="invalid-feedback">Must Make a selection</div>
                              </div>
                              <div class="col-md-4 mb-3">
                                <label for="validationCustom02">Session</label>
                                <select name="session" class="custom-select" required>
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
                                <select name="semester" class="custom-select" required>
                                  <option value="">Select Semester</option>
                                  <option value="1">One</option>
                                  <option value="2">Two</option>
                                </select>
                                <div class="invalid-feedback">Must Make a selection</div>
                              </div>
                            </div>
                            <button class="btn btn-primary" type="submit" name="submitPayment">Submit form</button>
                            </div>
                            </div>
                            </div>
                            <table class="table table-bordered">
                              <thead>
                                <tr>
                                  <th scope="col"></th>
                                  <th scope="col" class="text-left">Total</th>
                                  <th scope="col" class="text-left">
                                    <?php if (isset($_POST['submitPayment'])) {
                                    global $db;
                                    extract($_POST);
                                    echo $fees = getPaymentType($paymenttype, $level);
                                    }
                                    ?>
                                  </th>
                                </tr>
                              </thead>
                              <tbody>

                              </tbody>
                            </table>
                            <button class="btn btn-primary" type="submit" name="makePayment">Make Payment</button>
                        </form>
                  </div>
                  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">Food truck fixie
                    locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit,
                    blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee.
                    Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum
                    PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS
                    salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit,
                    sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester
                    stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.</div>
                  <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">Etsy mixtape
                    wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack
                    lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard
                    locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify
                    squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie
                    etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of them, vinyl craft beer blog
                    stumptown. Pitchfork sustainable tofu synth chambray yr.</div>
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
      <script src="assets/js/form-validation.js"></script>

      <script src="assets/js/script.js"></script>
</body>

</html>