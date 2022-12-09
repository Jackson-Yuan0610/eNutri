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
  $cust_credit = ($_SESSION["credit_point"]);
  $topup_pend = 0;
  $cashout_pend = 0;
  $total_credit = 0;
  $total_cashout = 0;
}
$sql="SELECT * FROM payment WHERE user_id = $cust_id AND payment_type LIKE 'Topup' AND payment_status = '1' ";
$res = mysqli_query($conn, $sql);
if (mysqli_num_rows($res)> 0) {
//output data of each row
    while($row = mysqli_fetch_assoc($res)) {
      $topup_pend += $row["amount_price"];
      
    }
}
else{
    $topup_pend = 0;
}

$sql2="SELECT * FROM payment WHERE user_id = $cust_id AND payment_type LIKE 'Cashout' AND payment_status = '1' ";
$res2 = mysqli_query($conn, $sql2);
if (mysqli_num_rows($res2)> 0) {
//output data of each row
    while($row = mysqli_fetch_assoc($res2)) {
      $cashout_pend += $row["amount_price"];
    }
}
else{
    $cashout_pend = 0;
}

if(!empty($_GET["credit"])) {
  $credit = $_GET["credit"];
  $cust_credit -= $credit;
  $type = "Cashout";
  $status = "1";
  $sql2="INSERT INTO payment (user_id, user_name, amount_price, payment_type, payment_date, payment_status)
  VALUES ('" . $_SESSION["UID"] . "','" . $cust_name . "','" . $credit . "','" . $type . "','" . $date_time . "','" . $status . "')";
  if (mysqli_query($conn, $sql2)) {
      $sql="UPDATE user SET total_credit = '$cust_credit' WHERE user_id = '$cust_id' ";
      mysqli_query($conn,$sql);            
      echo "<script>alert('Submit Successfully')</script>";
      header("location:credit.php"); 
  }
  else{
    echo "<script>alert('No available point to redeem.')</script>";
  }
}
?>

<style type="text/css">
        {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: poppins;
            text-decoration: none;
            list-style: none
        }
        .wrapper label{
            background: #33B2FF;
            border-radius: 50px;
            color: #fff;
            font-size: 15px;
            padding: 10px 20px;            
        }
        #chkBox{
            display: none;
        }
        .mainContnt{
            width: 100%;
            height: 100%;
            display: -webkit-flex;
            display: -moz-flex;
            display: -ms-flex;
            display: -o-flex;
            display: flex;
            opacity: 0;
            visibility: hidden;
            transition: opacity 0.7s;
            position: fixed;
            top: 0;
            left: 0;
            z-index: 300;
            background: rgba(0,0,0,0.8);
            
        }
        .box{
            background-image: url(https://images.pexels.com/photos/1938032/pexels-photo-1938032.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500);
            width: 28%;
            height: 60%;
            transform: translateY(-1000px);
            transition: all 1s;
            margin: auto;
        }
        .bx{
			max-width: 100%;
            height: auto;
            -webkit-background-size: cover;
            background-size: cover;
            background-repeat: no-repeat;;
        }
		.bx1{
			max-width: 100%;
            height: auto;
            -webkit-background-size: cover;
            background-size: cover;
            background-repeat: no-repeat;;
			
        }
        .login-form input {
			width: 50%;
			height: 50px;
			padding: 15px;
			background-size: 80%;
			margin-bottom: 25px;
		}
        .login-form input[type="submit"] {
			background: deepskyblue;
			font-size: 25px;
			text-transform: uppercase;
			line-height: 20px;
			color: #fff;
		}
        
        .close-box{
            position: relative;
            text-align: right;
            color: #262626;
            font-weight: bold;
            margin: auto;
        }
        .box-close {
			position: absolute;
			top: -320px;
			right: 10px;
		}
        #chkBox:checked + .mainContnt{
            visibility: visible;
            opacity: 1;
        }
        #chkBox:checked + .mainContnt .box{
            transform: translateY(0);
        }
</style>

<!DOCTYPE html>
<html style="font-size: 16px;" lang="en"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="​Small Pricing Plan For Your Creative Business">
    <meta name="description" content="">
    <title>credit</title>
    <link rel="stylesheet" href="css/nicepage.css" media="screen">
    <link rel="stylesheet" href="css/credit.css" media="screen">
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
    <meta property="og:title" content="Contact 1">
    <meta property="og:type" content="website">
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
  <?php
				$sql3 = "SELECT * FROM user WHERE user_id = $cust_id ";
				$result3 = mysqli_query($conn, $sql3);
				
			if (mysqli_num_rows($result3)>0) {
				//output data of each row
				while($row = mysqli_fetch_assoc($result3)) {
				?>
    <section class="u-align-center-lg u-align-center-md u-align-center-sm u-align-center-xs u-align-left-xl u-clearfix u-grey-10 u-section-1" id="carousel_58d0">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-list u-list-1">
          <br><br><br><br><br><br></br>
          <div class="u-repeater u-repeater-1">
            <div class="u-container-style u-grey-5 u-list-item u-radius-50 u-repeater-item u-shape-round u-list-item-1">
              <div class="u-container-layout u-similar-container u-container-layout-1"><span class="u-black u-custom-item u-file-icon u-icon u-icon-circle u-icon-1"><img src="img/credit/2936758.png" alt=""></span>
                <h4 class="u-custom-font u-font-montserrat u-text u-text-default u-text-1">RM <?php echo $row['total_credit']; ?></h4>
                <h6 class="u-custom-font u-font-montserrat u-text u-text-default u-text-3">Available Amount: RM <?php echo $row['total_credit']; ?></h6>
                <h6 class="u-custom-font u-font-montserrat u-text u-text-default u-text-3">Pending Amount: RM <?php echo "$topup_pend"; ?></h6>
                <?php $total_credit = $topup_pend + $row['total_credit']; ?>
                <h6 class="u-custom-font u-font-montserrat u-text u-text-default u-text-2">Total Amount: RM <?php echo "$total_credit"; ?></h6>
                <a href="topup.php" class="u-black u-border-2 u-border-black u-btn u-button-style u-custom-item u-hover-white u-text-hover-black u-text-white u-btn-1">top up</a>
              </div>
            </div>
            <div class="u-container-style u-grey-5 u-list-item u-radius-50 u-repeater-item u-shape-round u-list-item-2">
              <div class="u-container-layout u-similar-container u-container-layout-2"><span class="u-custom-item u-file-icon u-icon u-icon-circle u-white u-icon-2"><img src="img/credit/2704312.png" alt=""></span>
                <h4 class="u-custom-font u-font-montserrat u-text u-text-default u-text-4">RM <?php echo $row['total_credit']; ?></h4>
                <h6 class="u-custom-font u-font-montserrat u-text u-text-default u-text-3">Available Amount: RM <?php echo $row['total_credit']; ?></h6>
                <h6 class="u-custom-font u-font-montserrat u-text u-text-default u-text-2">Pending Amount: RM <?php echo "$cashout_pend"; ?></h6>
                <?php $total_cashout = $cashout_pend + $row['total_credit']; ?>
                <h6 class="u-custom-font u-font-montserrat u-text u-text-default u-text-2">Total Amount: RM <?php echo "$total_cashout"; ?></h6>
                <!-- Wrapper -->        
                <div class="wrapper">
                <label for="chkBox" class="u-border-2 u-border-black u-btn u-button-style u-custom-item u-hover-black u-none u-text-black u-text-hover-white u-btn-2">cash out</label>
                </div>
            </div>
                      <input type="checkbox" name="" id="chkBox">
                        <div class="mainContnt">
                            <div class="box">
                              <div class="boxes bx1">
                                <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
                                      <h2><b>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Cash Out Page</b></h2>
                                        <div class="login-form">
                                          <form enctype=multipart/form-data action="credit.php?" method="GET">
                                              <label for="" style="font-size:22px;">Available Amount: RM <?php echo $row['total_credit']; ?></label>
                                              <p><label for="" style="font-size:22px;">Credit Amount:</label>
                                              <input type="text" id="credit" name="credit" class="form-control" text-align="center" placeholder="Please enter a valid amount" required="">
                                              <input type="submit" value="Submit">
                                          </form>
                                        </div>
                                  <div class="close-box">
                                    <label for="chkBox" class="box-close">X</label>
                                  </div>
                              </div> 
                            </div>
                        </div>
                      <!-- Wrapper -->       

 

            </div>
          </div>
        </div>
      </div>
    </section>
    <?php
	}
}
	else{
		echo"Sorry, 0 result found";
	}
  mysqli_close($conn);
?>   
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