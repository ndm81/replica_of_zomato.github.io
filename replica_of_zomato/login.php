<?php 
  // we will use seesion to stored the data on the server rather than user's computer
   session_start();
   session_destroy();


?>

<!DOCTYPE html>
<html>
<head>
   <title></title>

   <?php include 'css/style.php'?>
    <?php include 'link/link.php'?>


</head>
<body>
      <?php 
       include 'dbcon.php';  //Connection Created
       if (isset($_POST['submit'])) {
          // Now we will fetch user email Id and Password.
            $email = $_POST['email'];
            $password = $_POST['password'];

            //we will write query the exixtence of the data
            $email_search = "select * from registration where email='$email'";
            $query = mysqli_query($con, $email_search);

            $email_count = mysqli_num_rows($query);

            if($email_count) {
                $email_pass = mysqli_fetch_assoc($query);

                $db_pass = $email_pass['password']; 

                $pass_decode = password_verify($password, $db_pass);

                if ($pass_decode) {
                    echo "Login Successfull";
                }else{
                     echo "Password Incorrect";
               } }else{
                        echo "Invalid Email";
                }
             
       }
      ?>


    <div class="container">
        <div class="row">
         <div class="col-md-5 mx-auto">
         <div id="first">
            <div class="myform form ">
                <div class="logo mb-3">
                   <div class="col-md-12 text-center">
                     <h1>Login</h1>
                     <h4 class="card-title mt-3 text-center">Create Account</h4>
                    <p class="text-center">Get started with your free account</p>
                    <p>
                      <a href="" class="btn  btn-twitter"> <i class="fab fa-twitter"></i>   Login via Twitter</a>
                      <a href="" class="btn  btn-facebook"> <i class="fab fa-facebook-f"></i>   Login via facebook</a>
                    </p>
                   </div>
               </div>
                   <form action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="POST">   <!-- htmlentities refer no harm -->
                           <div class="form-group">
                              <label for="exampleInputEmail1">Email address</label>
                              <input type="email" name="email"  class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
                           </div>
                           <div class="form-group">
                              <label for="exampleInputEmail1">Password</label>
                              <input type="password" name="password" id="password"  class="form-control" aria-describedby="emailHelp" placeholder="Enter Password">
                           </div>
                          <!-- <div class="form-group">
                              <p class="text-center">By signing up you accept our <a href="#">Terms Of Use</a></p>
                           </div> -->
                           <div class="col-md-12 text-center ">
                              <button type="submit" name="submit" class=" btn btn-block mybtn btn-primary tx-tfm">Login Now</button>
                           </div>
                          
                          
                           <div class="form-group">
                              <p class="text-center">Don't have account? <a href="signup.php" id="signup">Sign up here</a></p>
                           </div>
                        </form>
                 
            </div>
         </div>
          
         </div>
      </div>
      </div>   
         
</body>

</html>