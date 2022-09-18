
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Admin Side Navbar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
</head>
  <style>

 .custom-toggler.navbar-toggler {
            border-color: lightgreen;
        }
        /* Setting the stroke to green using rgb values (0, 128, 0) */
          
        .custom-toggler .navbar-toggler-icon {
            background-image: url(
"data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 32 32' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(0, 128, 0, 0.8)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 8h24M4 16h24M4 24h24'/%3E%3C/svg%3E");
        }
               .dropdown-menu a:hover {
  background-color: #64EBA2;
}
  </style>
<body>


<div class="m-4">
    <nav class="navbar navbar-expand-lg navbar-custom">
        <div class="container-fluid">
          <a href="ShowAllAdmin.php"><img src="image/Capital Logo.png" style="height:100px;weight:100px;padding-left:5px;"></a>
          <!--  <a href="ShowAll.php" class="navbar-brand"><img src="image/logo15.png" style="height:100px;padding-left:5px;"></a>  --> 
<!--             <a href="ShowAll.php" class="navbar-brand">Capital.com</a> -->
         
<!--             <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"> -->
<!--                 <span class="navbar-toggler-icon"></span> -->
<!--             </button> -->
			<button class="navbar-toggler custom-toggler" 
                type="button" 
                data-bs-toggle="collapse" 
                data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav">
                    <a href="ShowAllAdmin.php" class="nav-item nav-link active" style="color:black">Home</a> 
<!--                      <div class="nav-item dropdown"> -->
                       <!--   <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" style="color:black">Home</a>-->
<!--                         <div class="dropdown-menu"> -->
<!--                             <a href="Food.php" class="dropdown-item">foodstuffs</a> -->
<!--                    			<a href="Beauty.php" class="dropdown-item">Beauty</a> -->
<!--                             <a href="KitchenA.php" class="dropdown-item">Kitchen Appliances</a> -->
<!--                             <a href="HealthA.php" class="dropdown-item">Health Appliances</a> -->
<!--                         </div> -->
<!--                     </div> -->
                    
                    
                   <div class="nav-item dropdown">
                        <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" style="color:black">Product Info</a>
                        <div class="dropdown-menu">
                            <a href="Product_Add.php" class="dropdown-item" style="color:black">Add new product</a>
                            <a href="ViewProductLists.php" class="dropdown-item" style="color:black">Product Edit/Del</a>
                            
                        </div>
                    </div>
                    
                    <div class="nav-item dropdown">
                        <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" style="color:black">MainCat Info</a>
                        <div class="dropdown-menu">
                            <a href="MainCat_Add.php" class="dropdown-item" style="color:black">Add New Main Category</a>
                            <a href="ViewCatLists.php" class="dropdown-item" style="color:black">Main Category Edit/Del</a>
                            
                        </div>
                    </div>
                    
                    <div class="nav-item dropdown">
                        <a href="ViewCategoryLists.php" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" style="color:black">Category Info</a>
                        <div class="dropdown-menu">
                            <a href="Category_Add.php" class="dropdown-item" style="color:black">Add new Category</a>
                            <a href="ViewCategoryLists.php" class="dropdown-item" style="color:black">Category Edit/Del</a>
                        </div>
                    </div>
                    
                    
                </div>
                <form class="d-flex" method="POST" action="ShowAllAdmin.php">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search" name="search">
<!--                         <button type="submit" class="btn btn-dark"><i class="fas fa-search"></i></button> -->
                        <button type="submit" class="btn btn-dark">
                         <i class="bi-search" ></i>
                        </button>
                    </div>
                </form>
                
               <?php 
                    
                    if (isset($_SESSION["adminusername"])) {
                        $username=$_SESSION["adminusername"];
                    }
                
                ?>
                
             <div class="navbar-nav" >
    			<li class="nav-item dropdown">
                		<a class="nav-link dropdown-toggle mb-3 mt-2" href="" data-bs-toggle="dropdown">
                		
                		<i class="fas fa-sign-in-alt fa-2x" style="color:black" ></i>
                		
                		</a>
                		<ul class="submenu dropdown-menu">
                			<li><a class="dropdown-item" href="NewLogin.php">Login</a></li>
                			<li><a class="dropdown-item" href="AdminRegister.php">Sign Up</a></li>
                		</ul>
                </li>
               <li class="nav-item dropdown">
            		<a class="nav-link dropdown-toggle mb-3 mt-2" href="" data-bs-toggle="dropdown">
            		<?php if (isset($_SESSION['adminusername'])) {
            		    echo $username;
            		}else {?>
            		<i class="fas fa-sign-out-alt fa-2x" style="color:black"></i>
            		<?php }
            		?></a>
            		<ul class="submenu dropdown-menu">
            			<li><a class="dropdown-item" href="Logout.php">Logout</a></li>
            		</ul>
            </li>
   </div>           
             
         
<!--              <div class="navbar-nav" > -->
<!--                   <li class="nav-item"> -->
                <!--   <a href="NewLogin.php" class="nav-link mt-2" ><i class="fas fa-sign-in-alt fa-2x" style="height:5px;padding-left:250px;color:black"></i></a> -->
<!--                   </li> -->
 
              
<!--                <li class="nav-item dropdown"> -->
<!--             		<a class="nav-link dropdown-toggle mb-4 mt-2" href="" data-bs-toggle="dropdown" > -->
            		<?php //if (isset($_SESSION["adminusername"])) {
//             		    echo $username;
//             		}else {//?>
            		<!--<i class="fas fa-sign-out-alt fa-2x" style="color:black"></i>  -->
            		<?php //}
            		?><!-- </a> -->
<!--             		<ul class="submenu dropdown-menu"> -->
<!--             			<li><a class="dropdown-item" href="logout.php?uid">Logout</a></li> -->
<!--             		</ul> -->
<!--             </li> -->
              
<!-- </div> -->
            </div>
        </div>
    </nav>
</div>

</body>
</html>














<!-- <html lang="en"> -->
<!-- <head> -->
<!-- <meta charset="utf-8"> -->
<!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
<!-- <title>Navigation Bar</title> -->
<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"> -->
<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"> -->
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script> -->
<!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css"> -->

<!-- </head> -->

<!-- <style> -->


<!-- </style> -->


<!-- <body> -->
<!-- <div class="m-4"> -->
<!-- 	<br><br> -->
<!--     <nav class="navbar navbar-expand-lg navbar-custom"> -->
<!--         <div class="container-fluid"> -->
            
<!--             <div class="collapse navbar-collapse justify-content-start" id="navbarCollapse"> -->
<!--                 <div class="navbar-nav"> -->
<!--                     <a href="ShowAllAdmin.php" class="nav-item nav-link active">Home</a> -->
                    
<!--                     <div class="nav-item dropdown"> -->
<!--                         <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Product Info</a> -->
<!--                         <div class="dropdown-menu"> -->
<!--                             <a href="Product_Add.php" class="dropdown-item">Add new product</a> -->
<!--                             <a href="ViewProductLists.php" class="dropdown-item">Product Edit/Del</a> -->
                            
<!--                         </div> -->
<!--                     </div> -->
<!--                     <div class="nav-item dropdown"> -->
<!--                         <a href="ViewCategoryLists.php" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Category Info</a> -->
<!--                         <div class="dropdown-menu"> -->
<!--                             <a href="Category_Add.php" class="dropdown-item">Add new Category</a> -->
<!--                             <a href="ViewCategoryLists.php" class="dropdown-item">Category Edit/Del</a> -->
<!--                         </div> -->
<!--                     </div> -->
<!--                 </div> -->
<!--                 <form class="d-flex" method="POST" action="ShowAllAdmin.php"> -->
<!--                     <div class="input-group"> -->
<!--                         <input type="text" class="form-control" placeholder="Search" name="search"> -->
<!--                         <button type="button" class="btn btn-dark"> -->
<!--                          <i class="bi-search" ></i> -->
<!--                         </button> -->
<!--                     </div> -->
<!--                 </form> -->
              
                 
    
                    
                
               <?php 
// //                     $cart=0;
// //                     if (isset($_SESSION['cart'])) {
// //                         foreach ($_SESSION['cart'] as $qty) {
// //                            $cart+=$qty;
// //                         }
// //                     }
// // //                     else{
// // //                         echo "<pre>";
// // //                         echo var_dump($cart);
// // //                         echo "</pre>";
// // //                     }
                    
// ?>
				<?php 
                    
//                     if (isset($_SESSION['unameadmin'])) {
//                         $username=$_SESSION['unameadmin'];
//                     }
                
//                 ?>
<!--           <ul class="navbar-nav ms-auto"> -->
<!-- <!--             <li class="nav-item"> --> 
            	<!-- <a href="view-cart.php" class="cart position-relative d-inline-flex mt-3" style="text-decoration:none"> -->
<!-- <!--             		<i class="fas fa fa-shopping-cart fa-2x"></i> -->
<!-- <!--             		<span class="cart-basket d-flex align-items-center justify-content-center"> -->
          		<?php //echo $cart ?> 
<!-- <!--             		</span> --> 
<!-- <!--             	</a> -->
<!-- <!--            </li> --> 
           
<!--            <li class="nav-item"> -->
<!--             		<a class="nav-link" href="login.php"><i class="fas fa-sign-in-alt mt-2"></i></a> -->
<!--             </li> -->
            
<!--             <li class="nav-item dropdown"> -->
<!--             		<a class="nav-link dropdown-toggle mt-2" href="" data-bs-toggle="dropdown"> -->
            		<?php //if (isset($_SESSION['unameadmin'])) {
//             		    echo $username;
//             		}else {?>
<!--             		<i class="fas fa-sign-out-alt"></i> -->
            		<?php// }
            		?></a>
<!--             		<ul class="submenu dropdown-menu"> -->
<!--             			<li><a class="dropdown-item" href="logout.php">Logout</a></li> -->
<!--             		</ul> -->
<!--             </li> -->

<!--         </ul> -->
<!--             </div> -->
<!--         </div> -->
<!--     </nav> -->
<!-- </div> -->
</body>
</html>