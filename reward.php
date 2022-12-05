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

if(!empty($_GET["rewardid"])) {
  $id= $_GET["rewardid"];
  $sql2 = "SELECT * FROM reward WHERE reward_id = $id ";
  $result2 = mysqli_query($conn, $sql2);
  if (mysqli_num_rows($result2) > 0) {
    while($row = mysqli_fetch_assoc($result2)) {
      $code = $row["reward_code"];
      if($eco > $row["reward_point"]){
        $eco -= $row["reward_point"];
        $_SESSION["ecogreen"] = $eco;
        $sql3 = "SELECT * FROM reward_list WHERE user_id = '$cust_id' AND reward_id = $id ";
        $result3 = mysqli_query($conn, $sql3);
        if (mysqli_num_rows($result3) > 0) {
          $sql4 = "UPDATE reward_list SET reward_quantity = reward_quantity + 1 WHERE user_id = '$cust_id' AND reward_id = $id ";
          mysqli_query($conn, $sql4);
          $sql5 = "UPDATE user set eco_point = $eco WHERE user_id = '$cust_id' ";
          mysqli_query($conn, $sql5);
            echo "<script>alert('Redeem Successfully')</script>";          
        }
        else{
          $sql6 = "INSERT INTO reward_list (user_id, reward_id, reward_code, reward_quantity) 
          VALUES ('$cust_id', '$id', '$code', 1)";
            if(mysqli_query($conn, $sql6)){
              $sql7 = "UPDATE user set eco_point = $eco WHERE user_id = '$cust_id' ";
              mysqli_query($conn, $sql7);
              echo "<script>alert('Redeem Successfully')</script>";
            }
            else{
              echo "Redeem failed.";
            }
        }

      }
      else{
        echo "<script>alert('No available point to redeem.')</script>";
      }
    }
  }
}

?>
<!DOCTYPE html>
<html style="font-size: 16px;" lang="en"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta charset="utf-8">
    <meta name="keywords" content="Menu">
    <title>reward</title>
    <link rel="stylesheet" href="css/nicepage.css" media="screen">
    <link rel="stylesheet" href="css/reward.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery-1.9.1.min.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.min.css" rel="stylesheet"> 

    <meta name="theme-color" content="#f05510">
    <meta property="og:title" content="reward">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body u-xl-mode" data-lang="en"><header class="u-clearfix u-header u-header" id="sec-2b6b">
  <body>
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
		  <li class="nav-item">
            <a class="nav-link waves-effect" href="credit.php"><i class="fas fa-credit-card"></i><br> My Credit</a>
          </li>
		  <li class="nav-item active">
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
      </body>
    </header>
    <section class="u-align-center u-clearfix u-grey-10 u-section-1" id="sec-922b">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <br><br><h1 class="u-custom-font u-font-oswald u-text u-text-default u-text-palette-3-base u-text-1 "><br>Redeem Reward</br></h1>
        <p class="u-text u-text-2"><br>Variety of Reward is available now. Please try to redeem it with the required eco-green points.</br>Stay Health, Stay Wealth!</p></br>
        <p class="u-text u-text-3"><span class="u-file-icon u-icon u-icon-1"><img src="img/reward/ecogreen.png" alt=""></span>Eco Green Point :&nbsp;<?php echo "$eco"; ?> Point
        </p>
        <div class="u-expanded-width u-list u-list-4">

          <div class="u-repeater u-repeater-1">
                    <?php
          $sql = "SELECT * FROM reward ";
          $result = mysqli_query($conn, $sql);
          if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
        ?> 
            <div class="u-container-style u-list-item u-repeater-item u-white u-list-item-1">
              <div class="u-container-layout u-similar-container u-valign-top-lg u-valign-top-md u-valign-top-sm u-valign-top-xl u-container-layout-1">
                <img alt="" class="u-expanded-width-xs u-image u-image-default u-image-1" src="<?php echo htmlentities($row['reward_img']); ?>">
                <div class="u-align-left-xs u-container-style u-expanded-width-xs u-group u-video-cover u-group-1">
                  <div class="u-container-layout u-valign-middle-xs u-container-layout-2">
                    <form action="reward.php?rewardid=<?php echo $row["reward_id"]; ?>" method="GET">
                    <input type="hidden" id="rewardId" name="rewardid" value=<?php echo $row['reward_id']; ?>>
                    <h2 class="u-custom-font u-font-oswald u-text u-text-3"><?php echo htmlentities($row['reward_name']);?></h2>
                    <p class="u-text u-text-4"><?php echo htmlentities($row['reward_desc']);?></p>
                    <h6 class="u-text u-text-palette-3-base u-text-5"><?php echo htmlentities($row['reward_point']);?> Points</h6>
                    <button type="submit" class="u-btn u-btn-rectangle u-button-style u-grey-10 u-btn-1">Redeem</button>
                    </form>

                  </div>
                </div>
              </div>
            </div>
            <?php 
        }//while
      }//if
        else {
          echo "Sorry, 0 result found";
      } 

      mysqli_close($conn);
    ?> 
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