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
		
		$id=$_GET['main_cat_id']; //assigned to id from GET['id'];
		$result=$db1->query("SELECT * FROM main_category WHERE main_cat_id=$id");
		if($result->rowCount()>0){
		    foreach ($result as $rows){
		        $Category_ID=$rows['main_cat_id'];
		        $Category_Name=$rows['main_cat_name'];
		        $photo=$rows['photo'];
		    }		    
		}
        ?>
        
        <form method="POST" enctype="multipart/form-data" style="color:black;width:400;">
        	<input type="hidden" name="id" value="<?php echo $Category_ID?>">
        	
        	<div class="row mb-3">
        		<label for="name" class="col-sm-4 col-form-label">Main Category Name</label>
        		<div class="col-sm-8">
        		
            		<input type="text" class="form-control" id="name" value="<?php echo $Category_Name?>" name="name">
        		</div>
    		</div>
        	
        	<div class="row mb-3">
    			
        		<label for="image" class="col-sm-4 col-form-label"><img src="image/<?php echo $photo?>" alt="" class="img-responsive img-thumbnail"></label>
        		<div class="col-sm-4">
            		<input type="file" class="form-control" id="image"  name="image">
        		</div>
    		</div>
    		
    		<div class="row mb-3">
        	<div class="button">
                 <div class="col-sm-8">
                   	<input type="submit" name="btnupdate" value="Update Category" class="btn btn-dark  ml-2"> 
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
    $Cat_id=$_POST['id'];
   
    $Cat_name=$_POST['name'];
    
    $Photo=$_FILES['image']['name'];
    $tmp=$_FILES['image']['tmp_name'];
    if($Photo){
        move_uploaded_file($tmp, "image/$Photo");
        $sql="UPDATE main_category SET main_cat_name=?,photo=? WHERE main_cat_id=?";
        $stmt=$db1->prepare($sql);
        $stmt->execute([$Cat_name,$Photo,$Cat_id]);
        echo "Photo Updating";
    }else {
        $sql="UPDATE main_category SET main_cat_name=? WHERE main_cat_id=?";
        $stmt=$db1->prepare($sql);
        $stmt->execute([$Cat_name,$Cat_id]);
        echo "No Photo Updating";
    }
       
        
        
       
    
    header('Location: ShowAllAdmin.php');
    
}
        
?>
</div>
<br><br><br><br><br><br>
<?php include 'PageFooter.php';?>




