
<!--fetch To return a single row from a result set as an array or object -->
<!-- fetchall To return all of the rows from the result set as an array of arrays or objects -->
<!--fetchaccos Returns an array indexed by column name as returned in your result set. -->

<?php include 'layout/coon.php';
$isActive = 'index.php';



?>

<!DOCTYPE html>
<html lang="zxx">

     <?php    include 'layout/head.php'; ?>
    
    <body>
    

   <?php include 'layout/navbar.php' ;
   
   if (isset($_POST["sign_out"])) {
    // Perform logout actions here, then redirect to index.php
    session_destroy();
    header("Location: index.php");
    exit(); // Ensure script execution stops after the redirection header
}
   
   
   
   ?>


   <div class="main-banner" id="top">

        <!-- ***** form  ***** -->
        <div class="subscribe">
        <div class="container">
   <?php





        if (isset($_POST['submit'])) {
            $email = $_POST['name'];
            $password = $_POST['Password']; 
          
    
    
            $stmt = $conn->query("SELECT * FROM users WHERE email = '$email' AND password = '$password'");
         
            $userData = $stmt->fetch();}
            
         if (!empty($userData)) {
           
            $_SESSION['name']    = $userData['email'] ;
          
         }
            
    
            if (!empty($userData) ) {
                
                 header("Location: products.php");
                exit();
            } else {
                $error_message = "Invalid username or password";
            }
        
    
        

   
   ?>



         
            <div class="row">
        <?php 
       
        
        if (!isset($_SESSION['name'])) {
   

   ?>
                <div class="col-lg-6  align-items-center justify-content-center" style="margin-top: 10%;">
                    <div class="text-center mb-5">
                    <h1 style="color: #064F72; text-decoration: underline" >welcome To Our Site</h1>
                    </div>
                    <form method="post"  >
                      <div class="form-group mb-4 ">
                        <label  for="exampleInputEmail1" class="form-label">Email</label>
                        <input type="email" name="name" value="<?php   echo $email ?? '';  ?>" class="form-control rounded" id="exampleInputEmail1" aria-describedby="emailHelp">
                      </div>
                      <div class="form-group mb-5 ">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" name="Password" class="form-control rounded" id="exampleInputPassword1">
                      </div>
                      <button name="submit" type="submit" class="btn btn-primary">Sing in</button>
                     <!-- Error message -->
                     <?php if (isset($error_message , $_POST['submit']) && empty($userData) ) { ?>
                        <div class="alert alert-danger mt-4" role="alert">
                            <?php echo $error_message; ?>
                        </div>
                    <?php } ?>

                   
                    </form>
                  </div>

                  <?php }else {    ?>
                    
                

          <div class="col-lg-6  align-items-center justify-content-center">
          <h1 class="user-select-all" style="font-size: 60px ;margin-top: 30%;">welcome back in Our Site <span style="color: #064F72;">`ElectroNacer`</span></h1>
 
          </div>
                  
                 <?php    } ?>


                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-12">
                            <img src="./img/91-919988_electronic-desktop-wallpaper-transprent-png-royalty-background-circuit.png" alt="">
                        </div>
                      
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
 

    
   <?php include 'layout/footer.php' ; ?>

   <?php include 'layout/js.php' ; ?>
    
  </body>
</html>