<?php
session_start();
if(!empty($_SESSION['login'])){
//jika masih ada session login alihkan ya
  header('Location: halamanhotel.php');
  exit;
}
?>
<!DOCTYPE HTML>
<html>
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AFW Hotel</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="" />
  <meta name="keywords" content="" />
  <meta name="author" content="" />

  <!-- Facebook and Twitter integration -->
  <meta property="og:title" content=""/>
  <meta property="og:image" content=""/>
  <meta property="og:url" content=""/>
  <meta property="og:site_name" content=""/>
  <meta property="og:description" content=""/>
  <meta name="twitter:title" content="" />
  <meta name="twitter:image" content="" />
  <meta name="twitter:url" content="" />
  <meta name="twitter:card" content="" />

  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700" rel="stylesheet">
  
  <!-- Animate.css -->
  <link rel="stylesheet" href="css/animate.css">
  <!-- Icomoon Icon Fonts-->
  <link rel="stylesheet" href="css/icomoon.css">
  <!-- Bootstrap  -->
  <link rel="stylesheet" href="css/bootstrap.css">

  <!-- Magnific Popup -->
  <link rel="stylesheet" href="css/magnific-popup.css">

  <!-- Flexslider  -->
  <link rel="stylesheet" href="css/flexslider.css">

  <!-- Owl Carousel -->
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  
  <!-- Date Picker -->
  <link rel="stylesheet" href="css/bootstrap-datepicker.css">
  <!-- Flaticons  -->
  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

  <!-- Theme style  -->
  <link rel="stylesheet" href="css/style.css">

  <!-- Modernizr JS -->
  <script src="js/modernizr-2.6.2.min.js"></script>
  <!-- FOR IE9 below -->
  <!--[if lt IE 9]>
  <script src="js/respond.min.js"></script>
  <![endif]-->

  </head>
  <body>
    
  <div class="colorlib-loader"></div>

  <div id="page">
    <nav class="colorlib-nav" role="navigation">
      <div class="top">
        <div class="container">
          <div class="row">

          </div>
        </div>
      </div>
      <div class="top-menu">
        <div class="container">
          <div class="row">
            <div class="col-xs-2">
              <div id="colorlib-logo"><a href="index.php">AFW Hotel</a></div>
            </div>
            <div class="col-xs-10 text-right menu-1">
              <ul>
                <li class="active"><a href="index.php">Home</a></li>
                <li><a href="abouthotel.html">About</a></li>
                <li><a href="login.php">Sign In</a></li>
                <li><a href="daftar.php">Sign Up</a></li>
                
              </ul>
            </div>
          </div>
        </div>
      </div>
    </nav>
    <aside id="colorlib-hero">
      <div class="flexslider">
        <ul class="slides">
          <li style="background-image: url(images/img_bg_5.jpg);">
            <div class="overlay"></div>
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-6 col-sm-12 col-md-offset-3 slider-text">
                  <div class="slider-text-inner text-center">
                    <h2>Welcome to the AFW Hotel</h2>
                    <h1>A AFW Hotel</h1>
      
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li style="background-image: url(images/luxehotel.jpg);">
            <div class="overlay"></div>
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-6 col-sm-12 col-md-offset-3 slider-text">
                  <div class="slider-text-inner text-center">
                    <h2>Discover &amp; Enjoy</h2>
                    <h1>Everything you need in AFW Hotel</h1>
  
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li style="background-image: url(images/img_bg_3.jpg);">
            <div class="overlay"></div>
            <div class="container-fluids">
              <div class="row">
                <div class="col-md-6 col-sm-12 col-md-offset-3 slider-text">
                  <div class="slider-text-inner text-center">
                    <h2>You are invited</h2>
                    <h1>We know how to please you</h1>
      
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li style="background-image: url(images/img_bg_4.jpg);">
            <div class="overlay"></div>
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-6 col-sm-12 col-md-offset-3 slider-text">
                  <div class="slider-text-inner text-center">
                    <h2>Come &amp; enjoy the unforgetable nights</h2>
                    <h1>In the heart of AFW Hotel</h1>
                  </div>
                </div>
              </div>
            </div>
          </li>     
          </ul>
        </div>
    </aside>
    
    <div id="colorlib-rooms" class="colorlib-light-grey">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-md-offset-3 text-center colorlib-heading animate-box">
            <span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span>
            <h2>Rooms &amp; Suites</h2>
            <p>
You are comfortable we are perfect.</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 animate-box">
            <div class="owl-carousel owl-carousel2">
              <div class="item">
                <a href="images/room-1.jpg" class="room image-popup-link" style="background-image: url(images/room-1.jpg);"></a>
                <div class="desc text-center">
                  <span class="rate-star"><i class="icon-star-full full"></i><i class="icon-star-full full"></i><i class="icon-star-full full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span>
                  <h3><a>Suite</a></h3>
                  <p class="price">
                    <span class="currency">$</span>
                    <span class="price-room">99</span>
                    <span class="per">/ per night</span>
                  </p>
                  <ul>
                    <li><i class="icon-check"></i> Only 10 rooms are available</li>
                    <li><i class="icon-check"></i> Breakfast included</li>
                    <li><i class="icon-check"></i> Price does not include VAT &amp; services fee</li>
                  </ul>
                  
                </div>
              </div>
              <div class="item">
                <a href="images/room-2.jpg" class="room image-popup-link" style="background-image: url(images/room-2.jpg);"></a>
                <div class="desc text-center">
                  <span class="rate-star"><i class="icon-star-full full"></i><i class="icon-star-full full"></i><i class="icon-star-full full"></i><i class="icon-star-full full"></i><i class="icon-star-full"></i></span>
                  <h3><a>Double Room</a></h3>
                  <p class="price">
                    <span class="currency">$</span>
                    <span class="price-room">199</span>
                    <span class="per">/ per night</span>
                  </p>
                  <ul>
                    <li><i class="icon-check"></i> Perfect for traveling couples</li>
                    <li><i class="icon-check"></i> Breakfast included</li>
                    <li><i class="icon-check"></i> Price does not include VAT &amp; services fee</li>
                  </ul>
                  
                </div>
              </div>
              <div class="item">
                <a href="images/room-3.jpg" class="room image-popup-link" style="background-image: url(images/room-3.jpg);"></a>
                <div class="desc text-center">
                  <span class="rate-star"><i class="icon-star-full full"></i><i class="icon-star-full full"></i><i class="icon-star-full full"></i><i class="icon-star-full full"></i><i class="icon-star-full"></i></span>
                  <h3><a>Family Room</a></h3>
                  <p class="price">
                    <span class="currency">$</span>
                    <span class="price-room">249</span>
                    <span class="per">/ per night</span>
                  </p>
                  <ul>
                    <li><i class="icon-check"></i> Two double beds</li>
                    <li><i class="icon-check"></i> Babysitting facilities</li>
                    <li><i class="icon-check"></i> 1 free bed available on request</li>
                  </ul>
                  
                </div>
              </div>
              <div class="item">
                <a href="images/room-4.jpg" class="room image-popup-link" style="background-image: url(images/room-4.jpg);"></a>
                <div class="desc text-center">
                  <span class="rate-star"><i class="icon-star-full full"></i><i class="icon-star-full full"></i><i class="icon-star-full full"></i><i class="icon-star-full full"></i><i class="icon-star-full"></i></span>
                  <h3><a>Standar Double Room</a></h3>
                  <p class="price">
                    <span class="currency">$</span>
                    <span class="price-room">150</span>
                    <span class="per">/ per night</span>
                  </p>
                  <ul>
                    <li><i class="icon-check"></i> Only 10 rooms are available</li>
                    <li><i class="icon-check"></i> Breakfast included</li>
                    <li><i class="icon-check"></i> Price does not include VAT &amp; services fee</li>
                  </ul>
                  
                </div>
              </div>
              <div class="item">
                <a href="images/room-5.jpg" class="room image-popup-link" style="background-image: url(images/room-5.jpg);"></a>
                <div class="desc text-center">
                  <span class="rate-star"><i class="icon-star-full full"></i><i class="icon-star-full full"></i><i class="icon-star-full full"></i><i class="icon-star-full full"></i><i class="icon-star-full"></i></span>
                  <h3><a>Deluxe Double Room</a></h3>
                  <p class="price">
                    <span class="currency">$</span>
                    <span class="price-room">200</span>
                    <span class="per">/ per night</span>
                  </p>
                  <ul>
                    <li><i class="icon-check"></i> Perfect for traveling couples</li>
                    <li><i class="icon-check"></i> Breakfast included</li>
                    <li><i class="icon-check"></i> Price does not include VAT &amp; services fee</li>
                  </ul>
                  
                </div>
              </div>
              <div class="item">
                <a href="images/room-6.jpg" class="room image-popup-link" style="background-image: url(images/room-6.jpg);"></a>
                <div class="desc text-center">
                  <span class="rate-star"><i class="icon-star-full full"></i><i class="icon-star-full full"></i><i class="icon-star-full full"></i><i class="icon-star-full full"></i><i class="icon-star-full"></i></span>
                  <h3><a>Deluxe Family Room</a></h3>
                  <p class="price">
                    <span class="currency"><small>$</small></span>
                    <span class="price-room">299</span>
                    <span class="per">/ per night</span>
                  </p>
                  <ul>
                    <li><i class="icon-check"></i> Perfect for traveling couples</li>
                    <li><i class="icon-check"></i> Breakfast included</li>
                    <li><i class="icon-check"></i> Price does not include VAT &amp; services fee</li>
                  </ul>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <div id="colorlib-testimony" class="colorlib-light-grey">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-md-offset-3 text-center colorlib-heading animate-box">
            <span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span>
            <h2>Our Satisfied Guests says</h2>
            <p>We love to tell our successful far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
          </div>
        </div>
        <div class="row">
        <div class="col-md-4 animate-box">
          <div class="testimony text-center">
            <span class="img-user" style="background-image: url(images/husni.jpg);"></span>
            <span class="user">Husni Martin Sulaeman</span>
            <small>Satisfied Customer</small>
            <blockquote>
              <p></i>make all the people who despise you regret their actions, by continuing to do good deeds that are beneficial to achieve success .</p>
              
            </blockquote>
          </div>
        </div>
        <div class="col-md-4 animate-box">
          <div class="testimony text-center">
            <span class="img-user" style="background-image: url(images/imam.jpg);"></span>
            <span class="user">Imam Purnomo</span>
            <small>Satisfied Customer</small>
            <blockquote>
              <p></i> success is not about age or also about capital that is big or even smart in class. Because success comes from hard work,
               networking, strong motivation and good attitude.</p>
            </blockquote>
          </div>
        </div>
        <div class="col-md-4 animate-box">
          <div class="testimony text-center">
            <span class="img-user" style="background-image: url(images/zenab.jpg);"></span>
            <span class="user">Nur Zaenab</span>
            <small>Satisfied Customer</small>
            <blockquote>
              <p></i> If you want to be happy and successful don't be an employee.</p>
            </blockquote>
          </div>
        </div>
      </div>
      </div>
    </div>

  
    <div id="colorlib-subscribe" style="background-image: url(images/img_bg_2.jpg);">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          
        </div>
      </div>
    </div>
   <footer id="colorlib-footer" role="contentinfo">
      <div class="container">
        <div class="row row-pb-md">
          <div class="col-md-3 colorlib-widget">
            <h4>AFW Hotel</h4>
            <p> A hotel that suits you who want to rest or stay, we provide facilities, with the comfort you need, your comfort is perfection for us..</p>
          </div>
          <div class="col-md-3 colorlib-widget">
            <h4>Quick Links</h4>
            <p>
              <ul class="colorlib-footer-links">
                <li><a href="index.php">Home</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="daftar.php">Sign Up</a></li>
                <li><a href="abouthotel.html">About</a></li>
                
              </ul>
            </p>
          </div> 
          <div class="col-md-3 col-md-push-1">
            <h4>Contact Information</h4>
            <ul class="colorlib-footer-links">
              <li><a href="#">+6285817035017</a></li>
              <li><a href="#">AFW Hotel.com</a></li>
              <li><a href="#">@_mzls_06</a></li>
              <li><a href="#">Muhammad Zheni Luthfi Saleh</a></li>
            </ul>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">
            <p>
              <small class="block"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved 
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></small> 
              <small>AFW Official</a></small>
            </p>
          </div>
        </div>
      </div>
    </footer>
  </div>

  <div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
  </div>
  
  <!-- jQuery -->
  <script src="js/jquery.min.js"></script>
  <!-- jQuery Easing -->
  <script src="js/jquery.easing.1.3.js"></script>
  <!-- Bootstrap -->
  <script src="js/bootstrap.min.js"></script>
  <!-- Waypoints -->
  <script src="js/jquery.waypoints.min.js"></script>
  <!-- Flexslider -->
  <script src="js/jquery.flexslider-min.js"></script>
  <!-- Owl carousel -->
  <script src="js/owl.carousel.min.js"></script>
  <!-- Magnific Popup -->
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/magnific-popup-options.js"></script>
  <!-- Date Picker -->
  <script src="js/bootstrap-datepicker.js"></script>
  <!-- Main -->
  <script src="js/main.js"></script>

  </body>
</html>




echo $html;
?>
