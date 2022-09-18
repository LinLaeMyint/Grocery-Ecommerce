<?php include 'dbconnection.php'; $msg='';?>

 <?php
 
// session_start();
// if(isset($_POST ["submit"]))
// {
//     $usrname=$_POST["adminusername"];
//     $usremail=$_POST["adminemail"];
//     $usrpsw=$_POST["adminpassword"];
//     $usrrole="Admin";
//     $sql="INSERT INTO users(username,email,password,role) VALUE(?,?,?,?)";
//     $stmt=$db1->prepare($sql);
//     $stmt->execute([$usrname,$usremail,$usrpsw,$usrrole]);
//     $uid=$db1->lastInsertId();
    
    
//     if(isset($usrname)&&isset($usremail)&&isset($usrpsw)){
        
       
//         if( $usrrole="Admin")
//         {
//             header('Location: ShowAllAdmin.php?uid=' . $uid);
//             $_SESSION['uid']=$uid;
//             $_SESSION['adminusername']=$usrname;
//             $_SESSION['adminemail']=$usremail;
//         }
//         else{
//             echo "Invalid";
            
//         }
//     }
// }


// ?>

<?php
session_start();
if(isset($_POST['submit'])){
$usrname = $_POST['adminusername'];
$usremail = $_POST['adminemail'];
$usrpsw = $_POST['adminpassword'];
$usrrole="Admin";

$q = "SELECT * FROM users where (email = '$usremail')";

$statement1=$db1->query($q);

if ($statement1->rowCount() > 0) {
    echo "The email already exist";
}

else{

    
    if ($_POST["adminpassword"] == $_POST["adminrepeatpassword"]) {
        try {
        $sql="INSERT INTO users(username,email,password,role) VALUE(?,?,?,?)";
        $stmt=$db1->prepare($sql);
        $stmt->execute([$usrname,$usremail,$usrpsw,$usrrole]);
        $uid=$db1->lastInsertId();
        
        
        if(isset($usrname)&&isset($usremail)&&isset($usrpsw)){
            
            
            if( $usrrole="Admin")
            {
                header('Location: ShowAllAdmin.php?uid=' . $uid);
                $_SESSION['uid']=$uid;
                $_SESSION['adminusername']=$usrname;
                $_SESSION['adminemail']=$usremail;
            }
            else{
                echo "Invalid";
                
            }
        }
    }
    catch(PDOException $error)
    {
        echo $msg=$error->getMessage();
    }
        
    }

    else{
        echo "Your password do not match!";
    }
    
    

}
}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Admin Register</title>
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> 
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> 
 <link rel="stylesheet" type="text/css" href="styleforregister.css">
</head>
<style>
.gradient-custom-3 {
  /* fallback for old browsers */
  background: #84fab0;

  /* Chrome 10-25, Safari 5.1-6 */
  background: -webkit-linear-gradient(to right, rgba(132, 250, 176, 0.5), rgba(143, 211, 244, 0.5));

  /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
  background: linear-gradient(to right, rgba(132, 250, 176, 0.5), rgba(143, 211, 244, 0.5))
}*/
/*/*/*.gradient-custom-4 {
  /* fallback for old browsers */
  background: #84fab0;

  /* Chrome 10-25, Safari 5.1-6 */
  background: -webkit-linear-gradient(to right, rgba(132, 250, 176, 1), rgba(143, 211, 244, 1));

  /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
  background: linear-gradient(to right, rgba(132, 250, 176, 1), rgba(143, 211, 244, 1))
}*/*/

</style>
<body>

				<section class="vh-100 bg-image">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">Admin Registeration Form</h2>

              <form method="POST">

                <div class="form-outline mb-4">
                  <input type="text" id="usrname" class="form-control form-control-lg" name="adminusername" required/>
                  <label class="form-label" for="usrname">Your Name</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="email" id="usremail" class="form-control form-control-lg" name="adminemail"  required/>
                  <label class="form-label" for="usrname">Your Email</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="password" id="usrpassword" class="form-control form-control-lg" name="adminpassword" required />
                  <label class="form-label" for="usrpassword">Password</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="password" id="usrrepeatpassword" class="form-control form-control-lg" name="adminrepeatpassword"  />
                  <label class="form-label" for="usrrepeatpassword">Repeat your password</label>
                </div>
                
                <div class="form-outline mb-4">
                  <input type="text" id="usrrole" class="form-control form-control-lg" name="adminrole"  disabled value="Admin"/>
                  <label class="form-label" for="usrrole">Role</label>
                </div>

<!--                 <div class="form-check d-flex justify-content-center mb-5"> -->
<!--                   <input -->
<!--                     class="form-check-input me-2" -->
<!--                     type="checkbox" -->
<!--                     value="" -->
<!--                     id="checkterms" required -->
<!--                   /> -->
<!--                   <label class="form-check-label" for="form2Example3g"> -->
<!--                     I agree all statements in <a href="#!" class="text-body"><u>Terms of service</u></a> -->
<!--                   </label> -->
<!--                 </div> -->

                <div class="mb-4">
                    <button class="btn btn-dark btn-lg btn-block" type="submit" name="submit" style="float:right">Register</button>
                  </div>

                <p class="text-center text-muted mt-5 mb-0">Have already an account? <a href="NewLogin.php" class="fw-bold text-body"><u>Login here</u></a></p>

              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

</body>
</html>