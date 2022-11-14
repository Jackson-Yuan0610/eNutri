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
     
    }.center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
}

</style>
</head>

<body>
<!-- Page content row -->
<div class="row">
	<div class="col-secLeft">
		<div class="header">
			<h4>| Login</h4>
		</div>
		<form action="login_action.php" method="post">
		<p>Username: 
		<input type="text" name="custEmail" required placeholder="Your email"></p>
		<p>Password: 
		<input type="password" name="custPwd" required></p>
		<button type="submit">Login</button>
		<br> 
		</form>	
	</div>

	<div class="col-secRight">
		<div class="header">
			<h4>| New Registration</h4>
		</div>
		<form action="register_action.php" method="post">
		<p>Name: 
		<input type="text" name="custName" required></p>
		<p>Email: 
		<input type="email" name="custEmail" required></p>
		<p>Password: 
		<input type="password" name="custPwd" required></p>
		<button type="submit">Register</button>&nbsp;<input type="reset"> 
		</form>
	</div>
<!-- End page content -->
</div>
</div>

</body>
</html>
