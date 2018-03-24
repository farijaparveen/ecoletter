<?php

include('../session.php');
role_check($_SESSION['role'],6);

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge"> <link href="/favicon.png" rel="icon" type="image/x-icon" />    <title>Eco Letter| Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="<?php echo $baseurl; ?>/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo $baseurl; ?>/bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?php echo $baseurl; ?>/bower_components/Ionicons/css/ionicons.min.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="<?php echo $baseurl; ?>/bower_components/jvectormap/jquery-jvectormap.css">



    <link rel="stylesheet" href="<?php echo $baseurl; ?>/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">

    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo $baseurl; ?>/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?php echo $baseurl; ?>/dist/css/skins/_all-skins.min.css">

    <link rel="stylesheet" href="<?php echo $baseurl; ?>/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->

    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-red sidebar-mini">
<div class="wrapper">

    <header class="main-header">

        <!-- Logo -->
        <a href="/" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>E</b>LT</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>Eco</b>Letter</span>
        </a>

        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>
            <!-- Navbar Right Menu -->
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">

                    <li>
                        <a href="/logout.php"><i class="fa fa-sign-out"></i> Log out</a>
                    </li>
                </ul>
            </div>

        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        <section class="sidebar">

            <!-- sidebar: style can be found in sidebar.less -->
            <div class="user-panel">
                <div class="pull-left image"><img src="<?php echo $baseurl; ?>/dist/img/admin.png" class="img-circle"
                                                  alt="User Image"></div>
                <div class="pull-left info"><p>Admin Name</p>                    <a href="#"><i
                                class="fa fa-circle text-success"></i> Admin</a></div>
            </div>
            <!-- Sidebar user panel -->

            <!-- search form -->

            <!-- /.search form -->
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu" data-widget="tree">
                <li class="header">MAIN NAVIGATION</li>

                <li class="active"><a href="index.php"><i class="fa fa-area-chart"></i><span>Dashboard</span></a></li>


                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-users"></i> <span>Student</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="student/add-student.php"><i class="fa fa-user-plus"></i> Add </a></li>
                        <li><a href="student/edit-student.php"><i class="fa fa-pencil"></i> Edit</a></li>
                        <li><a href="student/remove-student.php"><i class="fa fa-trash-o"></i> Delete</a></li>

                    </ul>
                </li>


                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-graduation-cap"></i> <span> Faculty</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="faculty/add-faculty.php"><i class="fa fa-user-plus"></i> Add </a></li>
                        <li><a href="faculty/edit-faculty.php"><i class="fa fa-pencil"></i> Edit</a></li>
                        <li><a href="faculty/remove-faculty.php"><i class="fa fa-trash-o"></i> Delete</a></li>

                    </ul>
                </li>


                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-university"></i> <span> Warden</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="warden/add-warden.php"><i class="fa  fa-user-plus"></i> Add </a></li>
                        <li><a href="warden/edit-warden.php"><i class="fa fa-pencil"></i> Edit</a></li>
                        <li><a href="warden/remove-warden.php"><i class="fa fa-trash-o"></i> Delete</a></li>

                    </ul>
                </li>

                <li><a href="notifications.php"><i class="fa fa-bell"></i><span>Notifications</span></a></li>
                <li><a href="profile.php"><i class="fa fa-user-circle"></i> <span>Profile</span></a></li>


            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Dashboard
                <small>Insights</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Dashboard</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">

            <div class="row">
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-aqua">
                        <div class="inner">
                            <h3>150</h3>

                            <p>New Orders</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-bag"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-green">
                        <div class="inner">
                            <h3>53<sup style="font-size: 20px">%</sup></h3>

                            <p>Bounce Rate</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-yellow">
                        <div class="inner">
                            <h3>44</h3>

                            <p>User Registrations</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-red">
                        <div class="inner">
                            <h3>65</h3>

                            <p>Unique Visitors</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-pie-graph"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
            </div>
            <h2 class="page-header">Master Data</h2>


            <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#tab_1" data-toggle="tab">Student</a></li>
                    <li class="active"><a href="#tab_2" data-toggle="tab">Faculties</a></li>
                    <li><a href="#tab_3" data-toggle="tab">Warden</a></li>

                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="tab_1">

                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <td>Reg id</td>
                                <td> Name </td>
                                <td> Student type</td>
                                <td> Year </td>
                                <td> Department </td>
                                <td> Section </td>
                                <td> Gender </td>
                                <td> Email </td>
                                <td> DOB</td>
                                <td> Phone number </td>
                                <td> Father name </td>
                                <td> Father mob number </td>
                                <td> Blood group </td>
                                <td> Address </td>




                            </tr>

                            </thead>

                            <tbody>
                        <?php

                        $sql="SELECT * from student_data";
                        $res=mysqli_query($db, $sql);
                        while($std=mysqli_fetch_array($res))
                        {

                            echo '<tr>
                            
                            <td>'.$std[0].'</td>
                            <td>'.$std[1].'</td>
                            <td>'.$std[2].'</td>
                            <td>'.$std[3].'</td>
                            <td>'.$std[4].'</td>
                            <td>'.$std[5].'</td>
                            <td>'.$std[6].'</td>
                            <td>'.$std[7].'</td>
                            <td>'.$std[8].'</td>
                            <td>'.$std[9].'</td>
                            <td>'.$std[10].'</td>
                            <td>'.$std[11].'</td>
                            <td>'.$std[12].'</td>
                            <td>'.$std[13].'</td>

                            </td>

                            </tr>
                            
                            ';

                        }



                        ?>

                            </tbody>

                        </table>

                    </div>
                    <!-- /.tab-pane -->
                    <div class="tab-pane" id="tab_2">
                        <table id="example2" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <td> Faculty id</td>
                                <td> Name </td>
                                <td> Faculty type</td>
                                <td> Department </td>
                                <td> Dessignation </td>
                                <td> Experience</td>
                                <td> Gender </td>
                                <td> Email </td>
                                <td> DOB</td>
                                <td> Phone number </td>
                                <td> Bloodgroup </td>
                                <td> Address </td>




                            </tr>

                            </thead>

                            <tbody>
                            <?php

                            $sql="SELECT * from faculty_data";
                            $res=mysqli_query($db, $sql);
                            while($fac=mysqli_fetch_array($res))
                            {

                                echo '<tr>
                            
                            <td>'.$fac[0].'</td>
                            <td>'.$fac[1].'</td>
                            <td>'.$fac[2].'</td>
                            <td>'.$fac[3].'</td>
                            <td>'.$fac[4].'</td>
                            <td>'.$fac[5].'</td>
                            <td>'.$fac[6].'</td>
                            <td>'.$fac[7].'</td>
                            <td>'.$fac[8].'</td>
                            <td>'.$fac[9].'</td>
                            <td>'.$fac[10].'</td>
                            <td>'.$fac[11].'</td>
                           

                            </td>

                            </tr>
                            
                            ';

                            }



                            ?>

                            </tbody>

                        </table>

                    </div>
                    <!-- /.tab-pane -->
                    <div class="tab-pane" id="tab_3">
                        <table id="example3" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <td> Warden id</td>
                                <td> Name </td>
                                <td> Warden type</td>
                                <td> Experience</td>
                                <td> Gender </td>
                                <td> DOB</td>
                                <td> Email </td>
                                <td> Phone number </td>
                                <td> Bloodgroup </td>
                                <td> Address </td>




                            </tr>

                            </thead>

                            <tbody>
                            <?php

                            $sql="SELECT * from warden_data";
                            $res=mysqli_query($db, $sql);
                            while($wdn=mysqli_fetch_array($res))
                            {

                                echo '<tr>
                            
                            <td>'.$wdn[0].'</td>
                            <td>'.$wdn[1].'</td>
                            <td>'.$wdn[2].'</td>
                            <td>'.$wdn[3].'</td>
                            <td>'.$wdn[4].'</td>
                            <td>'.$wdn[5].'</td>
                            <td>'.$wdn[6].'</td>
                            <td>'.$wdn[7].'</td>
                            <td>'.$wdn[8].'</td>
                            <td>'.$wdn[9].'</td>
                          
                           

                            </td>

                            </tr>
                            
                            ';

                            }



                            ?>

                            </tbody>

                        </table>

                    </div>
                    <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
            </div>
            <!-- nav-tabs-custom -->
    </div>

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <b>Version</b> 2.4.0
        </div>
        <strong>Copyright &copy; Eco Letter.</strong> All rights
        reserved.
    </footer>


</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="<?php echo $baseurl; ?>/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo $baseurl; ?>/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<script src="<?php echo $baseurl; ?>/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo $baseurl; ?>/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- FastClick -->
<script src="<?php echo $baseurl; ?>/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo $baseurl; ?>/dist/js/adminlte.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo $baseurl; ?>/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap  -->
<script src="<?php echo $baseurl; ?>/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?php echo $baseurl; ?>/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- SlimScroll -->
<script src="<?php echo $baseurl; ?>/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- ChartJS -->
<script src="<?php echo $baseurl; ?>/bower_components/Chart.js/Chart.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo $baseurl; ?>/dist/js/pages/dashboard2.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo $baseurl; ?>/dist/js/demo.js"></script>
<script>
    $(function () {
        //Add text editor
        $("#compose-textarea").wysihtml5();
    });
</script>


<script>
    $(function () {
        $('#example1').DataTable()
        $('#example2').DataTable()
        $('#example3').DataTable({
            'paging'      : true,
            'lengthChange': false,
            'searching'   : false,
            'ordering'    : true,
            'info'        : true,
            'autoWidth'   : false
        })
    })
</script>




<script src="<?php echo $baseurl; ?>/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>

</body>
</html>
