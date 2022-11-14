<?php
session_start();
include("include/config.php");
if(isset($_SESSION["UID"]) && !empty($_SESSION["UID"])){
if(!empty($_GET["action"])) {
switch($_GET["action"]) {
	case "add":
		if(!empty($_POST["quantity"]) || isset($_GET["adjust"])) {
			$food_id = $_GET["id"];
			if(empty($_POST["quantity"])){
				$quantity = 0;
			}else {$quantity = $_POST["quantity"];}
			if(isset($_GET["adjust"]) && $_GET["adjust"]>0){
				switch($_GET["update"]){
					case "increase":
						$adjust = $_GET["adjust"];
						break;
					case "decrease":
						$adjust = -$_GET["adjust"];
						break;
				}
			}else{
				$adjust = 0;
			}

			$sql = "SELECT * FROM food WHERE food_id = '$food_id'";
			$result = mysqli_query($conn, $sql);
			$row = mysqli_fetch_assoc($result);
			$pid = "pid".$row["food_id"];

			$itemArray = array(
				$pid=>array ('studentname'=>$row["student_name"], 'name'=>$row["food_name"], 'img'=>$row["food_img"], 'prodID'=>$row["food_id"], 'quantity'=>$quantity, 'price'=>$row["food_price"], 'ecopoint'=>$row["food_point"], 'calories'=>$row["food_calories"]));

			if(!empty($_SESSION["cart_item"])) {
				if(in_array($pid,array_keys($_SESSION["cart_item"]))) {
					foreach($_SESSION["cart_item"] as $k => $v) {
							if($pid == $k) {
								if(empty($_SESSION["cart_item"][$k]["quantity"])) {
									$_SESSION["cart_item"][$k]["quantity"] = 0;
								}
							}
							if("pid".$_GET["id"] == $k){
								if($_GET["update"] == "decrease" && $_SESSION["cart_item"][$k]["quantity"] > 1)
								$_SESSION["cart_item"][$k]["quantity"] += ($quantity + $adjust);
							else if($_GET["update"] == "increase" && $_SESSION["cart_item"][$k]["quantity"] < 11)
								$_SESSION["cart_item"][$k]["quantity"] += ($quantity + $adjust);
							else if(isset($_GET["action"]))
								$_SESSION["cart_item"][$k]["quantity"] += $quantity;
								header("location: cart_action.php");
							}
					}
				} else {
					$_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray);
				}
			} else {
				$_SESSION["cart_item"] = $itemArray;
			}
		}
	break;
	case "remove":
		if(!empty($_SESSION["cart_item"])) {
			foreach($_SESSION["cart_item"] as $k => $v) {
					if("pid".$_GET["prodID"] == $k)
						unset($_SESSION["cart_item"][$k]);
					if(empty($_SESSION["cart_item"]))
						unset($_SESSION["cart_item"]);
			}
		}
	break;
	case "empty":
		unset($_SESSION["cart_item"]);
	break;
	
	case "check":
			
			$result = $_GET['data'];
			echo $result;
		
	
	break; 
}
}
}
else{
	echo "Please login to continue.";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
<title>enutri Nutrition</title>
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
	<br>
	<br>
	<label for="voucher">Choose a voucher:</label>
	<select name="voucher" id="voucher">
			<option value=None>None</option>
		<?php 
			$sql = "SELECT * FROM voucher";
			$result = mysqli_query($conn, $sql);
						
			if (mysqli_num_rows($result)> 0) {
				//output data of each row
				while($row = mysqli_fetch_assoc($result)) {
				?>
					<option><?php echo $row['voucher_code']; ?></option>
				<?php
				}
			}
			else{
				echo"Sorry, zero voucher found";
				}		
			?>
	</select>

<p><span class="output"></span></p>
<input type="button" onclick="getOption()" value="Check"> </button>

<script type="text/javascript">
    function getOption() {
		
        selectElement = document.querySelector('#voucher');
        output = selectElement.value;
        document.querySelector('.output').textContent = output;
		var x = output;
		location.href = "aaa.php?voucher=" + x;
    }
</script>
The voucher selected is: 
<?php
if (isset($_GET["voucher"])) {
 $code = $_GET["voucher"];
 echo $code;
 		$sql3 = "SELECT * FROM voucher WHERE voucher_code LIKE '%$code%' ";
		$result3 = mysqli_query($conn, $sql3);
					
		if (mysqli_num_rows($result3)> 0) {
			//output data of each row
			while($row = mysqli_fetch_assoc($result3)) {
			?>
				
				<?php 
				$voucher_disc = $row['voucher_price'];
				?>
			<?php
			}
		}
		else{
			echo" Sorry, The code is invalid";
			$voucher_disc = 0;
			}
}

?>



      <!-- Heading -->
      <h2 class="my-5 h2 text-center">Checkout form</h2>

      <!--Grid row-->
      <div class="row">

        <!--Grid column-->
        <div class="col-md-10 mb-5">

          <!--Card-->
          <div class="card">

            <!--Card content-->
            <form class="card-body">

              <!--Grid row-->
            

               
<p style="margin: 15px;"><i class="fa fa-shopping-cart" style="font-size:24px"></i> / My Cart</p>

<?php
if(isset($_SESSION["cart_item"])){
    $total_quantity = 0;
    $total_price = 0;
	$total_calories = 0;
	$total_eco = 0;
?>
<div class="table-responsive">          
 <table class="table table-bordered" style="align:center;width:100%">
<tbody>
<tr >
	<th>Code</th>
	<th>Item</th>
	<th>Quantity</th>
	<th>Unit Price (RM)</th>
	<th>Price (RM)</th>
	<th>Calories (kCal)</th>
	<th>Eco Point</th>
	<th>Actions</th>
</tr>

<?php
foreach ($_SESSION["cart_item"] as $item){
	$item_price = $item["quantity"]*$item["price"];
	$item_eco = $item["quantity"]*$item["ecopoint"];
	$item_cal = $item["quantity"]*$item["calories"];
	?>
	<tr>
	<td><?php echo $item["prodID"]; ?></td>
	<td><?php echo $item["name"];?></td>
	<td>
	<a href="cart_action.php?action=add&id=<?php echo $item["prodID"]; ?>&update=decrease&adjust=1"><i class="fa fa-minus-circle">&nbsp;&nbsp;&nbsp;&nbsp;</i></a>
	<?php echo $item["quantity"]; ?>
	&nbsp;&nbsp;&nbsp;&nbsp;<a href="cart_action.php?action=add&id=<?php echo $item["prodID"]; ?>&update=increase&adjust=1"><i class="fa fa-plus-circle"></i></a>
	</td>
	<td><?php echo $item["price"]; ?></td>
	<td><?php echo number_format($item_price,2); ?></td>
	<td><?php echo $item_cal; ?></td>
	<td><?php echo $item_eco; ?></td>
	<td><a href="cart_action.php?action=remove&prodID=<?php echo $item["prodID"]; ?>"><i class="fa fa-times-circle" ></i> Remove</a><br></td>
	</tr>
	<?php
	$total_quantity += $item["quantity"];
	$total_price += ($item["price"]*$item["quantity"]);
	$total_eco += ($item["ecopoint"]*$item["quantity"]);
	$total_calories += ($item["calories"]*$item["quantity"]);
	}
	
	?>
	<tr>
	<td colspan="2" align="right"><b>Ecogreen Point :</b></td>
	<td style="text-align:center;"><?php echo $total_eco; ?> </td>
	<td colspan="2" align="right"><b>Total Calories :</b></td>
	<td style="text-align:center;" colspan="2"><?php echo $total_calories; ?> kCal</td>
	</tr>
	<tr>
	<td colspan="2" align="right"><b>Total Quantity :</b></td>
	<td style="text-align:center;"><?php echo $total_quantity; ?></td>
	<td colspan="2" align="right"><b>Voucher:</b></td>

	<td style="text-align:center;" colspan="2">

	</td>


	</tr>
	<tr>
	<td colspan="2" align="right"><b>Select Child :</b></td>
	<td style="text-align:center;">
		<select name="child">
		<?php
		$sql2 = "SELECT * FROM user, student WHERE student.parent_id = user.user_id";
		$result2 = mysqli_query($conn, $sql2);
					
		if (mysqli_num_rows($result2)> 0) {
			//output data of each row
			while($row = mysqli_fetch_assoc($result2)) {
			?>
				<option><?php echo $row['student_name']; ?></option>

			<?php
			}
		}
		else{
			echo"Sorry, 0 child found";
			}
					
		mysqli_close($conn);
		?>
		</select>
	</td>
	</tr>
</tbody>
</table>

<p style="margin: 15px;"><a href="cart_action.php?action=empty"><i class="fa fa-trash" style="font-size:24px"></i> Empty Cart</a></p>
	<tr>
	<!-- Total Price with Voucher Discount -->
	<td colspan="2" align="right"><b>Total Price :</b></td>
	<?php
	$total_price -= $voucher_disc;
	?>
	<td style="text-align:center;" colspan="2"><strong><?php echo "RM ".number_format($total_price, 2); ?></strong></td>
	</tr>
<p style="margin: 15px;"><a onclick="checkoutfunc()" href ="checkout.php"> Check Out</a></p>

<script>
function checkoutfunc() {
  confirm("Are you confirm to proceed checkout?");
}
</script>
<?php
} else {
?>
<p style="margin: 15px;">Your Cart is Empty</p>
<?php
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
