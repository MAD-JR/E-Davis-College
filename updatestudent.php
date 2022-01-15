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

if ($student_password === $confirm_password) {
	
	$query = "UPDATE users SET PROFILE='$student_profile', F_NAME='$student_fname', L_NAME='$student_lname', PHONE='$student_phone', EMAIL='$student_email', COUNTRY='$student_country', CLASS='$student_class', PASSWORD='$student_password' WHERE ID='$student_id'";
	$query_run = mysqli_query($conn, $query);

if ($query_run) {
		//echo "Account created!";
		$_SESSION['success'] = 'Updated';
		header('Location: admin-student-all.php');	
	} else {
		//echo "Failed!";
		$_SESSION['status'] = 'Failed to update';
		header('Location: admin-student-edit.php');
	}
}

//}

?>
