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
		<form action="loginadm_action.php" method="post">
		<p>Username: 
		<input type="text" name="admin_email" required placeholder="Your email"></p>
		<p>Password: 
		<input type="password" name="admin_pw" required></p>
		<button type="submit">Login</button>
		<br> 
		</form>	
	</div>

<!-- End page content -->
</div>
</div>

</body>
</html>
