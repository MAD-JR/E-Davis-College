<?php
                                    session_start();

                                    $servername = "localhost";
                                    $username = "root";
                                    $password = "";
                                    $dbname = "EducationMaster";

                                    $conn = mysqli_connect($servername, $username, $password, $dbname);

                                    if (isset($_POST['editbtn'])) {
                                        $id = $_POST['id'];
                                        $query = "SELECT * FROM users WHERE ID='$id'";
                                        $query_run = mysqli_query($conn, $query);

                                        foreach ($query_run as $row) {
                                            ?>

<?php
    }
}
?>
                                        