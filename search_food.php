<?php
session_start();
include("include/config.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
<title>enutri</title>
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
     
    .center {
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
		  <li class="nav-item active">
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
  
 <main class="mt-111 pt-4">
    <div class="container wow fadeIn">

      <!-- Heading -->
      <h2 class="my-5 h2 text-center">Food Menu</h2>
	  <!-- Display Timestamp-->
	  <p>Date: <span id="date"></span>
		<script>
		var dt = new Date();
		document.getElementById("date").innerHTML = (("0"+dt.getDate()).slice(-2)) +"."+ (("0"+(dt.getMonth()+1)).slice(-2)) +"."+ (dt.getFullYear());
		</script>
		, <span id="weekday"></span></p>
		<script>
		const weekday = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"];

		const d = new Date();
		let day = weekday[d.getDay()];
		document.getElementById("weekday").innerHTML = day;
		</script>	  
	  <!-- Search Function -->
	  <div class="search-container">
		<form action="search_food.php" method="POST">
		<button type="submit"><i class="fa fa-search"></i></button>
		<input type="text" placeholder="What are you craving?" name="search">
		</form>
	  </div>
	  <div class="search-date">
		<form action="search_date.php" method="POST">
		<br><input id="today" type="date" value="<?php echo date('Y-m-d'); ?>" name="datesearch" min="<?= date('Y-m-d'); ?>">
		<script>
		document.getElementById('today').value = moment().format('YYYY-MM-DD');
		</script>
		<button type="submit"><i class="fa fa-search"></i></button>
		</form>
	  </div>	

            	
<?php
	//Get the Search Keyword
	$search = $_POST['search'];
	
	//SQL Query to Get foods based on search keyword
	$mydate=getdate();
	$week_day = $mydate['wday'];
	$sql = "SELECT * FROM food WHERE food_name LIKE '%$search%' AND food.week_day ='$week_day'";
	
	//Execute the Query
	$res = mysqli_query($conn,$sql);
	
	//Count Rows
	$count = mysqli_num_rows($res);
	
	//Check whether food available or not
	if($count > 0)
	{
		//Food available
		while($row=mysqli_fetch_assoc($res))
		{
			?>
			<!-- food resultset <a href="index.php?page=product&action=add&id=<?php //echo $row['food_id']; ?>"><i class="fa fa-shopping-cart" ></i> Add to Cart</a><br><br>-->
			<div class="w3-quarter">
			<br>
			<img src="<?php echo htmlentities($row['food_img']); ?>" style="width:20%"></img><br>
			<b><?php echo htmlentities($row['food_name']);?></b><br>
			<?php echo htmlentities($row['food_calories']);?> Calories<br>	 
			RM <?php echo htmlentities($row['food_price']);?><br>
				<span class="fa fa-star checked"></span>
				<span class="fa fa-star checked"></span>
				<span class="fa fa-star checked"></span>
				<span class="fa fa-star"></span>
				<span class="fa fa-star"></span>	  
			<form method="post" action="cart_action.php?action=add&id=<?php echo $row['food_id'];?>">
				<input type="text" name="quantity" value="1" size="2" />
				<button type="submit"><i class="fa fa-shopping-cart" style="font-size:20px"></i> Add to Cart</button>
			</form></b><br>
			</div>   
			<?php 
		}
	}
	else
	{
		//Food Not available
		echo "<div class='error'><br><strong>Food Not Found. Sorry.</strong></br></div>";
		?><br><td><a href="menu.php"><button type="submit"><strong>Back Home</strong></button></td></br>
		<?php
	}
mysqli_close($conn);
?>

</div>  <!-- Page content row -->



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

<!-- Footer -->
<footer>
	<div class="footer">
	<small><i>Copyright &copy; 2022 eNutri</i></small>
	</div>
</footer>
</html>