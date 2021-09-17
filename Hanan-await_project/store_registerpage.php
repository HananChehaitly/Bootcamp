
<!-- 
THEME: Aviato | E-commerce template
VERSION: 1.0.0
AUTHOR: Themefisher

HOMEPAGE: https://themefisher.com/products/aviato-e-commerce-template/
DEMO: https://demo.themefisher.com/aviato/
GITHUB: https://github.com/themefisher/Aviato-E-Commerce-Template/

WEBSITE: https://themefisher.com
TWITTER: https://twitter.com/themefisher
FACEBOOK: https://www.facebook.com/themefisher
-->


<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
  ================================================== -->
  <meta charset="utf-8">
  <title>Let us help you </title>

  <!-- Mobile Specific Metas
  ================================================== -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Construction Html5 Template">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <meta name="author" content="Themefisher">
  <meta name="generator" content="Themefisher Constra HTML Template v1.0">
  
  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
  
  <!-- Themefisher Icon font -->
  <link rel="stylesheet" href="plugins/themefisher-font/style.css">
  <!-- bootstrap.min css -->
  <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">
  
  <!-- Animate css -->
  <link rel="stylesheet" href="plugins/animate/animate.css">
  <!-- Slick Carousel -->
  <link rel="stylesheet" href="plugins/slick/slick.css">
  <link rel="stylesheet" href="plugins/slick/slick-theme.css">
  
  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/alert.css">
 
</head>

<body id="body">
<section class="signin-page account">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="block text-center">
          <a class="logo" href="index.html">
            <img src="images/logo.png" alt="">
          </a>
          <h2 class="text-center">
            <?php
            session_start();
          
            if(!empty($_SESSION["mail"])){
            $x = $_SESSION["mail"];
            echo $x;}
            elseif(!empty($_SESSION["passwordlen"])){
            $x = $_SESSION["passwordlen"];
            echo $x;}
            elseif(!empty($_SESSION["password"])){
            $x = $_SESSION["password"];
            echo $x;}
            else{
              echo 'Registration Form';
            }
            session_unset();
    ?>
          </h2>
          <form class="text-left clearfix" action="store_register.php" method="POST" id="signupForm">
         

            <div class="form-group">
            <label class="label" id="validemail"></label> 
              <input type="email" class="form-control" placeholder="email" name="email" >
            </div>
            <div class="form-group">
              <input type="password" class="form-control"  placeholder="Password" name ="password" >
            </div>

            <div class="form-group">
              <label class="label" id="cpass"></label> 
              <input type="password" class="form-control"  placeholder="Confirm Password" name ="confirmPassword" >
            </div>

          
            <div class="text-center" >
              <button type="submit" class="btn btn-main text-center" value="submit" id="reg">Register</button>
            </div>
          </form>
         
        </div>
      </div>
    </div>
  </div>
</section>
    <!-- 
    Essential Scripts
    =====================================-->
    
    <!-- Main jQuery -->
    <script src="plugins/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap 3.1 -->
    <script src="plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- Bootstrap Touchpin -->
    <script src="plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js"></script>
    <!-- Instagram Feed Js -->
    <script src="plugins/instafeed/instafeed.min.js"></script>
    <!-- Video Lightbox Plugin -->
    <script src="plugins/ekko-lightbox/dist/ekko-lightbox.min.js"></script>
    <!-- Count Down Js -->
    <script src="plugins/syo-timer/build/jquery.syotimer.min.js"></script>

    <!-- slick Carousel -->
    <script src="plugins/slick/slick.min.js"></script>
    <script src="plugins/slick/slick-animation.min.js"></script>

    <!-- Google Mapl -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCC72vZw-6tGqFyRhhg5CkF2fqfILn2Tsw"></script>
    <script type="text/javascript" src="plugins/google-map/gmap.js"></script>

    <!-- Main Js File -->    
     <script src="jquery-3.6.0.min.js"></script>
    
 
  </body>
  </html>