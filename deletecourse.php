<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "EducationMaster";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (isset($_POST['deletebtn'])) {
    $id = $_POST['id'];
    $query = "DELETE FROM courses WHERE ID='$id'";
    $query_run = mysqli_query($conn, $query);

    if ($query_run) {
        $_SESSION['success'] = 'Deleted';
        header('Location: admin-course-all.php');  
    } else {
        //echo "Failed!";
        $_SESSION['status'] = 'Unable to Delete';
        header('Location: admin-course-all.php');
    }
    

}

?>