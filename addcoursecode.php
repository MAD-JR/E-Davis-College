<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "EducationMaster";

$conn = mysqli_connect($servername, $username, $password, $dbname);

	$courseid = $_POST['id'];
	$coursename = $_POST['name'];
	$coursedesc = $_POST['description'];
	$class = $_POST['class'];
	$courserequire = $_POST['require'];
	$courseresource = $_POST['resource'];
	$courseimage = $_POST['image'];

	$query = "INSERT INTO courses(ID, NAME, DESCR, CLASS, REQUIRE, RESOURCE, IMAGE) VALUES('$courseid', '$coursename', '$coursedesc', '$class', '$courserequire', '$courseresource', '$courseimage')";
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

?>
