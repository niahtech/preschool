<?php include 'libs/connection.inc.php' ?>
<?php
global $db;
$id = $_SESSION['id'];
$data = $db->query("SELECT * FROM student_registered WHERE email='$id'");
$result = $data->fetch_assoc();
?>
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
    <?php include 'student-header-nav.php' ?>
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

        <ul class="nav nav-tabs " id="myTab" role="tablist">
          <li class="nav-item">
            <a class="nav-link active " id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Generate Invoice</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Confirm Payment</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">View Invoice Generated</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">View Payment Receipt</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Student Ledger</a>
          </li>
        </ul>
        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">Raw denim you
            probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master
            cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro
            keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip
            placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi
            qui.</div>
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

        <div class="row">
          <div class="col-sm-12">
            <div class="card">
              <div class="card-body">
                <form>
                  <div class="row">
                    <div class="col-12">
                      <h5 class="form-title"><span>Subject Information</span></h5>
                    </div>
                    <div class="col-12 col-sm-6">
                      <div class="form-group">
                        <label>Course Code</label>
                        <input type="text" class="form-control" value="<?= $result['course_code'] ?>">
                        <?php echo $id; ?>
                      </div>
                    </div>
                    <div class="col-12 col-sm-6">
                      <div class="form-group">
                        <label>Subject Name</label>
                        <input type="text" class="form-control" value="Botony">
                      </div>
                    </div>
                    <div class="col-12 col-sm-6">
                      <div class="form-group">
                        <label>Class</label>
                        <input type="text" class="form-control" value="9">
                      </div>
                    </div>
                    <div class="col-12">
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                  </div>
                </form>
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


</html>