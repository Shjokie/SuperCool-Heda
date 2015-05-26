<?php
$firstName=$surName=$gender=$county=$ward=$nearestTown=$gpsValues=$householdLocation=$phoneNo=$householdTenure=$connected=$solarPanelPower=$biogasDigestorPower=$dieselGeneratorPower=$batterySystemPower= $windPower=$charcoalUse= $firewoodUse= $paraffinUse= $briquttesUse=$lpgUse= $solarBulbsNo= $electricBulbsNo= $koroboiNo=$paraffinLampNo= $gasLampNo= $batteryTorchNo= $blackwhiteTvNo=$colouredTvNo= $mobilePhoneNo= $radioNo= $dvdPlayerNo= $fridgeNo=$electricWaterHeaterNo= $computerNo= $electricIronboxNo= $householdSize=$householdType= $roofStructure= $wallStructure= $drinkingWaterSource=$householdRooms= $earningPeopleNo= $mainSourceOfIncome= $totalIncome="test";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    
}


?>

<!DOCTYPE html>
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

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
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
          <form method="post" class="sidebar-form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
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
                <li><a href="clientinfo.php"><i class="fa fa-circle-o"></i>Edit Respondents details</a></li>
                
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
            Clients Details Form
            <small></small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Respondents</li>
            <li class="active">Client Info</li>
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
                <form role="form" name="form" method="POST">
                  <div class="box-body">
                    
                    
                    <dl class="accordion">
                      <dt class="accordion__title">General Info</dt>
                      <dd class="accordion__content">
                        <div class="form-group">
                                      <label for="firstname">First Name</label>
                                      <input type="text" class="form-control" value="<?php echo $firstName ?>" id="fname" name="firstName" placeholder="Enter First Name Here">
                          </div>
                          <div class="form-group">
                                          <label for="surname">Surname</label>
                                          <input type="text" class="form-control" id="sname" value="<?php echo $surName ?>" name="surName" placeholder="Enter Surname Here">
                            </div>
                             <div class="form-group">
                                          <label for="surname">Gender</label>
                                        <select class="form-control" name="gender" value="<?php echo $gender; ?>">
                                          <option>Male</option>
                                          <option>Female</option>
                                        </select>
                            </div>
                            <div class="form-group">
                                          <label for="counties">County</label>
                                        <select class="form-control" name="county" value="<?php echo $county ?>">                                           
                                          <option>Baringo.</option>
                                          <option>Bomet.</option>
                                          <option>Bung'oma.</option>
                                          <option>Busia.</option>
                                          <option>Embu.</option>
                                          <option>Elgeyo/Marakwet.</option>
                                          <option>Homa Bay.</option>
                                          <option>Isiolo.</option>
                                          <option>Garissa</option>
                                          <option>Kajiado.</option>
                                          <option>Kakamega.</option>
                                          <option>Kericho.</option>
                                          <option>Kiambu.</option>
                                          <option>Kilifi</option>
                                          <option>Kirinyaga.</option>
                                          <option>Kisii.</option>
                                          <option>Kisumu.</option>
                                          <option>Kitui.</option>
                                          <option>Kwale</option>
                                          <option>Laikipia.</option>
                                          <option>Makueni.</option>
                                          <option>Lamu</option>
                                          <option>Meru.</option>
                                          <option>Marsabit.</option>
                                          <option>Mandera</option>
                                          <option>Migori.</option>
                                          <option>Murang'a</option>.
                                          <option>Nairobi City.</option>
                                          <option>Nakuru.</option>
                                          <option>Narok.</option>
                                          <option>Nyamira</option>
                                          <option>Nyandarua</option>
                                          <option>Nandi.</option>
                                          <option>Nyeri.</option>
                                          <option>Machakos.</option>
                                          <option>Samburu.</option>
                                          <option>Siaya.</option>
                                          <option>Taita Taveta</option>
                                          <option>Tana River</option>
                                          <option>Tharaka Nithi.</option>
                                          <option>Trans Nzoia.</option>
                                          <option>Turkana.</option>
                                          <option>Uasin Gishu.</option>
                                          <option>Vihiga.</option>
                                          <option>Wajir</option>
                                          <option>West Pokot.</option>                                        
                                        </select>
                            </div>
                            <div class="form-group">
                                          <label for="ward">Ward</label>
                                          <input type="text" class="form-control" id="ward" name="ward" placeholder="Enter Ward Name Here" value="<?php echo $ward ?>">
                            </div>
                            <div class="form-group">
                                          <label for="town">Nearest Town</label>
                                          <input type="text" class="form-control" id="town" name="town" placeholder="Enter Town Name Here" value="<?php echo $nearestTown ?>">
                            </div>
                            <div class="form-group">
                                          <label for="gps">GPS Values</label>
                                          <input type="text" class="form-control" id="gps" name="gps" placeholder="Longitude, Latitude" value="<?php echo $gpsValues ?>">
                            </div>
                            <div class="form-group">
                                          <label for="location">Location of Household</label>
                                          <select class="form-control" name="location" value="<?php echo $householdLocation ?>">
                                          <option>Urban</option>
                                          <option>Peri-Urban</option> 
                                          <option>Rural</option>                                          
                                        </select>
                            </div>
                            <div class="form-group">
                                          <label for="phone">Mobile Phone Number</label>
                                          <input type="phone" class="form-control" id="phone" name="phone" placeholder="+254711888888" value="<?php echo $phoneNo ?>">
                            </div>
                            <div class="box-footer">
                    <center><button type="submit" class="btn btn-primary">Next</button></center>
                  </div>
                      </dd>
                      <dt class="accordion__title">Energy Use</dt>
                      <dd class="accordion__content">
                        <div class="form-group">
                                          <label for="gridconnected">Are you connected to the grid?</label>
                                          <select class="form-control" name="gridconnection" value="<?php echo $connected ?>">
                                          <option>Yes</option>
                                          <option>No</option>                                           
                                        </select>
                    </div>
                    <div class="form-group">
                                          <label for="periodconnected">For how long?</label>
                                          <select class="form-control" name="periodconnected" value="<?php ?>">
                                          <option>Less than 6 months</option>
                                          <option> 6 - 12 months</option>   
                                          <option> 1-3 years</option>
                                          <option>More than 3 years</option>

                                        </select>
                    </div>
                     <div class="form-group">
                                          <label for="periodconnected">Do you have any of the following?</label>
                     <div class="checkbox">
                      <label>
                        <input type="checkbox"> Solar Panel (W)
                      </label>
                      <input type="number" class="form-control" id="solar" name="solar" placeholder="How many Watts" value="<?php echo $solarPanelPower ?>" />
                      <label>
                        <input type="checkbox"> Biogas Digester (m3)
                      </label>
                    <input type="number" class="form-control" id="biogas" name="biogas" placeholder="How many m3" value="<?php echo $biogasDigestorPower ?>"/>
                      <label>
                        <input type="checkbox"> Diesel Generator (kVA)
                      </label>
                    <input type="number" class="form-control" id="diesel" name="diesel" placeholder="How many kVA" value="<?php echo $dieselGeneratorPower ?>" />
                      <label>
                        <input type="checkbox"> Battery System (Ah)
                      </label>
                    <input type="number" class="form-control" id="Battery" name="battery" placeholder="How many Ah" value="<?php echo $batterySystemPower ?>" />
                      <label>
                        <input type="checkbox"> Wind (W)
                      </label>
                      <input type="number" class="form-control" id="wind" name="wind" placeholder="How many Watts" value="<?php echo $windPower ?>"/>
                    </div>
                     </div>
                     <div class="form-group">
                                          <label for="periodconnected">Check the type of energy source you use and the frequency</label>
                     <div class="checkbox">
                      <label>
                        <input type="checkbox"> Charcoal
                      </label>
                      <label class="radio-inline"><input type="radio" name="optradio">Daily</label>
                      <label class="radio-inline"><input type="radio" name="optradio">Weekly</label>
                      <label class="radio-inline"><input type="radio" name="optradio">Monthly</label></br>
                      <label>
                        <input type="checkbox"> Firewood
                      </label>
                    <label class="radio-inline"><input type="radio" name="optradio">Daily</label>
                      <label class="radio-inline"><input type="radio" name="optradio">Weekly</label>
                      <label class="radio-inline"><input type="radio" name="optradio">Monthly</label></br>
                      <label>
                        <input type="checkbox"> Paraffin
                      </label>
                    <label class="radio-inline"><input type="radio" name="optradio">Daily</label>
                      <label class="radio-inline"><input type="radio" name="optradio">Weekly</label>
                      <label class="radio-inline"><input type="radio" name="optradio">Monthly</label></br>
                      <label>
                        <input type="checkbox"> Briquettes
                      </label>
                   <label class="radio-inline"><input type="radio" name="optradio">Daily</label>
                      <label class="radio-inline"><input type="radio" name="optradio">Weekly</label>
                      <label class="radio-inline"><input type="radio" name="optradio">Monthly</label></br>
                      <label>
                        <input type="checkbox">LPG
                      </label>
                      <label class="radio-inline"><input type="radio" name="optradio">Daily</label>
                      <label class="radio-inline"><input type="radio" name="optradio">Weekly</label>
                      <label class="radio-inline"><input type="radio" name="optradio">Monthly</label></br>
                    </div>
                     </div>
                    <div class="form-group">
                      <label for="periodconnected">Please check the lighting devices you use in your house</label>
                     <div class="checkbox">
                      <label>
                        <input type="checkbox"> Solar Lighting
                      </label>
                      <input type="number" class="form-control" id="solarlighting" name="solarlighting" placeholder="How many?" value="<?php echo $solarBulbsNo ?>" />
                      <label>
                        <input type="checkbox"> Electric Light Bulbs
                      </label>
                    <input type="number" class="form-control" id="bulbs" name="bulbs" placeholder="How many?" value="<?php echo $electricBulbsNo ?>"/>
                      <label>
                        <input type="checkbox"> Koroboi
                      </label>
                    <input type="number" class="form-control" id="koroboi" name="koroboi" placeholder="How many?" value="<?php echo $koroboiNo ?>" />
                      <label>
                        <input type="checkbox"> Paraffin Lamp
                      </label>
                    <input type="number" class="form-control" id="paraffinlamp" name="paraffinlamp" placeholder="How many?" value="<?php echo $paraffinLampNo ?>"/>
                      <label>
                        <input type="checkbox"> Gas Lamp
                      </label>
                      <input type="number" class="form-control" id="gaslamp" name="gaslamp" placeholder="How many?" value="<?php echo $gasLampNo ?>"/>
                      <label>
                        <input type="checkbox"> Battery Torch
                      </label>
                      <input type="number" class="form-control" id="batterytorch" name="batterytorch" placeholder="How many?" value="<?php echo $batteryTorchNo ?>" />
                    </div>
                     </div>
                      <div class="form-group">
                      <label for="periodconnected">Please check the cooking devices  you use in your house</label>
                     <div class="checkbox">
                      <label>
                        <input type="checkbox"> Open cooking area
                      </label>
                      <input type="number" class="form-control" id="solarlighting" name="solarlighting" placeholder="How many chimneys?"/>
                      <label>
                        <input type="checkbox"> Ceramic charcoal stove
                      </label>
                    <input type="number" class="form-control" id="bulbs" name="bulbs" placeholder="How many?"/>
                      <label>
                        <input type="checkbox"> Improved stove
                      </label>
                    <input type="number" class="form-control" id="koroboi" name="koroboi" placeholder="How many?"/>
                      <label>
                        <input type="checkbox"> Paraffin stove
                      </label>
                    <input type="number" class="form-control" id="paraffinlamp" name="paraffinlamp" placeholder="How many?"/>
                      <label>
                        <input type="checkbox"> Gas cooker
                      </label>
                      <input type="number" class="form-control" id="gaslamp" name="gaslamp" placeholder="How many?"/>
                      <label>
                        <input type="checkbox"> Electric cooker
                      </label>
                      <input type="number" class="form-control" id="batterytorch" name="batterytorch" placeholder="How many?"/>
                    </div>
                     </div>
                     <div class="form-group">
                      <label for="periodconnected">Please check other electric devices you use in your house</label>
                     <div class="checkbox">
                      <label>
                        <input type="checkbox"> Black and White TV
                      </label>
                      <input type="number" class="form-control" id="blacktv" name="blacktv" placeholder="How many?"/>
                      <label>
                        <input type="checkbox"> Coloured TV
                      </label>
                    <input type="number" class="form-control" id="colourtv" name="colouredtv" placeholder="How many?"/>
                      <label>
                        <input type="checkbox"> Mobile Phone
                      </label>
                    <input type="number" class="form-control" id="mobilephone" name="mobilephone" placeholder="How many?"/>
                      <label>
                        <input type="checkbox"> Radio
                      </label>
                    <input type="number" class="form-control" id="radio" name="radio" placeholder="How many?"/>
                      <label>
                        <input type="checkbox"> DVD player
                      </label>
                      <input type="number" class="form-control" id="dvd" name="dvd" placeholder="How many?"/>
                      <label>
                        <input type="checkbox"> Fridge
                      </label>
                      <input type="number" class="form-control" id="fridge" name="fridge" placeholder="How many?"/>
                        <label>
                        <input type="checkbox"> Electric water heater
                      </label>
                      <input type="number" class="form-control" id="waterheater" name="waterheater" placeholder="How many?"/>
                      <label>
                        <input type="checkbox"> Computer
                      </label>
                      <input type="number" class="form-control" id="computer" name="computer" placeholder="How many?"/>
                      <label>
                        <input type="checkbox"> Electric Iron box
                      </label>
                      <input type="number" class="form-control" id="ironbox" name="ironbox" placeholder="How many?"/>
                    </div>
                     </div>
                     <div class="box-footer">
                    <center><button type="submit" class="btn btn-primary">Next</button></center>
                  </div>
  </dd>
  <dt class="accordion__title">Household Setup and Livelihoods</dt>
  <dd class="accordion__content">
                      <label >
                         How many people reside in your household?
                      </label>
      <input type="number" class="form-control" min="1" id="people" name="people" placeholder="How many?" value="<?php echo $householdSize ?>"/>
                      <div class="form-group">
                                          <label for="type">Type of Household</label>
                                          <select class="form-control" name="type" value="<?php echo $householdType ?>" >
                                          <option>Married - Monogamous</option>
                                          <option>Married - Polygamous</option> 
                                          <option>Single Parent</option> 
                                          <option>Shared with Friends/Relatives</option>
                                          <option>Single Occupancy</option>                                          
                                        </select>
                            </div>
                            <div class="form-group">
                                          <label for="roof">House Roof Structure</label>
                                          <select class="form-control" name="roof" value="<?php echo $roofStructure ?>" >
                                          <option>Grass/Reeds</option>
                                          <option>Mud</option> 
                                          <option>Wood</option> 
                                          <option>Paper</option>
                                          <option>Iron Sheets</option> 
                                          <option>Bricks</option>  
                                          <option>Blocks</option>                                             
                                        </select>
                            </div>
                            <div class="form-group">
                                          <label for="wall">Wall Structure</label>
                                          <select class="form-control" name="wall" value="<?php echo $wallStructure ?>">
                                          <option>Grass/Reeds</option>
                                          <option>Mud</option> 
                                          <option>Wood</option> 
                                          <option>Paper</option>
                                          <option>Iron Sheets</option> 
                                          <option>Bricks</option>  
                                          <option>Blocks</option>                                             
                                        </select>
                            </div>
                            <div class="form-group">
                                          <label for="water">Source of drinking water</label>
                                          <select class="form-control" name="water" value="<?php echo $drinkingWaterSource ?>">
                                          <option>Own tap</option>
                                          <option>Own well</option> 
                                          <option>Own borehole</option> 
                                          <option>Purchased</option>
                                          <option>River</option> 
                                          <option>Community Dam</option>                                           
                                        </select>
                                        </div>
                                        <div class="form-group">
                                          <label for="roof">How many rooms does your household have? (Including external kitchen and toilets) </label>
                                          <input type="number" class="form-control" id="rooms" name="rooms" min="1" placeholder="How many? e.g. 10" value="<?php echo $householdRooms ?>" />
                                        
                            </div>
                                        <div class="form-group">
                                        <label for="housephoto">Upload Photo of the house</label>
                                        <input type="file" id="housephoto">
                                      </div>
                            <div class="form-group">
                            <label>
                             How many people in your household have an income?
                            </label>
                            <input type="number" class="form-control" id="incomepeople" name="incomepeople" placeholder="How many?" value="<?php echo $earningPeopleNo ?>"/>
                          </div>
                           
                              <div class="form-group">
                                          <label for="roof">What is the MAIN source of income? </label>
                                          <select class="form-control" name="income" value="<?php echo $mainSourceOfIncome ?>">
                                          <option>Crop agriculture</option>
                                          <option>Livestock</option> 
                                          <option>Employment</option> 
                                          <option>Remittances</option>
                                          <option>Business</option> 
                                          <option>Pension</option>
                                          <option>Charity</option>                                           
                                        </select>
                                        
                            </div>
                             <div class="form-group">
                                          <label for="roof">What is the estimated combined source of income in your household per month  </label>
                                          <select class="form-control" name="income" value="<?php echo $totalIncome ?>">
                                          <option>Less than 20,000</option>
                                          <option>20,001 – 40,000</option> 
                                          <option>40,001 – 60,000</option> 
                                          <option>60,001 – 80,000</option>
                                          <option>80,001 – 100,000 </option> 
                                          <option>100,001 – 150,000</option>
                                          <option>150,001 – 200,000</option>
                                          <option>400,001 – 600,000 </option> 
                                          <option>600,001 – 800,000</option>
                                          <option>800,001 – 1,000,000</option>
                                          <option>More than 1,000,000</option>                                          
                                        </select>
                                        
                            </div>
                            <div class="box-footer">
                    <center><button type="submit" class="btn btn-primary">Next</button></center>
                  </div>
                        </dd>
                        <dt class="accordion__title">Submit</dt>
                        <dd class="accordion__content">
                          <center><div class="checkbox">
                      <label>
                        <input type="checkbox"> All I have entered is true... 
                      </label>
                    </div></center>
                  

                  <div class="form-group">
                    <center><button type="submit" class="btn btn-primary" name='submit'>Submit</button></center>
                  </div>
                        </dd>
                </dl>
                      
                  </div><!--/.box-body -->
                    <!--<div class="form-group">
                      <label for="exampleInputFile">File input</label>
                      <input type="file" id="exampleInputFile">
                      <p class="help-block">Example block-level help text here.</p>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox"> Check me out
                      </label>
                    </div>
                  </div>/.box-body 

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>-->
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
