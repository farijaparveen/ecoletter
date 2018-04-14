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

                <li><a href="index.php"><i class="fa fa-area-chart"></i><span>Dashboard</span></a></li>


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

                <li class="active"><a href="notifications.php"><i class="fa fa-bell"></i><span>Notifications</span></a></li>
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
                Notifications
                <small></small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Notifications</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">


            <div class="row">
                <div class="col-md-12">

                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Notification Form</h3>
                        </div>




<?php

$message = "";

if(isset($_POST['submit'])) {
$nottitle = $_POST['title'];
$notcontent = $_POST['content'];
$notreceiver = $_POST['receiver'];

    $sql = "INSERT into notification (title, message, role) VALUES ('$nottitle', '$notcontent','$notreceiver')";
    $res = mysqli_query($db, $sql);
    if($res)
    {

        $message="
<div class=\"callout callout-success\">
                <h4>Successfull!</h4>

                <p>Notification is sent succsessfully!</p>
              </div>";
    }else{

        $message='<div class="callout callout-danger">
                <h4>unsuccesfull!</h4>

                <p>Notification sending failed!</p>
              </div>';

    }


}



?>




                            <div class="box-body">

                                <?php echo $message; ?>
                                <form action="" method="post">

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Notification title</label>
                                    <input type="text" class="form-control" name="title" id="exampleInputEmail1"
                                           placeholder="Enter the notification subject">
                                </div>

                                <div class="form-group">
                                    <label>Message</label>
                                    <textarea id="compose-textarea" name="content" class="form-control" style="height: 300px">
                      <h1><u>Notification message</u></h1>
                    </textarea>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Receiver</label>

                                    <div class="col-sm-10">

                                        <select name="receiver" class="form-control">
                                            <option value="1">Student</option>
                                            <option value="2">Faculty</option>
                                            <option value="3">Warden</option>
                                            <option value="4">HOD</option>

                                        </select>

                                    </div>
                                </div>



                            </div>
                    <div class="box-footer">
                        <button type="reset" class="btn btn-default">Cancel</button>
                        <button type="submit" name="submit" value="submit" class="btn btn-info pull-right">Send Notification</button>
                    </div>

                        </form>
                    </div>
                </div>
            </div>
            <!-- nav-tabs-custom -->

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







<script src="<?php echo $baseurl; ?>/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>

</body>
</html>