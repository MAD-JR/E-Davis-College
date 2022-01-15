<?php
//include('security.php');

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "EducationMaster";

$conn = mysqli_connect($servername, $username, $password, $dbname);
 if (isset($_POST['editbtn'])) {
 	$userid = $_POST['edituser'];
    
    $query = "SELECT * FROM users WHERE ID='$userid'";
    $query_run = mysqli_query($conn, $query);
}