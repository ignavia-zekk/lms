<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>PLT LIBRARY </title>


    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/nprogress.css" rel="stylesheet">
    <link href="css/custom.min.css" rel="stylesheet">

</head>

<body class="nav-md">
<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
                <div class="navbar nav_title" style="border: 0;">
                    <a href="#" class="site_title"><i class="fa fa-university"></i> <span>PLT LIBRARY</span></a>
                </div>

                <div class="clearfix"></div>

                <!-- menu profile quick info -->
                <div class="profile clearfix">
                    <div class="profile_pic">
                        <img src="images/khen.jpg" alt="..." class="img-circle profile_img">
                    </div>
                    <div class="profile_info">
                        <span>Welcome to PLT Library,</span>

                        <h2><?php echo $_SESSION["librarian"]; ?></h2>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <!-- /menu profile quick info -->

                <br/>

                <!-- sidebar menu -->
                <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                    <div class="menu_section">
                        <h3>General</h3>
                        <ul class="nav side-menu">
                            <li><a href="disp_stud_info.php"><i class="fa fa-group"></i>User Info<span class="fa fa-chevron-right"></span></a>

                            </li>
                            <li><a href="rsrv.php"><i class="fa fa-group"></i>Book Requests<span class="fa fa-chevron-right"></span></a>

                            </li>
                            <li><a href="add_books.php"><i class="fa fa-edit"></i> Add Books <span class="fa fa-chevron-right"></span></a>

                            </li>
                            <li><a href="dispbooks.php"><i class="fa fa-desktop"></i> Display Books <span
                                    class="fa fa-chevron-right"></span></a>

                            </li>
                            <li><a href="bdetailwithstudents.php"><i class="fa fa-book"></i>Borrowed Books<span
                                    class="fa fa-chevron-right"></span></a>

                            </li>


                            <li><a href="issuebookpage.php"><i class="fa fa-table"></i> Issue Books <span class="fa fa-chevron-right"></span></a>

                            </li>
                            <li><a href="returnbook.php"><i class="fa fa-bar-chart-o"></i> Return Books <span
                                    class="fa fa-chevron-right"></span></a>
                                  </li>
                                        <li><a href="lhistory.php"><i class="fa fa-history"></i>Transaction History<span
                                                class="fa fa-chevron-right"></span></a>
                                              </li>
                                      </ul>
                    </div>
                  </div>
                </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
            <div class="nav_menu">
                <nav>
                  <ul class="nav navbar-nav navbar-right">
                        <li class="">
                            <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown"
                               aria-expanded="false">
                                <img src="images/khen.jpg" alt=""><?php echo $_SESSION["librarian"]; ?>
                                <span class=" fa fa-angle-down"></span>
                            </a>
                            <ul class="dropdown-menu dropdown-usermenu pull-right">
                                <li><a href="logout.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                            </ul>
                        </li>
                      </ul>
                </nav>
            </div>
        </div>
        <!-- /top navigation -->
