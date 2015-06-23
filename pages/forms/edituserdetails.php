<!DOCTYPE html>
<?php
require_once 'C:\wamp\www\SuperCool-Heda\classes\ModuleParameters.php';
if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $firstname = $_POST['firstname'];
    $surname = $_POST['surname'];
    $username = $_POST['username'];
    $gender = $_POST['gender'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $county = $_POST['county'];
    $country = $_POST['country'];
    $role = $_POST['role'];
}


$db_name = 'heda';
$db_user = 'root';
$db_pass = '';
$db_host = 'localhost';
$dbPort = '3306';
$connect_db = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$connect_db) {
    die('Could not connect to MySQL: ' . mysqli_connect_error());
}
$result = mysqli_query($connect_db, "SELECT name FROM county WHERE countryid='KE' AND deleted=0");
$countyAr = Array();
while ($row = mysqli_fetch_array($result)) {
    $title = $row['name'];
    $countyAr[] = $title;
}
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>AdminLTE 2 | Widgets</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- Bootstrap 3.3.2 -->
        <link href="../../bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- Font Awesome Icons -->
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="../../dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
        <!-- AdminLTE Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. -->
        <link href="../../dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
        <script>
            function fillMode(mode_of_transport) {
                var select = document.getElementById('county');
                document.getElementById('county').options.length = 0;
                var mode = document.createElement("option");
                mode.text = "-- Select County --";
                select.add(mode, 0);
                for (var i = 0; i < mode_of_transport.length; i++) {
                    var option = document.createElement("option");
                    option.text = mode_of_transport[i];
                    option.value = mode_of_transport[i];
                    select.add(option, i + 1);
                }
            }
            function selectCounty() {
                var countrySelected = country.value;
                var select = document.getElementById('county');
                document.getElementById('county').options.length = 0;
                //clearAll();
                if (countrySelected == "KE") {
                    var county = <?php echo json_encode($countyAr); ?>;
                    fillMode(county);
                } else {
                    var option = document.createElement("option");
                    option.text = "-- No County Registered --";
                    select.add(option, 0);
                }
            }
        </script>
    </head>
    <body class="skin-blue">
        <div class="wrapper">

            <header class="main-header">
                <a href="../../index.html" class="logo"><b>HEDA</b></a>
                <!-- Header Navbar: style can be found in header.less -->
                <nav class="navbar navbar-static-top" role="navigation">
                    <!-- Sidebar toggle button-->
                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                            <!-- Messages: style can be found in dropdown.less-->

                            <!-- Notifications: style can be found in dropdown.less -->

                            <!-- inner menu: contains the actual data -->

                            <!-- Tasks: style can be found in dropdown.less -->

                            <!-- User Account: style can be found in dropdown.less -->
                            <li class="dropdown user user-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <img src="../../dist/img/user2-160x160.jpg" class="user-image" alt="User Image"/>
                                    <span class="hidden-xs">[First Name][Surname]</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <!-- User image -->
                                    <li class="user-header">
                                        <img src="../../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image" />
                                        <p>[First Name][Surname] - [Role]
                                            <small>Member since [RegistrationMonth][RegistrationYear]</small>
                                        </p>
                                    </li>
                                    <!-- Menu Body -->

                                    <!-- Menu Footer-->
                                    <li class="user-footer">
                                        <div class="pull-left">
                                            <a href="#" class="btn btn-default btn-flat">Profile</a>
                                        </div>
                                        <div class="pull-right">
                                            <a href="#" class="btn btn-default btn-flat">Sign out</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="main-sidebar">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="../../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image" />
                        </div>
                        <div class="pull-left info">
                            <p>[Username]</p>

                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div>
                    <!-- search form -->
                    <form action="#" method="get" class="sidebar-form">
                        <div class="input-group">
                            <input type="text" name="q" class="form-control" placeholder="Search..."/>
                            <span class="input-group-btn">
                                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </form>
                    <!-- /.search form -->
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <li class="header">MAIN NAVIGATION</li>


                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-files-o"></i>
                                <span>Respondents</span>
                                <span class="label label-primary pull-right"></span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="clientinfo.php"><i class="fa fa-circle-o"></i> Add new Respondents</a></li>
                                <li><a href="viewclients1.html"><i class="fa fa-circle-o"></i> View Respondents</a></li>


                            </ul>
                        </li>
                        <li>
                            <a href="../widgets.html">
                                <i class="fa fa-th"></i> <span>Reports and Datasets</span> <small class="label pull-right bg-green"></small>
                            </a>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-pie-chart"></i>
                                <span>Distribution Maps</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="respondents.html"><i class="fa fa-circle-o"></i> Respondents</a></li>
                                <li><a href="enumerators.html"><i class="fa fa-circle-o"></i> Enumerators</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-laptop"></i>
                                <span>Users</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="adduser.php"><i class="fa fa-circle-o"></i> Add User</a></li>
                                <li><a href="viewusers.php"><i class="fa fa-circle-o"></i> View Users</a></li>
                                <li><a href="edituserdetails.php"><i class="fa fa-circle-o"></i> Edit User Info</a></li>

                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-laptop"></i>
                                <span>Payments</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="../UI/general.html"><i class="fa fa-circle-o"></i> Enumerators</a></li>
                                <li><a href="../UI/icons.html"><i class="fa fa-circle-o"></i> Respondents</a></li>

                            </ul>
                        </li>




                </section>
                <!-- /.sidebar -->
            </aside>
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <style>
                    .form-control{
                        width: 100%;
                    }
                </style>

                <!-- Main content -->
                <div class="container">
                    <h1>Edit Profile</h1>

                    <hr>
                    <div class="row">
                        <!-- left column -->
                        <div class="col-md-3">
                            <div class="text-center">
                                <img src="//placehold.it/100" class="avatar img-circle" alt="avatar">
                                <h6>Upload a different photo...</h6>

                                <input type="file" class="form-control">
                            </div>
                        </div>

                        <!-- edit form column -->
                        <div class="col-md-9 personal-info">

                            <h3>Personal info</h3>

                            <form class="form-horizontal" role="form">
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">First name:</label>
                                    <div class="col-lg-8">
                                        <input class="form-control" type="text" value="<?php echo $firstname ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Surname:</label>
                                    <div class="col-lg-8">
                                        <input class="form-control" type="text" value="<?php echo $surname ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Username:</label>
                                    <div class="col-md-8">
                                        <input class="form-control" type="text" value="<?php echo $username ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Password:</label>
                                    <div class="col-md-8">
                                        <input class="form-control" type="password" value="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Confirm password:</label>
                                    <div class="col-md-8">
                                        <input class="form-control" type="password" value="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Email:</label>
                                    <div class="col-lg-8">
                                        <input class="form-control" type="text" value="<?php echo $email ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Mobile Phone Number:</label>
                                    <div class="col-lg-8">
                                        <input type="phone" class="form-control"  value="<?php echo $phone; ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Gender:</label>
                                    <div class="col-lg-8">
                                        <div class="ui-select">
                                            <select id="gender" class="form-control" value="<?php echo $gender ?>">
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Role:</label>
                                    <div class="col-lg-8">
                                        <div class="ui-select">
                                            <select id="gender" class="form-control" value="<?php echo $role ?>">
                                                <option value="1">Enumerator</option>
                                                <option value="2">EED Staff</option> 
                                                <option value="3">Data User (Customer)</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Country:</label>
                                    <div class="col-lg-8">
                                        <div class="ui-select">
                                            <select id="country" class="form-control"  onchange="selectCounty()" >
                                                <option selected="<?php echo $country ?>"><?php echo $country ?></option>
                                                <?php
                                                $module = new ModuleParameters();
                                                $module->fetchCountry();
                                                ?>  
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">County:</label>
                                    <div class="col-lg-8">
                                        <div class="ui-select">
                                            <select id="county" class="form-control" >
                                                <option selected="<?php echo $county ?>"><?php echo $county ?></option>
                                                <?php
                                                $module = new ModuleParameters();
                                                $module->fetchCounty();
                                                ?> 
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-3 control-label"></label>
                                    <div class="col-md-8">
                                        <input type="button" class="btn btn-primary" value="Save Changes">
                                        <span></span>
                                        <input type="reset" class="btn btn-default" value="Cancel">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <hr>

            </div><!-- /.content-wrapper -->
            <footer class="main-footer">
                <div class="pull-right hidden-xs">
                    <b>Version</b> 1.0
                </div>
                <strong>Copyright &copy; 2015 <a href="http://eedadvisory.com">EED Advisory</a>.</strong> All rights reserved.
            </footer>
        </div><!-- ./wrapper -->

        <!-- jQuery 2.1.3 -->
        <script src="../../plugins/jQuery/jQuery-2.1.3.min.js"></script>
        <!-- Bootstrap 3.3.2 JS -->
        <script src="../../bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <!-- FastClick -->
        <script src='../../plugins/fastclick/fastclick.min.js'></script>
        <!-- AdminLTE App -->
        <script src="../../dist/js/app.min.js" type="text/javascript"></script>

    </body>
</html>
