<?php
//include('security.php');

session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "EducationMaster";

$conn = mysqli_connect($servername, $username, $password, $dbname);
 if (isset($_POST['logoutbtn'])) {
    session_destroy();
    unset($_SESSION['STATUS']);

    header('location: index.php');
}

?>
