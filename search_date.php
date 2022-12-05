<?php
session_start();
include("include/config.php");
?>
<!DOCTYPE html>
<html style="font-size: 16px;" lang="en"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta charset="utf-8">
    <meta name="keywords" content="Menu">
    <title>enutri Menu</title>
    <link rel="stylesheet" href="css/nicepage.css" media="screen">
    <link rel="stylesheet" href="css/Page-6.css" media="screen">
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
    <meta property="og:title" content="reward">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body u-xl-mode" data-lang="en"><header class="u-clearfix u-header u-header" id="sec-2b6b">
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
      </body>
    </header>
    <section class="u-align-center u-clearfix u-grey-10 u-section-1" id="sec-922b">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <br><br><br><h1 class="u-custom-font u-font-oswald u-text u-text-default u-text-palette-3-base u-text-1 "><br>Food Menu</br></h1>
		<p>Current Date: <span id="date"></span>
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
        <div class="u-form u-form-1">
			<!-- Get the searchdate keyword to display in date input function -->
			<?php $date_search = $_POST['datesearch']; ?>
          <form action="search_date.php" class="u-clearfix u-form-spacing-10 u-form-vertical u-inner-form" method="POST" >
            <div class="u-form-date u-form-group u-form-group-1">
              <label for="today" class="u-label">Date</label>
              <input type="date" value="<?php echo date('Y-m-d'); ?>" id="today" name="datesearch" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" min="<?= date('Y-m-d'); ?>" required="" spellcheck="false">
            </div>
			<script>
			document.getElementById('today').value = moment().format('YYYY-MM-DD');
			</script>
            <div class="u-align-center u-form-group u-form-submit">
			<button type="submit" class="u-border-2 u-border-black u-btn u-btn-submit u-button-style u-gradient u-hover-black u-none u-text-black u-text-hover-white u-btn-1"><i class="fa fa-search"></i></button>
            </div>
          </form>
        </div>
        <div class="u-form u-form-2">
          <form action="search_food.php" class="u-clearfix u-form-spacing-10 u-form-vertical u-inner-form" method="POST" style="padding: 15px;">
            <div class="u-form-group u-form-group-3">
              <label for="text-4aea" class="u-label">Search</label>
              <input type="text" placeholder="What are you craving?" id="text-4aea" name="search" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" spellcheck="false">
            </div>
            <div class="u-align-center u-form-group u-form-submit">
			  <button type="submit" class="u-border-2 u-border-black u-btn u-btn-submit u-button-style u-gradient u-hover-black u-none u-text-black u-text-hover-white u-btn-1"><i class="fa fa-search"></i></button>
            </div>
          </form>
        </div>

        <div class="u-expanded-width u-list u-list-4">

          <div class="u-repeater u-repeater-1">
        <?php
			//Change HTML Datetime to Unix Timestamp
			$unixdate = strtotime("$date_search");
			//SQL Query to Get foods based on search keyword
			$mydate=getdate($unixdate);
			$week_day = $mydate['wday'];

			$sql = "SELECT * FROM food WHERE food.week_day ='$week_day'";
			
			//Execute the Query
			$res = mysqli_query($conn,$sql);			
			//Check whether food available or not
			if(mysqli_num_rows($res) > 0){

			// output data of each row
			while($row = mysqli_fetch_assoc($res)) {
        ?> 
            <div class="u-container-style u-list-item u-repeater-item u-white u-list-item-1">
              <div class="u-container-layout u-similar-container u-valign-top-lg u-valign-top-md u-valign-top-sm u-valign-top-xl u-container-layout-1">
                <img alt="" class="u-expanded-width-xs u-image u-image-default u-image-1" src="<?php echo htmlentities($row['food_img']); ?>">
                <div class="u-align-left-xs u-container-style u-expanded-width-xs u-group u-video-cover u-group-1">
                  <div class="u-container-layout u-valign-middle-xs u-container-layout-2">
                    <h3 class="u-custom-font u-font-oswald u-text u-text-3"><?php echo htmlentities($row['food_name']);?></h3>
                    <p class="u-text u-text-4"><?php echo htmlentities($row['food_calories']);?> Calories</p>
                    <h6 class="u-text u-text-palette-3-base u-text-5">RM <?php echo htmlentities($row['food_price']);?></h6><br>
					<form method="post" action="cart_action.php?action=add&id=<?php echo $row['food_id'];?>">
					<input type="text" name="quantity" value="1" size="2" />
					<button type="submit" class="u-btn u-btn-rectangle u-button-style u-grey-10 u-btn-1"><i class="fa fa-shopping-cart" style="font-size:20px"></i> Add to Cart</button>
					</form>
                  </div>
                </div>
              </div>
            </div>
            <?php 
        }//while
      }//if
        else {
		//Food Not available
		echo "<div class='error'><br><strong>Food Not Found. Sorry.</strong></br></div>";
		?><a href="menu.php"><button type="submit" class="u-btn u-btn-rectangle u-button-style u-grey-10 u-btn-1"><strong>Back Menu</strong></button>
		<?php
      } 

      mysqli_close($conn);
    ?> 
      </div>
 
    </section>
  
    

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