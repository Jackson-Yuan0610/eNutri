<!-- This page is for update data page for topup credit when complete credit payment -->
<?php
session_start();
include("include/config.php");

//check login
if(!isset($_SESSION["UID"])){
	header("location:login.php");	
}
//pass variable if login
if(isset($_SESSION["UID"])){
	$cust_id = ($_SESSION["UID"]);
	$cust_name =($_SESSION["userName"]);
	date_default_timezone_set("Asia/Kuala_Lumpur");
	$date_time = date("Y-m-d H:i:sa");
  $file = $_POST["receipt"];
  $credit = $_POST["credit"];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Credit Payment</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.min.css" rel="stylesheet">
  <style type="text/css">
   
    }.center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
}

  </style>
</head>

<body>

  <!-- Navbar -->
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

 <main class="mt-5 pt-4">
    <div class="container wow fadeIn">

      <!-- Heading -->
      <h2 class="my-5 h2 text-center">Credit Payment</h2>

      <!--Grid row-->
      <div class="row">

        <!--Grid column-->
        <div class="col-md-8 mb-4">

          <!--Card-->
          <div class="card">  
            <div class="card-body">  


              <!--Grid row-->
              <div class="row">
               
              <br><p style="margin: 15px;"><i class="fa fa-shopping-cart" style="font-size:24px"></i> Payment Page</p></br>
              </div>
        <?php
            $type = "Topup";
            $status = "1";
            $sql="INSERT INTO payment (user_id, user_name, amount_price, payment_type, payment_date, payment_img, payment_status)
            VALUES ('" . $_SESSION["UID"] . "','" . $cust_name . "','" . $credit . "','" . $type . "','" . $date_time . "','" . $file . "','" . $status . "')";
            if (mysqli_query($conn, $sql)) {
              echo "You have upload the receipt successfully.\nPending for credit payment.";
              ?>                      
              <form method="post" action="credit.php">
              <input type="submit" value="Back"></input>
              </form><?php
            }
          mysqli_close($conn);	
        ?>
  

            </div>
            <!--Grid column-->
          </div>
          <!--Grid row-->
      </div>
    </div>
  </div>
</div>
</main>
</body>
</html>