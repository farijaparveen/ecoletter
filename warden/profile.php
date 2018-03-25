<?php

include('../session.php');
role_check($_SESSION['role'],3);

?>
    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge"> <link href="/favicon.png" rel="icon" type="image/x-icon" />        <title>Eco Letter| Dashboard</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.7 -->
        <link rel="stylesheet" href="../bower_components/bootstrap/dist/css/bootstrap.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="../bower_components/font-awesome/css/font-awesome.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="../bower_components/Ionicons/css/ionicons.min.css">
        <!-- jvectormap -->
        <link rel="stylesheet" href="../bower_components/jvectormap/jquery-jvectormap.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
        <!-- AdminLTE Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">

        <link rel="stylesheet" href="../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">


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
    <body class="hold-transition skin-green sidebar-mini">
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
                <div class="user-panel">
                    <div class="pull-left image"><img src="../dist/img/teacher.png" class="img-circle" alt="User Image">
                    </div>
                    <div class="pull-left info"><p><?php
                            $sql = "SELECT name from warden_data WHERE wardenid=".$_SESSION['login_user'];
                            $result = mysqli_query($db, $sql);

                            if (mysqli_num_rows($result) > 0) {
                                $row = mysqli_fetch_assoc($result);
                                echo $row['name'];

                            } else {
                                echo "0 results";
                            }


                            ?></p>                    <a href="#"><i
                                    class="fa fa-circle text-success"></i> Warden </a></div>
                </div>

                <!-- sidebar: style can be found in sidebar.less -->
                <!-- Sidebar user panel -->

                <!-- search form -->

                <!-- /.search form -->
                <!-- sidebar menu: : style can be found in sidebar.less -->
                <ul class="sidebar-menu" data-widget="tree">
                    <li class="header">MAIN NAVIGATION</li>
                    <li><a href="index.php"><i class="fa fa-pie-chart"></i><span>Dashboard</span></a></li>
                    <li><a href="manage-letter.php"><i class="fa fa-tasks"></i> <span>Manage Letters</span></a></li>
                    <li><a href="notifications.php"><i class="fa fa-bell"></i><span>Notifications</span></a></li>
                    <li class="active"><a href="profile.php"><i class="fa fa-user-circle"></i> <span>Profile</span></a>
                    </li>
                </ul>
            </section>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    Profile
                    <small>User details available here</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">Profile</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">

                <div class="row">
                    <div class="col-md-3">

                        <!-- Profile Image -->
                        <div class="box box-primary">
                            <div class="box-body box-profile">
                                <img class="profile-user-img img-responsive img-circle"
                                     src="../../dist/img/user4-128x128.jpg" alt="User profile picture">

                                <h3 class="profile-username text-center">Warden name</h3>

                                <p class="text-muted text-center">CSE</p>

                                <ul class="list-group list-group-unbordered">
                                    <li class="list-group-item">
                                        <b>Designation</b> <a class="pull-right">Associate professor</a>
                                    </li>
                                    <li class="list-group-item">
                                        <b>Following</b> <a class="pull-right">543</a>
                                    </li>
                                    <li class="list-group-item">
                                        <b>Friends</b> <a class="pull-right">13,287</a>
                                    </li>
                                </ul>

                                <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>
                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->

                        <!-- About Me Box -->
                        <div class="box box-primary">
                            <div class="box-header with-border">
                                <h3 class="box-title">About Me</h3>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <strong><i class="fa fa-book margin-r-5"></i> Education</strong>

                                <p class="text-muted">
                                    B.E. in Computer Science and Engineering from Saveetha Engineering college
                                </p>

                                <hr>

                                <strong><i class="fa fa-map-marker margin-r-5"></i> Location</strong>

                                <p class="text-muted">M.K.B nagar, chennai</p>

                                <hr>

                                <strong><i class="fa fa-pencil margin-r-5"></i> Skills</strong>

                                <p>
                                    <span class="label label-danger">UI Design</span>
                                    <span class="label label-success">Coding</span>
                                    <span class="label label-info">Javascript</span>
                                    <span class="label label-warning">PHP</span>
                                    <span class="label label-primary">Node.js</span>
                                </p>

                                <hr>

                                <strong><i class="fa fa-file-text-o margin-r-5"></i> Notes</strong>

                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p>
                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                    </div>
                    <!-- /.col -->
                    <div class="col-md-9">

                        <!-- About Me Box -->
                        <div class="box box-primary">
                            <div class="box-header with-border">
                                <h3 class="box-title">About Me</h3>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">

                                <form class="form-horizontal">
                                    <div class="form-group">
                                        <label for="inputName" class="col-sm-2 control-label">Name</label>

                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="inputName" placeholder="warden name" disabled="disabled">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputName" class="col-sm-2 control-label">warden id</label>

                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="inputName" placeholder="fac id" disabled="disabled">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputName" class="col-sm-2 control-label">Designation</label>

                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="inputName" placeholder="68808908908" disabled="disabled">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputName" class="col-sm-2 control-label">warden type</label>

                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="inputName" placeholder="teaching staff" disabled="disabled">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputName" class="col-sm-2 control-label">D.O.B</label>

                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="inputName" placeholder="28-03-1997" disabled="disabled">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputName" class="col-sm-2 control-label">Gender</label>

                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="inputName" placeholder="Male" disabled="disabled">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputName" class="col-sm-2 control-label">E-Mail</label>

                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="inputName" placeholder="rduraisankar@gmail.com" disabled="disabled">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputName" class="col-sm-2 control-label">Phone</label>

                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="inputName" placeholder="9710085851" disabled="disabled">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputName" class="col-sm-2 control-label">Father</label>

                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="inputName" placeholder="Raja Subbhu" disabled="disabled">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputName" class="col-sm-2 control-label">Blood group</label>

                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="inputName" placeholder="A positive" disabled="disabled">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputName" class="col-sm-2 control-label">Address</label>

                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="inputName" placeholder="Durai Sankar" disabled="disabled">
                                        </div>
                                    </div>


                                </form>
                            </div>
                        </div>

                        <!-- /.nav-tabs-custom -->
                    </div>
                    <!-- /.col -->
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
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../bower_components/fastclick/lib/fastclick.js"></script>
    <!-- AdminLTE App -->
    <script src="../dist/js/adminlte.min.js"></script>
    <!-- Sparkline -->
    <script src="../bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
    <!-- jvectormap  -->
    <script src="../plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="../plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <!-- SlimScroll -->
    <script src="../bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <!-- ChartJS -->
    <script src="../bower_components/Chart.js/Chart.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="../dist/js/pages/dashboard2.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../dist/js/demo.js"></script>
    <script>
        $(function () {
            //Add text editor
            $("#compose-textarea").wysihtml5();
        });
    </script>

    <script src="../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>

    </body>
    </html>
