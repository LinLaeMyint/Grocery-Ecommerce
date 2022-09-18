<?php session_start();
ob_start();
?>
<?php include 'dbconnection.php';?>
<?php include 'PageHeader.php';?>



<br>
<html lang="en-US">
	<head>
		<meta charset="UTF-8">
		<title>Edit Product</title>
		
		    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> 
    		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> 	
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <script>
        $(document).ready(function(){
        $.ajax({
          url: 'Product_Edit.php',
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
	
	<div class="container" >
		<h4>Edit Product</h4>
		<br>
		<?php
		$id=$_GET['id'];//assigned to id from GET['id'];
		$result=$db1->query("SELECT * FROM b5052sw.product WHERE id=$id");
		if($result->rowCount()>0){
		    foreach ($result as $rows){
		        $proid=$rows['id'];
		        $proname=$rows['description'];
		        $catid=$rows['Category_ID'];
		        $price=$rows['price'];
		        $photo=$rows['photo'];
		    }		    
		}
        ?>
        <form method="POST" enctype="multipart/form-data" action="" style="color:black;text-align:center;margin:0 auto;width:400;">
        	
        	<input type="hidden" name="id" id="proid" value="<?php echo $proid?>">
        	<div class="row mb-3">
        		<label for="name" class="col-sm-4 col-form-label">Product Name</label>
        		<div class="col-sm-8">
        		
            		<input type="text" class="form-control" id="name" value="<?php echo $proname?>" name="name">
        		</div>
    		</div>
    		
    		<div class="row mb-3">
        		<label for="catname" class="col-sm-4 col-form-label">MainCategoryName</label>
        		<div class="col-sm-8">
        			<select name="maincatname" id="catname" style="float:left">
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
        		<label for="catname" class="col-sm-4 col-form-label">CategoryName</label>
        		<div class="col-sm-8">
        			<select name="catname" id="catname" style="float:left">
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
    		
    		
<!--     		<div class="row mb-3"> -->
<!--         		<label for="catid" class="col-sm-4 col-form-label">Category_ID</label> -->
<!--         		<div class="col-sm-8"> -->
            		<!-- <input type="text" class="form-control" id="catid"  value="<?php echo $catid?>" name="catid">- -->
<!--         		</div> -->
<!--     		</div> -->
    		
    		<div class="row mb-3">
        		<label for="price" class="col-sm-4 col-form-label">Price</label>
        		<div class="col-sm-8">
            		<input type="text" class="form-control" id="price"  value="<?php echo $price?>" name="price">
        		</div>
    		</div>
    		
    		<div class="row mb-3">
    			
        		<label for="image" class="col-sm-4 col-form-label"><img src="image/<?php echo $photo?>" class="img-responsive img-thumbnail"></label>
        		<div class="col-sm-8">
            		<input type="file" class="form-control" id="image"  name="image">
        		</div>
    		</div>
        	
     
        	<div class="row mb-3">
        	<div class="button">
                 <div class="col-sm-10">
                   	<input type="submit" name="btnupdate" value="Update Product" class="btn btn-dark  ml-2"> 
                </div>
    		</div>
    		</div>
        
        </form>
        </div>
	</body>
</html>
<div class="container">
<?php 

if(isset($_POST['btnupdate'])){
    echo $id."id ...";
    $pro_id=$_POST['id'];
    $pro_name=$_POST['name'];
    $cat_id=$_POST['catname'];
    $maincat_id=$_POST['maincatname'];
    $Price=$_POST['price'];
  
    $Photo=$_FILES['image']['name'];
    $tmp=$_FILES['image']['tmp_name'];
    if($Photo){
        move_uploaded_file($tmp, "image/$Photo");
        $sql="UPDATE product SET description=?,Category_ID=?,main_cat_id=?,price=?,photo=? WHERE id=?";
        $stmt=$db1->prepare($sql);
        $stmt->execute([$pro_name,$cat_id,$maincat_id,$Price,$Photo,$pro_id]);
       
    }else {
        $sql="UPDATE product SET description=?,Category_ID=?,main_cat_id=?,price=? WHERE id=?";
        $stmt=$db1->prepare($sql);
        $stmt->execute([$pro_name,$cat_id,$maincat_id,$Price,$pro_id]);
        
    }
//     header("Location:ViewProductLists.php");
    header('Location: ShowAllAdmin.php');
       
        
        
}
        
?>
</div>
<br><br><br><br><br><br>
<?php include 'PageFooter.php';?>




