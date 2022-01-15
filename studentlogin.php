<?php
//include('security.php');

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "EducationMaster";

$conn = mysqli_connect($servername, $username, $password, $dbname);
 //if (isset('signinbtn')) {
 	$studentmail = $_POST['email'];
	$studentpassword = $_POST['password'];

	$query = "SELECT * FROM students WHERE Email='$studentemail' AND Password='$studentpassword'";
	$query_run = mysqli_query($conn, $query);
 //}
 if (mysqli_fetch_array($query_run)) {
 	$_SESSION['Email'] = $useremail;
 	header('Location: dashboard.php');
 }
 else{
 	$_SESSION['status'] = 'Email or Password is invalid';
 	header('Location: index.php');
 }