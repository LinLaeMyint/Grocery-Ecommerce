<?php session_start();?>
<?php include 'dbconnection.php';?>
<?php include 'H.php';?>
<br><br>

<html>
<head>
	<title></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
<!--     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script> -->

</head>
<style>
body {
background-image: url(image/snowbg4.gif);
}
</style>
<body>
<div class="container">
<h1 style="text-align:center;font-family:Copperplate, Papyrus, fantasy;"><b>Hello, What can I help you?</b></h1>
<div class="row">
<div class="col">


<div class="accordion" id="accordionExample" style="font-weight:bold">
<h4>Ordering Information</h4>
<br>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
      How long will take to receive my order?
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
         Depending on the time of day the order is placed. Usually within two or three Days for standard Shipping.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
      What payment do you accept?
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      We accept three types of payment gateway: Paypal, Apple Pay, Visa.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
      Can I edit or cancel the order after it has been placed?
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      Yes, you can edit or cancel the order by calling or sending mail to customer care team within 24 hours after the order has been palced.
      </div>
    </div>
  </div>
  <br>
  <h4>Shipping Information</h4>
  <br>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingFive">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
      Can I ship to multiple address?
      </button>
    </h2>
    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
      <div class="accordion-body">
		Yes, you can ship to multiple address and your shipping fees will also change depending on your shipping address.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingSix">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
     Will I get a shipping confirmation email?
      </button>
    </h2>
    <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
      <div class="accordion-body">
		Yes, you will get a shipping confirmation email as soon as your order has been delivered.
      </div>
    </div>
  </div>
<div class="accordion-item">
    <h2 class="accordion-header" id="headingSeven">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
    What are your rates for Shipping and how long will delivery take?
      </button>
    </h2>
    <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
      <div class="accordion-body">
		We have two types of shipping: $20 for Standard Shipping and $40 for Express Shipping.
      </div>
    </div>
  </div>
</div>


</div>
</div>
</div>
</body>
</html>

<br><br>
<?php include 'PageFooter.php';?>