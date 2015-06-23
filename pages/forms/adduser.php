<!DOCTYPE html>
<?php
//made the path relative for testing locally...will make it absolute later
require_once 'C:\wamp\www\SuperCool-Heda\classes\UserInfo.php';
require_once 'C:\wamp\www\SuperCool-Heda\classes\ModuleParameters.php';

$firstname = $surname = $username = $password = $gender = $country = $county = $role = $emailAddress = "";
$phoneNo = 254714360799;
$userInfo = new UserInfo();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = test_input($_POST['firstname']);
    $surname = test_input($_POST['surname']);
    $username = test_input($_POST['username']);
    $password = test_input($_POST['password']);
    $gender = test_input($_POST['gender']);
    $country = test_input($_POST['country']);
    $county = test_input($_POST['county']);
    $role = test_input($_POST['role']);
    $phoneNo = test_input($_POST['phone']);
    $emailAddress = test_input($_POST['email']);


    if (($userInfo->addUser($firstname, $surname, $username, $password, $gender, $country, $county, $role, $phoneNo, $emailAddress) > 0)) {
        header("location: viewusers.php");
    }
}

/**
 * Clean the input text entered by the client
 * @param type $data
 * @return type cleaned data
 */
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
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
$county = Array();
while ($row = mysqli_fetch_array($result)) {
    $title = $row['name'];
    $county[] = $title;
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>HEDA | New User</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <link href="../../bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <link href="../../dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
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
                    var county = <?php echo json_encode($county); ?>;
                    fillMode(county);
                }else{
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
                    <form  action="#" method="get" class="sidebar-form">
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
                                <li><a href="edituserdetails.html"><i class="fa fa-circle-o"></i> Edit User Info</a></li>

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
                <section class="content-header">
                    <h1>
                        Add New User
                        <small></small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="../../index.html"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Users</li>
                        <li class="active">Add New User</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <!-- left column -->
                        <div class="col-md-6">
                            <!-- general form elements -->
                            <div class="box box-primary">
                                <!--<div class="box-header">
                                  <h3 class="box-title">Quick Example</h3>
                                </div> /.box-header -->
                                <!-- form start -->

                                <form method="post" class="sidebar-form" action="adduser.php">
                                    <div class="form-group">
                                        <label for="inputfirstname">First Name</label>
                                        <input type="text" class="form-control" id="firstname" name="firstname" placeholder="First Name" value="<?php echo $firstname; ?>"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputsurname">Surname</label>
                                        <input type="text" class="form-control" id="surname" name="surname" placeholder="Surname" value="<?php echo $surname; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="username">Username</label>
                                        <input type="text" class="form-control" id="username" name="username" placeholder="Preffered Username" value="<?php echo $username; ?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputpassword">Password</label>
                                        <input type="password" class="form-control" id="password" name="password" placeholder="Password" required value="<?php echo $password; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputpassword">Confirm Password</label>
                                        <input type="password" class="form-control" id="password" name="password" placeholder="Confirm Password" required value="<?php echo $password; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="surname">Gender</label>
                                        <select class="form-control" name="gender"value="<?php echo $gender; ?>">
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>                                          
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="country">Country</label>
                                        <select class="form-control" name="country" id="country" value="<?php echo $country; ?>" onchange="selectCounty()">
                                            <option value="">--Select Country--</option>
                                            <?php
                                            $module = new ModuleParameters();
                                            $module->fetchCountry();
                                            ?>                                            
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="counties">County</label>
                                        <select class="form-control" name="county" id="county" value="<?php echo $county; ?>">
                                            <option value="">-- Select County --</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="location">Role</label>
                                        <select class="form-control" name="role">
                                            <option value="">-- Select Role --</option>
                                            <?php
                                            $module->fetchRoles();
                                            ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="phone">Mobile Phone Number</label>
                                        <input type="phone" class="form-control" id="phone" name="phone" placeholder="+254711888888" value="<?php echo $phoneNo; ?>"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="phone">Email Address</label>
                                        <input type="email" class="form-control" id="email" name="email" placeholder="example@company.com" value="<?php echo $emailAddress; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="userphoto">Upload a Photo of you</label>
                                        <input type="file" id="userphoto">
                                    </div>
                                    <input type="submit" class="btn btn-primary" name="submit" value="Add User">
                                    <style>
                                        form {
                                            margin-left: 50px;
                                            margin-top: 30px;
                                            margin-bottom: 30px;
                                        }

                                    </style>
                                </form>
                            </div><!-- /.box -->








                        </div><!-- /.box-body -->
                    </div><!-- /.box -->
            </div><!--/.col (right) -->
        </div>   <!-- /.row -->
    </section><!-- /.content -->
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
