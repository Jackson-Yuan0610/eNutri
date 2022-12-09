<?php
session_start();
include("include/config.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
<title>enutri Profile</title>
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
          <li class="nav-item active">
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

    <div class="container-fluid">
		<!-- Heading -->
		<h2 class="my-5 h2 text-center">My Profile</h2>
        
		<!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Profile Info</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
	

			<?php
        $search_user = $_SESSION["userName"];
				$sql = "SELECT * FROM user WHERE user_name LIKE '%$search_user%' ";
				$result = mysqli_query($conn, $sql);
				
			if (mysqli_num_rows($result)>0) {
				//output data of each row
				while($row = mysqli_fetch_assoc($result)) {
				?>
					<form action="code.php" method="POST" enctype="multipart/form-data">
					
					<div class="form-group mb-3">
						<label for="">ID</label>
						<input type="hidden" name="user_id" value="<?php echo $row['user_id'] ?>">
						<label for=""><?php echo $row['user_id']; ?></label>
					</div>
					<div class="form-group mb-3">
						<label for="">Eco Point</label>
						<label for=""><?php echo $row['eco_point']; ?></label>
					</div>
					<div class="form-group mb-3">
						<label for="">Name</label>
						<input type="text" name="user_name" class="form-control" placeholder="Username " value=<?php echo $row['user_name']; ?>>					
					</div>
					<div class="form-group mb-3">
						<label for="">Phone</label>
						<input type="text" name="user_phone" class="form-control" placeholder="Phone number " value=<?php echo $row['user_phone']; ?>>					
					</div>
					<div class="form-group mb-3">
						<label for="">Email</label>
						<input type="text" name="user_email" class="form-control" placeholder="Phone number " value=<?php echo $row['user_email']; ?>>					
					</div>
					<div class="form-group">
						<button type="submit" name="updateprofile" class="btn btn-primary"> Edit </button></a>
					</div>
					</form>
				</div>
			</div>
		</div>
	</div>
		
    <div class="container-fluid">
		<!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Credit Info</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
					<div class="form-group mb-3">
						<label for="">Total Credit </label>
						<label for=""><?php echo $row['total_credit']; ?></label>
					</div>
					
					<div class="form-group mb-3">
					<a href="topup.php"><button class="btn btn-primary"> Top Up </button></a>
					<a href="credit.php"><button class="btn btn-primary"> Cash Out</button></a>
					</div>
				</div>
			</div>
		</div>
	</div>		
		
		
	<?php
	}
}
	else{
		echo"Sorry, 0 result found";
	}
?>

    <div class="container-fluid">
		<!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Student Info</h6>
            </div>
			<div class="card-body">
				<div class="table-responsive">
					<table class="table table-bordered" style="align:center;width:100%">
					<tbody>
					<tr>
						<th> Student Name</th>
						<th> Student ID</th>
					</tr>
					<?php
					$sql2 = "SELECT * FROM user, student WHERE student.parent_id = user.user_id";
					$result2 = mysqli_query($conn, $sql2);
					
					if (mysqli_num_rows($result2)> 0) {
						//output data of each row
						while($row = mysqli_fetch_assoc($result2)) {
						?>
							<tr>
								<td><?php echo $row['student_name']; ?> </td>
								<td><?php echo $row['student_id']; ?> </td>
							</tr>
							</tbody>
						<?php
						}
					}
					else{
						echo"Sorry, 0 child found";
					}
					
					mysqli_close($conn);
					?>
			
					<a href="addchild.php" width="500" height="500"><button class="btn btn-primary"> Add Child </button></a>
				</div>
			</div>
		</div>
	</div>	
	



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