<?php session_start();ob_start();?>
<?php include 'dbconnection.php';?>
<?php include 'PageHeader.php';?>




<br><br>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> 	
</head>
<style>
  body {
background-image: url(image/snowbg4.gif);
}
</style>
    <body>
    <div class="container">
    	<form method="POST" action="" style="color:black;text-align:center;margin:0 auto;width:400;" >
		<div class="row mb-3">
       	 	<label for="searchdata" class="col-sm-2 col-form-label" style="font-weight: bold;">Search</label>
        	<div class="col-sm-5">
            	<input type="text" class="form-control" id="input" placeholder="Drinks" value="" name="search">	
        	</div>
        	<div class="col -md-12 text-center">
        	<button type="submit" class="btn btn-dark"><i class="fas fa-search"></i></button>
        	<button type="submit" class="btn btn-dark" value="Show all Categories"><i class="fas fa-eye">Show All</i></button>
        	
        	</div>
    	</div>	
	
		
	</form>
	</div>
    	<div class="container">
    		
    		<form method="post" action="show_cateogry_lists.php" >
				<table class="table table-hover">
					<thead>
            			<tr>
                          <th scope="col" >ID</th>
                          <th scope="col" >Name</th>
            			</tr>
  					</thead>
  					<tbody>
<?php
$result=0;
if(isset($_POST['search'])){
    $search=$_POST['search'];
    $sql="SELECT * FROM category WHERE Category_Name like '%$search%'";
    $result=$db1->query($sql);
}

?>
						
  						<?php if($result){
  						foreach($result as $row): ?>
						 <tr>
                            <td><?=$row['Category_ID']?></td>            																		
                            <td><?=$row['Category_Name']?></td>
                            <td class="actions">
            					<a href="Category_Edit.php?Category_ID=<?=$row['Category_ID']?>" class="edit" title="Edit Category"><i class="fas fa-edit"></i></a>
                                <a href="Category_Del.php?Category_ID=<?=$row['Category_ID']?>" class="remove" title="Remove Category"><i class="fas fa-trash-alt"></i></a>
                            </td>
            			</tr>
            			<?php endforeach; ?> 
            			<?php }?>		
  					</tbody>
				</table>
			</form>
    		
    	</div>
    </body>
</html>
<br><br><br><br><br><br>
<?php include 'PageFooter.php';?>
