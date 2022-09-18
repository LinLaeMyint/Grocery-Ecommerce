<?php session_start();
ob_start();?>
<?php include 'dbconnection.php';?>
<?php include 'H.php';?>
<?php 
if (!isset($_SESSION['cart'])) { //for empty cart
    
    header("location:ShowAll.php");
    exit();
}
?>

<html>
<head>
<title>View Cart</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>



</head>
<style>
body {
background-image: url(image/snowbg4.gif);
}
</style>
<div class="container">


<div class="row">
<div class="col lg-8 col-md-8 col-sm-12 ">
<a href="view-cart.php"><i class="fas fa-shopping-basket" style="height: 10px;color:black;">My Cart</i></a>
<br><br><br>
<div class="container">
<div class="row">
   <div class="col-9"><a href="ShowAll.php" style="text-decoration:none;">&laquo; Home Page</a></div>
   <div class="col-3"><a href="clear-cart.php" class="del" style="float:right;text-decoration:none">&times;Clear Cart</a></div>
</div>
</div>
<br>
<div class="main shadow-lg">
<form action="view-cart.php" method="post">
<table class="table table-hover" border="1">

<thead>
    <tr style="background-color:black;color:white">
   	<th scope="col">Photo</th>
      <th scope="col">Name</th>
      <th scope="col">Quantity</th>				
      <th scope="col">Rate</th>
      <th scope="col">Price</th>
      <th scope="col">Update</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <?php 
  $total=0; //for total amount
  $p=0;
  foreach ($_SESSION['cart'] as $id=>$qty):
  $result=("SELECT description,price,photo FROM product WHERE id=$id");
  foreach ($db1->query($result) as $rows){
      
      $p=$rows['price'];
  }
  $total += $rows['price'] * $qty;
  ?>
  
  <tbody >
    <tr style="color:black">
    <td> <img src="image/<?php echo $rows['photo'];?>" width="80" height="80"></td> 
    
      <td><?php echo $rows['description']?></td>
      <td>
       <input onclick="save(this);" size="2" type="number" name="qty" step="1" id="<?php echo $id?>" value="<?php echo $qty?>"> 
      </td>
      <td><?php echo $rows['price']?>KS</td>
      <td><?php echo $rows['price'] * $qty?>KS</td>
      <td>            
      <button type="submit" class="btn btn-success">Update</button>
      <script>
      	function save(obj){ 
      	alert ("updating");
      	var quantity= $(obj).val();
      	var code=$(obj).attr("id");
      	$.ajax({
      	url: "update-pro-cat.php",
      	type: "POST",
      	data: 'code='+code+'&quantity='+quantity,
      	
      	});
      	
      	}
      </script>
      
      </td>
 <td>
       	<a href="product_del_from-cart.php?id=<?php echo $id?>" class="trash" title="Delete Product"><button type="button" class="btn btn-danger">Delete</button></a>
 
 </td>
   
   
    </tr>
    <?php endforeach;?>
    
    <tr>
      <td colspan="3" align="right"><b>Total: </b></td>
      <td><?php echo $total;?>KS</td>
    </tr>

  </tbody>
</table>
</form>
</div>

</div>


<div class="col-lg-4 col-md-4 col-sm-12" style="color:white; background-color:black;">
<div class="container">

<div class="row">

<div class="col-7">
<h4>Order Now</h4>
</div>

<div class="col-5">
<a href="Register.php" style="text-decoration:none;color:white"><img src="image/clipboard.png" style="height:30px;">Register</a>

</div>

</div>

<form method="POST" action="submit_orders.php">
	<input type="hidden" name="usid" value=<?php 
	if(!isset($_SESSION['uid'])){
	    echo "";    
	}else{
	    echo $_SESSION['uid'];
	}?>>
	<div class="row mb-3">
        		<label for="name" class="col-sm-4 col-form-label">Your Name</label>
        		<div class="col-sm-8">
            		<input type="text" name="name" class="form-control" id="name" disabled  value=<?php if (!isset($_SESSION['username'])) {
	   echo "" ;
	}
	else{
	    echo $_SESSION['username'];
	}?>>
        		</div>
    </div>
    
	<div class="row mb-3">
        		<label for="email" class="col-sm-4 col-form-label">Email</label>
        		<div class="col-sm-8">
            		<input type="text" name="email" class="form-control" id="email" disabled  value=<?php if (!isset($_SESSION['email'])) {
	   echo "" ;
	}
	else{
	    echo $_SESSION['email'];
	}?>>
        		</div>
    </div>


	<div class="form-outline mb-4">
	<label for="phone" class="col-sm-4 col-form-label" >Phone</label>
	<input type="text" name="phone" id="phone" required>
	</div>
	
	<div class="form-outline mb-4">
	<label for="address" class="col-sm-4 col-form-label" >Your Address</label>
	<textarea name="address" id="address" required></textarea>
	
	</div>
	
	 <p style="font-size:10px">Add your another address to deliver your orders! (Optional)</p>
	<div class="form-outline mb-4">
	<label for="cperson" class="col-sm-4 col-form-label" >Contact Person</label>
	<textarea name="cperson" id="cperson"></textarea>
	</div>
	
	
<div class="row mb-3">
	<div class="col-4">
	<label for="paytype" class="col-sm-4 col-form-label">Payment</label>
	</div>
	<div class="col-8">
        <div class="form-check">
        
          <input class="form-check-input" type="radio" name="paytype" id="paytype" value="Paypal" required checked>
          <label class="form-check-label" for="paytype"><i class="fab fa-cc-paypal fa-2x" ></i>
            
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="paytype" id="paytype" value="ApplePay" required >
          <label class="form-check-label" for="paytype"><i class="fab fa-cc-apple-pay fa-2x" ></i>
            
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="paytype" id="paytype" value="Visa" required >
          <label class="form-check-label" for="paytype">
            <i class="fab fa-cc-visa fa-2x"></i>
          </label>
        </div>
	</div>
</div>	

<div class="row mb-3">
	<div class="col-4">
	<label for="shiptype" class="col-sm-4 col-form-label">Shipping</label>
	</div>
	<div class="col-8">
        <div class="form-check">
        
          <input class="form-check-input" type="radio" name="shiptype" id="shiptype" value="Standard Shipping" required checked>
          <label class="form-check-label" for="shiptype">
            Standard Shipping
          </label><span> (2000 KS)</span>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="shiptype" id="shiptype" value="Express Shipping" required>
          <label class="form-check-label" for="shiptype">
            Express Shipping
          </label>
          <span> (4000 KS)</span>
        </div>
        
        
	</div>
</div>	


<?php 
 if(isset($_SESSION['uid'])){?>
 
 <button type="submit" class="btn btn-success" style="float:right" name="Submit">Submit Order</button>

<?php }else {?>
    
    <button type="submit" class="btn btn-success" style="float:right" name="Submit" disabled>Submit Order</button>
    
    
<?php }?>
 


<a href="ShowAll.php">Continue Shopping</a>

</form>


</div>
</div>

</div>
</div>

</html>
<br><br><br>
<?php include 'PageFooter.php';?>