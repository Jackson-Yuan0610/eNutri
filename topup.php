<?php
session_start();
include("include/config.php");

//pass variable if login
if(isset($_SESSION["UID"])){
	$cust_id = ($_SESSION["UID"]);
	$cust_name =($_SESSION["userName"]);
	date_default_timezone_set("Asia/Kuala_Lumpur");
	$date_time = date("Y-m-d H:i:sa");
  $eco = ($_SESSION["ecogreen"]);
  $credit = ($_SESSION["credit_point"]);
}
?>
<style> 
body {
  background-image: url("img/credit/pexels-kssia-melo-12995012.jpg");
}
</style>
<!DOCTYPE html>
<html style="font-size: 16px;" lang="en"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="​&nbsp;Top Up Credit​">
    <meta name="description" content="">
    <title>Top Up</title>
    <link rel="stylesheet" href="css/topup/topup_nicepage.css" media="screen">
<link rel="stylesheet" href="css/topup/topup.css" media="screen">
    <script class="u-script" type="text/javascript" src="js/topup_jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="js/topup_nicepage.js" defer=""></script>
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

  </head>
  <body class="u-body u-xl-mode" data-lang="en">
    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar">
    <div class="container">
      <!-- Brand -->
      <a class="navbar-brand waves-effect" target="_blank">
        <strong class="blue-text">eNutri-Canteen</strong>
      </a>

      <!-- Collapse -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
	    <!-- Links -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- Left -->
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link waves-effect" href="index.php"><i class="fa fa-fw fa-home"></i> Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link waves-effect" href="profile.php"><i class="fas fa-user-alt"></i>Profile</a>
          </li>    
		  <li class="nav-item">
            <a class="nav-link waves-effect" href="menu.php"><i class="fas fa-pizza-slice"></i><br> Food Menu</a>
          </li>		  
		  <li class="nav-item">
            <a class="nav-link waves-effect" href="nutrition.php"><i class="fas fa-seedling"></i><br> Nutrition Table</a>
          </li>
          <li class="nav-item">
            <a class="nav-link waves-effect" href="order.php"><i class="fas fa-utensils"></i><br> My Order</a>
          </li>
		  <li class="nav-item active">
            <a class="nav-link waves-effect" href="credit.php"><i class="fas fa-credit-card"></i><br> My Credit</a>
          </li>
		  <li class="nav-item">
            <a class="nav-link waves-effect" href="reward.php"><i class="fas fa-gift"></i> Reward</a>
          </li>
          <li class="nav-item">
            <a class="nav-link waves-effect" href="review.php"><i class="fas fa-thumbs-up"></i> Review</a>
          </li>
		  <li class="nav-item">
			<a href="cart_action.php" class="nav-link waves-effect">
				<i class="fas fa-shopping-cart"></i>
				<span class="clearfix d-none d-sm-inline-block"> My Cart <?php
					if(isset($_SESSION["cart_item"])){
					$countItem = count($_SESSION["cart_item"]);
					echo "<b>($countItem)</b>&nbsp;</p>";
				} else {
						echo "<b>(0)&nbsp;</p>";
				} ?></span>
			</a>
   		  </li>
          </ul>
		  <!-- Right -->
		  <ul class="navbar-nav nav-flex-icons">
			<li class="nav-item">
				<?php //login&logout section
				if(isset($_SESSION["UID"])){
					echo $_SESSION["userName"];
					?> <a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
				<?php
				}
				else{
					echo '<a href="login.php" class="nav-link border border-light rounded waves-effect"><i class="fas fa-sign-in-alt"></i> Login </a>';
				}?>
			</li>
		</ul>	  
		</div>
	</div>
  </nav>
  <!-- Navbar -->

    <section class="u-clearfix u-image u-shading u-section-1" src="" id="carousel_442a" data-image-width="1280" data-image-height="853">
    <br><br><br></br></br></br>

      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-gallery u-layout-grid u-lightbox u-show-text-on-hover u-gallery-1">
          <div class="u-gallery-inner u-gallery-inner-1">
        <?php
        $sql = "SELECT * FROM paymethod";
        $res = mysqli_query($conn, $sql);
        if (mysqli_num_rows($res)> 0) {
        //output data of each row
            while($row = mysqli_fetch_assoc($res)) {
            ?>
                <div class="u-effect-fade u-gallery-item">
                <div class="u-back-slide" data-image-width="827" data-image-height="1076">
                    <img class="u-back-image u-expanded" src="<?php echo htmlentities($row['method_img']); ?>">
                </div>
                <div class="u-over-slide u-shading u-over-slide-1">
                    <h3 class="u-gallery-heading"></h3>
                    <p class="u-gallery-text"></p>
                </div>
                </div>
            <?php
            }
        }
        else{
            echo "<br>";
            echo" Sorry, No payment method is provided";
        }
            mysqli_close($conn);	
        ?>

          </div>
        </div>            
        <div class="u-clearfix u-layout-wrap u-layout-wrap-1"></br>
          <div class="u-layout">
            <div class="u-layout-col">
              <div class="u-align-center u-container-style u-gradient u-layout-cell u-radius-50 u-size-60 u-layout-cell-1">
                <div class="u-container-layout u-container-layout-1">
                  <h1 class="u-hover-feature u-text u-text-default u-title u-text-1" data-animation-name="bounceIn" data-animation-duration="1000" data-animation-direction="" data-animation-delay="0"><span class="u-file-icon u-icon"><img src="images/584052.png" alt=""></span>&nbsp;Top Up Credit 
                  </h1>
                  <div class="u-form u-form-1">
                    <form method="post" action="credit_payment.php" class="u-clearfix u-form-spacing-32 u-inner-form" name="form" style="padding: 10px;">
                      <div class="u-form-email u-form-group u-form-partition-factor-2">
                        <label for="email-bb9b" class="u-label">Credit Amount</label>
                        <input type="text" placeholder="Please enter a valid amount" id="credit" name="credit" class="u-grey-5 u-input u-input-rectangle u-radius-50" required="">
                      </div>
                      <div class="u-form-group u-form-name u-form-partition-factor-2">
                        <br><label for="name-bb9b" class="u-label">Receipt</label>
                        <input type="file"  id="receipt" name="receipt" class="u-grey-5 u-input u-input-rectangle u-radius-50" required="">
                      </div>
                      <div class="u-align-right u-form-group u-form-submit">
                        <input type="submit" value="submit" class="u-border-2 u-border-black u-btn u-btn-submit u-button-style u-gradient u-hover-black u-none u-text-black u-text-hover-white u-btn-1">
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
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

  <!-- Animation SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Initializations -->
  <script type="text/javascript">
    // Animations initialization
    new WOW().init();

  </script> 
  
</body></html>