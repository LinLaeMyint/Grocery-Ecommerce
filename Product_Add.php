<?php session_start();
ob_start();?>
<?php include 'dbconnection.php';?>
<?php include 'PageHeader.php';?>
<?php $message='';?>
<br><br>

<html>
    <head>
    	   	<meta name="viewport" content="width=device-width, initial-scale=1"> 
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> 
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>  		
    		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <script>
        $(document).ready(function(){
        $.ajax({
          url: 'Product_Add.php',
          success: function(data) {
           
        //      location.reload();
            	e.preventDefault();
          }
        });
        });
        </script>
    	
    
    </head>
    <style>
  body {
background-image: url(image/snowbg4.gif);
}
    </style>
    <body>
    	<br><br>
    	<div class="container">
    	<form method="POST" action="" style="color:black;text-align:center;margin:0 auto;width:400;" enctype="multipart/form-data">
			<div class="row mb-3">
        		<label for="inputProName" class="col-sm-4 col-form-label">Product_Name</label>
        		<div class="col-sm-8">
            		<input type="text" class="form-control" id="input_proname" placeholder="Chili" value="" name="input_proname">
        		</div>
    		</div>
    		
    		<div class="row mb-3">
        		<label for="inputCatName" class="col-sm-4 col-form-label">MainCategoryName</label>
        		<div class="col-sm-8">
        			<select name="input_maincategory" id="Category" style="float:left">
        			<option value="0">-------- Choose---------</option>
        			<?php 
        			$result="SELECT main_cat_id,main_cat_name From main_category";
        			foreach ($db1->query($result) as $rows){?>
        			<option value="<?php echo $rows['main_cat_id']?>">
        			<?php echo $rows['main_cat_name']?>
        			</option>
        			<?php }?>
        			</select>
<!--             		<input type="text" class="form-control" id="input_catid" placeholder="1" value="" name="input_catid"> -->
        		</div>
    		</div>
    		
    		<div class="row mb-3">
        		<label for="inputCatName" class="col-sm-4 col-form-label">CategoryName</label>
        		<div class="col-sm-8">
        			<select name="input_category" id="Category" style="float:left">
        			<option value="0">-------- Choose---------</option>
        			<?php 
        			$result="SELECT Category_ID,Category_Name From Category";
        			foreach ($db1->query($result) as $rows){?>
        			<option value="<?php echo $rows['Category_ID']?>">
        			<?php echo $rows['Category_Name']?>
        			</option>
        			<?php }?>
        			</select>
<!--             		<input type="text" class="form-control" id="input_catid" placeholder="1" value="" name="input_catid"> -->
        		</div>
    		</div>
    		
    		
    		
    		
    		<div class="row mb-3">
        		<label for="inputPrice" class="col-sm-4 col-form-label">Price</label>
        		<div class="col-sm-8">
            		<input type="text" class="form-control" id="input_price" placeholder="1000" value="" name="input_price">
        		</div>
    		</div>
    		
    		<div class="row mb-3">
        		<label for="inputphoto" class="col-sm-4 col-form-label">Photo</label>
        		<div class="col-sm-8">
            		<input type="file" class="form-control" id="input_photo" name="input_photo">
        		</div>
    		</div>
    			
    			<button type="submit" class="btn btn-dark" style="float:right" name="Submit">Add</button>
    			
    	</form>
    	</div>
    </body>
</html>

<?php 
if(isset($_POST['Submit'])){
    $proname=$_POST['input_proname'];  
    $catid=$_POST['input_category'];
    $maincatid=$_POST['input_maincategory'];
    $price=$_POST['input_price'];
    
    
    $pPhoto=$_FILES['input_photo']['name'];
    $tmp=$_FILES['input_photo']['tmp_name'];
    
    if($pPhoto){
        move_uploaded_file($tmp, "image/$pPhoto");
    }
    
    $sql="INSERT INTO b5052sw.product(description,Category_ID,main_cat_id,price,photo) VALUES(?,?,?,?,?)";    
    $stmt=$db1->prepare($sql);
   // $stmt->execute('Water 2',4,800,'test.jpg');
    $stmt->execute([$proname,$catid,$maincatid,$price,$pPhoto]);
    //$catid=$db1->lastInsertId();
  
   header('Location: ShowAllAdmin.php');
}?>




<br><br>
<?php include 'PageFooter.php';?>
