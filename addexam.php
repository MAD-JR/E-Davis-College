<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "EducationMaster";

$conn = mysqli_connect($servername, $username, $password, $dbname);

//if (isset($_POST['addbtn'])) {
	$examname = $_POST['nexam'];
	$coursename = $_POST['course'];
	$class = $_POST['class'];
	$exam = $_POST['exam'];
	$examdate = $_POST['date'];
	$starttime = $_POST['start'];
	$endtime = $_POST['end'];
	$status = $_POST['status'];
	
	$query = "INSERT INTO exams (EXNAME, CNAME, CLASS, EXAM, EXDATE, SDATE, EDATE, STATUS) VALUES ('$examname', '$coursename', '$class', '$exam', '$examdate', '$starttime', '$endtime', '$status')";
	$query_run = mysqli_query($conn, $query);

if ($query_run) {
		//echo "Course created!";
		$_SESSION['success'] = 'Exam Added';
		header('Location: admin-exam-all.php');	
	} else {
		//echo "Failed!";
		$_SESSION['status'] = 'Unable to add exam';
		header('Location: admin-exam-add.php');
	}
//}


?>
