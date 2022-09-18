<?php 
session_start();
include 'dbconnection.php';?>
<?php 
$msg='';
try {
    if(isset($_POST["login"])){
        $email=$_POST["adminemail"];
        $pass=$_POST["adminpassword"];
       
        
        
        $query="SELECT * FROM users WHERE email='$email' AND password='$pass' AND role='Admin'";
        $statement1=$db1->query($query);
        
    


        $admin=$statement1->fetchAll(PDO::FETCH_ASSOC);
        $countAdmin=$statement1->rowCount();//for admin role
        
        

        
        if($countAdmin>0){
            foreach ($admin as $rows){
                $_SESSION['uid']=$rows['uid'];
                $_SESSION['adminusername']=$rows['username'];
                $_SESSION['adminemail']=$rows['email'];
                header('Location: ShowAllAdmin.php' );
                
            }

        }//for admin role
        
    }
} catch (PDOException $error) {
    $msg=$error->getMessage();
}
?>


<html>
<head>
		<title>Admin Login Form</title>
    	<meta name="viewport" content="width=device-width, initial-scale=1"> 
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> 
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> 
</head>
<style>

body{
background-image: url(image/loginimage6.jpg);
background-repeat:no-repeat;

  height: 100%; 
  background-position: center;
  background-size: cover;
}
</style>


<section class="vh-100" >
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-sm-6">
      
      
      
        <div class="card" style="border-radius: 1rem;">
          <div class="row">
<!--             <div class="col-md-6 col-lg-5 d-none d-md-block"> -->
              
<!--               <img -->
<!--                 src="image/c3.jpg" -->
<!--                 alt="login form" -->
<!--                 class="img-fluid mt-4" style="border-radius: 1rem 0 0 1rem;" -->
<!--               /> -->
<!--                <img -->
<!--                 src="image/c7.jpg" -->
<!--                 alt="login form" -->
<!--                 class="img-fluid mt-4" style="border-radius: 1rem 0 0 1rem;" -->
<!--               /> -->
<!--             </div> -->
            
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">

                <form method="POST" class="form" id="login-form" action="">

                  <div class="d-flex align-items-center mb-3 pb-1">
                    <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                    <span class="h1 fw-bold mb-0"><img src="image/Capital Logo.png" style="height:150px;width:250px"></span>
                  </div>

                  <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your account</h5>
                  <div class="form-outline mb-4">
                    <input type="text" class="form-control form-control-lg" name="adminusername" required/>
                    <label class="form-label" for="username">UserName</label>
                  </div>

                  <div class="form-outline mb-4">
                    <input type="text" class="form-control form-control-lg" name="adminemail" required/>
                    <label class="form-label" for="email">Email</label>
                  </div>

				  <div class="form-outline mb-4">
                    <input type="password" class="form-control form-control-lg" name="adminpassword" required/>
                    <label class="form-label" for="password">Password</label>
                  </div>
                  
                 <div class="form-outline mb-4">
                  <input type="text" id="role" class="form-control form-control-lg" name="role"  disabled value="Admin"/>
                  <label class="form-label" for="role">Role</label>
                 </div>
                
<!--                  <div class="form-check"> -->
<!--                     <input type="checkbox" class="form-check-input" id="remember-me"> -->
<!--                     <label class="form-check-label" for="remember-me">Remember me</label> -->
                   <!--   <span class="label label-info"><?php// echo $msg?></span>-->
<!--   				 </div> -->
<!--                   <div class="form-outline mb-4">    -->

<!--                         <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="role"> -->
<!--                           <option selected>Choose Your Role</option> -->
<!--                           <option value="Admin">Admin</option> -->
<!--                           <option value="Manager">Manager</option> -->
<!--                           <option value="CEO">CEO</option> -->
<!--                         </select> -->

<!-- </div> -->

					<br>
                  <div class="mb-4">
                    <input class="btn btn-dark btn-lg btn-block" type="submit" name="login" style="float:right" value="submit">
                  </div>

                  
                  <p class="mb-5 pb-lg-2" style="color: #393f81;">Don't have an account? <a href="AdminRegister.php" style="color: #393f81;">Register here</a></p>
                  <?php echo $msg;?>
                </form>

              </div>
            </div>
          </div>
		</div>
		
		
      </div>
    </div>
  </div>
</section>
</html>
