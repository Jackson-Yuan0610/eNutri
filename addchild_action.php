<?php
session_start();
include("include/config.php");

if(isset($_POST['addstudent']))
{
	$parent_id = $_POST["user_id"];
	$parent_username = $_POST["user_name"];
	$student_no = $_POST["studentno"];
	$student_name = $_POST["studentname"];
    $student_id = $_POST["studentid"];
    $birth_date = $_POST['birth'];
	$student_gender = $_POST["gender"];
    $student_height = $_POST['height'];
    $student_weight = $_POST['weight'];
    
    $query = "INSERT INTO student (student_no, parent_id, parent_username, student_id, student_name, student_height, student_weight, student_gender, student_birth)
	VALUES ('$student_no','$parent_id', '$parent_username', '$student_id', '$student_name', '$student_height', '$student_weight', '$student_gender', '$birth_date')";
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

?>