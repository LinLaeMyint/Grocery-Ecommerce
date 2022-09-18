<?php include 'dbconnection.php';?>

<?php
session_start();
$message="";
try {
    if(isset($_POST ["submit"]))
    {
        $uname=$_POST["username"];
        $email=$_POST["email"];
        $psw=$_POST["password"];
        $role=$_POST['role'];
//         $sql="INSERT INTO users(username,email,password,role) VALUE(?,?,?,?)";
//         $stmt=$db1->prepare($sql);
//         $stmt->execute([$uname,$email,$psw,$role]);
        $uid=$db1->lastInsertId();
        
        
        if(isset($uname)&&isset($email)){
            
            if($uname=="Admin" && $email=="Admin@gmail.com" && $role="Admin" && $psw="Admin!@#")
            {
                header('Location: ShowAllAdmin.php?uid=' . $uid);
                $_SESSION['uid']=$uid;
                $_SESSION['unameadmin']=$uname;
                $_SESSION['email']=$email;
                $_SESSION['role']=$role;
            }
            else{
                echo "Invalid";
                
            }
            //         if($uname!="Admin" && $email!="Admin@gmail.com")
                //         {
                //             header('Location: ShowAll.php?uid=' . $uid);
                //             $_SESSION['uid']=$uid;
                //             $_SESSION['uname']=$uname;
                //             $_SESSION['email']=$email;
                //         }
            //         else{
            //             echo "Invalid";
            
            //         }
        }
    }
    
    
   
}  catch (PDOException $e) {
    $message=$e->getMessage();
}?>


<html>
<head>

    	<meta name="viewport" content="width=device-width, initial-scale=1"> 
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> 
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> 
  

</head>
<style>

</style>

<section class="vh-100" style="background-color: red" >
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block">
              
              <img
                src="image/c3.jpg"
                alt="login form"
                class="img-fluid mt-4" style="border-radius: 1rem 0 0 1rem;"
              />
               <img
                src="image/c7.jpg"
                alt="login form"
                class="img-fluid mt-4" style="border-radius: 1rem 0 0 1rem;"
              />
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">

                <form method="POST">

                  <div class="d-flex align-items-center mb-3 pb-1">
                    <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                    <span class="h1 fw-bold mb-0"><img src="image/logo5.jpg" style="height:150px"></span>
                  </div>

                  <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your account</h5>


				
                   
                  <div class="form-outline mb-4">
                    <input type="text" class="form-control form-control-lg" name="username" required/>
                    <label class="form-label" for="username">UserName</label>
                  </div>

                  <div class="form-outline mb-4">
                    <input type="text" class="form-control form-control-lg" name="email" required/>
                    <label class="form-label" for="email">Email</label>
                  </div>

				<div class="form-outline mb-4">
                    <input type="password" class="form-control form-control-lg" name="password" required/>
                    <label class="form-label" for="password">Password</label>
                  </div>
                  <div class="form-outline mb-4">   

                        <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="role">
                          <option selected>Choose Your Role</option>
                          <option value="Admin">Admin</option>
                          <option value="Manager">Manager</option>
                          <option value="CEO">CEO</option>
                        </select>

</div>
<!--                       <div class="dropdown" > -->
<!--                               <a class="btn btn-dark dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false" name="role" > -->
<!--                                 Role -->
<!--                               </a> -->
                            
<!--                               <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink"> -->
<!--                                 <li><a class="dropdown-item" href="#">Admin</a></li> -->
<!--                                 <li><a class="dropdown-item" href="#">Manager</a></li> -->
<!--                                 <li><a class="dropdown-item" href="#">CEO</a></li> -->
<!--                               </ul> -->
                              
<!-- <!--       				</div> --> 
<!--                  </div>  -->
					<br>
                  <div class="pt-4 mb-4">
                    <button class="btn btn-dark btn-lg btn-block" type="submit" name="submit" style="float:right">Login</button>
                  </div>

                  
                  <!-- <p class="mb-5 pb-lg-2" style="color: #393f81;">Don't have an account? <a href="" style="color: #393f81;">Register here</a></p> -->
                  
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
