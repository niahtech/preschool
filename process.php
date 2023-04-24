<?php

$curl = curl_init();
$reference = isset($_GET['reference']) ? $_GET['reference'] : '';
if (!$reference) {
  die('No reference supplied');
}

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://api.paystack.co/transaction/verify/' . rawurlencode($reference),
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_HTTPHEADER => [
    "accept: application/json",
    'authorization: Bearer sk_test_ed2f8a4d5bac302506e5cad60bd399a5076495a5',
    "cache-control: no-cache"
  ],
));

$response = curl_exec($curl);
$err = curl_error($curl);

if ($err) {
  // there was an error contacting the Paystack API
  die('Curl returned error: ' . $err);
}

$tranx = json_decode($response);

if (!$tranx->status) {
  // there was an error from the API
  die('API returned error: ' . $tranx->message);
}

if ('success' == $tranx->data->status) {
  // transaction was successful...
  // please check other things like whether you already gave value for this ref
  // if the email matches the customer who owns the product etc
  // Give value
  include 'body.php';

  global $db, $_SESSION;
  $res = explode(',', $response);
  $refNo = explode(':', $res['5']);
  $trimmedRefNo = str_replace('"', '', $refNo[1]);
  $id = $_SESSION['id'];
  $sql = $db->query("SELECT * FROM bio WHERE Email='$id'");
  $result = $sql->fetch_assoc();
  $studentId = $result['id'];
  $payment = $db->query("SELECT * FROM payment WHERE studentId='$studentId'");
  $paymentDetails = $payment->fetch_assoc();
  $payment = $paymentDetails['currentPaymentType'];
  $db->query("UPDATE payment SET $payment=1,paymentId='$trimmedRefNo' WHERE studentId='$studentId'");
}

?>


?>
<div class="page-wrapper">
  <div class="content container-fluid">
    <?php echo "<h2 style='color:green'>You have successful paid, kindly confirm payment</h2>"; ?>

    <div class="row m-0">
      <div class="col-lg-7 pb-5 ps-lg-5">
        <div class="row">
          <div class="col-12 px-4">
            <div class="d-flex align-items-end mt-4 mb-2">
              <p class="h4 m-0"><span class="pe-1">Payment Details</span></p>
            </div>
            <div class="d-flex justify-content-between mb-2">
              <p class="textmuted">Payment Type</p>
              <p class="fs-14 fw-bold"><?= $paymentDetails['currentPaymentType'] ?></p>
            </div>
            <div class="d-flex justify-content-between mb-2">
              <p class="textmuted">Session</p>
              <p class="fs-14 fw-bold"><span class="fas pe-1"></span><?= $paymentDetails['session'] ?></p>
            </div>
            <div class="d-flex justify-content-between mb-2">
              <p class="textmuted">Transaction Id</p>
              <p class="fs-14 fw-bold"><span class="fas pe-1"></span>
              <?php
                  
                  echo ($trimmedRefNo) ?></p>
            </div>
            <div class="d-flex justify-content-between mb-2">
              <p class="textmuted">level</p>
              <p class="fs-14 fw-bold"><span class="fas pe-1"></span><?= $paymentDetails['level'] ?></p>
            </div>
            <div class="d-flex justify-content-between mb-2">
              <p class="textmuted">semester</p>
              <p class="fs-14 fw-bold"><span class="fas pe-1"></span><?= $paymentDetails['semester'] ?></p>
            </div>
            <div class="d-flex justify-content-between mb-2">
              <p class="textmuted">Amount</p>
              <p class="fs-14 fw-bold"><span class="fas pe-1"></span><?= $paymentDetails['amount'] ?></p>
            </div>
          </div>
        </div>
        <div class="text-center m-0">
          <a href='payment.php'class="btn btn-primary makePayment" type="button" name="confrimPayment">Confirm Payment<span class="fas fa-arrow-right ps-2"></span></a>

        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>