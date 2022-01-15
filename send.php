<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "EducationMaster";

$conn = mysqli_connect($servername, $username, $password, $dbname);

	$sender_name = $_POST['name'];
	$sender_email = $_POST['email'];
	$sender_phone = $_POST['phone'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];

	$query = "INSERT INTO contact (NAME, EMAIL, PHONE, SUBJECT, MESSAGE) VALUES ('$sender_name', '$sender_email', '$sender_phone', '$subject', '$message')";
	$query_run = mysqli_query($conn, $query);

if ($query_run) {
		//echo "Account created!";
		$_SESSION['success'] = 'Message Sent';
		header('Location: contact-us.php');	
	} else {
		//echo "Failed!";
		$_SESSION['status'] = 'Message does not sent';
		header('Location: contact-us.php');
	}

?>
