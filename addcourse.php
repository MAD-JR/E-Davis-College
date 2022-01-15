<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "EducationMaster";

$conn = mysqli_connect($servername, $username, $password, $dbname);

//if (isset($_POST['addbtn'])) {
	$ID = $_POST['cid'];
	$cname = $_POST['cname'];
	$cdesc = $_POST['desc'];
	$class = $_POST['class'];
	$crequire = $_POST['require'];
	$cresource = $_POST['resource'];
	$cimage = $_POST['image'];
	
	$query = "INSERT INTO courses (COURSE_ID, COURSE_NAME, DESCR, CLASS, REQUIRE, RESOURCE, IMAGE) VALUES ('$ID', '$cname', '$cdesc', '$class', '$crequire', '$cresource', '$cimage')";
	$query_run = mysqli_query($conn, $query);

if ($query_run) {
		//echo "Course created!";
		$_SESSION['success'] = 'Course Added';
		header('Location: admin-course-all.php');	
	} else {
		//echo "Failed!";
		$_SESSION['status'] = 'Unable to add Course';
		header('Location: admin-add-courses.php');
	}
//}


?>
