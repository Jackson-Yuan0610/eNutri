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
            width: 60%;
            height: 72%;
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
        .bx2{
			max-width: 100%;
            height: auto;
        }
        .bx2 h3 {
			margin-bottom: 16px;
			text-transform: uppercase;
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
			top: -580px;
			right: 30px;
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
            

<p style="margin: 15px;"><i class="fas fa-utensils" style="font-size:24px"></i> / All Orders</p>

<div class="table-responsive">          
    <?php
        $sql = "SELECT * FROM orders WHERE user_id LIKE '%$cust_id%' ORDER BY order_datetime DESC";
        $result = mysqli_query($conn, $sql);
                            
        if (mysqli_num_rows($result)> 0) {
            //output data of each row
            while($row = mysqli_fetch_assoc($result)) {
                switch($row["order_status"]){
                    case "1":
                        $status = "Pending";
                        break;
                    case "2":
                        $status = "Waiting For Payment";
                        break;
                    case"3":
                        $status = "Successful";
                        break;
                    case"4":
                        $status = "Failed";
                        break;
                }
    ?>
    <table class="table table-bordered" style="align:center;width:100%">
        <tbody>
            <tr>
                <th colspan="1">Code</th>
                <th colspan="2">Date</th>
                <th colspan="1">Amount Price (RM)</th>
                <th colspan="1">Calories (kCal)</th>
                <th colspan="1">Eco Point</th>
                <th colspan="2">Status</th>
            </tr>
            <!--Orders Displayed -->
            <tr>
                <td colspan="1"><?php echo $row["order_id"]; ?></td>
                <td colspan="2"><?php echo $row["order_datetime"];?></td>
                <td colspan="1"><?php echo $row["amount_price"];?></td>
                <td colspan="1"><?php echo $row["total_cal"]; ?></td>
                <td colspan="1"><?php echo $row["total_eco"]; ?></td>
                <td colspan="2"><?php echo $status; ?></td>
            </tr>
            <!--/.Orders Displayed -->
        </tbody>
    </table>
            <!--Card content-->
            <form method="post" action="selectorder.php">
            <input type="hidden" id="orderId" name="orderId" value=<?php echo $row["order_id"]; ?>>
			<input type="hidden" id="orderStatus" name="orderStatus" value=<?php echo $row["order_status"]; ?>>
            <input type="submit" value="Select Order"></input>
            </form>

    <?php
              if($row["order_status"] == "2"){ ?>
                <div class="wrapper">
                        <div class="btn-area">
                            <label for="chkBox">Continue Payment</label>
                        </div>
                </div>
                <input type="checkbox" name="" id="chkBox">
                <div class="mainContnt">
                    <div class="box">
                      <div class="boxes bx1">
                        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
                              <h2><b>Payment Page</b></h2>
                                <div class="login-form">
                                  <form enctype=multipart/form-data action="order_payment.php" method="POST" \>
                                      <input type="hidden" id="orderId" name="orderId" value=<?php echo $row["order_id"]; ?>>
                                      <label for="" style="font-size:22px;">Receipt:</label>
                                      <input type="file"  id="receipt" name="receipt" class="form-control">
                                      <input type="submit" value="Complete Payment">
                                  </form>
                                </div>
                        <div class="boxes bx2">
                          <?php
                            $sql = "SELECT * FROM paymethod";
                            $res = mysqli_query($conn, $sql);
                            if (mysqli_num_rows($res)> 0) {
                            //output data of each row
                            while($row = mysqli_fetch_assoc($res)) {
                              ?>
                              <img src="<?php echo htmlentities($row['method_img']); ?>" style="width:22%"></img>
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
                          <div class="close-box">
                            <label for="chkBox" class="box-close">X Close</label>
                          </div>
                      </div> 
                    </div>
                </div>
            <?php      
              }
            }
        }
        else{
                echo"Sorry, 0 order found";
            }			
    ?>
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
