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
<h2>Login Information</h2>
<?php
//login values from login form
$username = $_POST['operator_email']; 
$password = $_POST['operator_pw'];

$sql = "SELECT * FROM operator WHERE operator_email='$username' LIMIT 1";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) == 1) {	
	//check password hash
	$row = mysqli_fetch_assoc($result);
	if (password_verify($_POST['operator_pw'],$row['operator_pwhash'])) {
        //echo 'Pwd Verified'; // password_verify success!
		echo "Login success. <br> Thank you for filling out the login form, <b>".$username."</b>.<br /><br />";		
		$_SESSION["UID"] = $row["operator_id"];//the first record set, bind to userID
		$_SESSION["userName"] = $row["operator_name"];
		header("location:operator/dashboard.php"); 
    } else {
    echo 'Login error, username or password is incorrect.';
	echo $row['operator_pwhash'];
	
    }
		
} else {
		echo "Login error, username does not exist.";
} 

mysqli_close($conn);
?>
</body>
</html>