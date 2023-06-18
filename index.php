<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
   <!-- Basic -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <!-- Mobile Metas -->
   <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
   <!-- Site Metas -->
   <title>FunOlympics 2023</title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <!-- Site Icons -->
   <link rel="shortcut icon" href="" type="image/x-icon" />
   <link rel="apple-touch-icon" href="">
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
                  
               </ul>
            </div>
         </div>
      </section>  
      
      <div class="matchs-info">
      
         <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="row">
               <div class="full">
                  <div class="matchs-vs">
                     <div class="vs-team">
                        <div class="team-btw-match">
                        <?php
                                       $conn = mysqli_connect("localhost", "root", "", "sign");
                                        $q = "Select * from schedule";
                                        $qu = mysqli_query($conn, $q);
                                        while ($res= mysqli_fetch_assoc($qu)){ ?>
                           <ul>
                              <li>
                                 <img src="images/gallery/<?=$res['logo1']?>"  width="100px" height="100px" alt="">
                                 <span><?=$res['team1']?></span>
                              </li>
                              <li class="vs"><span>vs</span></li>
                              <li>
                                 <img src="images/gallery/<?=$res['logo2']?>" width="100px" height="100px" alt="">
                                 <span><?=$res['team2']?></span>
                              </li>
                           </ul>
                           <?php }
                           ?>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="row">
               <div class="full">
                  <div class="right-match-time">
                  <?php
                                       $conn = mysqli_connect("localhost", "root", "", "sign");
                                        $q = "Select * from schedule";
                                        $qu = mysqli_query($conn, $q);
                                        while ($res= mysqli_fetch_assoc($qu)){ ?>
                     <h2>Next Match</h2>
                     <ul id="countdown-1" class="countdown">
                        <li><span class="days">10 </span>Day </li>
                        <li><span class="hours">5 </span>Hours </li>
                        <li><span class="minutes">25 </span>Minutes </li>
                        <li><span class="seconds">10 </span>Seconds </li>
                     </ul>
                     <span><?=$res['date']?>/<?=$res['time']?></span>
                     <span><?=$res['venue']?></span>
                     <?php } ?>
                  </div>

               </div>
            </div>
         </div>
         
      </div>
      <section id="contant" class="contant">
         <div class="container">
            <div class="row">
               <div class="col-lg-4 col-sm-4 col-xs-12">
                  <aside id="sidebar" class="left-bar">
                     <div class="banner-sidebar">
                        <img class="img-responsive" src="images/img-05.jpg" alt="#" />
                        <h3>Lorem Ipsum is simply dummy text..</h3>
                     </div>
                  </aside>
                  <h4>Match Fixture</h4>
                  <aside id="sidebar" class="left-bar">
                     <div class="feature-matchs">
                        <div class="team-btw-match">
                           <ul>
                              <li>
                                 <img src="images/img-01_002.png" alt="">
                                 <span>USA</span>
                              </li>
                              <li class="vs"><span>vs</span></li>
                              <li>
                                 <img src="images/img-02.png" alt="">
                                 <span>Germany</span>
                              </li>
                           </ul>
                           <ul>
                              <li>
                                 <img src="images/img-03_002.png" alt="">
                                 <span>Spain</span>
                              </li>
                              <li class="vs"><span>vs</span></li>
                              <li>
                                 <img src="images/img-04_003.png" alt="">
                                 <span>Russia</span>
                              </li>
                           </ul>
                           <ul>
                              <li>
                                 <img src="images/img-05_002.png" alt="">
                                 <span>Nepal</span>
                              </li>
                              <li class="vs"><span>vs</span></li>
                              <li>
                                 <img src="images/img-06.png" alt="">
                                 <span>China</span>
                              </li>
                           </ul>
                           <ul>
                              <li>
                                 <img src="images/img-07_002.png" alt="">
                                 <span>Portugal</span>
                              </li>
                              <li class="vs"><span>vs</span></li>
                              <li>
                                 <img src="images/img-08.png" alt="">
                                 <span>Germany</span>
                              </li>
                           </ul>
                           <ul>
                              <li>
                                 <img src="images/img-05_002.png" alt="">
                                 <span>Vietnam</span>
                              </li>
                              <li class="vs"><span>vs</span></li>
                              <li>
                                 <img src="images/img-06.png" alt="">
                                 <span>Bangladesh</span>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </aside>
                  <h4>Medal Table</h4>
                  <aside id="sidebar" class="left-bar">
                     <div class="feature-matchs">
                        <table class="table table-bordered table-hover">
                           <thead>
                              <tr>
                                 <th>#</th>
                                 <th>Team</th>
                                 <th>G</th>
                                 <th>S</th>
                                 <th>B</th>
                                 <th>T</th>
                              </tr>
                           </thead>
                           <tbody>
                              <tr>
                                 <td>1</td>
                                 <td><img src="images/gallery/np.png" width="40px" height="40px" alt="">Nepal</td>
                                 <td>10</td>
                                 <td>12</td>
                                 <td>20</td>
                                 <td>42</td>
                              </tr>
                              <tr>
                                 <td>2</td>
                                 <td><img src="images/gallery/ch.png" width="40px" height="40px" alt="">China</td>
                                 <td>9</td>
                                 <td>9</td>
                                 <td>9</td>
                                 <td>27</td>
                              </tr>
                              <tr>
                                 <td>3</td>
                                 <td><img src="images/gallery/nr.png" width="40px" height="40px" alt="">Norway</td>
                                 <td>8</td>
                                 <td>7</td>
                                 <td>5</td>
                                 <td>20</td>
                              </tr>
                              <tr>
                                 <td>4</td>
                                 <td><img src="images/gallery/uk.png" width="40px" height="40px" alt="">UK</td>
                                 <td>6</td>
                                 <td>10</td>
                                 <td>5</td>
                                 <td>21</td>
                              </tr>
                              <tr>
                                 <td>5</td>
                                 <td><img src="images/gallery/cn.png" width="40px" height="40px" alt="">Canada</td>
                                 <td>3</td>
                                 <td>06</td>
                                 <td>10</td>
                                 <td>19</td>
                           
                              </tr>
                              
                           </tbody>
                        </table>
                     </div>
                  </aside>
                  <div class="content-widget top-story" style="background: url(images/top-story-bg.jpg);">
                     <div class="top-stroy-header">
                        <h2>Top Soccer Headlines Story <a href="#" class="fa fa-fa fa-angle-right"></a></h2>
                        <span class="date">July 05, 2017</span>
                        <h2>Other Headlines</h2>
                     </div>
                     <ul class="other-stroies">
                        <li><a href="#">Wenger Vardy won't start</a></li>
                        <li><a href="#">Evans: Vardy just</a></li>
                        <li><a href="#">Pires and Murray </a></li>
                        <li><a href="#">Okazaki backing</a></li>
                        <li><a href="#">Wolfsburg's Rodriguez</a></li>
                        <li><a href="#">Jamie Vardy compared</a></li>
                        <li><a href="#">Arsenal target Mkhitaryan</a></li>
                        <li><a href="#">Messi wins libel case.</a></li>
                     </ul>
                  </div>
               </div>
               <div class="col-lg-8 col-sm-8 col-xs-12">
                  <div class="news-post-holder">
                     <div class="news-post-widget">
                        <img class="img-responsive" src="images/img-01_002.jpg" alt="">
                        <div class="news-post-detail">
                           <span class="date">20 march 2016</span>
                           <h2><a href="blog-detail.html">At vero eos et accusamus et iusto odio dignissimos ducimus</a></h2>
                           <p>Just hours after that his grandma had died, Angel Di Maria imagined how she might react if he didn't play</p>
                        </div>
                     </div>
                     <div class="news-post-widget">
                        <img class="img-responsive" src="images/img-02_003.jpg" alt="">
                        <div class="news-post-detail">
                           <span class="date">20 march 2016</span>
                           <h2><a href="blog-detail.html">At vero eos et accusamus et iusto odio dignissimos ducimus</a></h2>
                           <p>Just hours after that his grandma had died, Angel Di Maria imagined how she might react if he didn't play</p>
                        </div>
                     </div>
                  </div>
                  <div class="news-post-holder">
                     <div class="news-post-widget">
                        <img class="img-responsive" src="images/img-03_003.jpg" alt="">
                        <div class="news-post-detail">
                           <span class="date">20 march 2016</span>
                           <h2><a href="blog-detail.html">At vero eos et accusamus et iusto odio dignissimos ducimus</a></h2>
                           <p>Just hours after that his grandma had died, Angel Di Maria imagined how she might react if he didn't play</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      
      
      <div class="team-holder theme-padding">
         <div class="container">
            <div class="main-heading-holder">
               <div class="main-heading sytle-2">
                  <h2>Meet Your Team</h2>
                  <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium<br>doloremque laudantium, totam rem aperiam</p>
               </div>
            </div>
            <div id="team-slider">
               <div class="container">
                  <div class="col-md-3">
                     <div class="team-column style-2">
                        <img src="images/img-1-1.jpg" alt="">
                        <div class="player-name">
                           <div class="desination-2">Defender</div>
                           <h5>Charles Wheeler</h5>
                           <span class="player-number">12</span>
                        </div>
                        <div class="overlay">
                           <div class="team-detail-hover position-center-x">
                              <p>Lacus vulputate torquent mollis venenatis quisque suspendisse fermentum primis,</p>
                              <ul class="social-icons style-4 style-5">
                                 <li><a class="facebook" href="#" tabindex="0"><i class="fa fa-facebook"></i></a></li>
                                 <li><a class="twitter" href="#" tabindex="0"><i class="fa fa-twitter"></i></a></li>
                                 <li><a class="youtube" href="#" tabindex="0"><i class="fa fa-youtube-play"></i></a></li>
                                 <li><a class="pinterest" href="#" tabindex="0"><i class="fa fa-pinterest-p"></i></a></li>
                              </ul>
                              <a class="btn blue-btn" href=" /soccer/team-detail.html" tabindex="0">View Detail</a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-3">
                     <div class="team-column style-2">
                        <img src="images/img-1-2.jpg" alt="">
                        <div class="player-name">
                           <div class="desination-2">Defender</div>
                           <h5>Charles Wheeler</h5>
                           <span class="player-number">12</span>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-3">
                     <div class="team-column style-2">
                        <img src="images/img-1-3.jpg" alt="">
                        <div class="player-name">
                           <div class="desination-2">Defender</div>
                           <h5>Charles Wheeler</h5>
                           <span class="player-number">12</span>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-3">
                     <div class="team-column style-2">
                        <img src="images/img-1-4.jpg" alt="">
                        <div class="player-name">
                           <div class="desination-2">Defender</div>
                           <h5>Charles Wheeler</h5>
                           <span class="player-number">12</span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
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