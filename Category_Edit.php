<?php session_start();ob_start();?>
<?php include 'dbconnection.php';?>
<?php include 'PageHeader.php';?>



<br>
<html lang="en-US">
	<head>
		<meta charset="UTF-8">
		<title>Edit Category</title>
		
		    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> 
    		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> 	
	
			<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
            <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
			
	</head>
	<style>
  body {
background-image: url(image/snowbg4.gif);
}
	</style>
	<body>
	
	<div class="container">
		<h4>Edit Category</h4>
		<br>
<?php
		
		$id=$_GET['Category_ID']; //assigned to id from GET['id'];
		$result=$db1->query("SELECT * FROM category WHERE Category_ID=$id");
		if($result->rowCount()>0){
		    foreach ($result as $rows){
		        $Category_ID=$rows['Category_ID'];
		        $Category_Name=$rows['Category_Name'];
		    }		    
		}
?>
        
        <form method="POST" enctype="multipart/form-data">
        	<input type="hidden" name="id" value="<?php echo $Category_ID?>">
        	
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
        		<label for="name" class="col-sm-4 col-form-label"> Category Name</label>
        		<div class="col-sm-8">
        		
            		<input type="text" class="form-control" id="name" value="<?php echo $Category_Name?>" name="name">
        		</div>
    		</div>
<!--         	<label for="name">Category Name</label> -->
        	<!-- <input type="text" name="name" value="<?php //echo $Category_Name?>"> -->
        	<br><br>
        	<div class="button">
                <div class="clearfix">   
                   	<input type="submit" name="btnupdate"value="Update Category" class="btn btn-dark  ml-2"> 
                </div>
    		</div>
        
        </form>
        </div>
	</body>
</html>
<div class="container">
<?php if(isset($_POST['btnupdate'])){
    echo $id."id ...";
    $Cat_id=$_POST['id'];
    $main_cat=$_POST['input_maincategory'];
    $Cat_name=$_POST['name'];
    
   
       
        $sql="UPDATE category SET Category_Name=?,main_cat_id=? WHERE Category_ID=?";
        $stmt=$db1->prepare($sql);
        $stmt->execute([$Cat_name,$main_cat,$Cat_id]);
       
    
header("Location:ShowAllAdmin.php");}?>
</div>
<br><br><br><br><br><br>
<?php include 'PageFooter.php';?>



