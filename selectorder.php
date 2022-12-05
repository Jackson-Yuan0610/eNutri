<?php
session_start();
include("include/config.php");

$order = $_POST["orderId"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>enutri Order</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="x-ua-compatible" content="ie=edge">
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
<!-- Page content row -->

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
          <li class="nav-item active">
            <a class="nav-link waves-effect" href="order.php"><i class="fas fa-utensils"></i><br> My Order</a>
          </li>
		  <li class="nav-item">
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
      <h2 class="my-5 h2 text-center">My Orders</h2>

      <!--Grid row-->
      <div class="row">

        <!--Grid column-->
        <div class="col-md-10 mb-4">

          <!--Card-->
          <div class="card">
              <!--Grid row-->
              <p style="margin: 15px;"><i class="fas fa-utensils" style="font-size:24px"></i> / Order <?php echo $order;?> </p>
            <div class="table-responsive">          
              <?php
                  $userid = $_SESSION["UID"];
                  $sql = "SELECT * FROM orders_lines WHERE order_id LIKE '%$order%'";
                  $result = mysqli_query($conn, $sql);
                                      
                  if (mysqli_num_rows($result)> 0) {
                      //output data of each row
                      while($row = mysqli_fetch_assoc($result)) {
              ?>
              <table class="table table-bordered" style="align:center;width:100%">
                  <tbody>
                      <tr>
                          <th colspan="1">ID</th>
                          <th colspan="2">Child</th>
                          <th colspan="1">Food ID</th>
                          <th colspan="1">Amount</th>
                          <th colspan="1">Eco Point</th>
                          <th colspan="2">Calories (kCal)</th>
                      </tr>
                      <!--Orders Displayed -->
                      <tr>
                          <td colspan="1"><?php echo $row["line_id"]; ?></td>
                          <td colspan="2"><?php echo $row["child_name"];?></td>
                          <td colspan="1"><?php echo $row["food_id"];?></td>
                          <td colspan="1"><?php echo $row["order_amount"]; ?></td>
                          <td colspan="1"><?php echo $row["food_eco"]; ?></td>
                          <td colspan="2"><?php echo $row["food_cal"]; ?></td>
                      </tr>
                      <!--/.Orders Displayed -->
                  </tbody>
              </table>
              <?php
                      }?>
                        <!--Card content-->
                        <form method="post" action="order.php">
                        <input type="submit" value="Back"></input>
                        </form>
                  <?php
                  }
                  else{
                          echo"Sorry, 0 order found";
                          ?>                      
                          <form method="post" action="order.php">
                          <input type="submit" value="Back"></input>
                          </form><?php
                      }			
              ?>
            </div>
</div>
    </div>
    <!--Grid column-->
        </div>
        <!--Grid row-->
    </div>
  </main>
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
</body>
</html>
