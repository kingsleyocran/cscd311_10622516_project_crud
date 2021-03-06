<?php 

require_once 'db_connect.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>DexApp - Tables</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <img src="images/icon/logo.png" alt="CoolAdmin" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li>
                            <a class="js-arrow" href="dashboard.php">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                        <li>
                            <a href="additem.php">
                                <i class="fas fa-chart-bar"></i>Add Item</a>
                        </li>
                        <li>
                            <a href="tableslist.php">
                                <i class="fas fa-table"></i>Tables</a>
                        </li>
                        <li>
                            <a href="updatelist.php">
                                <i class="far fa-check-square"></i>Update List</a>
                        </li>
                        <li>
                            <a href="deletelist.php">
                                <i class="fas fa-calendar-alt"></i>Delete</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="images/icon/logo.png" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">                                                     
                        <li>
                            <a class="js-arrow" href="dashboard.php">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                        <li>
                            <a href="additem.php">
                                <i class="fas fa-chart-bar"></i>Add Item</a>
                        </li>
                        <li>
                            <a href="tableslist.php">
                                <i class="fas fa-table"></i>Tables</a>
                        </li>
                        <li>
                            <a href="updatelist.php">
                                <i class="far fa-check-square"></i>Update List</a>
                        </li>
                        <li>
                            <a href="deletelist.php">
                            <i class="fas fa-calendar-alt"></i>Delete</a>
                        </li>
                    </ul>
             
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                                        <div class="header-button">
                                            <div class="account-wrap">
                                            <div class="account-item clearfix js-item-menu">
                                                <div class="image">
                                                    <img src="images/icon/avatar-01.jpg" alt=" " />
                                                </div>
                                                <?php if(isset($_SESSION['username'])): ?>
                                                    <div class="content">
                                                        <a class="js-acc-btn" href="#">
                                                            <?php echo($_SESSION['username']); ?> 
                                                        </a>
                                                    </div>
                                                <?php endif ?>
                                                <div class="account-dropdown js-dropdown">
                                                    <div class="info clearfix">
                                                        <div class="image">
                                                            <a href="#">
                                                                <img src="images/icon/avatar-01.jpg" alt=" " />
                                                            </a>
                                                        </div>
                                                        <?php if(isset($_SESSION['username'])): ?>
                                                            <div class="content">
                                                                <h5 class="name">
                                                                    <a href="#">
                                                                        <?php 
                                                                            echo($_SESSION['username']);
                                                                        ?> 
                                                                    </a>
                                                                </h5>
                                                                <span class="email">
                                                                    <?php 
                                                                        echo($_SESSION['email']);
                                                                    ?> 
                                                                </span>
                                                            </div>
                                                        <?php endif ?>
                                                    </div>
                                                    <form action="additem.php" method="post">
                                                        <div class="account-dropdown__footer">
                                                            <button type="submit" class="btn btn-primary btn-sm" name="logout" >
                                                                <i class="zmdi zmdi-power"></i>Logout
                                                            </button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                
                            </div>
                    </div>
                </div>
            </header>
            <!-- END HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">  
                
                            <div class="card-body card-block">
                                    <div class="section__content section__content--p30">
                                            <div class="container-fluid">
                                                <div class="row">
                                                    <div class="col-lg-9">
                                                        <div class="table-responsive table--no-card m-b-30">
                                                            <table class="table table-borderless table-striped table-earning">
                                                                <thead>
                                                                    <tr>
                                                                        <th>id number</th>
                                                                        <th>first name</th>
                                                                        <th>last name</th>
                                                                        <th>other name</th>
                                                                        <th>email</th>
                                                                        <th>programme</th>
                                                                        <th>level</th>
                                                                        <th>hall</th>
                                                                        <th>personal address</th>
                                                                        <th>telephone</th>
                                                                        <th>date of birth</th>
                                                                        <th>parent name</th>
                                                                        <th>parent telephone</th>
                                                                        <th>parent address</th>
                                                                        <th>post office box address</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php
                                                                        $myname = "";
                                                                        $myname = $_SESSION['username'];
                                                                        $qry = "SELECT * FROM $myname";
                                                                        $result = mysqli_query($db2, $qry);

                                                                        if(mysqli_num_rows($result) > 0){
                                                                            while($row = mysqli_fetch_assoc($result)) {
                                                                                echo "<tr>
                                                                                    <td>".$row['hf_fname']."</td>
                                                                                    <td>".$row['hf_lname']."</td>
                                                                                    <td>".$row['hf_oname']."</td>
                                                                                    <td>".$row['hf_idnumber']."</td>
                                                                                    <td>".$row['hf_email']."</td>
                                                                                    <td>".$row['hf_prog']."</td>
                                                                                    <td>".$row['hf_level']."</td>
                                                                                    <td>".$row['hf_hall']."</td>
                                                                                    <td>".$row['hf_paddress']."</td>
                                                                                    <td>".$row['hf_tel']."</td>
                                                                                    <td>".$row['hf_dob']."</td>
                                                                                    <td>".$row['hf_pname']."</td>
                                                                                    <td>".$row['hf_ptel']."</td>
                                                                                    <td>".$row['hf_ppaddress']."</td>
                                                                                    <td>".$row['hf_pob']."</td>
                                                                                </tr>";
                                                                            }
                                                                        } else {
                                                                            echo "<tr><td colspan='5'><center>No Data Avaliable</center></td></tr>";
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

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

</html>
<!-- end document-->
