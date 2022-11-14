<?php
session_start();
include("include/config.php");

if(isset($_POST['updateprofile']))
{
	$userid = $_POST["user_id"];
    $username = $_POST["user_name"];
    $phone = $_POST['user_phone'];
    $email = $_POST['user_email'];
    
    $query = "UPDATE user SET user_name = '$username', user_phone = '$phone', user_email = '$email' WHERE user_id='$userid' ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION["code_status"] = "Profile updated succesfully";
        header('Location: profile.php');
    }
    else
    {
        $_SESSION["code_status"] = "Profile failed to update";
        header('Location: profile.php');
    }
    
}

if(isset($_POST['addstudent']))
{
	$student_no = $_POST["user_id"];
    $username = $_POST["user_name"];
    $phone = $_POST['user_phone'];
    $height = $_POST['height'];
    $weight = $_POST['weight'];
    
    $query = "UPDATE user SET user_name = '$username', user_phone = '$phone', user_email = '$email' WHERE user_id='$userid' ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION["code_status"] = "Profile updated succesfully";
        header('Location: profile.php');
    }
    else
    {
        $_SESSION["code_status"] = "Profile failed to update";
        header('Location: profile.php');
    }
    
}

if(isset($_POST['voucher_check']))
{
	$voucher = $_POST("voucher");
	
	$query = "SELECT * FROM voucher WHERE voucher_code LIKE '%$voucher%' ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        while($row=mysqli_fetch_assoc($query_run))
		{
			$discount = $row['voucher_price'];
			echo "$discount";
		}
    }
    else
    {
        $_SESSION["code_status"] = "Profile failed to update";
        header('Location: profile.php');
    }
}

?>