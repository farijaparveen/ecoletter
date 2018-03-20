<?php

include('../session.php');
role_check($_SESSION['role'],1);
include('../custom-functions.php');


?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge"> <link href="/favicon.png" rel="icon" type="image/x-icon" />    <title>Eco Letter | Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="../bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="../bower_components/Ionicons/css/ionicons.min.css">

    <link rel="stylesheet" href="../bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
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
<body class="hold-transition skin-red sidebar-mini">
<div class="wrapper">

    <header class="main-header">

        <!-- Logo -->
        <a href="" class="logo">
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
                <div class="pull-left image"><img src="../dist/img/student.png" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info"><p> <?php
                        $sql = "SELECT name from student_data WHERE student_id=".$_SESSION['login_user'];
                        $result = mysqli_query($db, $sql);

                        if (mysqli_num_rows($result) > 0) {
                            $row = mysqli_fetch_assoc($result);
                            echo $row['name'];
                            $name=$row['name'];

                        } else {
                            echo "0 results";
                        }


                        ?></p>                    <a href="#"><i
                                class="fa fa-circle text-success"></i> Student</a></div>
            </div>
            <!-- Sidebar user panel -->

            <!-- search form -->

            <!-- /.search form -->
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu" data-widget="tree">
                <li class="header">MAIN NAVIGATION</li>


                <li><a href="index.php"><i class="fa fa-pie-chart"></i><span>Dashboard</span></a></li>
                <li><a href="new-letter.php"><i class="fa fa-plus-square"></i> <span>New Letter</span></a></li>
                <li class="active"><a href="manage-letter.php?option=pending"><i class=" fa fa-tasks"></i> <span>Manage Letters</span></a>
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
            <h1>Past Letters

                <small>Manage Letters</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Past Letters</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">


            <div class="row">
                <div class="col-md-3">

                    <a href="new-letter.php" class="btn btn-primary btn-block margin-bottom">Compose</a>

                    <div class="box box-solid">
                        <div class="box-header with-border">
                            <h3 class="box-title">Folders</h3>

                            <div class="box-tools">
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                            class="fa fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="box-body no-padding">
                            <ul class="nav nav-pills nav-stacked">
                                <li <?php
                                if(empty($_GET['option']) || $_GET['option']=="pending")
                                {echo 'class="active"'; }?>><a href="?option=pending"><i class="fa fa-inbox"></i> Pending Approval
                                        </a></li>
                                <li <?php
                                if($_GET['option']=="approved")
                                {echo 'class="active"'; }?>><a href="?option=approved"><i class="fa fa-envelope-o"></i> Approved</a></li>
                                <li <?php
                                if($_GET['option']=="unapproved")
                                {echo 'class="active"'; }?>><a href="?option=unapproved"><i class="fa fa-trash"></i> Unapproved</a></li>

                            </ul>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /. box -->
                    <!-- /.box -->
                </div>
                <!-- /.col -->


                <?php
                if($_GET['option']=="pending")
                {?>
                <div class="col-md-9">
                    <div class="box box-warning">
                        <div class="box-header with-border">
                            <h3 class="box-title">Pending Approval</h3>

                            <div class="box-tools pull-right">
                                <div class="has-feedback">

                                    <button type="button" class="btn btn-default btn-sm"><i
                                                class="fa fa-refresh fa-spin"></i> Refresh
                                    </button>


                                </div>
                            </div>

                            <!-- /.box-tools -->
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body no-padding">
                            <div class="mailbox-controls">
                                <!-- Check all button -->

                                <!-- /.btn-group -->

                            </div>
                            <div class="table-responsive mailbox-messages" style="padding: 10px;">
                                <table id="example3" class="table table-hover table-striped">

                                    <thead style="display: none;">
                                    <tr>
                                        <th>Icon</th>
                                        <th>Name</th>
                                        <th>Subject</th>
                                        <th>Type</th>
                                        <th>Time</th>

                                    </tr>
                                    </thead>

                                    <tbody>

                                    <?php

                                    $sql="SELECT * FROM `letter_content` WHERE sender=".$_SESSION['login_user']." AND status=1";

                                    $res=mysqli_query($db,$sql);

                                    while($row=mysqli_fetch_array($res))

                                    {
                                        echo' <tr>
                                        <td class="mailbox-star"><a href="#"><i class="fa fa-clock-o text-yellow"></i></a></td>
                                        <td class="mailbox-name"><a href="view-letter.php?id='.$row['letter_id'].'">'.$name.'</a></td>
                                        <td class="mailbox-subject">'.$row['subject'].'
                                        </td>
                                        <td class="mailbox-attachment"><span class="label label-danger">'.$row['type'].'</span>
                                        </td>
                                        <td class="mailbox-date">'.datetime($row['timestamp']).'</td>
                                    </tr>';


                                    }

                                    ?>







                                    </tbody>
                                </table>
                                <!-- /.table -->
                            </div>
                            <!-- /.mail-box-messages -->
                        </div>
                        <!-- /.box-body -->

                    </div>
                    <!-- /. box -->
                </div>
                <?php }  ?>
                <?php
                if($_GET['option']=="approved")
                {?>
                <div class="col-md-9">
                    <div class="box box-success">
                        <div class="box-header with-border">
                            <h3 class="box-title">Approval</h3>

                            <div class="box-tools pull-right">
                                <div class="has-feedback">

                                    <button type="button" class="btn btn-default btn-sm"><i
                                                class="fa fa-refresh fa-spin"></i> Refresh
                                    </button>


                                </div>
                            </div>

                            <!-- /.box-tools -->
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body no-padding">
                            <div class="mailbox-controls">
                                <!-- Check all button -->

                                <!-- /.btn-group -->

                            </div>
                            <div class="table-responsive mailbox-messages" style="padding: 10px;">

                                <table id="example3" class="table table-hover table-striped">

                                    <thead style="display: none;">
                                    <tr>
                                        <th>Icon</th>
                                        <th>Name</th>
                                        <th>Subject</th>
                                        <th>Type</th>
                                        <th>Time</th>

                                    </tr>
                                    </thead>

                                    <tbody>

                                    <?php

                                    $sql="SELECT * FROM `letter_content` WHERE sender=".$_SESSION['login_user']." AND status=2";

                                    $res=mysqli_query($db,$sql);

                                    while($row=mysqli_fetch_array($res))

                                    {
                                        echo' <tr>
                                        <td class="mailbox-star"><a href="#"><i class="fa fa-check text-green"></i></a></td>
                                        <td class="mailbox-name"><a href="view-letter.php?id='.$row['letter_id'].'">'.$name.'</a></td>
                                        <td class="mailbox-subject">'.$row['subject'].'
                                        </td>
                                        <td class="mailbox-attachment"><span class="label label-danger">'.$row['type'].'</span>
                                        </td>
                                        <td class="mailbox-date">'.$row['timestamp'].'</td>
                                    </tr>';


                                    }

                                    ?>







                                    </tbody>
                                </table>


                                <!-- /.table -->
                            </div>
                            <!-- /.mail-box-messages -->
                        </div>
                        <!-- /.box-body -->

                    </div>
                    <!-- /. box -->
                </div>
                <?php }  ?>

                <?php
                if($_GET['option']=="unapproved")
                {?>
                <div class="col-md-9">
                    <div class="box box-danger">
                        <div class="box-header with-border">
                            <h3 class="box-title">Unapproved</h3>

                            <div class="box-tools pull-right">
                                <div class="has-feedback">

                                    <button type="button" class="btn btn-default btn-sm"><i
                                                class="fa fa-refresh fa-spin"></i> Refresh
                                    </button>


                                </div>
                            </div>

                            <!-- /.box-tools -->
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body no-padding">
                            <div class="mailbox-controls">
                                <!-- Check all button -->

                                <!-- /.btn-group -->

                            </div>
                            <div class="table-responsive mailbox-messages" style="padding: 10px;">
                                <table id="example3" class="table table-hover table-striped">

                                    <thead style="display: none;">
                                    <tr>
                                        <th>Icon</th>
                                        <th>Name</th>
                                        <th>Subject</th>
                                        <th>Type</th>
                                        <th>Time</th>

                                    </tr>
                                    </thead>

                                    <tbody>

                                    <?php

                                    $sql="SELECT * FROM `letter_content` WHERE sender=".$_SESSION['login_user']." AND status=3";

                                    $res=mysqli_query($db,$sql);

                                    while($row=mysqli_fetch_array($res))

                                    {
                                        echo' <tr>
                                        <td class="mailbox-star"><a href="#"><i class="fa fa-ban text-red"></i></a></td>
                                        <td class="mailbox-name"><a href="view-letter.php?id='.$row['letter_id'].'">'.$name.'</a></td>
                                        <td class="mailbox-subject">'.$row['subject'].'
                                        </td>
                                        <td class="mailbox-attachment"><span class="label label-danger">'.$row['type'].'</span>
                                        </td>
                                        <td class="mailbox-date">'.$row['timestamp'].'</td>
                                    </tr>';


                                    }

                                    ?>







                                    </tbody>
                                </table>


                                <!-- /.table -->
                            </div>
                            <!-- /.mail-box-messages -->
                        </div>
                        <!-- /.box-body -->

                    </div>
                    <!-- /. box -->
                </div>
                <?php }  ?>



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


<script src="../bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

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

<script>
    $(function () {
        $('#example3').DataTable({


            "language": {
                "emptyTable": "Your selection inbox is empty"

            }


        })
        $('#example2').DataTable({
            'paging': true,
            'lengthChange': false,
            'searching': false,
            'ordering': true,
            'info': true,
            'autoWidth': false
        })


    })
</script>


<script src="../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>

</body>
</html>
