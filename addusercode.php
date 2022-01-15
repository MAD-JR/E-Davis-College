<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "EducationMaster";

$conn = mysqli_connect($servername, $username, $password, $dbname);

	$student_id = $_POST['id'];
	$userprofile = $_POST['profile'];
	$userfname = $_POST['fname'];
	$userlname = $_POST['lname'];
	$userphone = $_POST['phone'];
	$useremail = $_POST['email'];
	$usercountry = $_POST['country'];
	$userclass = $_POST['class'];
	$userpassword = $_POST['password'];
	$userstatus = $_POST['status'];

	$query = "INSERT INTO users (ID, PROFILE, F_NAME, L_NAME, PHONE, EMAIL, COUNTRY, CLASS, PASSWORD, STATUS) VALUES ('$student_id', '$userprofile', '$userfname', '$userlname', '$userphone', '$useremail', '$usercountry', '$userclass', '$userpassword', '$userstatus')";
	$query_run = mysqli_query($conn, $query);

if ($query_run) {
		//echo "Account created!";
		$_SESSION['success'] = 'Account Added';
		header('Location: admin-user-all.php');	
	} else {
		//echo "Failed!";
		$_SESSION['status'] = 'Unable to add account';
		header('Location: admin-user-add.php');
	}

?>
