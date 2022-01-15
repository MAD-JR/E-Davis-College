<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "EducationMaster";

$conn = mysqli_connect($servername, $username, $password, $dbname);

//if (isset($_POST['addbtn'])) {
	$student_id = $_POST['id'];
	$student_profile = $_POST['profile'];
	$student_fname = $_POST['fname'];
	$student_lname = $_POST['lname'];
	$student_phone = $_POST['phone'];
	$student_email = $_POST['email'];
	$student_country = $_POST['country'];
	$student_class = $_POST['class'];
	$student_password = $_POST['password'];
	$confirm_password = $_POST['confirmpassword'];
	$student_status = $_POST['status'];

if ($student_password === $confirm_password) {
	
	$query = "INSERT INTO users (ID, PROFILE, F_NAME, L_NAME, PHONE, EMAIL, COUNTRY, CLASS, PASSWORD, STATUS) VALUES ('$student_id', '$student_profile', '$student_fname', '$student_lname', '$student_phone', '$student_email', '$student_country', '$student_class', '$student_password', '$student_status')";
	$query_run = mysqli_query($conn, $query);

if ($query_run) {
		//echo "Account created!";
		$_SESSION['success'] = 'Account Added';
		header('Location: admin-student-all.php');	
	} else {
		//echo "Failed!";
		$_SESSION['status'] = 'Unable to add account';
		header('Location: admin-student-add.php');
	}
}

//}

?>
