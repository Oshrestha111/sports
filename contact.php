<!DOCTYPE html>
<html lang="en">
   <!-- Basic -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <!-- Mobile Metas -->
   <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
   <!-- Site Metas -->
   <title>Game Info</title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <!-- Site CSS -->
   <link rel="stylesheet" href="style.css">
   <!-- Colors CSS -->
   <link rel="stylesheet" href="css/colors.css">
   <!-- ALL VERSION CSS -->	
   <link rel="stylesheet" href="css/versions.css">
   <!-- Responsive CSS -->
   <link rel="stylesheet" href="css/responsive.css">
   <!-- Custom CSS -->
   <link rel="stylesheet" href="css/custom.css">
   <!-- font family -->
   <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
   <!-- end font family -->
   <link rel="stylesheet" href="css/3dslider.css" />
   <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
   <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
   <script src="js/3dslider.js"></script>
   </head>
   <body class="game_info" data-spy="scroll" data-target=".header">
      <!-- LOADER -->
      <div id="preloader">
         <img class="preloader" src="images/loading-img.gif" alt="">
      </div>
      <!-- END LOADER -->
      <section id="top">
         <header>
            <div class="container">
               <?php include "topheader.php"; ?>
               <div id="myheader"></div>
            </div>
         </header>
         <div class="inner-page-banner">
            <div class="container">
            </div>
         </div>
         <div class="inner-information-text">
            <div class="container">
               <h3>Our Team</h3>
               <ul class="breadcrumb">
                  <li><a href="index.php">Home</a></li>
                  <li class="active">Contact Us</li>
               </ul>
            </div>
         </div>
      </section>  
      <section id="contant" class="contant main-heading team">
         <div class="row">
            <div class="container">
               <div class="contact">
                  <div class="col-md-12">
                     <div class="map"> 
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3503.580671926123!2d77.31096031514461!3d28.582351982437654!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cfcad59dc9d0b%3A0xe4060212422c0b9a!2sLeopedia+Web+Solutions!5e0!3m2!1sen!2sin!4v1511962485065" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="contact-info">
                        <div class="kode-section-title">
                           <h3>Contact Info</h3>
                        </div>
                        <div class="kode-forminfo">
                           <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam aliquip..</p>
                           <ul class="kode-form-list">
                              <li>
                                 <i class="fa fa-home"></i> 
                                 <p><strong>Address:</strong> 805 consectetur adipiscing elit, sed do eiusmod tempor</p>
                              </li>
                              <li>
                                 <i class="fa fa-phone"></i> 
                                 <p><strong>Phone:</strong>  123 456 7890</p>
                              </li>
                              <li>
                                 <i class="fa fa-envelope-o"></i> 
                                 <p><strong>Email:</strong> Info@sportyleague.com</p>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="contact-us">
                        <form method="post" class="comments-form" id="contactform">
                           <ul>
                              <li><input type="text" id="name" name="name" class="required" placeholder="Name *"></li>
                              <li><input type="text" id="email" name="email" class="required email" placeholder="Email *"></li>
                              <li><input type="text" name="address" id="address" placeholder="Address:"></li>
                              <li><textarea name="message" id="message" placeholder="Add your message"></textarea></li>
                              <li><input class="thbg-color" type="submit" value="send"></li>
                           </ul>
                           <div class="hidden-me" id="contact_form_responce">
                              <p></p>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <footer id="footer" class="footer">
         <div class="container">
            <div class="row">
               <div class="col-md-4">
                  <div class="full">
                     <div class="footer-widget">
                        <div class="footer-logo">
                           <a href="#"><img src="images/footer-logo.png" alt="#" /></a>
                        </div>
                        <p>Most of our events have hard and easy route choices as we are always keen to encourage new riders.</p>
                        <ul class="social-icons style-4 pull-left">
                           <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                           <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                           <li><a class="youtube" href="#"><i class="fa fa-youtube-play"></i></a></li>
                           <li><a class="pinterest" href="#"><i class="fa fa-pinterest-p"></i></a></li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="col-md-2">
                  <div class="full">
                     <div class="footer-widget">
                        <h3>Menu</h3>
                        <ul class="footer-menu">
                           <li><a href="about.html">About Us</a></li>
                           <li><a href="team.html">Our Team</a></li>
                           <li><a href="news.html">Latest News</a></li>
                           <li><a href="matche.html">Recent Matchs</a></li>
                           <li><a href="blog.html">Our Blog</a></li>
                           <li><a href="contact.html">Contact Us</a></li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="col-md-3">
                  <div class="full">
                     <div class="footer-widget">
                        <h3>Contact us</h3>
                        <ul class="address-list">
                           <li><i class="fa fa-map-marker"></i> Lorem Ipsum is simply dummy text of the printing..</li>
                           <li><i class="fa fa-phone"></i> 123 456 7890</li>
                           <li><i style="font-size:20px;top:5px;" class="fa fa-envelope"></i> demo@gmail.com</li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="col-md-3">
                  <div class="full">
                     <div class="contact-footer">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d120615.72236587871!2d73.07890527988283!3d19.140910987164396!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1527759905404" width="600" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="footer-bottom">
            <div class="container">
               <p>Copyright © 2018 GameInfo.All rights reserved.</p>
            </div>
         </div>
      </footer>
      <a href="#home" data-scroll class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>
      <!-- ALL JS FILES -->
      <script src="js/all.js"></script>
      <!-- ALL PLUGINS -->
      <script src="js/custom.js"></script>
      <script src="js/header.js"></script>
   </body>
</html>