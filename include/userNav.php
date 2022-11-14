<img src="img/mylokalfood.png" class="imgcenter">	
<?php 
//login&logout section
	if(isset($_SESSION["UID"])){
		echo '<p style="text-align:right"><b> '. $_SESSION["userName"] . '</b> <a href="logout.php"><i class="fa fa-sign-out" style="font-size:24px" align="right"></i>Logout</a>';		
	}
	else {
		echo '<p align="right"><a href="login.php"><i class="fa fa-sign-in" style="font-size:24px" align="right"></i> Login </a>';
	}
//mycart section
	echo '<a href="cart_action.php"><i class="fa fa-shopping-cart" style="font-size:24px"></i> My Cart </a> ';
	if(isset($_SESSION["cart_item"])){
		$countItem = count($_SESSION["cart_item"]);		
		echo "<b>($countItem)</b>&nbsp;</p>";
	} else {
		echo "<b>(0)&nbsp;</p>";
	}
	
?>
