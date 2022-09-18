<?php session_start();?>
<?php include 'dbconnection.php';?>
<?php include 'H.php';?>
<br>
<?php include 'Slider.php';?>


<br>
<html>
<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
<!--     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>    -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    
    
    
</head>
<style>
body {
background-image: url(image/snowbg4.gif);
}

.card {
    width: 350px;
    border: none;
    border-radius: 5px
}


.middle {
    height: 350px;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column !important;
    padding: 10px
}

.bottom {
    padding: 10px;
    background: #eee;
    padding-top: 30px
}





</style>
<body>
<div class="container">
<div class="row ">
<div class="col text-center">
<form method="post" action="ShowAll.php">
<button class="btn btn-dark" style="color:white;font-family:Copperplate, Papyrus, fantasy;">Start Shopping</button>
</form>
</div>
</div>

<hr />
    <h2>New Release</h2>
<?php include 'catalog.php';?>

<br>
<hr />
<h1>Categories</h1>
<?php 

if (isset($_GET['main_cat_id'])) {
    $cat_id=$_GET['main_cat_id'];
    $result="SELECT * FROM main_category WHERE main_cat_id=$cat_id";
    $resproductall=$db1->query($result);
} else
{
    $result="SELECT * FROM main_category";
    $resproductall=$db1->query($result);
    
}?>
        

            
            
        <div class="row row-cols-4">
        <?php foreach ($resproductall as $rows){?>
    			<div class="col-lg-3 col-md-4 col-sm-12 ">
    				
                    <a href="#" class="d-block mb-4 mt-3">
                     <img class="img-responsive img-thumbnail img-fluid bg-image rounded-circle" src="image/<?php echo $rows['photo'];?>" alt="" style="width: 100%;height: 230px;" > </a>
                    <div class="row  mx-auto"> 
                        <div class="col text-center"><?php //echo $rows['main_cat_name'];?>
                        	<a href="<?php echo $rows['main_cat_name']?>.php?main_cat_id=<?php echo $rows['main_cat_id']?>" style="text-decoration:none;font-family:Copperplate, Papyrus, fantasy;font-weight:bold;color:black">
                                		<?php echo $rows['main_cat_name']?>
                             </a>
                         </div> 
                    </div>
               
                
                 </div>
               <?php } ?>       

    	</div>
   
   
    









</div>
</body>

 </html>

<br>
<?php include 'PageFooter.php';?>