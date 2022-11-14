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
            <a class="nav-link waves-effect" href="profile.php"><i class="fas fa-user-alt"></i> Edit Profile</a>
          </li>    
		  <li class="nav-item">
            <a class="nav-link waves-effect" href="menu.php"><i class="fas fa-pizza-slice"></i> Food Menu</a>
          </li>		  
		  <li class="nav-item active">
            <a class="nav-link waves-effect" href="nutrition.php"><i class="fas fa-seedling"></i> Nutrition Table</a>
          </li>
          <li class="nav-item">
            <a class="nav-link waves-effect" href="order.php"><i class="fas fa-utensils"></i> My Order</a>
          </li>
		  <li class="nav-item">
            <a class="nav-link waves-effect" href="credit.php"><i class="fas fa-credit-card"></i> My Credit</a>
          </li>
		  <li class="nav-item">
            <a class="nav-link waves-effect" href="reward.php"><i class="fas fa-gift"></i> Reward</a>
          </li>
          <li class="nav-item">
            <a class="nav-link waves-effect" href="review.php"><i class="fas fa-thumbs-up"></i> Review</a>
          </li>
          <li class="nav-item">
            <a class="nav-link waves-effect" href="cart.php"><i class="fas fa-shopping-cart"></i> Cart</a>
          </li>
        </ul>
		</div>
    </div>
	
  </nav>
  <!-- Navbar -->
  
  <!--Carousel Wrapper-->
  <div id="carousel-example-1z" class="carousel slide carousel-fade pt-4" data-ride="carousel">

    <!--Indicators-->
    <ol class="carousel-indicators">
      <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
      <li data-target="#carousel-example-1z" data-slide-to="1" ></li>
      <li data-target="#carousel-example-1z" data-slide-to="2"></li>
    </ol>
    <!--/.Indicators-->

    <!--Slides-->
    <div class="carousel-inner" role="listbox">

      <!--First slide-->
      <div class="carousel-item active">
        <div class="view" style="background-image: url('img/slide/delivery.jpg'); background-repeat: no-repeat; background-size: cover;">

          <!-- Mask & flexbox options-->
          <div class="mask rgba-black-strong d-flex justify-content-center align-items-center">

            <!-- Content -->
            <div class="text-center white-text mx-5 wow fadeIn">
              <h1 class="mb-4">
                <strong>About Us</strong>
              </h1>

              <p>
                <strong>Top 10 Food Delivery Service in Malaysia !</strong>
              </p>

            </div>
            <!-- Content -->

          </div>
          <!-- Mask & flexbox options-->

        </div>
      </div>
      <!--/First slide-->

      <!--Second slide-->
      <div class="carousel-item">
        <div class="view" style="background-image: url('img/slide/rating.png'); background-repeat: no-repeat; background-size: cover;">

          <!-- Mask & flexbox options-->
          <div class="mask rgba-black-strong d-flex justify-content-center align-items-center">

            <!-- Content -->
            <div class="text-center white-text mx-5 wow fadeIn">
              <h1 class="mb-4">
                <strong>Why Us</strong>
              </h1>
			  
			  <p>
                <strong>5 star ratings and highly satisfied and recommended by customer !</strong>
              </p>



            </div>
            <!-- Content -->

          </div>
          <!-- Mask & flexbox options-->

        </div>
      </div>
      <!--/Second slide-->

      <!--Third slide-->
      <div class="carousel-item">
        <div class="view" style="background-image: url('https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/8-col/img%285%29.jpg'); background-repeat: no-repeat; background-size: cover;">

          <!-- Mask & flexbox options-->
          <div class="mask rgba-black-strong d-flex justify-content-center align-items-center">

            <!-- Content -->
            <div class="text-center white-text mx-5 wow fadeIn">
              <h1 class="mb-4">
                <strong>How It Works</strong>
              </h1>
			  
			  <p>
                <strong>mylokalFood</strong>
              </p>
			  
			  <p class="mb-4 d-none d-md-block">
                <strong>Is our First Choice !</strong>
              </p>

            </div>
            <!-- Content -->

          </div>
          <!-- Mask & flexbox options-->

        </div>
      </div>
      <!--/Third slide-->

    </div>
    <!--/.Slides-->

    <!--Controls-->
    <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
    <!--/.Controls-->

  </div>
  <!--/.Carousel Wrapper-->
 <main class="mt-111 pt-4">
    <div class="container wow fadeIn">

      <!-- Heading -->
      <h2 class="my-5 h2 text-center">Food Nutrition Table</h2>
	  
	  <!-- Search Function -->
	  <div class="search-container">
		<form action="search_nutri.php" method="POST">
		<input type="text" placeholder="What are you craving?" name="search">
		<button type="submit"><i class="fa fa-search"></i></button>
		</form>
	  </div>
	  
      <!--Grid row-->
      <div class="row"> 

        <!--Grid column-->
        <div class="col-md-8 mb-4">

          <!--Card-->
          <div class="card">

            <!--Card content-->
            <form class="card-body">

              <!--Grid row-->
            	
<?php
	//Get tge Search Keyword
	$search = $_POST['search'];
	
	//SQL Query to Get foods based on search keyword
	$sql = "SELECT * FROM nutrient WHERE food_name LIKE '%$search%'  ";
	
	//Execute the Query
	$res = mysqli_query($conn,$sql);
	
	//Count Rows
	$count = mysqli_num_rows($res);
	
	//Check whether food available or not
	if($count>0)
	{ ?>
		<p style="margin: 15px;"><i class="fas fa-seedling" style="font-size:24px"></i> / Nutrition Amount Per Serving (100g)</p>


	<div class="table-responsive">          
	<table class="table table-bordered" style="align:center;width:100%">
	<tbody>
		<tr>
			<th>Food ID</th>
			<th>Food Name</th>
			<th>Calories</th>
			<th>Protein</th>
			<th>Fat</th>
			<th>Carbohydrates</th>
			<th>Sugar</th>
			<th>Sodium</th>
			<th>Energy</th>
		</tr>
			
		<?php //Food available
		while($row=mysqli_fetch_assoc($res))
		{
			//Get the details
			$id = $row['food_id'];
			$name = $row['food_name'];
			$calories = $row['food_calories'];
			$protein = $row['food_protein'];
			$fat = $row['food_fat'];
			$carbo = $row['food_carbo'];
			$sugar = $row['food_sugar'];
			$sodium = $row['food_sodium'];
			$energy = $row['food_energy'];
			?>

		<tr>
			<td><?php echo $row['food_id']; ?></td>
			<td><?php echo $row['food_name'];?></td>
			<td><?php echo $row['food_calories'];?>kCal</td>
			<td><?php echo $row['food_protein'];?>g</td>
			<td><?php echo $row['food_fat'];?>g</td>
			<td><?php echo $row['food_carbo'];?>g</td>
			<td><?php echo $row['food_sugar'];?>g</td>
			<td><?php echo $row['food_sodium'];?>g</td>
			<td><?php echo $row['food_energy'];?>K</td>
		</tr>
	
	<?php 
		}//while
	}//if
		else {
			//Food Not available
		
		echo "<div class='error'><br><strong>Food Nutrient Not Found. Sorry.</strong></br></div>";
		?>
		<?php
	mysqli_close($conn);
	}
?>		
<br><a href="nutrition.php"><strong>Back</strong></a></br>



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