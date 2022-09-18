
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>User Side Navbar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
<!--     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script> -->
<!--     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script> -->
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">


    
</head>
  <style>
  
  ul li a.cart .cart-basket{
 font-size: .6rem;
 position: absolute;
 top: -6px;
 right: -5px;
 width: 15px;
 height: 15px;
 color: black;
 background-color: #64EBA2;
 border-radius: 50%;
}
ul li a.cart:hover{

 text-decoration:none;
 color: #64EBA2;
 
}
ul li a{
font-size:1.1rem;
color: black;

}
.fas{
font-size: 30px;
}
          
        .custom-toggler.navbar-toggler {
            border-color: lightgreen;
        }
          
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
<!--  <nav> -->
      <!--  <div class="container" style="background-color:black;text-align:center;color:white;height:25px">   -->
<!--  <div class="row">  -->
       <!--  <div class="col" style="font-family:Copperplate, Papyrus, fantasy;">
        Just 24 Hours left for Free Shipping!       <a href="ShowAll.php" style="text-decoration:none;color:white;">Order Now</a> 
<!--         </div>  -->
<!--       </div>  -->
<!--         </div>  -->
<!--  </nav>  -->
    <nav class="navbar navbar-expand-lg navbar-custom">
        <div class="container-fluid">
        <a href="Home.php"><img src="image/clogo.png" style="height:100px;weight:100px;padding-left:5px;"></a>

			<button class="navbar-toggler custom-toggler" 
                type="button" 
                data-bs-toggle="collapse" 
                data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav ">
                    <a href="Home.php" class="nav-item nav-link active" style="color:black">Home</a>
                    <!--  <a href="ShowAll.php" class="nav-item nav-link" style="color:black">Products</a>-->
                    

                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" style="color:black">Products</a>
                        <div class="dropdown-menu">
                            <a href="Foodstuffs.php" class="dropdown-item">Foodstuffs</a>
                   			<a href="Personal Care.php" class="dropdown-item">Personal Care</a>
                            <a href="Kitchen Appliances.php" class="dropdown-item">Kitchen Appliances</a>
                            <a href="Health Care.php" class="dropdown-item">Health Care</a>
                        </div>
                    </div>
                    
                  <a href="AboutUs.php" class="nav-item nav-link" style="color:black">About Us</a>
                  <a href="ContactUs.php" class="nav-item nav-link" style="color:black">Contact Us</a>
                  <a href="FAQ.php" class="nav-item nav-link" style="color:black">FAQ</a>
                </div>
                <form class="d-flex" method="POST" action="ShowAll.php">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search" name="search">
                        <button type="submit" class="btn btn-dark"><i class="bi-search"></i></button>
                    </div>
                </form>
                
               
                
              <?php 
                    $cart=0;
                    if (isset($_SESSION['cart'])) {
                        foreach ($_SESSION['cart'] as $qty) {
                           $cart+=$qty;
                        }
                    }?> 
                    <?php 
                    if (isset($_SESSION['username'])) 
                    {
                        $username=$_SESSION['username'];
                    }?> 
              <div class="navbar-nav" >
                <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a href="view-cart.php" class="cart position-relative d-inline-flex mt-1" style="text-decoration:none">
            		<i class="fas fa fa-shopping-cart fa-2x"></i>
            		<span class="cart-basket d-flex align-items-center justify-content-center">
            		<?php echo $cart ?>
            		</span>
            	</a>
               
                </li>
                  </ul> 
              </div>
<!--               <div class="navbar-nav" > -->
<!--                   <li class="nav-item"> -->
                  <!-- <a href="Register.php" class="nav-link" ><i class="fas fa-sign-in-alt" style="height:5px;padding-left:250px"></i></a> -->
<!--                   </li> -->
 
<!--               </div> -->
<div class="navbar-nav" >
    			<li class="nav-item dropdown">
                		<a class="nav-link dropdown-toggle mb-3 mt-2" href="" data-bs-toggle="dropdown">
                		
                		<i class="fas fa-sign-in-alt" style="color:black" ></i>
                		
                		</a>
                		<ul class="submenu dropdown-menu">
                			<li><a class="dropdown-item" href="UserLogin.php">Login</a></li>
                			<li><a class="dropdown-item" href="Register.php">Sign Up</a></li>
                		</ul>
                </li>
               <li class="nav-item dropdown">
            		<a class="nav-link dropdown-toggle mb-3 mt-2" href="" data-bs-toggle="dropdown">
            		<?php if (isset($_SESSION['username'])) {
            		    echo $username;
            		}else {?>
            		<i class="fas fa-sign-out-alt" style="color:black"></i>
            		<?php }
            		?></a>
            		<ul class="submenu dropdown-menu">
            			<li><a class="dropdown-item" href="Logoutforuser.php">Logout</a></li>
            		</ul>
            </li>
   </div>           
              
<!--                 <div class="nav-item dropdown"> -->
<!--                     <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"> Login / Logout</a> -->
<!--                                 <ul class="dropdown-menu" > -->
<!--                                     <li><a href="Login.php" >Login/Signup</a></li> -->
                                    
<!--                                     <li><a href="logout.php">Logout</a></li> -->
<!--                                 </ul> -->
                            
<!--                 </div> -->
            </div>
        </div>
    </nav>
</div>

</body>
</html>

