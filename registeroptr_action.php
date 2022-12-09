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

<?php
//========================================================================
function validateInput($data, $fieldName) {
    global $errorCount;
	if (empty($data)) {
		displayRequired($fieldName);
		++$errorCount;
		$retval = "";
	} else { // Only clean up the input if it isn't empty
		
		//email validation		
		if($fieldName == "Guest Email"){
			if (!filter_var($data, FILTER_VALIDATE_EMAIL)){
					$errorCount++;
					echo("$data is not a valid email address <br />");
			}
		}

		$retval = trim($data);
		$retval = stripslashes($retval);
	}
	return($retval);
}

function displayRequired($fieldName) {
     echo "The field \"$fieldName\" is required.<br />\n";
}

//============================================================================
//Step 1: Input validation
$errorCount = 0;
$optr_name = validateInput($_POST['optr_name'], "Name"); 
$optr_email = validateInput($_POST['optr_email'], "Email"); 
$optr_pw = validateInput($_POST['optr_pw'], "Password");
//Hash function with the input password
$pwdHash = trim(password_hash($_POST['optr_pw'], PASSWORD_DEFAULT));
if ($errorCount>0) {
     echo "Please use the \"Back\" button to re-enter the 
          data.<br />\n";		  
}
else {
	
//STEP 2: Check if user already exist
	$sql = "SELECT * FROM operator WHERE operator_email ='$optr_email' AND 	operator_pwhash ='$pwdHash' LIMIT 1";	
	$result = mysqli_query($conn, $sql);
	
	if (mysqli_num_rows($result) == 1) {
		echo "<p ><b>Error:</b> User Exist, cannot register</p>";		
	} else {
		$sql = "INSERT INTO operator (operator_name, operator_email, operator_pwhash )
		VALUES ('" . $optr_name . "','" . $optr_email . "','$pwdHash')";
		
		if (mysqli_query($conn, $sql)) {
			echo "<p>New user record created successfully. Welcome <b>".$optr_name."</b></p>";			
		} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}	
	}
}
mysqli_close($conn);
?>
<p><a href="loginoptr.php">Please login to continue</a></p>
</body>
</html>