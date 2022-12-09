<?php
session_start();
include("include/config.php");
?>
<style> 
body {
  background-image: url("img/login/ffffffffffffffff-min.jpg");
  background-position-x: center;
  background-position-y: bottom;
}
</style>
<!DOCTYPE html>
<html style="font-size: 16px;" lang="en"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="​Nutrients, Macros, Tips, and More">
    <meta name="description" content="">
    <title>Login User</title>
    <link rel="stylesheet" href="css/login/nicepage.css" media="screen">
<link rel="stylesheet" href="css/login/LoginUser.css" media="screen">
<script class="u-script" type="text/javascript" src="js/login/jquery-1.9.1.min.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="js/login/nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 5.0.7, nicepage.com">
    <meta name="referrer" content="origin">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.min.css" rel="stylesheet">  
    
    <meta name="theme-color" content="#f05510">
    <meta property="og:title" content="LoginUser">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body u-xl-mode" data-lang="en">
    <section class="u-align-center-md u-align-center-sm u-align-center-xs u-align-right-lg u-align-right-xl u-clearfix u-image u-shading u-section-1" id="carousel_a698" data-image-width="1920" data-image-height="1080">
      <div class="u-clearfix u-sheet u-valign-middle-sm u-valign-middle-xs u-sheet-1">
        <div class="u-border-20 u-border-white u-container-style u-expanded-width-xs u-group u-shape-rectangle u-group-1">
          <div class="u-container-layout u-container-layout-1">
            <h2 class="u-custom-font u-font-roboto-condensed u-text u-text-body-alt-color u-text-default u-text-1" spellcheck="false">User Login</h2>
            <div class="u-form u-login-control u-form-1">
              <form action="loginusr_action.php" method="POST" class="u-clearfix u-form-custom-backend u-form-spacing-10 u-form-vertical u-inner-form" style="padding: 10px;">
                <div class="u-form-group u-form-name">
                  <label for="username-a30d" class="u-label">Email *</label>
                  <input type="text" placeholder="Enter your Email" id="username-a30d" name="user_email" class="u-border-grey-30 u-input u-input-rectangle u-input-1" required="">
                </div>
                <div class="u-form-group u-form-password">
                  <label for="password-a30d" class="u-label">Password *</label>
                  <input type="password" placeholder="Enter your Password" id="password-a30d" name="user_pw" class="u-border-grey-30 u-input u-input-rectangle u-input-2" required="">
                </div>
                <div class="u-form-checkbox u-form-group">
                  <input type="checkbox" id="checkbox-a30d" name="remember" value="On">
                  <label for="checkbox-a30d" class="u-label">Remember me</label>
                </div>
                <div class="u-align-left u-form-group u-form-submit">
                  <a href="#" class="u-active-grey-90 u-border-2 u-border-black u-btn u-btn-submit u-button-style u-custom-color-1 u-hover-custom-color-2 u-text-black u-text-hover-white u-btn-1">Login</a>
                  <input type="submit" value="submit" class="u-form-control-hidden" wfd-invisible="true">
                </div>
                <input type="hidden" value="" name="recaptchaResponse" wfd-invisible="true">
              </form>
            </div>
            <a href="registeruser.php" class="u-border-1 u-border-active-grey-5 u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-btn u-button-style u-login-control u-login-create-account u-none u-text-body-alt-color u-btn-3">Don't have an account?</a>
          </div>
        </div>
      </div>
    </section>
 
  <!--Footer-->
  <footer class="page-footer text-center font-small mt-4 wow fadeIn">

  <hr class="my-4">

  <!-- Social icons -->
  <div class="pb-4">
    <i class="fab fa-facebook-f mr-3"></i>

    <i class="fab fa-twitter mr-3"></i>

    <i class="fab fa-youtube mr-3"></i>

    <i class="fab fa-google-plus-g mr-3"></i>

    <i class="fab fa-dribbble mr-3"></i>

    <i class="fab fa-pinterest mr-3"></i>

    <i class="fab fa-github mr-3"></i>

    <i class="fab fa-codepen mr-3"></i>

  </div>
  <!-- Social icons -->

  <!--Copyright-->
  <div class="footer-copyright py-3">
    © 2022 Copyright: eNutri-Canteen
  </div>
  <!--/.Copyright-->

  </footer>
  <!--/.Footer-->

</body></html>