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

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>enutri Review</title>
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

<body class="grey lighten-3">

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
          <li class="nav-item active">
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
                <strong>eNutri-Canteen</strong>
                <br><strong>An Integrated E-Canteen Food Ordering System</strong></br>
                <strong>For you, For me, For us</strong>				
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
                <strong>The best healthy food that we can prepare for everyone!</strong>
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
  
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark mdb-color lighten-3 mt-3 mb-5">

      <!-- Navbar brand -->
      <span class="navbar-brand"><i class="fa fa-check-square"></i> Food Review Form:</span>

    </nav>
    <!--/.Navbar-->
	
  <!--Main layout-->
  <main>
    <div class="container wow fadeIn">

      <!-- Heading -->
      <h2 class="my-5 h2 text-center">Review form</h2>
		<h3 class="text-left"><strong>Send us your review of eNutri item. Required fields marked with an asterisk*</strong></h3>
      <!--Grid row-->
      <div class="row">

        <!--Grid column-->
        <div class="col-md-12 mb-4">

          <!--Card-->
          <div class="card">

            <!--Card content-->
            <form class="card-body" method="post" action="review_action.php">
	
              <!--Customer Name-->
              <div class="md-form mb-5">
                <label>User name:</label>
				<br>
				<br>
				<strong><?php echo $cust_name;?></strong>
              </div>

              <!--Username-->
              <div class="md-form mb-5">
                <label for="id" class="">User ID</label>
				<br>
				<br>
				<strong><?php echo $cust_id;?></strong>
              </div>
			  
	        <hr>
                <div class="md-form mb-5">
                            <label for="id" class="">Food</label>
                            <br>
                </div>
			  <!--Food List-->
				<?php
				//SQL Query to Get foods based on search keyword
				$sql = "SELECT * FROM food   ";
				
				//Execute the Query
				$result = mysqli_query($conn,$sql);
				
				//Count Rows
				$count = mysqli_num_rows($result);
				
				//Check whether food available or not
				if($count>0)
				{
					$i=0;
					//Food available
					while($row=mysqli_fetch_array($result))
					{
						//Get the details
						$id = $row['food_id'];
						$name = $row['food_name'];

						?>

						<p><form method="get">
                            <input type="radio" name="food" value="<?php echo $id; ?>" required>  <?php echo $name; ?></br>

						<?php
						$i++;
					}
				}
				else
				{
					//Food Not available
					echo "<div class='error'><br><strong>Food Not Found. Sorry.</strong></br></div>";
				}
				?>
                <br>	
			<hr>
              
			  <!--Food Rating-->
              <hr>
				<label for="rating">Food Rating(1-10): </label>
				<input type="range" name="rating" id="rating" min="1" max="10" required>
              <hr>

              <!--Review-->
              <div class="md-form mb-5">
                <input type="text" name="review" id="review" class="form-control" placeholder="Review required" required>
                <label for="review" class="">Review</label>
              </div>
              
              <!--Button Summit and Reset-->
              <hr class="mb-4">
              <button class="btn btn-primary btn-lg btn-block" type="submit">Summit</button>
			  <br>
			  <button class="btn btn-primary btn-lg btn-block" type="reset">Reset</button>

            </form>

          </div>
          <!--/.Card-->

        </div>
        <!--Grid column-->
  </main>
  <!--Main layout-->

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

  <!-- SCRIPTS -->
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
