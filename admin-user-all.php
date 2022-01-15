<?php 

include('security.php');
?>

<!DOCTYPE html>
<html lang="en">


<head>
    <title>E-Davis College</title>
    <!-- META TAGS -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="EEducation master is one of the best eEducational html template, it's suitable for all eEducation websites like university,college,school,online eEducation,tution center,distance eEducation,computer eEducation">
    <meta name="keyword" content="eEducation html template, university template, college template, school template, online eEducation template, tution center template">
    <!-- FAV ICON(BROWSER TAB ICON) -->
    <link rel="shortcut icon" href="images/fav.ico" type="image/x-icon">
    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700%7CJosefin+Sans:600,700" rel="stylesheet">
    <!-- FONTAWESOME ICONS -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- ALL CSS FILES -->
    <link href="css/materialize.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet" />
    <!-- RESPONSIVE.CSS ONLY FOR MOBILE AND TABLET VIEWS -->
    <link href="css/style-mob.css" rel="stylesheet" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <!--== MAIN CONTRAINER ==-->
    <div class="container-fluid sb1">
        <div class="row">
            <!--== LOGO ==-->
            <div class="col-md-2 col-sm-3 col-xs-6 sb1-1">
                <a href="#" class="btn-close-menu"><i class="fa fa-times" aria-hidden="true"></i></a>
                <a href="#" class="atab-menu"><i class="fa fa-bars tab-menu" aria-hidden="true"></i></a>
                <a href="index-2.html" class="logo"><img src="images/logo1.png" alt="" />
                </a>
            </div>
            <!--== SEARCH ==-->
            <div class="col-md-6 col-sm-6 mob-hide">
                <form class="app-search">
                    <input type="hidden" placeholder="Search..." class="form-control">
                    <a href="#" type=""><i class=""></i></a>
                </form>
            </div>
            <!--== NOTIFICATION ==-->
            <div class="col-md-2 tab-hide">
                <div class="top-not-cen">
                    <a class='waves-effect btn-noti' href="#" title="all enquiry messages"><i class="fa fa-commenting-o" aria-hidden="true"></i><span>0</span></a>
                    <a class='waves-effect btn-noti' href="admin-message.php" title="messages"><i class="fa fa-envelope-o" aria-hidden="true"></i><span>
                        <?php
                                    $servername = "localhost";
                                    $username = "root";
                                    $password = "";
                                    $dbname = "EducationMaster";
                                        
                                    $conn = mysqli_connect($servername, $username, $password, $dbname);
                                    $query = "SELECT ID FROM contact ORDER BY ID";
                                    $query_run = mysqli_query($conn, $query);

                                    $row = mysqli_num_rows($query_run);

                                    echo "$row";
                                    ?></span></a>
                    <a class='waves-effect btn-noti' href="#" title="admission enquiry"><i class="fa fa-tag" aria-hidden="true"></i><span>0</span></a>
                </div>
            </div>
            <!--== MY ACCCOUNT ==-->
            <div class="col-md-2 col-sm-3 col-xs-6">
                <!-- Dropdown Trigger -->
                <a class='waves-effect dropdown-button top-user-pro' href='#' data-activates='top-menu'><img src="images/user/6.png" alt="" />My Account <i class="fa fa-angle-down" aria-hidden="true"></i>
                </a>

                <!-- Dropdown Structure -->
                <ul id='top-menu' class='dropdown-content top-menu-sty'>
                    <li><a href="#!" data-toggle="modal" data-target="#modal2" class="waves-effect"><i class="fa fa-user" aria-hidden="true"></i>Login as Student</a>
                    </li>
                    <li class="divider"></li>
                    <li><a href="#!" data-toggle="modal" data-target="#modal1" class="ho-dr-con-last waves-effect"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!--== BODY CONTNAINER ==-->
    <div class="container-fluid sb2">
        <div class="row">
            <div class="sb2-1">
                <!--== USER INFO ==-->
                <div class="sb2-12">
                    <ul>
                        <li><img src="images/placeholder.jpg" alt="">
                        </li>
                        <li>
                            <h5><?php echo $_SESSION['EMAIL']; ?></h5>
                        </li>
                        <li></li>
                    </ul>
                </div>
                <!--== LEFT MENU ==-->
                <div class="sb2-13">
                    <ul class="collapsible" data-collapsible="accordion">
                        <li><a href="admin.php" class="menu-active"><i class="fa fa-bar-chart" aria-hidden="true"></i> Dashboard</a>
                        </li>
                        <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-user" aria-hidden="true"></i> Users</a>
                            <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="admin-user-all.php">All Users</a>
                                    </li>
                                    <li><a href="admin-user-add.php">Add New user</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-users" aria-hidden="true"></i> Students</a>
                            <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="admin-student-all.php">All Students</a>
                                    </li>
                                    <li><a href="admin-student-add.php">Add New Students</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-book" aria-hidden="true"></i> All Courses</a>
                            <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="admin-all-courses.php">All Course</a>
                                    </li>
                                    <li><a href="admin-add-courses.php">Add New Course</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-pencil" aria-hidden="true"></i> Exam table</a>
                            <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="admin-exam-all.php">All Exams</a></li>
                                    <li><a href="admin-exam-add.php">Add New Exam</a></li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-calendar" aria-hidden="true"></i> Time Table</a>
                            <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="admin-time-all.php">Time Table</a>
                                    </li>
                                    <li><a href="admin-time-add.php">Create New Line</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <!--== BODY INNER CONTAINER ==-->
            <div class="sb2-2">
                <!--== breadcrumbs ==-->
                <div class="sb2-2-2">
                    <ul>
                        <li><a href="admin.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                        </li>
                        <li class="active-bre"><a href="#"> Dashboard</a>
                        </li>
                        <li class="page-back"><a href="admin.php"><i class="fa fa-backward" aria-hidden="true"></i> Back</a>
                        </li>
                    </ul>
                </div>

                <!--== User Details ==-->
                <div class="sb2-2-3">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box-inn-sp">
                                <div class="inn-title">
                                    <h4>User Details</h4>
                                    <p>All about students like name, student id, phone, email, country, city and more</p>
                                </div>
                                <div class="tab-inn">
                                    <?php
                                    if (isset( $_SESSION['success']) &&  $_SESSION['success']!='') {
                                        echo '<h4>'.$_SESSION['success'].'</h4>';
                                        unset( $_SESSION['success']);
                                    }

                                    if (isset( $_SESSION['status']) &&  $_SESSION['status']!='') {
                                        echo '<h4 class="bg-info">'.$_SESSION['status'].'</h4>';
                                        unset( $_SESSION['status']);
                                    }


                                    ?>
                                    <div class="table-responsive table-desi">
                                        <?php
                                            $servername = "localhost";
                                            $username = "root";
                                            $password = "";
                                            $dbname = "EducationMaster";

                                            $conn = mysqli_connect($servername, $username, $password, $dbname);
                                            $query = "SELECT * FROM users WHERE STATUS='Instructor'";
                                            $query_run = mysqli_query($conn, $query);
                                        ?>
                                        <table class="table table-hover">
                                            <thead>
                                                <tr> 
                                                    <th>Id</th>
                                                    <th>Full Names</th>
                                                    <th>Phone </th>
                                                    <th>Email Address</th>
                                                    <th>Country</th>
                                                    <th>Class</th>
                                                    <th>Edit</th>
                                                    <th>Delete</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                if (mysqli_num_rows($query_run) > 0) {
                                                while ($row = mysqli_fetch_assoc($query_run)) {
                                                ?>
                                                <tr>
                                                    <td><?php echo $row['ID']; ?></td>
                                                    <td><?php echo $row['F_NAME']." ".$row['L_NAME']; ?></td>
                                                    <td><?php echo $row['PHONE']; ?></td>
                                                    <td><?php echo $row['EMAIL']; ?></td>
                                                    <td><?php echo $row['COUNTRY']; ?></td>
                                                    <td><?php echo $row['CLASS']; ?></td>
                                                    <td>
                                                    <form action="admin-user-edit.php" method="POST">
                                                        <input type="hidden" name="id" value="<?php echo $row['ID']; ?>">
                                                        <button type="submit" name="editbtn" class="label label-success">Edit</button>
                                                    </form>
                                                    </td>
													<td><form  action="deleteuser.php" method="POST">
                                                        <input type="hidden" name="id" value="<?php echo $row['ID']; ?>">
                                                        <button type="submit" name="deletebtn" class="label label-danger">Delete</button>
                                                    </form></td>
                                                </tr>
                                                <?php
                                            }
                                        }
                                                else{
                                                    echo "<h5>Table is Empty!";
                                                }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
 <!-- LOGOUT SECTION -->
        <div id="modal1" class="modal fade" role="dialog">
            <div class="log-in-pop">
                <div class="log-in-pop-left">
                    <h3>Ready to Leave?</h3>
                    
                </div>
                <div class="log-in-pop-right">
                    <a href="#" class="pop-close" data-dismiss="modal"><img src="images/cancel.png" alt="" />
                    </a>
                    
                    <h5>“If someone is going down the wrong road, he doesn’t need motivation to speed him up. What he needs is education to turn him around.” — Jim Rohn</h5>
                    <form class="s12" action="logoutcode.php" method="POST">
                        <div>
                            <div class="input-field s1">
                                <input type="submit" name="logoutbtn" value="Logout" class="waves-effect waves-light log-in-btn"> </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
       </section>
 <section>
        <!-- LOGIN SECTION -->
        <div id="modal2" class="modal fade" role="dialog">
            <div class="log-in-pop">
                <div class="log-in-pop-left">
                    <h4>Do you want to login as a student?</h4>
                    
                </div>
                <div class="log-in-pop-right">
                    <a href="#" class="pop-close" data-dismiss="modal"><img src="images/cancel.png" alt="" />
                    </a>
                    <h4>Student View..</h4>
                    <form class="s12" action="logincode.php" method="POST">
                        <div>
                            <div class="input-field s12">
                                <input type="hidden" name="email" value="studentview@daviscollege.com" data-ng-model="name" class="validate" required>
                            </div>
                        </div>
                        <div>
                            <div class="input-field s12">
                                <input type="hidden" name="password" class="validate" required value="123">
                            </div>
                        </div>
                        <div>
                            <div class="input-field s6">
                                <input type="submit" name="loginbtn" value="Login" class="waves-effect waves-light log-in-btn" > 
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
       </section>

    <!--Import jQuery before materialize.js-->
    <script src="js/main.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/materialize.min.js"></script>
    <script src="js/custom.js"></script>
</body>


</html>