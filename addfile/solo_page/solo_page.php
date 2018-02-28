<?php 
   include '../config.php';
   
   if(!empty($_GET['id']))
   {
   $var =$_GET['id'];
   $query = $conn->prepare("SELECT * FROM apptopus_externalcustomers WHERE app_school_id ='$var'");
   $query->execute();
   $query->setFetchMode(PDO::FETCH_ASSOC);
   while ($data=$query->fetch(PDO::FETCH_ORI_NEXT)) { 
   ?>
<html>
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Apptopus</title>
      <!-- Tell the browser to be responsive to screen width -->
      <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
      <!-- Bootstrap 3.3.6 -->
      <link rel="stylesheet" href="../../bootstrap/css/bootstrap.css">
      <link rel="stylesheet" href="../../plugins/datepicker/datepicker3.css">
      <link rel="stylesheet" href="../../plugins/datatables/jquery.dataTables.css">
      <link rel="stylesheet" href="../../plugins/datatables/dataTables.bootstrap.css">
      <!-- Font Awesome -->
      <link rel="stylesheet" href="../../plugins/font-awesome/css/font-awesome.min.css">
      <!-- Theme style -->
      <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
      <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
         page. However, you can choose any other skin. Make sure you
         apply the skin class to the body tag so the changes take effect.
         -->
      <link rel="stylesheet" href="../../dist/css/skins/skin-black.min.css">
      <?php include '../../addfile/session.php'; ?>
   </head>
   <body class="hold-transition skin-black sidebar-mini sidebar-collapse">
      <div class="wrapper">
         <!-- Main Header -->
         <header class="main-header">
            <!-- Logo -->
            <a href="index.php" class="logo">
               <!-- mini logo for sidebar mini 50x50 pixels -->
               <span class="logo-mini"><b>APP</b></span>
               <!-- logo for regular state and mobile devices -->
               <span class="logo-lg"></b>APPTOPUS</span>
            </a>
            <!-- Header Navbar -->
            <nav class="navbar navbar-static-top" role="navigation">
               <!-- Sidebar toggle button-->
               <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
               <span class="sr-only">Toggle navigation</span>
               </a>
               <!-- Navbar Right Menu -->
               <div class="navbar-custom-menu">
                  <ul class="nav navbar-nav">
                     <!-- User Account Menu -->
                     <li class="dropdown user user-menu">
                        <!-- Menu Toggle Button -->
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                           <!-- The user image in the navbar-->
                           <img src="../../dist/img/mahruskh.jpg" class=" user-image" alt="User Image">
                           <!-- hidden-xs hides the username on small devices so only the image appears. -->
                           <span class="hidden-xs"><?php echo $_SESSION['nama'] ?></span>
                        </a>
                        <ul class="dropdown-menu">
                           <!-- The user image in the menu -->
                           <li class="user-header">
                              <img src="../../dist/img/mahruskh.jpg" class="img-circle" alt="User Image">
                              <p>
                                 <?php echo $_SESSION['nama'] ?> - Web Developer
                              </p>
                           </li>
                           <!-- Menu Footer-->
                           <li class="user-footer">
                              <div class="pull-right">
                                 <a href="addfile/logout.php" class="btn btn-default btn-flat">Sign out</a>
                              </div>
                           </li>
                        </ul>
                     </li>
                     <!-- Control Sidebar Toggle Button -->
                     <li>
                        <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                     </li>
                  </ul>
               </div>
            </nav>
         </header>
         <!-- Left side column. contains the logo and sidebar -->
         <aside class="main-sidebar">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">
               <!-- Sidebar user panel (optional) -->
               <div class="user-panel">
                  <div class="pull-left image">
                     <img src="../../dist/img/mahruskh.jpg" class="img-circle" alt="User Image">
                  </div>
                  <div class="pull-left info">
                     <p>
                        <?php   echo $_SESSION['nama'] ?>
                     </p>
                     <!-- Status -->
                     <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                  </div>
               </div>
               <!-- search form (Optional) -->
               <form action="#" method="get" class="sidebar-form">
                  <div class="input-group">
                     <input type="text" name="q" class="form-control" placeholder="Search...">
                     <span class="input-group-btn">
                     <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                     </button>
                     </span>
                  </div>
               </form>
               <!-- /.search form -->
               <!-- Sidebar Menu -->
               <ul class="sidebar-menu">
                  <li class="header">MENU</li>
                  <!-- Optionally, you can add icons to the links -->
                  <li><a href="../../index.php"><i class="fa fa-dashboard"></i><span>Main Dashboard</span></a></li>
                  <li><a href="../../external_customer.php"><i class="fa fa-users"></i><span>External Customers</span></a></li>
                  <li><a href="../../possible_client.php"><i class="fa fa-users"></i><span>Possible Customers</a></span>
                  </li>
                  <li><a href="../../internal_customer.php"><i class="fa fa-user"></i><span></i>Internal Customers</a></span>
                  </li>
                  <li><a href="../../money_in.php"><i class="fa fa-money"></i><span>Money In</span></a></li>
                  <li><a href="../../money_out.php"><i class="fa fa-money"></i><span>Money Out</span></a></li>
                  <li><a href="add_product.php"><i class="fa fa-shopping-cart"></i><span>Add Product</span></a></li>
               </ul>
               </ul>
               <!-- /.sidebar-menu -->
            </section>
            <!-- /.sidebar -->
         </aside>
         <!-- Content Wrapper. Contains page content -->
         <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
               <h1><i class="fa fa-user"></i>
                  <?php echo $data['app_school_name']; ?> 
               </h1>
               <ol class="breadcrumb">
                  <li><a href="#"><i class="fa fa-dashboard"></i> External Client</a></li>
                  <li class="active">
                     <?php echo $data['app_school_name']; ?>
                  </li>
               </ol>
            </section>
            <!-- Main content -->
            <section class="content">
               <div class="row">
                  <div class="col-sm-9">
                     <div class="nav-tabs-custom">
                        <ul class="nav nav-tabs">
                           <li class="active"><a href="#tab_customer_details" data-toggle="tab" id="exdetails">External Customer Details</a></li>
                           <li><a href="#tab_contact_person" data-toggle="tab" id="contact_per">Contact Person</a></li>
                           <li><a href="#tab_hardware_details" data-toggle="tab" id="hardware_det">Hardware Details</a></li>
                        </ul>
                        <div class="tab-content">
                           <div class="tab-pane active" id="tab_customer_details">
                              <div class="box-body">
                                <table class="table table-bordered data">
                                   <tr class="success">
                                      <th width="45%" style="text-align:center;" >SCHOOL ID</th>
                                      <td><?php echo $data['app_school_id']; ?></td>
                                   </tr>
                                   <tr class="success">
                                      <th width="45%" style="text-align:center;" >SCHOOL NAME</th>
                                      <td><?php echo $data['app_school_name']; ?></td>
                                   </tr>
                                   <tr class="success">
                                      <th width="45%" style="text-align:center;" >SCHOOL ADDRESS</th>
                                      <td><?php echo $data['app_school_address']; ?></td>
                                   </tr>
                                   <tr class="success">
                                      <th width="45%" style="text-align:center;" >RELATIONSHIP MANAGER</th>
                                      <td><?php echo $data['app_relation_manager']; ?></td>
                                   </tr>
                                   <tr class="success">
                                      <th width="45%" style="text-align:center;" >PRODUCT AVAIL</th>
                                      <td><?php echo $data['app_avail_product']; ?></td>
                                   </tr>
                                   <tr class="success">
                                      <th width="45%" style="text-align:center;" >DATE START</th>
                                      <td><?php echo $data['app_start']; ?></td>
                                   </tr>
                                   <tr class="success">
                                      <th width="45%" style="text-align:center;" >DATE FINISH</th>
                                      <td><?php echo $data['app_finish']; ?></td>
                                   </tr>
                                   <tr class="success">
                                      <th width="45%" style="text-align:center;" >STATUS</th>
                                      <td><?php echo $data['app_school_status']; ?></td>
                                   </tr>
                                </table>
                              </div>
                           </div>
                           <div class="tab-pane" id="tab_contact_person">
                              <div class="box-body">
                                 <table class="table table-bordered data">
                                    <tr class="success">
                                       <th width="45%" style="text-align:center;">PRINCIPAL</th>
                                       <th width="10%"></th>
                                       <th width="45%" style="text-align:center;">ADMINISTRATOR</th>
                                    </tr>
                                    <tr>
                                       <td>
                                          <?php echo $data['app_school_principal']; ?> 
                                       </td>
                                       <td align="center">NAME</td>
                                       <td>
                                          <?php echo $data['app_school_admin']; ?> 
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>
                                          <?php echo $data['app_principal_birthday']; ?> 
                                       </td>
                                       <td align="center">BIRTHDAY</td>
                                       <td>
                                          <?php echo $data['app_admin_birthday']; ?> 
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>
                                          <?php echo $data['app_principal_facebook']; ?> 
                                       </td>
                                       <td align="center">FACEBOOK</td>
                                       <td>
                                          <?php echo $data['app_admin_facebook']; ?> 
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>
                                          <?php echo $data['app_principal_email']; ?> 
                                       </td>
                                       <td align="center">EMAIL</td>
                                       <td>
                                          <?php echo $data['app_admin_email']; ?> 
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>
                                          <?php echo $data['app_principal_landline']; ?> 
                                       </td>
                                       <td align="center">LANDLINE</td>
                                       <td>
                                          <?php echo $data['app_admin_landline']; ?> 
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>
                                          <?php echo $data['app_principal_cellphone']; ?> 
                                       </td>
                                       <td align="center">CELLPHONE</td>
                                       <td>
                                          <?php echo $data['app_admin_cellphone']; ?> 
                                       </td>
                                    </tr>
                                 </table>
                                 <div class="box box-default">
                                    <div class="box-body">
                                       <label for="" class="control-label">System Administrator Name</label>
                                       <input class="form-control" maxlength="20" disabled="true" value="<?php echo $data['app_school_sysadmin']; ?>" type="text">
                                       <label for="" class="control-label">System Administrator Contact Number</label>
                                       <input class="form-control" maxlength="20" disabled="true" value="<?php echo $data['app_sysadmin_number']; ?>" type="text">
                                       <label for="" class="control-label">System Administrator Email Address</label>
                                       <input class="form-control" maxlength="20" disabled="true" value="<?php echo $data['app_sysadmin_email']; ?>" type="text">
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="tab-pane" id="tab_31">
                              <div class="box-body">
                                 <div class="tab_hardware_details"></div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-3">
                     <!-- Number of Preschool -->
                     <div class="small-box bg-blue">
                        <div class="inner">
                           <h3>
                              <?php echo $data['app_school_preschool']; ?>
                           </h3>
                           <p>Number of Preschool</p>
                        </div>
                        <div class="icon">
                           <i class="ion ion-person-add"></i>
                        </div>
                        <a href="#" class="small-box-footer">
                        More info <i class="fa fa-arrow-circle-right"></i>
                        </a>
                     </div>
                     <!-- Number of Grade School -->
                     <div class="small-box bg-green">
                        <div class="inner">
                           <h3>
                              <?php echo $data['app_school_gradeschool']; ?>
                           </h3>
                           <p>Number of Grade School</p>
                        </div>
                        <div class="icon">
                           <i class="ion ion-person-add"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i>
                        </a>
                     </div>
                     <!-- Number of Highschool -->
                     <div class="small-box bg-red">
                        <div class="inner">
                           <h3>
                              <?php echo $data['app_school_highschool']; ?>
                           </h3>
                           <p>Number of Highschool</p>
                        </div>
                        <div class="icon">
                           <i class="ion ion-person-add"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i>
                        </a>
                     </div>
                     <!--Number of Employees -->
                     <div class="small-box bg-yellow">
                        <div class="inner">
                           <h3>
                              <?php echo $data['app_school_employees']; ?>
                           </h3>
                           <p>Number of Employees</p>
                        </div>
                        <div class="icon">
                           <i class="ion ion-person-add"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i>
                        </a>
                     </div>
                  </div>
               </div>
            </section>
            <!-- /.content -->
         </div>
         <!-- /.content-wrapper -->
         <!-- Control Sidebar -->
         <aside class="control-sidebar control-sidebar-dark">
            <!-- Create the tabs -->
            <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
               <li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
               <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
               <!-- Home tab content -->
               <div class="tab-pane active" id="control-sidebar-home-tab">
                  <h3 class="control-sidebar-heading">Recent Activity</h3>
                  <ul class="control-sidebar-menu">
                     <li>
                        <a href="javascript::;">
                           <i class="menu-icon fa fa-birthday-cake bg-red"></i>
                           <div class="menu-info">
                              <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>
                              <p>Will be 23 on April 24th</p>
                           </div>
                        </a>
                     </li>
                  </ul>
                  <!-- /.control-sidebar-menu -->
                  <h3 class="control-sidebar-heading">Tasks Progress</h3>
                  <ul class="control-sidebar-menu">
                     <li>
                        <a href="javascript::;">
                           <h4 class="control-sidebar-subheading">
                              Custom Template Design
                              <span class="pull-right-container">
                              <span class="label label-danger pull-right">70%</span>
                              </span>
                           </h4>
                           <div class="progress progress-xxs">
                              <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                           </div>
                        </a>
                     </li>
                  </ul>
                  <!-- /.control-sidebar-menu -->
               </div>
               <!-- /.tab-pane -->
               <!-- Stats tab content -->
               <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
               <!-- /.tab-pane -->
               <!-- Settings tab content -->
               <div class="tab-pane" id="control-sidebar-settings-tab">
                  <form method="post">
                     <h3 class="control-sidebar-heading">General Settings</h3>
                     <div class="form-group">
                        <label class="control-sidebar-subheading">
                        Report panel usage
                        <input type="checkbox" class="pull-right" checked>
                        </label>
                        <p>
                           Some information about this general settings option
                        </p>
                     </div>
                     <!-- /.form-group -->
                  </form>
               </div>
               <!-- /.tab-pane -->
            </div>
         </aside>
         <!-- /.control-sidebar -->
         <!-- Add the sidebar's background. This div must be placed
            immediately after the control sidebar -->
         <div class="control-sidebar-bg"></div>
      </div>
      <!-- ./wrapper -->
      <!-- REQUIRED JS SCRIPTS -->
      <!-- jQuery 2.2.3 -->
      <script src="../../plugins/jQuery/jquery-2.2.3.min.js"></script>
      <!-- Bootstrap 3.3.6 -->
      <script src="../../bootstrap/js/bootstrap.min.js"></script>
      <script src="../../plugins/datepicker/bootstrap-datepicker.js"></script>
      <script src="../../plugins/datatables/jquery.dataTables.js"></script>
      <script src="solo_page.js"></script>
      <!-- AdminLTE App -->
      <script src="../../dist/js/app.min.js"></script>
      <?php }} ?>
   </body>
</html>