<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "EducationMaster";

$conn = mysqli_connect($servername, $username, $password, $dbname);

	$starttime = $_POST['start'];
	$endtime = $_POST['end'];
	$monday = $_POST['1day'];
	$tuesday = $_POST['2day'];
	$wednesday = $_POST['3day'];
	$thursday = $_POST['4day'];
	$friday = $_POST['5day'];

	$query = "INSERT INTO timetable (STIME, ETIME, MONDAY,TUESDAY, WEDNESDAY, THURSDAY, FRIDAY) VALUES ('$starttime', '$endtime', '$monday', '$tuesday', 'wednesday', '$thursday', '$friday')";

	$query_run = mysqli_query($conn, $query);

if ($query_run) {
		//echo "Account created!";
		$_SESSION['success'] = 'Account Added';
		header('Location: admin-time-all.php');	
	} else {
		//echo "Failed!";
		$_SESSION['status'] = 'Unable to add account';
		header('Location: admin-time-add.php');
	}

?>
