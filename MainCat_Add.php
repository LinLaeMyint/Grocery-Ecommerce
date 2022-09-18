<?php session_start();ob_start();?>
<?php include 'dbconnection.php';?>
<?php include 'PageHeader.php';?>
<?php $message='';?>

<html>
    <head>
    	   	<meta name="viewport" content="width=device-width, initial-scale=1"> 
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> 
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>  		
    </head>
    <style>
  body {
background-image: url(image/snowbg4.gif);
}
    </style>
    <body>
    	<br><br>
    	<div class="container" >
    	<form method="POST" action="MainCat_Add.php" style="color:black;text-align:center;margin:0 auto;width:400;" enctype="multipart/form-data">
			
			
			<div class="row mb-3">
        		<label for="inputCatName" class="col-sm-4 col-form-label">Main Category_Name</label>
        		<div class="col-sm-8">
            		<input type="text" class="form-control" id="input" placeholder="" value="" name="input">
        		</div>
    		</div>
    		
    		<div class="row mb-3">
        		<label for="inputphoto" class="col-sm-4 col-form-label">Photo</label>
        		<div class="col-sm-8">
            		<input type="file" class="form-control" id="input_photo" name="input_photo">
        		</div>
    		</div>	
    			<button type="submit" class="btn btn-dark" style="float:right">Add</button>
    			
    	</form>
    	</div>
    </body>
</html>

<?php 
if(isset($_POST['input'])){
    $add=$_POST['input'];  
    $pPhoto=$_FILES['input_photo']['name'];
    $tmp=$_FILES['input_photo']['tmp_name'];
    
    if($pPhoto){
        move_uploaded_file($tmp, "image/$pPhoto");
    }
    
    $sql="INSERT INTO main_category(main_cat_name,photo) VALUE(?,?)";    
    $stmt=$db1->prepare($sql);
    $stmt->execute([$add,$pPhoto]);
    $maincatid=$db1->lastInsertId();
   echo $message="Saving Successfully!";
   header('Location: ShowAllAdmin.php');
  // header('Location: ShowAll.php?Category_ID=' . $_GET['Category_ID']);
}?>




<br><br>
<?php include 'PageFooter.php';?>
