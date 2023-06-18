<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
a:link {
  color: green;
  background-color: transparent;
  text-decoration: none;
}
a:visited {
  color: pink;
  background-color: transparent;
  text-decoration: none;
}
a:hover {
  color: red;
  background-color: transparent;
  text-decoration: underline;
}
a:active {
  color: yellow;
  background-color: transparent;
  text-decoration: underline;
}
</style>
</head>

<body>
    
<div class="header-top">
                  <div class="row">
                     <div class="col-md-6">
                        <div class="full">
                           <div class="logo">
                              <a href="index.php"><img src="images/logo.png" width="100px" height="100px" alt="#" /></a>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="right_top_section">                           
                           
                           <!-- end social icon -->
                           <!-- button section -->
                           <?php
                           if (isset($_SESSION['id']) && isset($_SESSION['fname'])) {
                echo ('Welcome ' . $_SESSION['fname']); ?>
                <a href="logout.php"><i class="fa fa-shopping-cart"></i>Logout</a>
                 
                <?php } else{
                    echo ('Sign In to Continue '); ?>
                    <br>
                    <a href="login.php" class="login"><i class="fa fa-user" ></i>Login</a>
                <?php
                }?>                           
                        </div>
                     </div>
                  </div>
               </div>

            
            
            
            
       

    

</body>

</html>