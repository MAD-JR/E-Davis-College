<?php

include('security.php');

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "EducationMaster";

$conn = mysqli_connect($servername, $username, $password, $dbname);
 if (isset($_POST['loginbtn'])) {
 	$useremail = $_POST['email'];
	$userpassword = $_POST['password'];
    //$userstatus = $_POST['status'];

	$query = "SELECT * FROM users WHERE EMAIL='$useremail' AND PASSWORD='$userpassword'";
	$query_run = mysqli_query($conn, $query);
    $userstatus = mysqli_fetch_array($query_run);

    if ($userstatus['STATUS'] == "Student" or $userstatus['STATUS'] == "View" ) {
        $_SESSION['EMAIL'] = $useremail;
        header('location: dashboard.php');
    }
    elseif ($userstatus['STATUS'] == "Instructor" or $userstatus['STATUS'] == "Admin") {
        $_SESSION['EMAIL'] = $useremail;
        header('location: admin.php');
    }
}
    else{
        $_SESSION['status'] = 'Invalid Email or Password';
        header('location: index.php');
    }
