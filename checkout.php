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
	$order_status = "Waiting For Payment";
  $voucher = ($_SESSION["voucher"]);
  $discount = ($_SESSION["discount"]);
  $child = ($_SESSION["child"]);
}
if(isset($_SESSION["cart_item"])){
  $total_quantity = 0;
  $total_price = 0;
	$total_calories = 0;
	$total_eco = 0;
	$delivery_charge = 5;
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
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Checkout Payment</title>
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
		  <li class="nav-item">
            <a class="nav-link waves-effect" href="credit.php"><i class="fas fa-credit-card"></i><br> My Credit</a>
          </li>
		  <li class="nav-item">
            <a class="nav-link waves-effect" href="reward.php"><i class="fas fa-gift"></i> Reward</a>
          </li>
          <li class="nav-item">
            <a class="nav-link waves-effect" href="review.php"><i class="fas fa-thumbs-up"></i> Review</a>
          </li>
		  <li class="nav-item active">
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
      <h2 class="my-5 h2 text-center">Checkout Payment</h2>

      <!--Grid row-->
      <div class="row">

        <!--Grid column-->
        <div class="col-md-8 mb-4">

          <!--Card-->
          <div class="card">  
            <div class="card-body">  


              <!--Grid row-->
              <div class="row">
               
	<p style="margin: 15px;"><i class="fa fa-shopping-cart" style="font-size:24px"></i> Order Information</p>
	
 <table class="table table-bordered" style="align:center;width:100%">
	
<tbody>
	<!-- Customer Name and ID -->
	<tr>
		<td colspan="2" align="right"><b>Customer Name:</b></td>
		<td style="text-align:center;"><?php echo $cust_name; ?></td>
		<td colspan="1" align="right"><b>Customer ID:</b></td>
		<td style="text-align:center;"><?php echo $cust_id; ?></td>
		<td colspan="1" align="right"><b>Child Name:</b></td>
		<td style="text-align:center;"><?php echo $child; ?></td>
	</tr>
	<!-- Date Time -->
	<tr>
		<td colspan="4" align="right"><b>Date Time:</b></td>
		<td style="text-align:center;"><?php echo $date_time;?></td>
	</tr>
	<!-- Order Status -->
	<tr>
		<td colspan="4" align="right"><b>Order Status:</b></td>
		<td style="text-align:center;"><?php echo $order_status; ?></td>
	</tr>
    <!-- Title -->
	<tr >
	<th>Code</th>
	<th>Item</th>
	<th>Quantity</th>
	<th>Unit Price (RM)</th>
	<th>Price (RM)</th>
	<th>Calories (kCal)</th>
	<th>Eco Point</th>
	</tr>
	<!-- Print Food Order Item -->
	<?php		
	foreach ($_SESSION["cart_item"] as $item)
	{
        $item_price = $item["quantity"]*$item["price"];
        $item_eco = $item["quantity"]*$item["ecopoint"];
        $item_cal = $item["quantity"]*$item["calories"];		?>
			<tr>
				<td ><?php echo $item["prodID"];?></td>
				<td ><?php echo $item["name"];?></td>	
				<td ><?php echo $item["quantity"]; ?></td>
				<td ><?php echo $item["price"]; ?></td>
				<td ><?php echo number_format($item_price,2); ?></td>
        <td><?php echo $item_cal; ?></td>
	      <td><?php echo $item_eco; ?></td>
			</tr>
		<?php
        $total_quantity += $item["quantity"];
        $total_price += ($item["price"]*$item["quantity"]);
        $total_eco += ($item["ecopoint"]*$item["quantity"]);
        $total_calories += ($item["calories"]*$item["quantity"]);
	}
		$total_price -= $discount;
		?>
	<!-- Total Ecogreen Point and Total Calories -->
    <tr>
    <td colspan="1" align="right"><b>Total:</b></td>
	<td style="text-align:center;"><?php echo $total_quantity; ?></td>
	<td colspan="2" align="right"><b>Ecogreen Point :</b></td>
	<td style="text-align:center;"><?php echo $total_eco; ?> </td>
	<td colspan="1" align="right"><b>Total Calories :</b></td>
	<td style="text-align:center;" colspan="1"><?php echo $total_calories; ?> kCal</td>
	</tr>
	<!-- Voucher Discount -->
	<tr>
		<td colspan="2" align="right"><b>Voucher Apply:</b></td>
		<td style="text-align:center;" colspan="2"><?php echo $voucher; ?></td>
		<td colspan="2" align="right"><b>Voucher Discount:</b></td>
		<td style="text-align:center;" colspan="2"><?php echo $discount; ?></td>
	</tr>
	<!-- Total Quantity and Price -->
	<tr>
        <td colspan="4" align="right"><strong><b>Total Price:</b></strong></td>
		<td style="text-align:center;" colspan="3"><strong><b><?php echo "RM ".number_format($total_price, 2); ?></b></strong></td>
	</tr>
	</tbody>
	</table>
  <?php
          $order_status = 2;//1= Pending, 2= Waiting For Payment, 3= Successful, 4= Failed
          //sql for order_invoice table
          $sql = "INSERT INTO orders (user_id, amount_price, order_datetime, order_status, total_eco, total_cal)
            VALUES ('" . $_SESSION["UID"] . "','" . $total_price . "','" . $date_time . "','" . $order_status . "','" . $total_eco . "','" . $total_calories . "')";
          
            if (mysqli_query($conn, $sql)) {	
              //echo "<p>New customer order record has the Order id: " . mysqli_insert_id($conn) . "<br>";	
              $order_id = mysqli_insert_id($conn);
            } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }	

          foreach ($_SESSION["cart_item"] as $item){	
            //sql for order_line table
            $sql2 = "INSERT INTO orders_lines (user_id, order_id, food_id, order_amount, child_name, food_eco, food_cal)
            VALUES ('" . $_SESSION["UID"] . "','" . $order_id . "','" . $item["prodID"] . "','" . $item["quantity"] . "','" . $child . "','" . $item["quantity"]*$item["ecopoint"] . "','" . $item["quantity"]*$item["calories"] . "')";
          
          if (mysqli_query($conn, $sql2)) {
              //echo "<p>New customer order record created successfully.";	
              $line_id = mysqli_insert_id($conn);
            } else {
            echo "Error: " . $sql2 . "<br>" . mysqli_error($conn);
            }
          }
  ?>
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
                      <form enctype=multipart/form-data action="complete_order.php" method="POST" \>
                          <input type="hidden" id="orderId" name="orderId" value=<?php echo $order_id; ?>>
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