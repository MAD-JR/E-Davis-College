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
    <meta name="description" content="Education master is one of the best educational html template, it's suitable for all education websites like university,college,school,online education,tution center,distance education,computer education">
    <meta name="keyword" content="education html template, university template, college template, school template, online education template, tution center template">
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

    <!-- MOBILE MENU -->
    <section>
        <div class="ed-mob-menu">
            <div class="ed-mob-menu-con">
                <div class="ed-mm-left">
                    <div class="wed-logo">
                        <a href="dashboard.php"><img src="images/logo1.png" alt="" />
                        </a>
                    </div>
                </div>
                <ul>
                 <li><a href="#!" data-toggle="modal" data-target="#modal1">Logout</a></li>
             </ul>
        </div>
            </div>
        </div>
            </div>
        </div>
    </section>

    <!--HEADER SECTION-->
    <section>
        <!-- TOP BAR -->
        <div class="ed-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="ed-com-t1-left">
                            <ul>
                                <li><a href="#">KN 77 Avenue Kiyovu, Kigali, Rwanda</a>
                                </li>
                                <li><a href="#">DAVIS COLLEGE: +250 788 380 510</a>
                                </li>
                            </ul>
                        </div>
                        <div class="ed-com-t1-right">
                            <ul>
                                <li><a href="#!" data-toggle="modal" data-target="#modal1">Logout</a>
                                </li>
                            </ul>
                        </div>
                        <div class="ed-com-t1-social">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                </li>
                                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                </li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- LOGO AND MENU SECTION -->
        <div class="top-logo" data-spy="affix" data-offset-top="250">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="wed-logo">
                            <a href="dashboard.php"><img src="images/logo.png" alt="" />
                            </a>
                        </div>
                        <div class="main-menu">
                            <ul>
                                <li><a href="dashboard.php">Home</a>
                                </li>
                                <li class="about-menu">
                                    <a href="about.php" class="mm-arr">About us</a>
                                    <!-- MEGA MENU 1 -->
                                    <div class="mm-pos">
                                        <div class="about-mm m-menu">
                                            <div class="m-menu-inn">
                                                <div class="mm1-com mm1-s1">
                                                    <div class="ed-course-in">
                                                        <a class="course-overlay menu-about" href="admission.php">
                                                            <img src="images/h-about.jpg" alt="">
                                                            <span>Academics</span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="mm1-com mm1-s2">
                                                    <p>Want to change the world? At Berkeley we’re doing just that. When you join the Golden Bear community, you’re part of an institution that shifts the global conversation every single day.</p>
                                                    <a href="about.php" class="mm-r-m-btn">Read more</a>
                                                </div>
                                <li><a href="contact-us.php">Contact us</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="all-drop-down-menu">

                    </div>

                </div>
            </div>
        </div>



    <!--SECTION START-->
    <section>
        <div class="pro-cover">
        </div>
        <div class="pro-menu">
            <div class="container">
                <div class="col-md-9 col-md-offset-3">
                    <ul>
                        <li><a href="dashboard.php">My Dashboard</a></li>
                        <li><a href="db-profile.php" class="pro-act">Profile</a></li>
                        <li><a href="db-courses.php">Courses</a></li>
                        <li><a href="db-exams.php">Exams</a></li>
                        <li><a href="db-time-line.php">Time Line</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="stu-db">
            <div class="container pg-inn">
                <div class="col-md-3">
                    <div class="pro-user">
                        <img src="userimages/user.jpg" alt="user" height="280px">
                    </div>
                    <div class="pro-user-bio">
                        <ul>
                            <li>
                             <li>
                                Email:<h6><?php echo $_SESSION['EMAIL']; ?></h6>
                            </li>
                            <li>Student Id:<h6>STU-2</h6> </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="udb">

                        <div class="udb-sec udb-prof">
                            <h4><img src="images/icon/db1.png" alt="" /> My Profile</h4>
                            <div class="sdb-tabl-com sdb-pro-table">
                                 <?php

                                            $servername = "localhost";
                                            $username = "root";
                                            $password = "";
                                            $dbname = "EducationMaster";

                                            $conn = mysqli_connect($servername, $username, $password, $dbname);
                                            $query = "SELECT * FROM users WHERE STATUS='Student'";
                                            $query_run = mysqli_query($conn, $query);
                                        ?>
                                <table class="responsive-table bordered">
                                    <tbody>
                                        <?php
                                                if (mysqli_num_rows($query_run) > 0) {
                                                while ($row = mysqli_fetch_assoc($query_run)) {
                                                ?>
                                                <tr>
                                                    <td>Student Name</td>
                                                    <td>:</td>
                                                    <td><?php echo $row['F_NAME']." ".$row['L_NAME']; ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Student Id</td>
                                                    <td>:</td>
                                                    <td><?php echo $row['ID']; ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Class</td>
                                                    <td>:</td>
                                                    <td><?php echo $row['CLASS']; ?></td>
                                                </tr>
                                                <tr>
                                                    <td>EMAIL</td>
                                                    <td>:</td>
                                                    <td><?php echo $row['EMAIL']; ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Phone</td>
                                                    <td>:</td>
                                                    <td><?php echo $row['PHONE']; ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Address</td>
                                                    <td>:</td>
                                                    <td><?php echo $row['COUNTRY']; ?></td>
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
    </section>
    <!--SECTION END-->


    <!-- FOOTER COURSE BOOKING -->
    <section>
        <div class="full-bot-book">
            <div class="container">
                <div class="row">
                    <div class="bot-book">
                        <div class="col-md-2 bb-img">
                            <img src="images/3.png" alt="">
                        </div>
                        <div class="col-md-7 bb-text">
                            <h4>therefore always free from repetition</h4>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour</p>
                        </div>
                        <div class="col-md-3 bb-link">
                            <a href="course-details.php">Book This Course</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <section class="wed-hom-footer">
        <div class="container">
            <div class="row wed-foot-link-1">
                <div class="col-md-4 foot-tc-mar-t-o">
                    <h4>Get In Touch</h4>
                    <p>Address: 28800 Orchard Lake Road, Suite 180 Farmington Hills, U.S.A.</p>
                    <p>Phone: <a href="#!">+101-1231-4321</a></p>
                    <p>Email: <a href="#!">info@edu.com</a></p>
                </div>
                <div class="col-md-4">
                    <h4>DOWNLOAD OUR FREE MOBILE APPS</h4>
                    <ul>
                        <li><a href="#"><span class="sprite sprite-android"></span></a>
                        </li>
                        <li><a href="#"><span class="sprite sprite-ios"></span></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h4>SOCIAL MEDIA</h4>
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-whatsapp" aria-hidden="true"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- COPY RIGHTS -->
    <section class="wed-rights">
        <div class="container">
            <div class="row">
                <div class="copy-right">
                   <h5 style="">Aboubacar HARIMENSHI</h5>
                </div>
            </div>
        </div>
    </section>

    <!--SECTION LOGOUT-->
    <section>
        <!-- LOGOUT SECTION -->
        <div id="modal1" class="modal fade" role="dialog">
            <div class="log-in-pop">
                <div class="log-in-pop-left">
                    <h3>Ready to Leave?</h3>
                    <p>Don't have an account? Create your account. It's take less then a minutes</p>
                    <h4>Login with social media</h4>
                    
                </div>
                <div class="log-in-pop-right">
                    <a href="#" class="pop-close" data-dismiss="modal"><img src="images/cancel.png" alt="" />
                    </a>
                    <h4>Logout</h4>
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
    

    <!--Import jQuery before materialize.js-->
    <script src="js/main.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/materialize.min.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>