<?php include 'dbconnection.php';?>
<?php include 'H.php';?>
<html>
<head>
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
<div class="row">
<div class="col-6"> 
	<div class="mx-0 mx-sm-auto">
  		<div class="card"> 
            <div class="card-header bg-dark text-center">
              <h3 class="card-title text-white mt-2" id="exampleModalLabel">Customer Feedback Form</h3>
            </div>
    		

      <form class="px-4 bg-dark" action="" method="POST">
      <div class="mb-3 bg-dark">
        <label for="email" class="form-label" style="color:white">Email address</label>
        <input type="email" class="form-control" id="email" aria-describedby="email" name="fmail" >
        <div id="email" class="form-text" style="color:white">We'll never share your email with anyone else.</div>
      </div>
        <p class="text-center"><strong style="color:white">Your rating:</strong></p>

		<div class="form-check mb-2">
          <input class="form-check-input" type="radio" name="ftype" id="ftype"  value="Excellent"/>
          <label class="form-check-label" for="ftype" style="color:white">
          Excellent
          </label>
        </div>
        <div class="form-check mb-2">
          <input class="form-check-input" type="radio" name="ftype" id="ftype" value="Very good"/>
          <label class="form-check-label" for="ftype" style="color:white">
          Very Good
          </label>
        </div>
        <div class="form-check mb-2">
          <input class="form-check-input" type="radio" name="ftype" id="ftype" value="Good"/>
          <label class="form-check-label" for="ftype"style="color:white" >
           Good
          </label>
        </div>

        <div class="form-check mb-2">
          <input class="form-check-input" type="radio" name="ftype" id="ftype"value="Bad" />
          <label class="form-check-label" for="ftype" style="color:white">
            Bad
          </label>
        </div>
        <div class="form-check mb-2">
          <input class="form-check-input" type="radio" name="ftype" id="ftype" value="Very bad"/>
          <label class="form-check-label" for="ftype"style="color:white" >
            Very Bad
          </label>
        </div>

        <p class="text-center"><strong style="color:white">What could we improve?</strong></p>

        <!-- Message input -->
        <div class="form-outline mb-4">
          <textarea class="form-control" id="yourfeedback" name="yourfeedback" rows="4"></textarea>
          <label class="form-label" for="yourfeedback" style="color:white">Your feedback</label>
        </div>
        <div class="card-footer text-end">
      <button type="submit" class="btn btn-success" name="submit">Submit</button>
    </div>
      </form>
    </div>
    
  		</div>
</div>





<div class="col-6">

	<div class="text">
	<?php if(isset($_POST['submit'])){?>
   <?php 
   
   echo "Thank You For Your Feedback!"."</br>";?>
 <br>
 <form method="post">
   <button class="btn btn-success" name="reward" type="submit">Get Reward</button>
</form>
	<?php }else{?>
	    <?php echo "Dear Customer,"."</br>" ?>
	    <br>
	    <p style="font-weight:bold">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Please fill the feedback form to get your rewards. We prepared something for you!</p>
	    <br>
	    <a href="ContactUs.php" style="text-decoration:none;float:right">Customer Care</a>
	<?php } ?>
	</div>
</div>

</div>
</div>
<?php if(isset($_POST['reward'])){?>
    <div class="container">
    <div class="middle text-center">
    Congratulation!!
   You win 30% Premium Discount Cupon.
    </div>
    
    </div>
    
<?php } ?>
	

</body>
</html>
<br><br><br>
<?php include 'PageFooter.php';?>