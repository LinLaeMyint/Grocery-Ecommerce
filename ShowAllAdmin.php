
<?php session_start();?>
<?php include 'dbconnection.php';?>
<?php include 'PageHeader.php';?>
<html>
    <head>
    	<meta name="viewport" content="width=device-width, initial-scale=1"> 
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> 
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> 
    
    
    
    <style>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">   
  
   .cat{
   margin-top: 10px; padding: 10px;
   }
   .pro{
   margin-left: 10px; padding: 0px;
  
   }
   .list-group a{
   color:black;
   }

    img:hover {
        transform: scale(1.08);
    }
    img:hover::before {
        left: 10px;
        top: 10px;
    }
    img:hover::after {
        right:  10px;
        bottom:  10px;
    }
      body {
background-image: url(image/snowbg4.gif);
}
   </style> 
    </head>
    <body>
   	



<div class="container mx-auto">
 
  <div class="row cat">
    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
    	<ul class="list-group">
    		<li style="list-style: none" class="list-group-item active">
    		<b><a href="ShowAllAdmin.php" style="text-decoration:none">Show all categories</a></b>
    	</li>
    
   
    	<?php                           
                            $sql='SELECT * From category';
                            $statement=$db1->query($sql);
                            $result=$statement->fetchAll(PDO::FETCH_ASSOC);
                            
                            if($result){
                                foreach ($result as $rows){?>
                                	<li style="list-style:none" class="list-group-item">
                                		<a href="ShowAllAdmin.php?Category_ID=<?php echo $rows['Category_ID']?>" style="text-decoration:none;">
                                		<?php echo $rows['Category_Name']?>
                                		</a>
                                	
                                	</li>
 								
 								      	
                            <?php } 
                            
                          }
                          
                          ?> 
                          </ul>
                            </div>
   <?php 
   $searchresult=0;
   if(isset($_POST['search'])){?>
       <?php  $search=$_POST['search'];
        $sql="SELECT * FROM product WHERE description like '%$search%'";
        $searchresult=$db1->query($sql);?>
   
    


<div class="col-lg-9 col-md-9 col-sm-12 mx-auto">
    	<div class="row pro ">
    		<?php foreach ($searchresult as $rows){?>
    			<div class="col-4">
    				
                    <a href="#" class="d-block mb-4 mt-3">
                     <img class="img-responsive img-thumbnail img-fluid bg-image" src="image/<?php echo $rows['photo'];?>" alt="" style="width: 100%;height: 230px;" > </a>
                    <div class="row  mx-auto"> 
                        <div class="col text-left"><?php echo $rows['description'];?></div> 
                        <div class="col-3 text-right"> <span class="new"><?php echo $rows['price'];?></span> </div>
                    </div>
               
                <div class="row  border mx-auto"> 
 					<button type="button" class="btn btn-dark"> 
                  			<a href="" style="text-decoration:none;color:white;">
                			Add to Cart</a>
        			 </button> 
                    

      </div>
                 </div>
               <?php } ?>       

    	</div>
    
    </div>
    
    <?php }else{
        
        if (isset($_GET['Category_ID'])) {
            $cat_id=$_GET['Category_ID'];
            $result="SELECT * FROM product WHERE Category_ID=$cat_id";
            $resproductall=$db1->query($result);
        }
        else
        {
            $result="SELECT * FROM product";
            $resproductall=$db1->query($result);
            
        }?>
        
        
        <div class="col-lg-9 col-md-9 col-sm-12 mx-auto">
        <div class="row pro ">
        <?php foreach ($resproductall as $rows){?>
    			<div class="col-4">
    				
                    <a href="#" class="d-block mb-4 mt-3">
                     <img class="img-responsive img-thumbnail img-fluid bg-image" src="image/<?php echo $rows['photo'];?>" alt="" style="width: 100%;height: 230px;" > </a>
                    <div class="row  mx-auto"> 
                        <div class="col text-left"><?php echo $rows['description'];?></div> 
                        <div class="col-3 text-right"> <span class="new"><?php echo $rows['price'];?></span> </div>
                    </div>
               
                <div class="row   mx-auto"> 
 					<button type="button" class="btn btn-dark"> 
                  			<a href="" style="text-decoration:none;color:white;">
                  			Add to Cart</a>
        			 </button> 
                    

      </div>
                 </div>
               <?php } ?>       

    	</div>
    
    </div>
        
        
   <?php } ?> 
    

   
   </div>
   </div>
        
    </body>
</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<br><br>
<?php include 'PageFooter.php';?>
